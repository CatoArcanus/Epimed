<?php

class Batch extends Eloquent
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'batch';
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
	 * Returns the Sealer linked to this Batch
	 *
	 * @return employee
	 */
	public function sealer()
	{
		return $this -> hasOne('Employee', 'id', 'sealed_by');
	}

	/**
	 * Returns the Inspect linked to this Batch
	 *
	 * @return batchInspection
	 */
	public function inspection()
	{
		return $this -> hasOne('Batch_inspection', 'batch', 'id');
	}

	/**
	 * Returns the Comment linked to this Batch
	 *
	 * @return comment
	 */
	public function comment()
	{
		return $this -> hasOne('Comment', 'id', 'comment');
	}

	/**
	 * Returns the Product linked to this Batch
	 *
	 * @return product
	 */
	public function product()
	{
		//return $this -> belongsTo('Product', 'product', 'id');
		return $this->hasOne('Product', 'product', 'id');
	}

	//* "Has Many" Relationships *//
	/**
	 * Returns the Burst Records linked to this Batch
	 *
	 * @return bursts
	 */
	public function bursts()
	{
		return $this->hasMany('Burst', 'batch', 'id');
	}

	//* "Has Many Through" Relationships *//
	/**
	 * Returns the Machines linked to this Batch
	 *
	 * @return machines
	 */
	public function machines()
	{
		return $this -> hasManyThrough('Machine', 'batch_machine', 'batch', 'machine');
	}

	/**
	 * Returns the Procedure Forms linked to this Batch
	 *
	 * @return procedureForms
	 */
	public function procedureForms()
	{
		return $this -> hasManyThrough('Procedure_form', 'batch_procedure_form', 'batch', 'procedure_form');
	}

	//* "Belongs To" Relationships *//
	/**
	 * Returns the Carton linked to this Batch
	 *
	 * @return carton
	 */
	public function carton()
	{
		return $this -> hasOne('Carton', 'batch', 'id');
	}

	/**
	 * Returns the Pouch linked to this Batch
	 *
	 * @return pouch
	 */
	public function pouch()
	{
		return $this->hasOne('Pouch', 'batch', 'id');
	}

	/**
	 * Returns the Sterilization linked to this Batch
	 *
	 * @return sterilization
	 */
	public function sterilization()
	{
		return $this -> belongsTo('Sterilization', 'id', 'batch');
	}
}