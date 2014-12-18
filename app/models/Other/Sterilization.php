<?php namespace Other;
///////////////////
//* Description *//
///////////////////
/**
 * The Sterilization Model represents a Sterilization of some number of
 * physical things.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Other
 * @author     Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.1
 */

///////////////////////////
//* Sterilization Model *//
///////////////////////////
class Sterilization extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'sterilization';

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
	
	//////////////////////////
	//* Column Information *//
	//////////////////////////
	/**
	 * Determines which Columns are Fillable. This protects against Mass Assignment.
	 *
	 * @var strings
	 */
	protected $fillable = array('date', 'work_order', 'quantity');

	//////////////////////////////////////
	//* Singular General Relationships *//
	//////////////////////////////////////
	/**
	 * Returns the Employee this Sterilization is linking to
	 *
	 * @return Employee
	 */
	public function sterilizer()
	{
		return $this->belongsTo('Employee', 'sterilized_by', 'id');
	}

	/**
	 * Returns the Approval this Sterilization is linking to
	 *
	 * @return Approval
	 */
	public function approval()
	{
		return $this->belongsTo('Approval', 'approval_id', 'id');
	}

	/**
	 * Returns what was Sterilized
	 *
	 * All Sterilizations reference one and only one Model using a
	 * 0 to 1 Optional Relationship. Only one of these Relationships
	 * will actually exist for each Sterilization, and thus all subqueries
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

		// Return the only Non-Null Result
		foreach($results as $result)
			if(!is_null($result))
				return $result;

		// Relationship MUST Exist
		throw new Exception('Invalid State');
	}

	///////////////////////////////
	//* Specific Sterilizations *//
	///////////////////////////////
	/**
	 * Returns the Batch that was Sterilized
	 *
	 * @return Batch
	 */
	public function batch()
	{
		return $this->hasOne('Batch', 'sterilization_id', 'id');
	}
}