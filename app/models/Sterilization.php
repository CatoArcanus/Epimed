<?php

class Sterilization extends Eloquent
{
	//* Table Information *//
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sterilization';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
	protected $primaryKey = 'batch'; // laravel defaults to 'email'

	//* "Has Many" Relationships *//

	//* "One to One" Relationships *//
	

	//* "BelongsTo" Relationships *//
	/**
	 * Returns the Employee linked to the Sterilization.
	 *
	 * @return employee
	 */
	public function employee()
	{
		return $this -> belongsTo('employee', 'id', 'sterilizer');
	}

	/**
	 * Returns the Batch linked to the Sterilization
	 *
	 * @return batch
	 */
	public function batch()
	{
		return $this -> belongsTo('batch', 'batch', 'id');
	}

	/**
	 * Returns the Approval linked to the Sterilization
	 *
	 * @return approval
	 */
	public function approval()
	{
		return $this -> belongsTo('approval', 'approval', 'approver');
	}

	//* "Has Many Through" Relationships *//
}