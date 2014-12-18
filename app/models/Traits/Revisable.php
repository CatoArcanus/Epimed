<?php

///////////////////
//* Description *//
///////////////////
/**
 * The Revisable Trait is to be used for any Model which has a
 * 'belongsTo' Relationship with the Revision Model. This trait
 * will add the functionality to allow the Model to be Revised.
 *
 * Note: This assumes that the Foreign Key to the Revision Model is
 * labelled 'revision_id'. This assumption may be relaxed by defining
 * the 'revisable_key' attribute.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Traits
 * @author 	   Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.0 (11/24/2014)
 */

//* Revisable Trait *//
trait Revisable
{
	/**
	 * Returns the Revision this Model is linking to
	 *
	 * @return Revision
	 */
	public function revision()
	{
		// Determine the Foreign Key to the Revision
		$foreign_key = isset($revisable_key) ? $revisable_key : 'revision_id';

		return $this->belongsTo('Revision', $foreign_key, 'id');
	}
}