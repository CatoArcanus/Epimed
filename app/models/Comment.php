<?php

class Comment extends Eloquent
{
	//* Table Information *//
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'comment';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
	protected $primaryKey = 'id'; // laravel defaults to 'email'

	//* "Has Many" Relationships *//

	//* "One to One" Relationships *//
	/**
	* Returns the Batch_Inspection linked to the Comment
	*
	* @return batch_inspection
	*/
	public function batch_inspection()
	{
		return $this -> hasOne('batch_inspection', 'comment', 'id');
	}

	//* "BelongsTo" Relationships *//
	/**
	* Returns the Employee linked to the Comment
	*
	* @return employee
	*/
	public function employee()
	{
		return $this -> belongsTo('employee', 'commenter', 'id');
	}

	//* "Has Many Through" Relationships *//
}