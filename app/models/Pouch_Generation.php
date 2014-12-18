<?php

class Pouch_Generation extends Eloquent
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'pouch_generation';

	/**
	 * The Primary Keys of the Table
	 *
	 * @var int[]
	 */
	protected $primaryKey = array('pouch', 'generation');

	//* "Has One" Relationships *//
	/**
	 * Returns the pouch linked to this Bridge
	 *
	 * @return pouch
	 */
	public function pouch()
	{
		return $this -> hasOne('pouch', 'batch', 'pouch');
	}

	/**
	 * Returns the Generation linked to this Bridge
	 *
	 * @return generation
	 */
	public function generation()
	{
		return $this -> hasOne('generation', 'id', 'generation');
	}
}