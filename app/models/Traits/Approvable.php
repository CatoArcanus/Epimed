<?php namespace Traits;

///////////////////
//* Description *//
///////////////////
/**
 * The Approvable Trait is to be used for any Model which has a
 * 'belongsTo' Relationship with the Approval Model. This trait
 * will add the functionality to allow the Model to be Approved.
 *
 * Note: This assumes that the Foreign Key to the Approval Model is
 * labelled 'approval_id'. This assumption may be relaxed by defining
 * the 'approvable_key' attribute.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Traits
 * @author 	   Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @author 	   Monte Nichols Revisor <monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.2 (11/29/2014)
 */

//* Approvable Trait *//
trait Approvable
{
	/**
	 * Approves this Model by creating a new row in the
	 * Approval Table which approves this Model.
	 *
	 * @param id  		$approved_by The Person who approved this Model
	 * @param datetime  $approved_at The date at which this Model was approved
	 *
	 * @return Approval
	 */
	public function approve($approved_by, $approved_at)
	{
		// Create the Approval
		$approval = \Approval::create(array(
			'approved_by' 	=> $approved_by,
			'date' 		=> $approved_at
		));

		// Associate this Model with the Approval
		$this->approval_id = $approval->id;//associate($approval);
		$this->save();

		return $approval;
	}

	/**
	 * Returns the Approval this Model is linking to
	 *
	 * @return Approval
	 */
	public function approval()
	{
		// Determine the Foreign Key to the Approval
		$foreign_key = isset($approvable_key) ? $approvable_key : 'approval_id';
		return $this->belongsTo('Approval', 'approval_id', 'id');
	}
}