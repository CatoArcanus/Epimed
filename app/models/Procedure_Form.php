<?php

class Procedure_Form extends Eloquent
{
	//* Table Information *//
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'procedure_form';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
	protected $primaryKey = 'id'; // laravel defaults to 'email'

	//* "Has Many" Relationships *//
	/**
	 * Returns the Procedure_Form_Employee linked to the Procedure_Form
	 *
	 * @return procedure_form_employee
	 */
	public function procedure_form_employee()
	{
		return $this -> hasMany('procedure_form_employee', 'form', 'id');
	}
	
	/**
	 * Returns the Batch_Procedure_Form linked to the Procedure_Form
	 *
	 * @return batch_procedure_form
	 */
	public function batch_procedure_form()
	{
		return $this -> hasMany('batch_procedure_form', 'procedure_form', 'id');
	}

	/**
	 * Returns the Procedure_List linked to the Procedure_Form
	 *
	 * @return procedure_list
	 */
	public function procedure_list()
	{
		return $this -> hasMany('procedure_list', 'form', 'id');
	}
	//* "One to One" Relationships *//

	//* "BelongsTo" Relationships *//

	//* "Has Many Through" Relationships *//
}