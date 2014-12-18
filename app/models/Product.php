<?php

class Product extends Eloquent
{
	//* Table Information *//
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'product';
	/**
	 * Override Inherited Timestamps. We might change this later.
	 *
	 * @var string
	 */
	public $timestamps = false;
	
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
	protected $primaryKey = 'id'; // laravel defaults to 'email'

	//* "Has Many" Relationships *//
	/**
	 * Returns the Batch linked to the Product
	 *
	 * @return batch
	 */
	public function batches()
	{
		return $this -> hasMany('Batch', 'product', 'id');
	}

	//* "One to One" Relationships *//
	/**
	 * Returns the Heat_Seal linked to the Product
	 *
	 * @return heat_seal
	 */
	public function heatSeal()
	{
		return $this -> hasOne('HeatSeal', 'product', 'id');
	}

	//* "BelongsTo" Relationships *//

	//* "Has Many Through" Relationships *//
}