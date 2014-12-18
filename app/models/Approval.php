<?php

class Approval extends Eloquent
{
	//* Table Information *//
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'approval';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
	protected $primaryKey = 'id'; // laravel defaults to 'email'

	//* "Has Many" Relationships *//
	/**
	 * Returns the Sterilization linked to the Approval
	 *
	 * @return sterilization
	 */
	public function sterilization()
	{
		return $this -> hasMany('sterilization', 'approval', 'id');
	}

	/**
	* Returns the Inspections linked to the Approval
	*
	* @return inspections
	*/
	public function inspection()
	{
		return $this -> hasMany('inspection', 'approval', 'id');
	}

	//* "One to One" Relationships *//
	

	//* "BelongsTo" Relationships *//
		/**
	 * Returns the Employee linked to the Approval.
	 *
	 * @return employee
	 */
	public function employee()
	{
		return $this -> belongsTo('employee', 'id', 'id');
	}

	/**
	 * Returns the Generations linked to the Approval
	 *
	 * @return generation
	 */
	public function generation()
	{
		return $this -> belongsTo('generation', 'id', 'approval');
	}

	//* "Has Many Through" Relationships *//
}