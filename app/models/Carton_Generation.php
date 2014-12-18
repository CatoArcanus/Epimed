<?php

class Carton_generation extends Eloquent
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'carton_generation';

	/**
	 * The Primary Keys of the Table
	 *
	 * @var int[]
	 */
	protected $primaryKey = array('carton', 'generation');

	//* "Has One" Relationships *//
	/**
	 * Returns the carton linked to this Bridge
	 *
	 * @return carton
	 */
	public function carton()
	{
		return $this -> hasOne('carton', 'batch', 'carton');
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