<?php

class Batch_Procedure_Form extends Eloquent
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'batch_procedure_form';

	/**
	 * The Primary Keys of the Table
	 *
	 * @var int[]
	 */
	protected $primaryKey = array('batch', 'procedure_form');

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
	 * Returns the Procedure Form linked to this Bridge
	 *
	 * @return procedureForm
	 */
	public function machine()
	{
		return $this -> hasOne('procedure_form', 'id', 'procedure_form');
	}
}