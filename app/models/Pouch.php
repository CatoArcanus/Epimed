<?php

class Pouch extends Eloquent
{
	//* Table Information *//
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pouch';
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
	 * Returns the generations through generation_pouch linked to the Pouch
	 *
	 * @return generations
	 */
	public function generations()
	{
		//return $this->belongsToMany('Generation', 'generation_pouch', 'pouch', 'generation');
		return $this->belongsToMany('Generation', 'generation_pouch', 'generation', 'pouch');
	}

	//* "One to One" Relationships *//
	/**
	* Returns the Batch linked to the Pouch
	*
	* @return batch
	*/
	public function batch()
	{
		return $this -> belongsTo('Batch', 'batch', 'id');
	}

	/**
	* Returns the Destruction linked to the Pouch
	*
	* @return destruction
	*/
	public function destruction()
	{
		return $this->hasOne('Destruction', 'id', 'destruction');
	}
	//* "BelongsTo" Relationships *//

	//* "Has Many Through" Relationships *//
}