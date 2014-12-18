<?php namespace Other;
///////////////////
//* Description *//
///////////////////
/**
 * The Inspection Model represents an Inspection performed on some scope where
 * an Approval, Pass Boolean, and Rejected Value are required.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Other
 * @author     Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @author     Monte Nichols (Revisor) <monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.3 (11/29/14)
 */

////////////////////////
//* Inspection Model *//
////////////////////////
class Inspection extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'inspection';

	///////////////////
	//* Primary Key *//
	///////////////////
	/**
	 * The Primary Key of the Table.
	 *
	 * @var int
	 */
	protected $primaryKey = 'id';

	//////////////
	//* Traits *//
	//////////////
	//* Approvable Trait *//
	// Use the Approval Trait
	use \Approvable;

	/**
	 * The Foreign Key to the Approval Table
	 *
	 * @var string
	 */
	protected $approvable_key = 'approval_id';

	//* Commentable Trait *//
	// Use the Commentable Trait
	use \Commentable;

	/**
	 * The Foreign Key to the Comment Block Table
	 *
	 * @var string
	 */
	protected $commentable_key = 'comments_id';

	//////////////////////////
	//* Column Information *//
	//////////////////////////
	/**
	 * Determines which Columns are Fillable. This protects against Mass Assignment.
	 *
	 * @var strings
	 */
	protected $fillable = array('pass', 'rejected');

	/**
	 * Returns the what this Inspection was for
	 *
	 * All Inspections reference one and only one Model using a
	 * 0 to 1 Optional Relationship. Only one of these Relationships
	 * will actually exist for each Inspection, and thus all subqueries
	 * may be unioned to form a 1 to 1 Mandatory Relationship with some
	 * Model.
	 *
	 * @return Model
	 */
	public function what()
	{
		// Determine the Result for all Subqueries
		$results = array();

		array_push($results, $this->batchInspection());

		// Return the only Non-Null Result
		foreach($results as $result)
			if(!is_null($result))
				return $result;

		// Relationship MUST Exist
		throw new Exception('Invalid State');
	}

	//////////////////////////////////////
	//* Batch Inspection Relationships *//
	//////////////////////////////////////
	/**
	 * Returns the Batch Inspection linking to this Inspection
	 *
	 * While the Batch Inspection maintains many 0 to 1 Optional
	 * relationships, a single Inspection may only be referenced by
	 * one of those references. Therefore the specific queries on the
	 * FK relations may be unioned to form a 0 to 1 Optional relationship
	 * with the Batch Inspection Model.
	 *
	 * @return BatchInspection
	 */
	public function batchInspection()
	{
		// Determine the Result for all Subqueries
		$results = array();

		array_push($results, $this->batchInspectionWhereHeatSeal());
		array_push($results, $this->batchInspectionWhereContents());
		array_push($results, $this->batchInspectionWhereParticulate());
		array_push($results, $this->batchInspectionWhereBurstStrength());

		// Return the only Non-Null Result
		foreach($results as $result)
			if(!is_null($result))
				return $result;

		// Relationship is Optional
		return null;
	}

	/**
	 * Returns the Heat Seal Inspection on Batches
	 *
	 * @return BatchInspection
	 */
	public function batchInspectionWhereHeatSeal()
	{
		return $this->hasOne('BatchInspection', 'heat_seal_id', 'id');
	}

	/**
	 * Returns the Contents Inspection on Batches
	 *
	 * @return BatchInspection
	 */
	public function batchInspectionWhereContents()
	{
		return $this->hasOne('BatchInspection', 'contents_id', 'id');
	}

	/**
	 * Returns the Particulate Inspection on Batches
	 *
	 * @return BatchInspection
	 */
	public function batchInspectionWhereParticulate()
	{
		return $this->hasOne('BatchInspection', 'particulate_id', 'id');
	}

	/**
	 * Returns the Burst Strength Inspection on Batches
	 *
	 * @return BatchInspection
	 */
	public function batchInspectionWhereBurstStrength()
	{
		return $this->hasOne('BatchInspection', 'burst_strength_id', 'id');
	}
}