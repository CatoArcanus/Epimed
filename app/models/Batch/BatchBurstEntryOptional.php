<?php namespace Batch;

///////////////////
//* Description *//
///////////////////
/**
 * The Batch Burst Entry Optional Model represents an Entry in the
 * Acitivity Log for a Batch. 
 *
 * @category   MVC
 * @package    Models
 * @subpackage Batch
 * @author     Michael Evans (Original Author) <khstennispro@gmail.com>
 * @author     Monte Nichols (Revisor) <monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.2 (11/29/2014)
 */

////////////////////////////////////////
//* Batch Burst Entry Optional Model *//
////////////////////////////////////////

class BatchBurstEntryOptional extends \BaseModel
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'batchBurstEntryOptional';

	//* Primary Key *//
	/**
	 * The Primary Key of the Table (usually 'id').
	 *
	 * Note: For Composite PKs, use array(column1, column2, ...);
	 *
	 * @var int
	 */
	protected $primaryKey = 'entry';

	/**
	 * Override inherited Timestamps ('created_at', 'updated_at').
	 *
	 * @var datetime
	 */
	public $timestamps = false;

//////////////////////////////////////
//* Singular General Relationships *//
//////////////////////////////////////
	/**
	 * Returns batchBurstEntry linking to this BatchBurstEntryOptional
	 *
	 * @return batchBurstEntry
	 */
	public function batchBurstEntry()
	{
		return $this->belongsTo('BatchBurstEntry', 'entry_id', 'id');
	}
}