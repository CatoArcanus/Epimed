<?php namespace Traits;

///////////////////
//* Description *//
///////////////////
/**
 * The Commentable Trait is to be used for any Model which has a
 * 'belongsTo' Relationship with the Comment Block Model. This trait
 * will add the functionality to allow the Model to be Commented on.
 *
 * Note: This assumes that the Foreign Key to the Comment Block Model is
 * labelled 'commentBlock_id'. This assumption may be relaxed by defining
 * the 'commentable_key' attribute.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Traits
 * @author 	   Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @author 	   Monte Nichols (Revisor)		<monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.1 (11/29/2014)
 */

//* Commentable Trait *//
trait Commentable
{
	/**
	 * Adds a Comment to this Model given the specified Comment attributes.
	 *
	 * @param id  		$commented_by 	The Person who commented on this Model
	 * @param datetime  $commented_at 	The date at which this Model was commented on
	 * @param text 		$comment 		The comment that the Person gave
	 *
	 * @return Approval
	 */
	public function comment($commented_by, $commented_at, $comment)
	{
		// Determine the Comment Block
		$comment_block = $this->commentBlock();

		// Create the Comment
		$comment = Comment::create(array(
			'block' 	=> $comment_block->getKey(),
			'commented_by' => $commented_by,
			'date' 		=> $commented_at,
			'comment'	=> $comment
		));

		return $comment;
	}

	/**
	 * Returns the Comment Block this Model is linking to
	 *
	 * @return CommentBlock
	 */
	public function commentBlock()
	{
		// Determine the Foreign Key to the Approval
		$foreign_key = isset($commentable_key) ? $commentable_key : 'comments_id';

		return $this->belongsTo('CommentBlock', $foreign_key, 'id');
		//return $this->belongsTo('CommentBlock', 'comments_id', 'id');
	}

	/**
	 * Returns the Comments linking to the Comment Block
	 * that this Model is linking to
	 *
	 * @return Comment[]
	 */
	public function comments()
	{
		// Determine the Comment Block
		$comment_block = $this->commentBlock();

		// Make sure the Comment Block Exists
		if($comment_block == null)
			return null;

		// Return the Comments that belong to the Comment Block
		return $comment_block()->comments();
	}
}