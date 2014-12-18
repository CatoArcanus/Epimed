<?php namespace User;

///////////////////
//* Description *//
///////////////////
/**
 * The User Permission Model represents a Permission that a User could
 * potentially have that would allow them to see, create, edit, delete, 
 * perform, etc. certain tasks, fields, options, etc. that other users
 * could not do if they did not have this permission.
 *
 * The permissions themselves are simply names, and the backend of the
 * website can verify whether or not the User has the required permissions
 * for something.
 *
 * Permissions may be grouped (@see UserPermissionGroup) into various
 * categories so that granting several permissions to several users becomes
 * a simpler task.
 *
 * Currently no permissions are inheritly 'higher' or 'lower' than others.
 * Concepts like these will need to be enforced by Controllers in the backend,
 * and not the Database.
 *
 * @category   MVC
 * @package    Models
 * @subpackage User
 * @author     Michael Evans (Original Author) <khstennispro2001@gmail.com>
 * @author     Monte Nichols (Contributor)     <monte.nichols.ii@gmail.com>
 * @author 	   Tyler Reed (Revisor) 		   <tylernathanreed@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.2 (11/29/2014)
 */


/////////////////////////////
//* User Permission Model *//
/////////////////////////////
class UserPermission extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'userPermission';

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
	* Returns the User Permission Group linking to this User Permission
	*
	* @return userPermissionGroup
	*/
	public function userPermissionGroup()
	{
		return $this->belongsToMany('UserPermissionGroup', 'permission_permissionGroup', 'permission_id', 'group_id');
	}
}