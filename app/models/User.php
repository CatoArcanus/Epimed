<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
class User extends Eloquent implements UserInterface, RemindableInterface {
	use UserTrait, RemindableTrait;
	
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
	//protected $primaryKey = 'username';

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
		return $this->hasOne('Employee', 'account_id', 'id');
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
		return $this->belongsToMany('UserPermissionGroup','user_userPermissionGroup', 'user', 'group');
	}

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array ('password');
	
	protected $primaryKey = 'username'; // laravel defaults to 'email'
	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier () {
		return $this->getKey();
	}
	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword () {
		return $this->password;
	}
	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken() { 
		return $this->remember_token;
	}
	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value) { 
		$this->remember_token = $value;
	}
	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName() {
		return 'remember_token';
	}
	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail () {
		return $this->email;
		//return '';
	}
}