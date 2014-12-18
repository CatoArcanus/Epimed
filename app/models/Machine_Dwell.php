<?php

class Machine_Dwell extends Eloquent
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'machine_dwell';

	/**
	 * The Primary Key of the Table
	 *
	 * @var varchar(6)
	 */
	protected $primaryKey = 'machine';

	//* "Belongs To" Relationships *//
	/**
	 * Returns the Machine linked to the Reading
	 *
	 * @return machine
	 */
	public function machine()
	{
		$this -> belongsTo('machine', 'name', 'machine');
	}
}