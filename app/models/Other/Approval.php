<?php namespace Other;
///////////////////
//* Description *//
///////////////////
/**
 * The Approval Model represents an Approval by an Employee on some
 * label, pouch, inspection, form, application, or entry.
 *
 *
 * @category   MVC
 * @package    Models
 * @subpackage Other
 * @author     Monte Nichols (Original Author) <monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.2 (11/29/2014)
 */

/////////////////////
//* Approval Model *//
/////////////////////
class Approval extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'approval';

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
	protected $fillable = array('approved_by', 'date');

	//////////////////////////////////////
	//* Singular General Relationships *//
	//////////////////////////////////////
	/**
	 * Returns the Employee this Approval is linking to
	 *
	 * @return Employee
	 */
	public function approver()
	{
		return $this->belongsTo('Employee', 'approved_by', 'id');
	}

	/**
	 * Returns the what this Approval was for
	 *
	 * All Approvals reference one and only one Model using a
	 * 0 to 1 Optional Relationship. Only one of these Relationships
	 * will actually exist for each Approval, and thus all subqueries
	 * may be unioned to form a 1 to 1 Mandatory Relationship with some
	 * Model.
	 *
	 * @return Model
	 */
	public function what()
	{
		// Determine the Result for all Subqueries
		$results = array();

		array_push($results, $this->batchGeneration());
		array_push($results, $this->sterilization());
		array_push($results, $this->inspection());
		array_push($results, $this->productBuildForm());

		// Return the only Non-Null Result
		foreach($results as $result)
			if(!is_null($result))
				return $result;

		// Relationship MUST Exist
		throw new Exception('Invalid State');
	}

	/////////////////////////
	//* Specific Approvals *//
	/////////////////////////
	/**
	 * Returns the Batch this Approval is on
	 *
	 * @return Batch
	 */
	public function batchGeneration()
	{
		return $this->hasOne('BatchGeneration', 'approved_by', 'id');
	}

	/**
	 * Returns the Product Build Form this Approval is on
	 *
	 * @return ProductBuildForm
	 */
	public function sterilization()
	{
		return $this->hasOne('Sterilization', 'approved_by', 'id');
	}

	/**
	 * Returns the Batch Inspection this Approval is on
	 *
	 * @return BatchInspection
	 */
	public function inspection()
	{
		return $this->hasOne('Inspection', 'approved_by', 'id');
	}

	/**
	 * Returns the Batch Activity Entry this Approval is on
	 *
	 * @return BatchActivityEntry
	 */
	public function productBuildForm()
	{
		return $this->hasOne('ProductBuildForm', 'approved_by', 'id');
	}
}