<?php namespace Batch;
///////////////////
//* Description *//
///////////////////
/**
 * The Batch Pouch Label Model represents a Pouch Label used on a Batch
 * History Record.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Batch
 * @author     Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @author     Monte Nichols (Revisor) <monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.4 (11/29/2014)
 */

///////////////////////////////
//* Batch Pouch Label Model *//
///////////////////////////////
class BatchPouchLabel extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'batchPouchLabel';

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
	 * Determines which Columns are Guarded. This protects against Mass Assignment.
	 *
	 * @var string[]
	 */
	protected $guarded = array('id', 'destruction_id');

	//////////////////////////////////////
	//* Singular General Relationships *//
	//////////////////////////////////////
	/**
	 * Returns the Batch linking to this Pouch Label
	 *
	 * @return Batch
	 */
	public function batch()
	{
		return $this->hasOne('Batch', 'pouch_id', 'id');
	}

	////////////////////////////////
	//* Generation Relationships *//
	////////////////////////////////
	/**
	 * Returns the Generations this Pouch Label is linking to
	 *
	 * @return Generation[]
	 */
	public function batchGenerations()
	{
		return $this->belongsToMany('BatchGeneration', 'pouchLabel_generation', 'pouch_id', 'generation_id');
	}

	/**
	 * Returns the Generators this Pouch Label is indirectly linked to
	 *
	 * FUNCTION NOT YET TESTED
	 * TODO: Test
	 *
	 * @return Employee[]
	 */
	public function generators()
	{
		return BatchGeneration::with(array('pouch_id', 'generated_by'));
	}

	/////////////////////////////////
	//* Destruction Relationships *//
	/////////////////////////////////
	/**
	 * Returns the Destruction this Pouch Label is linking to
	 *
	 * @return Destruction
	 */
	public function batchDestruction()
	{
		return $this->belongsTo('BatchDestruction', 'destruction_id', 'id');
	}

	/**
	 * Returns the Destroyer this Pouch Label is indirectly linked to
	 *
	 * FUNCTION NOT YET IMPLEMENTED 
	 * TODO: Test
	 *
	 * @return Employee
	 */
	public function destroyer()
	{
		return BatchDestruction::with(array('pouch_id', 'destroyed_by'));
	}
}