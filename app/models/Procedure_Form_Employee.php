<?php

class Procedure_Form_Employee extends Eloquent
{
	//* Table Information *//
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'procedure_form_employee';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
	protected $primaryKey = 'form'; // laravel defaults to 'email'
	protected $primaryKey = 'employee';

	//* "Has Many" Relationships *//
	
	//* "One to One" Relationships *//

	//* "BelongsTo" Relationships *//
	/**
	 * Returns the Employee linked to the Procedure_Form_Employee
	 *
	 * @return employee
	 */
	public function employee()
	{
		return $this -> belongsTo('employee', 'employee', 'id');
	}

	/**
	 * Returns the Procedure_Form linked to the Procedure_Form_Employee
	 *
	 * @return procedure_form
	 */
	public function procedure_form()
	{
		return $this -> hasOne('procedure_form', 'form', 'id');
	}

	//* "Has Many Through" Relationships *//
}