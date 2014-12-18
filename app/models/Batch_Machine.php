<?php

class Batch_Machine extends Eloquent
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'batch_machine';

	/**
	 * The Primary Keys of the Table
	 *
	 * @var int[]
	 */
	protected $primaryKey = array('batch', 'machine');

	//* "Has One" Relationships *//
	/**
	 * Returns the Batch linked to this Bridge
	 *
	 * @return batch
	 */
	public function batch()
	{
		return $this -> hasOne('batch', 'id', 'batch');
	}

	/**
	 * Returns the Machine linked to this Bridge
	 *
	 * @return machine
	 */
	public function machine()
	{
		return $this -> hasOne('machine', 'name', 'machine');
	}
}