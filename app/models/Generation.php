<?php

class Generation extends Eloquent
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'generation';
	/**
	 * Override Inherited Timestamps. We might change this later.
	 *
	 * @var string
	 */
	public $timestamps = false;

	/**
	 * The Primary Key of the Table
	 *
	 * @var int
	 */
	protected $primaryKey = 'id';

	//* "Has One" Relationships *//
	/**
	 * Returns the Approval linked to this Generation
	 *
	 * @return approval
	 */
	public function approval()
	{
		return $this -> hasOne('Approval', 'id', 'approval');
	}

	/**
	 * Returns the Generator linked to this Generation
	 *
	 * @return employee
	 */
	public function generator()
	{
		return $this->belongsTo('Employee', 'generator', 'id');
		//return $this->hasOne('Employee', 'id', 'generator');
	}

	//* "Belongs To Many" Relationships *//
	/**
	 * Returns the Pouch this Generation is linked to
	 *
	 * @return pouch
	 */
	public function pouch()
	{
		return $this -> belongsToMany('pouch', 'pouch_generation', 'generation', 'pouch');
	}

	/**
	 * Returns the Carton this Generation is linked to
	 *
	 * @return carton
	 */
	public function carton()
	{
		return $this -> belongsToMany('carton', 'carton_generation', 'generation', 'carton');
	}
}