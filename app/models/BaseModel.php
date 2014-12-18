<?php

///////////////////
//* Description *//
///////////////////
/**
 * The Base Model extends the capabilities of the Eloquent Class
 * provided by Laravel, and all Models to be used for this Application
 * will extend this Base Model, ergo, common functionality for all
 * Models should be maintained here.
 *
 * @category   MVC
 * @package    Models
 * @author 	   Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @author     Monte Nichols (Revisor) <monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.1 (11/29/2014)
 */

//* Namespaces *//
use Illuminate\Database\Eloquent\Builder;

//////////////////
//* Base Model *//
//////////////////
abstract class BaseModel extends Eloquent
{	
	/**
     * Provide an attributes to object map
     *
     * @return Model
     */
    public function mapData(array $attributes)
    {
        return $this->newInstance();
    }
 
    /**
     * Create a new model instance requested by the builder.
     *
     * @param  array  $attributes
     * @return Illuminate\Database\Eloquent\Model
     */
    public function newFromBuilder($attributes = array())
    {
        $m = $this->mapData((array) $attributes)->newInstance(array(), true);
        $m->setRawAttributes((array) $attributes);
        return $m;
    }
 
    /**
     * Get a new query builder for the model's table.
     *
     * @return Reposed\Builder
     */
    public function newRawQuery()
    {
        $builder = new Builder($this->newBaseQueryBuilder());
 
        // Once we have the query builders, we will set the model instances
        // so the builder can easily access any information it may need
        // from the model while it is constructing and executing various
        // queries against it.
        $builder->setModel($this)->with($this->with);
 
        return $builder;
    }
 
   /**
     * Get a new query builder for the model.
     * set any type of scope you want on this builder in a child class, and it'll
     * keep applying the scope on any read-queries on this model
     *
     * @return Reposed\Builder
     */
    public function newQuery($excludeDeleted = true)
    {
        $builder = $this->newRawQuery();
 
        if ($excludeDeleted and $this->softDelete)
        {
            $builder->whereNull($this->getQualifiedDeletedAtColumn());
        }
 
        return $builder;
    }
 
   /**
     * Save the model to the database.
     *
     * @return bool
     */
   
    public function save(array $options = array())
    {
        $query = $this->newRawQuery();
 
        // If the "saving" event returns false we'll bail out of the save
        // and return false, indicating that the save failed.
        // This gives an opportunities to listeners to cancel save operations
        // if validations fail or whatever.
        if ($this->fireModelEvent('saving') === false)
        {
            return false;
        }
 
        // If the model already exists in the database we can just update
        // our record that is already in this database using the current IDs
        //  in this "where" clause to only update this model.
        //  Otherwise, we'll just insert them.
        if ($this->exists)
        {
            $saved = $this->performUpdate($query, $options);
        }
 
        // If the model is brand new, we'll insert it into our database
        // and set the ID attribute on the model to the value of the newly
        // inserted row's ID which is typically an auto-increment value
        // managed by the database.
        else
        {
            $saved = $this->performInsert($query, $options);
 
            $this->exists = $saved;
        }
 
        if ($saved) $this->finishSave($options);
 
        return $saved;
    }
    
	
	// All Models are Soft Deleted
	use SoftDeletingTrait;
		
	/**
	 * The Booting Method of the Model
	 *
	 * @return void
	 */
	public static function boot()
	{
		// Call the Inherited Method
		parent::boot();

		// Register the Updating Event
		/**
		 * This Application uses an Insert-Only Approach for significant
		 * changes to the Data. As such, when a Model is being updated,
		 * the default behavior needs to be overridden so that a copy of
		 * the original data is created, stored, deleted, and referenced
		 * to the most up to date version of the Model.
		 *
		 * Given all of the timestamps that the models will contain, there
		 * are certain things that may be derived:
		 *
		 * Current Model:
		 *  - 'created_at' : When the Lifespan of this Model began
		 *  - 'updated_at' : When the most recent change occured to this Model
		 *  - 'deleted_at' : When the Lifespan of this Model ended
		 *  - 'current_id' : NULL, as this is used for older versions of this Model
		 *
		 * Older Models:
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
		 * Note: In the 'updating' event, the timestamps have not been updated yet
		 */
		/*
		self::updating(function($model)
		{
			// Determine the Original Information
			$original = $model->getOriginal();

			// Create the original version of the Model
			$original = self::create($original);

			// Assign the 'current_id' reference
			$original->current_id = $model->getKey();

			// Determine the Previous time frame of this Model
			$previous = self::where('current_id', '=', $model->getKey())->orderBy('deleted_at', 'desc')->first();

			// Assign the 'created_at' timestamp to be when this Model was current information
			/**
			 * There are two possiblities here:
			 * 1) No previous time frame exists, meaning no significant change has taken place
			 *    -> In this case, the first time frame starts at the same time the original Model did
			 * 2) A previous time frame exists, meaning a significant change has already taken place
			 *    -> In this case, the time frame began when the previous one ended.
			 */
		/*	$original->created_at = $previous != null ? $previous->deleted_at : $model->created_at;

			// Assigned 'updated_at' timestamp to be when the Model was recently changes (WITHIN THIS TIMEFRAME)
			if($model->updated_at < $original->created_at)
				$original->updated_at = null;

			// Assigned the 'deleted_at' timestamp (which is right now!)
			$original->save();
			$original->delete();
		});*/
	}
}