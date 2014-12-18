<?php namespace Product;
///////////////////
//* Description *//
///////////////////
/**
 * The Product Model represents a Product that Epimed uses or manufactures.
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

/////////////////////
//* Product Model *//
/////////////////////
class Product extends \BaseModel
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'product';

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
	 * Returns the Product Heat Seal linking to this Product
	 *
	 * @return ProductHeatSeal
	 */
	public function productHeatSeal()
	{
		return $this->hasOne('ProductHeatSeal', 'product_id', 'id');
	}

	/**
	* Returns the Product Family this Product is linking to
	*
	* @return ProductFamily
	*/
	public function productFamily()
	{
		return $this->belongsToMany('ProductFamily', 'product_productFamily', 'product_id', 'family_id');
	}

	/**
	 * Returns the Revision this Product is linking to
	 *
	 * @return Revision
	 */
	public function revision()
	{
		return $this->belongsTo('Revision', 'revision_id', 'id');
	}
	////////////////////////////////////
	//* Plural General Relationships *//
	////////////////////////////////////
	/**
	* Returns Batches linking to this Product
	*
	* @return Batch[]
	*/
	public function batches()
	{
		return $this->hasMany('Batch', 'product_id', 'id');
	}

	///////////////////////////////////////
	//* Bill of Materials Relationships *//
	///////////////////////////////////////
	/**
	 * Returns the Bill Of Materials for this Product
	 *
	 * @return BillOfMaterials
	 */
	public function billOfMaterialsWhereCreated()
	{
		return $this->hasOne('BillOfMaterials', 'product_id', 'id');
	}

	/**
	 * Returns the BIll of Materials where this Product is a Component
	 *
	 * FUNCTION NOT YET TESTED
	 *
	 * @return BillOfMaterials[]
	 */
	public function billofMaterialsWhereComponent()
	{
		$billOfMaterials = BillOfMaterials::with(array('components' => function($query)
		{
			$query->where('product', '=', $this->id);
		}));

		return $billOfMaterials -> get();
	}

	/**
	 * Returns the Bill Of Materials Components linking to this Product
	 *
	 * @return BillOfMaterialsComponent[]
	 */
	public function billOfMaterialsComponents()
	{
		return $this->hasMany('BillOfMaterialsComponent', 'product_id', 'id');
	}

	////////////////////////////////////////
	//* Product Build Form Relationships *//
	////////////////////////////////////////
	/**
	 * Returns the Product Build Forms used to manufacture this Product
	 *
	 * @return ProductBuildForm[]
	 */
	public function productBuildFormsWhereCreated()
	{
		return $this->hasManyThrough('ProductBuildForm', 'BillOfMaterials', 'product_id', 'bom_id');
	}

	/**
	 * Returns the Product Build Forms where this Product is a Component
	 *
	 * FUNCTION NOT YET TESTED
	 *
	 * @return ProductBuildForm[]
	 */
	public function productBuildFormsWhereComponent()
	{
		$productBuildForms = ProductBuildForm::with(array('components.batch' => function($query)
		{
			$query->where('product', '=', $this->id);
		}));

		return $productBuildForms -> get();
	}
}