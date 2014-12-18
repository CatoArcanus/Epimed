<?php namespace Batch;
///////////////////
//* Description *//
///////////////////
/**
 * The Batch Destruction Model represents a Destruction of Products on a
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

///////////////////////////////
//* Batch Destruction Model *//
///////////////////////////////
class BatchDestruction extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'batchDestruction';

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
	 * @var string[]
	 */
	protected $fillable = array('amount', 'used', 'date');

	//////////////////////////////////////
	//* Singular General Relationships *//
	//////////////////////////////////////
	/**
	 * Returns the Destroyer this Destruction is linking to
	 *
	 * @return Employee
	 */
	public function destroyer()
	{
		return $this->belongsTo('Employee', 'destroyed_by', 'id');
	}

	/**
	 * Returns the Batch Carton Label linking to this Destruction
	 *
	 * @return BatchCartonLabel
	 */
	public function cartonLabel()
	{
		return $this->hasOne('BatchCartonLabel', 'destruction_id', 'id');
	}

	/**
	 * Returns the Batch Pouch Label linking to this Destruction
	 *
	 * @return BatchPouchLabel
	 */
	public function pouchLabel()
	{
		return $this->hasOne('BatchPouchLabel', 'destruction_id', 'id');
	}
}