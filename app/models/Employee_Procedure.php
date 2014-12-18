<?php

class Employee_Procedure extends Eloquent
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'employee_procedure';

	/**
	 * The Primary Keys of the Table
	 *
	 * @var array
	 */
	protected $primaryKey = array('employee', 'procedure');

	//* "Has One" Relationships *//
	/**
	 * Returns the Employee linked to this Bridge
	 *
	 * @return employee
	 */
	public function employee()
	{
		return $this -> hasOne('employee', 'id', 'employee');
	}

	/**
	 * Returns the Procedure linked to this Bridge
	 *
	 * @return procedure
	 */
	public function procedure()
	{
		return $this -> hasOne('procedure', 'id', 'procedure');
	}
}