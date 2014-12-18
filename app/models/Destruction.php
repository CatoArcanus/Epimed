<?php

class Destruction extends Eloquent
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'destruction';
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
	 * Returns the Destroyer linked to this Destruction
	 *
	 * @return employee
	 */
	public function destroyer()
	{
		return $this -> blongsTo('Employee', 'destroyer', 'id');
	}


	//* "Belongs To" Relationships *//
	/**
	 * Returns the Pouch this Destruction is linked to
	 *
	 * @return pouch
	 */
	public function pouch()
	{
		return $this -> belongsTo('Pouch', 'batch', 'id');
	}

	/**
	 * Returns the Carton this Destruction is linked to
	 *
	 * @return carton
	 */
	public function carton()
	{
		return $this -> belongsTo('Carton', 'batch', 'id');
	}
}