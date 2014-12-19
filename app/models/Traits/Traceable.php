<?php

///////////////////
//* Description *//
///////////////////
/**
 * The Traceable Trait is to be used for any Model requires signficant
 * changes to be tracked.
 *
 * Note: This assumes that signatures are done via the User Table
 *
 * @category   MVC
 * @package    Models
 * @subpackage Traits
 * @author 	   Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.0 (12/19/2014)
 */

//* Namespaces *//
namespace Traits;

//* Traceable Trait *//
trait Traceable
{
	//////////////
	//* Traits *//
	//////////////
	// All Traceable Models are Soft Deleted
	use \SoftDeletingTrait;

	///////////////////////
	//* Trait Variables *//
	///////////////////////
	/**
	 * Determines which Attributes require Tracing.
	 *
	 * Note: Use '*' to Trace all Attributes
	 *
	 * @var string[]
	 */
	protected $significant = array('*');

	/**
	 * Determines which Attributes do not require Tracing
	 *
	 * Note: Use '*' to not Trace any Attributes
	 *
	 * @var string[]
	 */
	protected $insignificant = array();

	/**
	 * Indicates whether or not Historical Rows will be created
	 * if Significant changes occur
	 *
	 * @var boolean
	 */
	protected static $untraceable = false;

	/////////////////////
	//* Boot Function *//
	/////////////////////
	/**
	 * The Booting Method of the Model
	 *
	 * @return void
	 */
	public static function boot()
	{
		// Call the Inherited Method
		parent::boot();

		// Register the Creating Event
		/**
		 * Assign the "created by" Attribute
		 *
		 * Note: For Original Model Only
		 */
		self::creating(function($model)
		{
			// Make sure this Model is Original
			if($model->isOriginal())
			{
				$model->setCreatedBy(\Auth::check() ? \Auth::user()->id : null);
				$model->setUpdatedBy($model->getCreatedBy());
			}

			return true;
		});

		// Register the Updating Event
		/**
		 * This Application uses an Hybrid Insert-Only Approach for
		 * significant changes to the Data. As such, when a Model is being
		 * updated, the default behavior needs to be overridden so that a
		 * copy of the original data is created, stored, deleted, and referenced
		 * to the most up to date version of the Model. This new behavior is
		 * triggered if any significant column is altered.
		 *
		 * Given all of the timestamps that the models will contain, there
		 * are certain things that may be derived:
		 *
		 * Current Model:
		 *  - 'created_at' : When the Lifespan of this Model began
		 *  - 'updated_at' : When the most recent change occured to this Model (Significant or not)
		 *  - 'deleted_at' : When the Lifespan of this Model ended
		 *  - 'current_id' : NULL, as this is used for older versions of this Model
		 *
		 * Historical (Old) Models:
		 *  - 'created_at' : When this version of this Model became current
		 *  - 'updated_at' : When the most recent change occured during the time frame of this older Model
		 *  - 'deleted_at' : When this version of this Model became obsolete
		 *  - 'current_id' : The id of the current version of this Model
		 *
		 * To summarize, there is one main model, which represents some data,
		 * and it is always kept up to date. When significant changes to the
		 * data occur, a duplicate model (with the old data) is created, which
		 * serves as a time-snippet of the main model.
		 *
		 * Given the structure of the timestamps in the Historical Models, a make-shift
		 * doubly-linked list is formed using the 'created_at' (previous) and
		 * 'deleted_at' (next) timestamps. Sorting by either one of these will provide
		 * a complete history of the Model.
		 *
		 * Note: In the 'updating' event, the timestamps have not been updated yet
		 */
		self::updating(function($model)
		{
			// Make sure this Model is Original
			if($model->isOriginal())
			{
				// Look for a change in a Significant Attribute
				foreach($model->getDirty() as $column => $value)
					if($model->isTraceable($column))
					{
						// Create the original version of the Model
						$original = $model->replicate();

						// Assign the 'current_id' reference
						$original->current_id = $model->getKey();

						// Determine the Previous Time Frame of this Model
						$previous = $model->history()->orderBy($model->getDeletedByColumn(), 'desc')->first();

						// Assign the 'created_at' timestamp to be when this Model was current information
						/**
						 * There are two possiblities here:
						 * 1) No previous time frame exists, meaning no significant change has taken place
						 *    -> In this case, the first time frame starts at the same time the original Model did
						 * 2) A previous time frame exists, meaning a significant change has already taken place
						 *    -> In this case, the time frame began when the previous one ended.
						 */

						$original->created_at = $previous != null ? $previous->deleted_at : $model->created_at;

						// Assign 'updated_at/by' timestamp to be when the Model was recently changed (WITHIN THIS TIMEFRAME)
						if($model->updated_at < $original->created_at)
						{
							$original->updated_at = $original->created_at;
							$original->setUpdatedBy($original->getCreatedBy());
						}
						else
							$original->setUpdatedBy(\Auth::check() ? \Auth::user()->id : null);

						// Assign the 'deleted_at/by' timestamp (which is right now!)
						$original->setDeletedBy(\Auth::check() ? \Auth::user()->id : null);
						$original->save();
						$original->delete();
						return true;
					}
			}

			return true;
		});

		// Register the Deleting Event
		/**
		 * Assign the "deleted by" Attribute
		 */
		self::deleting(function($model)
		{
			// Make sure this Model is Original
			if($model->isOriginal())
				$model->setDeletedBy(\Auth::check() ? \Auth::user()->id : null);

			return true;
		});
	}

	///////////////////////////
	//* Trait Relationships *//
	///////////////////////////
	/**
	 * Returns the History of this Model
	 *
	 * @return self::class
	 */
	public function history()
	{
		return $this->hasMany(get_class($this), $this->getCurrentIDColumn(), $this->getKeyName());
	}

	/**
	 * Returns the Current Version of this Model
	 *
	 * @return self::class
	 */
	public function current()
	{
		return $this->belongsTo(get_class($this), $this->getCurrentIDColumn(), $this->getKeyName());
	}

	/**
	 * Returns the User that Created this Model
	 *
	 * @return User
	 */
	public function creator()
	{
		return User::find($this->getCreatedBy());
	}

	/**
	 * Returns the User that Updated this Model
	 *
	 * @return User
	 */
	public function updater()
	{
		return User::find($this->getUpdatedBy());
	}

	/**
	 * Returns the User that Deleted this Model
	 *
	 * @return User
	 */
	public function deleter()
	{
		return User::find($this->getDeletedBy());
	}

	/////////////////////////
	//* Traceable Methods *//
	/////////////////////////
	/**
	 * Returns whether or not the specified Attribute is Traceable
	 *
	 * @param string $key
	 *
	 * @return boolean
	 */
	public function isTraceable($key)
	{
		if(static::$untraceable)
			return true;

		// If the key is in the "significant" array, it can be assumed that it's
		// a significant attribute. Otherwise, the "insignificant" array must be
		// checked to determine if the attribute is black-listed on the model.
		if(in_array($key, $this->significant) || $this->significant == array('*'))
			return true;

		if($this->isUntraceable($key))
			return false;

		// Without specification, if the "significant" array is empty, then
		// the significant is determined by whether or not the attribute begins
		// with an underscore ('_'), inversely.
		return empty($this->significant) && !starts_with($key, '_');
	}

	/**
	 * Returns whether or not the specified Attribute is Untraceable
	 *
	 * @param string $key
	 *
	 * @return boolean
	 */
	public function isUntraceable($key)
	{
		return in_array($key, $this->insignificant) || $this->insignificant == array('*');
	}

	/**
	 * Returns whether or not the Model is completely Untraceable
	 *
	 * @return boolean
	 */
	public function totallyUntraceable()
	{
		return count($this->significant) == 0 && $this->insignificant == array('*');
	}

	/**
	 * Returns whether or not this Model is the Original Model
	 *
	 * @return boolean
	 */
	public function isOriginal()
	{
		return $this->getCurrentID() == null;
	}

	/**
	 * Returns whether or not this Model is an Historical Model
	 *
	 * @return boolean
	 */
	public function isHistorical()
	{
		return $this->getCurrentID() != null;
	}

	////////////////////
	//* Trait Scopes *//
	////////////////////
	/**
	 * Add the only-trashed extension to the builder.
	 *
	 * @param Illuminate\Query\Builder $query
	 *
	 * @return void
	 */
	public function scopeWithoutTrash($query)
	{
		return $query->where($this->getDeletedAtColumn(), '=', null);
	}

	/////////////////////////
	//* Attribute Methods *//
	/////////////////////////
	/**
	 * Returns the name of the "created by" column.
	 *
	 * @return string
	 */
	public function getCreatedByColumn()
	{
		return static::CREATED_BY;
	}

	/**
	 * Returns the value of the "created by" attribute.
	 *
	 * @param mixed $value
	 *
	 * @return void
	 */
	public function getCreatedBy()
	{
		return $this->{static::CREATED_BY};
	}

	/**
	 * Sets the value of the "created by" attribute.
	 *
	 * @param mixed $value
	 *
	 * @return void
	 */
	public function setCreatedBy($value)
	{
		$this->{static::CREATED_BY} = $value;
	}

	/**
	 * Returns the name of the "updated by" column.
	 *
	 * @return string
	 */
	public function getUpdatedByColumn()
	{
		return static::UPDATED_BY;
	}

	/**
	 * Returns the value of the "updated by" attribute.
	 *
	 * @param mixed $value
	 *
	 * @return void
	 */
	public function getUpdatedBy()
	{
		return $this->{static::UPDATED_BY};
	}

	/**
	 * Sets the value of the "updated by" attribute.
	 *
	 * @param mixed $value
	 *
	 * @return void
	 */
	public function setUpdatedBy($value)
	{
		$this->{static::UPDATED_BY} = $value;
	}

	/**
	 * Returns the name of the "deleted by" column.
	 *
	 * @return string
	 */
	public function getDeletedByColumn()
	{
		return static::DELETED_BY;
	}

	/**
	 * Returns the value of the "deleted by" attribute.
	 *
	 * @param mixed $value
	 *
	 * @return void
	 */
	public function getDeletedByAt()
	{
		return $this->{static::DELETED_BY};
	}

	/**
	 * Sets the value of the "deleted by" attribute.
	 *
	 * @param mixed $value
	 *
	 * @return void
	 */
	public function setDeletedBy($value)
	{
		$this->{static::DELETED_BY} = $value;
	}

	/**
	 * Returns the name of the "current id" column.
	 *
	 * @return string
	 */
	public function getCurrentIDColumn()
	{
		return static::CURRENT_ID;
	}

	/**
	 * Returns the value of the "current id" attribute.
	 *
	 * @param mixed $value
	 *
	 * @return void
	 */
	public function getCurrentID()
	{
		return $this->{static::CURRENT_ID};
	}

	/**
	 * Sets the value of the "current id" attribute.
	 *
	 * @param mixed $value
	 *
	 * @return void
	 */
	public function setCurrentID($value)
	{
		$this->{static::CURRENT_ID} = $value;
	}
}