<?php namespace Other;
///////////////////
//* Description *//
///////////////////
/**
 * The Comment Model represents a Comment left by an Employee on some
 * form, application, or entry.
 *
 * Comments violate the NFK Requirement where NFK must eventually exist.
 * This is done to reduce table count, and is only acceptable because most
 * Comments will be left blank, thus not effecting query speed in a severe
 * way.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Other
 * @author     Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.2 (11/29/14)
 */

/////////////////////
//* Comment Model *//
/////////////////////
class Comment extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'comment';

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
	 * @var strings
	 */
	protected $fillable = array('date', 'text');

	//////////////////////////////////////
	//* Singular General Relationships *//
	//////////////////////////////////////
	/**
	 * Returns the Employee this Comment is linking to
	 *
	 * @return Employee
	 */
	public function commenter()
	{
		return $this->belongsTo('Employee', 'commenter', 'id');
	}
}