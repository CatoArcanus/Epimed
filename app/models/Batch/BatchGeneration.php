<?php namespace Batch;
///////////////////
//* Description *//
///////////////////
/**
 * The Batch Generation Model represents a Generation of Products on a
 * Batch History Record.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Batch
 * @author     Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @author     Monte Nichols (Revisor) <monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.3 (11/29/2014)
 */

//////////////////////////////
//* Batch Generation Model *//
//////////////////////////////
class BatchGeneration extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'batchGeneration';

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

	//////////////////////////
	//* Column Information *//
	//////////////////////////
	/**
	 * Determines which Columns are Fillable. This protects against Mass Assignment.
	 *
	 * @var strings
	 */
	protected $fillable = array('amount', 'used', 'date');

	//////////////////////////////////////
	//* Singular General Relationships *//
	//////////////////////////////////////
	/**
	 * Returns the Generator this Generation is linking to
	 *
	 * @return Employee
	 */
	public function generator()
	{
		return $this->belongsTo('Employee', 'generated_by', 'id');
	}

	/**
	 * Returns the Carton Label linking to this Generation
	 *
	 * Note: This relationship is bridged to avoid polymorphism,
	 * and thus it is a 1:1 (From the Generation perspective) Relationship.
	 *
	 * The Eloquent relationship is therefore a 'belongsToMany', but the name
	 * of the relationship is singular.
	 *
	 * @return CartonLabel
	 */
	public function cartonLabel()
	{
		return $this->belongsToMany('BatchCartonLabel', 'cartonLabel_generation', 'generation_id', 'carton_id');
	}

	/**
	 * Returns the Pouch Label linking to this Generation
	 *
	 * Note: This relationship is bridged to avoid polymorphism,
	 * and thus it is a 1:1 (From the Generation perspective) Relationship.
	 *
	 * The Eloquent relationship is therefore a 'belongsToMany', but the name
	 * of the relationship is singular.
	 *
	 * @return PouchLabel
	 */
	public function pouchLabel()
	{
		return $this->belongsToMany('BatchPouchLabel', 'pouchLabel_generation', 'generation_id', 'pouch_id');
	}
}