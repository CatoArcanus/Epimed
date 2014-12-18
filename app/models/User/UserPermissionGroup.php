<?php namespace User;

///////////////////
//* Description *//
///////////////////
/**
 * The User Permission Group Model represents a Collection of Permissions
 * that may be granted to a User at Epimed International.
 *
 * @category   MVC
 * @package    Models
 * @subpackage User
 * @author     Michael Evans (Original Author) <khstennispro@gmail.com>
 * @author     Monte Nichols (Contributor) 	   <monte.nichols.ii@gmail.com>
 * @author     Tyler Reed (Revisor) 		   <tylernathanreed@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.2 (11/29/2014)
 */

///////////////////////////////////
//* User Permission Group Model *//
///////////////////////////////////
class UserPermissionGroup extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'userPermissionGroup';

	///////////////////
	//* Primary Key *//
	///////////////////
	/**
	 * The Primary Key of the Table.
	 *
	 * @var int
	 */
	protected $primaryKey = 'id';

	////////////////////////////////////
	//* Plural General Relationships *//
	////////////////////////////////////
	/**
	 * Returns the User linking to this User Permission Group
	 *
	 * @return User
	 */
	public function user()
	{
		return $this->belongsToMany('User','user_userPermissionGroup', 'user_id', 'group_id');
	}

	/**
	* Returns the User Permission linking to this User Permission Group
	*
	* @return userPermission
	*/
	public function userPermission()
	{
		return $this->belongsToMany('UserPermission', 'permission_permissionGroup', 'permission_id', 'group_id');
	}
}