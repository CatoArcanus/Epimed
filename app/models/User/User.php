<?php namespace User;
///////////////////
//* Description *//
///////////////////
/**
 * Represents a User that has access to the Website.
 *
 * @category   MVC
 * @package    Models
 * @subpackage User
 * @author     Michael Evans (Original Author) <khstennispro2001@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.0 (11/16/2014)
 */

///////////////////
//* User Model *//
//////////////////
class User extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
 	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'user';

	///////////////////
	//* Primary Key *//
	///////////////////
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
	 * Returns the Employee linking to this User
	 *
	 * @return Employee
	 */
	public function employee()
	{
		return $this->hasOne('Employee', 'account', 'id');
	}

	/**
	 * Returns the User Activation Code linking to this User
	 *
	 * @return UserActivationCode
	 */
	public function activationCode()
	{
		return $this->hasOne('UserActivationCode', 'user', 'id');
	}

	////////////////////////////////////
	//* Plural General Relationships *//
	////////////////////////////////////
	
	/**
	 * Returns the User Permission Group linking to this User
	 *
	 * @return UserPermissionGroup
	 */
	public function userPermissionGroup()
	{
		return $this->belongsToMany('UserPermissionGroup','user_userPermissionGroup' 'user', 'group');
	}
}