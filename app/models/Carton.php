<?php

class Carton extends Eloquent
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'carton';
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
	protected $primaryKey = 'batch';

	//* "Has Many" Relationships *//
	/**
	 * Returns the generations through generation_carton linked to the Carton
	 *
	 * @return generations
	 */
	public function generations()
	{
		return $this->belongsToMany('Generation', 'carton_generation', 'generation', 'carton');
	}

	//* "One to One" Relationships *//
	/**
	* Returns the Batch linked to the Carton
	*
	* @return batch
	*/
	public function batch()
	{
		return $this -> belongsTo('Batch', 'batch', 'id');
	}
	
	/**
	* Returns the Destruction linked to the Carton
	*
	* @return destruction
	*/
	public function destruction()
	{
		return $this -> hasOne('Destruction', 'id', 'destruction');
	}
	//* "BelongsTo" Relationships *//

	//* "Has Many Through" Relationships *//
}