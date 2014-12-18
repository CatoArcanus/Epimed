<?php

class Permission_Group extends Eloquent
{
	//* Table Information *//
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'permission_group';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
	protected $primaryKey = 'name'; // laravel defaults to 'email'

	//* "Has Many" Relationships *//
	/**
	 * Returns the Employee linked to the Permission_Group
	 *
	 * @return employee
	 */
	public function employee()
	{
		return $this -> hasMany('employee', 'permission', 'name');
	}

	//* "One to One" Relationships *//

	//* "BelongsTo" Relationships *//

	//* "Has Many Through" Relationships *//
}