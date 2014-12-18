<?php

class Heat_Seal extends Eloquent
{
	//* Table Information *//
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'heat_seal';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
	protected $primaryKey = 'product'; // laravel defaults to 'email'

	//* "Has Many" Relationships *//

	//* "One to One" Relationships *//
	/**
	* Returns the Product linked to the Heat_Seal
	*
	* @return product
	*/
	public function product()
	{
		return $this -> hasOne('product', 'id', 'product');
	}
	//* "BelongsTo" Relationships *//

	//* "Has Many Through" Relationships *//
}