<?php namespace Product;

/**
 *
 * @category   MVC
 * @package    Models
 * @subpackage Product
 * @author     Michael Evans (Original Author) <khstennispro@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.1
 */

//* ProductHeatSeal Model *//
class ProductHeatSeal extends \BaseModel
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'productHeatSeal';

	//* Primary Key *//
	/**
	 * 
	 * @var int
	 */
	protected $primaryKey = 'product';

	/**
	 * Override inherited Timestamps ('created_at', 'updated_at').
	 *
	 * @var datetime
	 */
	public $timestamps = false;

	//* "Has One" (One-to-One) Relationships *//
	/**
	 * Return Product linking to this ProductHeatSeal
	 *
	 * @return product
	 */
	public function product()
	{
		return $this->hasOne('Product', 'product_id', 'id');
	}
}