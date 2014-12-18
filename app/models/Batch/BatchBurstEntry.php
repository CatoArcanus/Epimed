<?php namespace Batch;

///////////////////
//* Description *//
///////////////////
/**
 * The Batch Burst Entry Model represents an Entry in the Burst
 * Table used to record the quality Products.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Batch
 * @author     Michael Evans (Original Author) <khstennispro@gmail.com>
 * @author 	   Tyler Reed (Revisor) 		   <tylernathanreed@gmail.com>
 * @author     Monte Nichols (Revisor) 		   <monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.4 (11/29/2014)
 */

///////////////////////////////
//* Batch Burst Entry Model *//
///////////////////////////////
class BatchBurstEntry extends \BaseModel
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'batchBurstEntry';

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
	 * Returns Batch that this Entry is linking to
	 *
	 * @return Batch
	 */
	public function batch()
	{
		return $this->belongsTo('Batch', 'batch_id', 'id');
	}

	/**
	 * Returns the Optional Entry Data that some Machines
	 * may use
	 *
	 * @return BatchBurstEntryOptional
	 */
	public function sealTransferAndWicking()
	{
		return $this->hasOne('BatchBurstEntryOptional', 'entry_id', 'id');
	}
}