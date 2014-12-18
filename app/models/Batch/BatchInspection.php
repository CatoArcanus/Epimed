<?php namespace Batch;

///////////////////
//* Description *//
///////////////////
/**
 * The Batch Inspection Model represents a series of inspections
 * required for a Batch
 *
 * @category   MVC
 * @package    Models
 * @subpackage Batch
 * @author     Michael Evans (Original Author) 	<khstennispro@gmail.com>
 * @author 	   Tyler Reed (Revisor)			   	<tylernathanreed@gmail.com>
 * @author 	   Monte Nichols (Revisor)			<monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.3 (11/29/2014)
 */

//////////////////////////////
//* Batch Inspection Model *//
//////////////////////////////
class BatchInspection extends \BaseModel
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'batchInspection';

	//* Primary Key *//
	/**
	 * The Primary Key of the Table.
	 *
	 * @var int
	 */
	protected $primaryKey = 'id';

	//////////////////////////////////////
	//* Singular General Relationships *//
	//////////////////////////////////////
	/**
	 * Returns the Batch linking to this BatchInspection
	 *
	 * @return Batch
	 */
	public function batch()
	{
		return $this->hasOne('Batch', 'batch_id', 'id');
	}

	/**
	 * Return the Comment that this Inspection is linking to
	 *
	 * @return Comment
	 */
	public function comment()
	{
		return $this->belongsTo('Comment', 'comment', 'id');
	}

	////////////////////////////////
	//* Inspection Relationships *//
	////////////////////////////////
 	/**
	 * Returns the Heat Seal Inspection for this Inspection
	 *
	 * @return Inspection
	 */
	public function heatSealInspection()
	{
		return $this->belongsTo('Inspection', 'heat_seal_id', 'id');
	}

	/**
	 * Returns the Contents Inspection for this Inspection
	 *
	 * @return Inspection
	 */
	public function contentsInspection()
	{
		return $this->belongsTo('Inspection', 'contents_id', 'id');
	}

	/**
	 * Returns the Particulate Inspection for this Inspection
	 *
	 * @return Inspection
	 */
	public function particulateInspection()
	{
		return $this->belongsTo('Inspection', 'particulate_id', 'id');
	}

	/**
	 * Returns the Burst Strength Inspection for this Inspection
	 *
	 * @return burstStrengthInspection
	 */
	public function burstStrengthInspection()
	{
		return $this->belongsTo('Inspection', 'burst_strength_id', 'id');
	}
}