<?php namespace Product;

///////////////////
//* Description *//
///////////////////
/**
 * The Bill of Materials Model represents a Bill of Material
 * at Epimed International.
 *
 * Bill of Materials list the raw products that are required
 * to create the final product.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Product
 * @author     Michael Evans (Original Author) 	<khstennispro@gmail.com>
 * @author 	   Tyler Reed (Revisor)			   	<tylernathanreed@gmail.com>
 * @author 	   Monte Nichols (Revisor)			<monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.4 (11/29/2014)
 */

///////////////////////////////
//* Bill of Materials Model *//
//////////////////////////////
class BillOfMaterials extends \BaseModel
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'billOfMaterials';

	//* Primary Key *//
	/**
	 * The Primary Key of the Table.
	 *
	 * @var int
	 */
	protected $primaryKey = 'id';

	//////////////////////////////////////
	//* Singular General Relationships *//
	//////////////////////////////////////
	/**
	 * Returns the Product this Bill of Materials is linking to
	 *
	 * @return Product
	 */
	public function product()
	{
		return $this->belongsTo('Product', 'product_id', 'id');
	}

	////////////////////////////////////
	//* Plural General Relationships *//
	////////////////////////////////////
	/** 
	* Returns the Bill of Materials Components linking to this
	* Bill of Materials
	*
	* @return BillOfMaterialsComponent[]
	*/
	public function components()
	{
		return $this->hasMany('BillOfMaterialsComponent', 'bom_id', 'id');
	}

	/**
	 * Returns the Product Build Forms linking to this Bill of Materials
	 *
	 * @return ProductBuildForm[]
	 */
	public function productBuildForms()
	{
		return $this->hasMany('ProductBuildForm', 'bom_id', 'id');
	}
}