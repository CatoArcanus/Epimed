<?php namespace Other;

///////////////////
//* Description *//
///////////////////
/**
 * The Revision Model represents a View version for representing some Table.
 * Revisions can be used to look at older Models using the View that was used
 * to view them at the time it was being used.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Other
 * @author     Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.0 (12/4/14)
 */

//////////////////////
//* Revision Model *//
//////////////////////
class Revision extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'revision';

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
	protected $fillable = array('version', 'active');

	////////////////////////////////////
	//* Plural General Relationships *//
	////////////////////////////////////
	/**
	 * Returns the Models that use this Revision
	 *
	 * All Revisions reference one and only one Model using a
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

		array_push($results, $this->batches());
		array_push($results, $this->productBuildForms());
		array_push($results, $this->products());

		return $results;
	}

	///////////////////////
	//* Specific Models *//
	///////////////////////
	/**
	 * Returns the Batches linking to this Revision
	 *
	 * @return Batch[]
	 */
	public function batches()
	{
		return $this->hasMany('Batch', 'revision_id', 'id');
	}

	/**
	 * Returns the Product Build Form linking to this Comment Block
	 *
	 * @return ProductBuildForm[]
	 */
	public function productBuildForms()
	{
		return $this->hasMany('ProductBuildForm', 'revision_id', 'id');
	}

	/**
	 * Returns the Inspection linking to this Comment Block
	 *
	 * @return Product[]
	 */
	public function products()
	{
		return $this->hasMany('Product', 'revision_id', 'id');
	}
}