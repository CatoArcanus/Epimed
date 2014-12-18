<?php

class Inspection extends Eloquent
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'inspection';

	/**
	 * The Primary Key of the Table
	 *
	 * @var int
	 */
	protected $primaryKey = 'id';

	//* "Has One" Relationships *//
	/**
	 * Returns the Approval linked to this Inspection
	 *
	 * @return employee
	 */
	public function approval()
	{
		return $this -> hasOne('approval', 'id', 'approval');
	}

	//* "Belongs To" Relationships *//
	/**
	 * Returns the Batch Inspection linked to this Inspection
	 *
	 * @return batchInspection
	 */
	public function batchInspection()
	{
		$heatSeal = $this -> belongsTo('batch_inspection', 'id', 'heat_seal');
		$contents = $this -> belongsTo('batch_inspection', 'id', 'contents');
		$particulate = $this -> belongsTo('batch_inspection', 'id', 'particulate');
		$burstStrength = $this -> belongsTo('batch_inspection', 'id', 'burst_strength');

		return array_merge($heatSeal, $contents, $particulate, $burstStrength);
	}
}