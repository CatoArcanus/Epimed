<?php namespace Product;

///////////////////
//* Description *//
///////////////////
/**
 * The Bill of Materials Component Model represents a Bill of Material
 * Components at Epimed International.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Product
 * @author     Michael Evans (Original Author) <khstennispro@gmail.com>
 * @author 	   Tyler Reed (Revisor)			   <tylernathanreed@gmail.com>
 * @author 	   Monte Nichols (Revisor)		   <monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.3 (11/29/2014)
 */

/////////////////////////////////////////
//* Bill of Materials Component Model *//
/////////////////////////////////////////
class BillOfMaterialsComponent extends \BaseModel
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'billOfMaterialsComponent';

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
	 * Returns the Bill Of Materials this Component links to
	 *
	 * @return BillOfMaterials
	 */
	public function billOfMaterials()
	{
		return $this->belongsTo('BillOfMaterials', 'bom_id', 'id');
	}

	/**
	 * Returns the Product this Component links to
	 *
	 * @return Product
	 */
	public function product()
	{
		return $this->belongsTo('Product', 'product_id', 'id');
	}

	/**
	 * Returns the Product Build Form requiring this Component
	 * 
	 * @return ProductBuildForm
	 */
	public function productBuildForm()
	{
		return $this->belongsToMany('ProductBuildForm', 'batch_bomComponent_pbf', 'bom_component_id', 'pbf_id')->withPivot('batch');
	}

	////////////////////////////////////
	//* Plural General Relationships *//
	////////////////////////////////////
	/**
	 * Returns the Batches used to fill this Component requirement
	 *
	 * @return Batch[]
	 */
	public function batches()
	{
		return $this->belongsToMany('Batch', 'batch_bomComponent_pbf', 'bom_component_id', 'batch_id')->withPivot('pbf');
	}
}