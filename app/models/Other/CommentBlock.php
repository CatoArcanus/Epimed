<?php namespace Other;

///////////////////
//* Description *//
///////////////////
/**
 * The Comment Block Model represents a collection of Comments left by one
 * or many Employees on some form, application, or entry.
 *
 * Comment Blocks violate the NFK Requirement where NFK must eventually exist.
 * This is done to reduce table count, and is only acceptable because most
 * Comments will be left blank, thus not effecting query speed in a severe
 * way.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Other
 * @author     Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.0 (11/29/14)
 */


/////////////////////
//* Comment Model *//
/////////////////////
class CommentBlock extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'comment';

	///////////////////
	//* Primary Key *//
	///////////////////
	/**
	 * The Primary Key of the Table.
	 *
	 * @var int
	 */
	protected $primaryKey = 'id';

	//////////////////////////
	//* Column Information *//
	//////////////////////////
	/**
	 * Determines which Columns are Fillable. This protects against Mass Assignment.
	 *
	 * @var strings
	 */
	protected $fillable = array('date', 'text');

	//////////////////////////////////////
	//* Singular General Relationships *//
	//////////////////////////////////////
	/**
	 * Returns the what this Comment was for
	 *
	 * All Comments reference one and only one Model using a
	 * 0 to 1 Optional Relationship. Only one of these Relationships
	 * will actually exist for each Comment, and thus all subqueries
	 * may be unioned to form a 1 to 1 Mandatory Relationship with some
	 * Model.
	 *
	 * @return Model
	 */
	public function what()
	{
		// Determine the Result for all Subqueries
		$results = array();

		array_push($results, $this->batch());
		array_push($results, $this->productBuildForm());
		array_push($results, $this->inspection());
		array_push($results, $this->batchActivityEntry());

		// Return the only Non-Null Result
		foreach($results as $result)
			if(!is_null($result))
				return $result;

		// Relationship MUST Exist
		throw new Exception('Invalid State');
	}

	/////////////////////////
	//* Specific Comments *//
	/////////////////////////
	/**
	 * Returns the Batch linking to this Comment Block
	 *
	 * @return Batch
	 */
	public function batch()
	{
		return $this->hasOne('Batch', 'comments_id', 'id');
	}

	/**
	 * Returns the Product Build Form linking to this Comment Block
	 *
	 * @return ProductBuildForm
	 */
	public function productBuildForm()
	{
		return $this->hasOne('ProductBuildForm', 'comments_id', 'id');
	}

	/**
	 * Returns the Inspection linking to this Comment Block
	 *
	 * @return Inspection
	 */
	public function inspection()
	{
		return $this->hasOne('Inspection', 'comments_id', 'id');
	}

	/**
	 * Returns the Batch Activity Entry linking to this Comment Block
	 *
	 * @return BatchActivityEntry
	 */
	public function batchActivityEntry()
	{
		return $this->hasOne('BatchActivityEntry', 'comments_id', 'id');
	}

	////////////////////////////////////
	//* Plural General Relationships *//
	////////////////////////////////////
	/**
	 * Returns the Comments linking to this Comment Block
	 *
	 * @return Comment[]
	 */
	public function comments()
	{
		return $this->hasMany('Comment', 'block_id', 'id');
	}
}