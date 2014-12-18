<?php

class Expiration extends Eloquent
{
	//* Table Information *//
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'expiration';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
	protected $primaryKey = 'employee'; // laravel defaults to 'email'

	//* "Has Many" Relationships *//

	//* "One to One" Relationships *//
	/**
	* Returns the Employee linked to the Expiration
	*
	* @return employee
	*/
	public function employee()
	{
		return $this -> hasOne('employee', 'id', 'employee');
	}

	//* "BelongsTo" Relationships *//

	//* "Has Many Through" Relationships *//
}