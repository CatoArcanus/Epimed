<?php

class Procedure extends Eloquent
{
	//* Table Information *//
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'procedure';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
	protected $primaryKey = 'id'; // laravel defaults to 'email'

	//* "Has Many" Relationships *//
	/**
	 * Returns the Employee_Procedure linked to the Procedure_Form
	 *
	 * @return employee_procedure
	 */
	public function employee_procedure()
	{
		return $this -> hasMany('employee_procedure', 'procedure', 'id');
	}
	
	//* "One to One" Relationships *//
		/**
	 * Returns the Procedure_List linked to the Procedure_Form
	 *
	 * @return procedure_list
	 */
	public function procedure_list()
	{
		return $this -> hasOne('procedure_list', 'procedure', 'id');
	}
	//* "BelongsTo" Relationships *//

	//* "Has Many Through" Relationships *//
}