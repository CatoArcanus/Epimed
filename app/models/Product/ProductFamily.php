<?php namespace Product;

///////////////////
//* Description *//
///////////////////
/**
 * The Product Group Model represents a Group of Products that are
 * within a similar family or category.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Product
 * @author     Michael Evans (Original Author) <khstennispro@gmail.com>
 * @author 	   Tyler Reed (Revisor)			   <tylernathanreed@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.4 (12/10/2014)
 */

//* Namespaces *//
namespace Product;

//////////////////////////
//* ProductGroup Model *//
//////////////////////////
class ProductGroup extends \BaseModel
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'productFamily';

	//* Primary Key *//
	/**
	 * The Primary Key of the Table.
	 *
	 * @var int
	 */
	protected $primaryKey = 'id';

	////////////////////////////////////
	//* Plural General Relationships *//
	////////////////////////////////////
	/**
	 * Returns product linking to this Product Group
	 *
	 * @return Product
	 */
	public function product()
	{
		return $this->belongsToMany('Product', 'product_productFamily', 'family_id', 'product_id');
	}
}