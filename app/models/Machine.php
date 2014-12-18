<?php

class Machine extends Eloquent
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'machine';

	/**
	 * The Primary Key of the Table
	 *
	 * @var varchar(6)
	 */
	protected $primaryKey = 'name';

	//* "Has One" Relationships *//
	/**
	 * Returns the High-Temp Reading of the Machine (if it exists)
	 *
	 * @return tinyint
	 */
	public function highTemp()
	{
		return $this -> hasOne('machine_high_temp', 'machine', 'name');
	}

	/**
	 * Returns the Heat Reading of the Machine (if it exists)
	 *
	 * @return tinyint
	 */
	public function heat()
	{
		return $this -> hasOne('machine_heat', 'machine', 'name');
	}

	/**
	 * Returns the Dwell Reading of the Machine (if it exists)
	 *
	 * @return tinyint
	 */
	public function dwell()
	{
		return $this -> hasOne('machine_dwell', 'machine', 'name');
	}

	/**
	 * Returns the Pressure Reading of the Machine (if it exists)
	 *
	 * @return tinyint
	 */
	public function pressure()
	{
		return $this -> hasOne('machine_pressure', 'machine', 'name');
	}

	//* "Belongs To Many" Relationships *//
	/**
	 * Returns the Batch Histories linked to the Machine
	 *
	 * @return batchHistories
	 */
	public function batchHistories()
	{
		return $this -> belongsToMany('batch', 'batch_machine', 'name', 'id');
	}
}