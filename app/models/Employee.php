<?php

class Employee extends Eloquent
{
	//* Table Information *//
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'employee';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array ('password');
	
	protected $primaryKey = 'id'; // laravel defaults to 'email'

	//* "Has One" Relationships *//
	/**
	 * Returns the Permission Group linked to the Employee
	 *
	 * @return permissionGroup
	 */
	public function permissionGroup()
	{
		return $this -> hasOne('Permission_Group', 'name', 'permission');
	}

	//* "Has Many" Relationships *//
	/**
	 * Returns the Approvals linked to the Employee.
	 *
	 * @return approvals
	 */
	public function approvals()
	{
		return $this -> hasMany('Approval', 'approver', 'id');
	}

	/**
	 * Returns the Generations linked to the Employee
	 *
	 * @return generations
	 */
	public function generations()
	{
		return $this -> hasMany('Generation', 'generator', 'id');
	}

	/**
	 * Returns the Destructions linked to the Employee
	 *
	 * @return destructions
	 */
	public function destructions()
	{
		return $this -> hasMany('Destruction', 'destroyer', 'id');
	}

	/**
	 * Returns the Sterilizations linked to the Employee
	 *
	 * @return sterilizations
	 */
	public function sterilizations()
	{
		return $this -> hasMany('Sterilization', 'sterilizer', 'id');
	}

	//* "Has Many Through" Relationships *//
	/**
	 * Returns the Procedures linked to the Employee
	 *
	 * @return procedures
	 */
	public function procedures()
	{
		return $this -> hasManyThrough('Procedure', 'Employee_Procedure', 'employee', 'procedure');
	}

	/**
	 * Returns the Procedure Forms the Employee has Signed
	 *
	 * @return procedureForms
	 */
	public function procedureForms()
	{
		return $this -> hasManyThrough('Procedure_Form', 'Procedure_Form_Employee', 'employee', 'form');
	}

	//* "Belongs To" Relationships *//
	/**
	 * Returns the Expiration Date linked to the Employee (if it exists).
	 *
	 * @return expiration
	 */
	public function expiration()
	{
		return $this -> belongsTo('Expires', 'employee');
	}

	/**
	 * Returns the Comments linked to the Employee
	 *
	 * @return comments
	 */
	public function comments()
	{
		return $this -> comments('Comment', 'commenter');
	}

	/**
	 * Returns the Batch History Records linked to the Employee
	 *
	 * @return batchHistoryRecords
	*/
	public function sealedBatches()
	{
		return $this -> belongsTo('Batch', 'sealed_by');
	}
}
