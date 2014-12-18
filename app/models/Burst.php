<?php

class Burst extends Eloquent
{
	//* Table Information *//
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'burst';
	/**
	 * Override Inherited Timestamps. We might change this later.
	 *
	 * @var string
	 */
	public $timestamps = false;
	
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $primaryKey = 'batch';

	//* "Has Many" Relationships *//

	//* "One to One" Relationships *//

	//* "BelongsTo" Relationships *//
	/**
	* Returns the Batch linked to the Burst
	*
	* @return batch
	*/
	public function batch()
	{
		return $this -> belongsTo('Batch', 'batch', 'id');
	}

	//* "Has Many Through" Relationships *//
}