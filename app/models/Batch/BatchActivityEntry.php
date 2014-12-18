<?php namespace Batch;

///////////////////
//* Description *//
///////////////////
/**
 * The Batch Activity Entry Model represents an Entry in the
 * Acitivity Log for a Batch.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Batch
 * @author     Michael Evans (Original Author) <khstennispro@gmail.com>
 * @author 	   Tyler Reed (Revisor) 		   <tylernathanreed@gmail.com>
 * @author 	   Monte Nichols (Revisor) 		   <monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.3 (11/29/2014)
 */

//////////////////////////////////
//* Batch Activity Entry Model *//
//////////////////////////////////
class BatchActivityEntry extends \BaseModel
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'batchActivityEntry';

	//* Primary Key *//
	/**
	 * The Primary Key of the Table.
	 *
	 * @var int
	 */
	protected $primaryKey = 'id';

	//////////////
	//* Traits *//
	//////////////
	//* Commentable Trait *//
	// Use the Commentable Trait
	use Commentable;

	/**
	 * The Foreign Key to the Comment Block Table
	 *
	 * @var string
	 */
	protected $commentable_key = 'comments_id';

	//////////////////////////////////////
	//* Singular General Relationships *//
	//////////////////////////////////////
	/**
	 * Returns the Batch that this Entry is linking to
	 *
	 * @return Batch
	 */
	public function batch()
	{
		return $this->belongsTo('Batch', 'batch_id', 'id');
	}

	/**
	 * Returns the Employee that this Entry is linking to
	 *
	 * @return Employee
	 */
	public function actor()
	{
		return $this->belongsTo('Employee', 'actor_id', 'id');
	}
}