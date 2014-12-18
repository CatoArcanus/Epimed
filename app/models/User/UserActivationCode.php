<?php namespace User;

///////////////////
//* Description *//
///////////////////
/**
 * The User Activation Code represents an Activation Code for a User to
 * register their account. This will synch up with the routes to send a
 * User to a unique URL.
 *
 * @category   MVC
 * @package    Models
 * @subpackage User
 * @author     Michael Evans (Original Author) <khstennispro@gmail.com>
 * @author     Monte Nichols (Contributor) 	   <monte.nichols.ii@gmail.com>
 * @author     Tyler Reed (Revisor)  		   <tylernathanreed@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.2 (11/29/2014)
 */

//////////////////////////////////
//* User Activation Code Model *//
/////////////////////////////////
class UserActivationCode extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'userActivationCode';

	///////////////////
	//* Primary Key *//
	///////////////////
	/**
	 * The Primary Key of the Table.
	 *
	 * @var int
	 */
	protected $primaryKey = 'user';

    //////////////////////////////////////
	//* Singular General Relationships *//
	//////////////////////////////////////
	/**
	 * Returns the User Activation Code assigned to the User
	 *
	 * @return User
	 */
	public function user()
	{
		return $this->belongsTo('User', 'user_id', 'id');
	}
}