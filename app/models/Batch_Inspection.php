<?php

class Batch_Inspection extends Eloquent
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'batch_inspection';

	/**
	 * The Primary Key of the Table
	 *
	 * @var int
	 */
	protected $primaryKey = 'batch';

	//* "Has One" Relationships *//
	/**
	 * Returns the Batch linked to this Inspection
	 *
	 * @return employee
	 */
	public function batch()
	{
		return $this -> hasOne('batch', 'id', 'batch');
	}

	/**
	 * Returns the Heat Seal Inspection linked to this Inspection
	 *
	 * @return inspection
	 */
	public function heatSeal()
	{
		return $this -> hasOne('inspection', 'id', 'heat_seal');
	}

	/**
	 * Returns the Contents Inspection linked to this Inspection
	 *
	 * @return inspection
	 */
	public function contents()
	{
		return $this -> hasOne('inspection', 'id', 'contents');
	}

	/**
	 * Returns the Particulate Inspection linked to this Inspection
	 *
	 * @return inspection
	 */
	public function particulate()
	{
		return $this -> hasOne('inspection', 'id', 'particulate');
	}

	/**
	 * Returns the Burst Strength Inspection linked to this Inspection
	 *
	 * @return inspection
	 */
	public function burstStrength()
	{
		return $this -> hasOne('inspection', 'id', 'burst_strength');
	}

	/**
	 * Returns the Comment linked to this Inspection
	 *
	 * @return comment
	 */
	public function comment()
	{
		return $this -> hasOne('comment', 'id', 'comment');
	}
}