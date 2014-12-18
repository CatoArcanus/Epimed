<?php
///////////////////
//* Description *//
///////////////////
/**
 * The Product Build Form represents a Form used to fill out a
 * Bill of Materials for creating a product.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Product
 * @author     Michael Evans (Original Author) <khstennispro@gmail.com>
 * @author 	   Tyler Reed (Revisor)			   <tylernathanreed@gmail.com>
 * @author 	   Monte Nichols (Revisor)		   <monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.3 (11/29/14)
 */

//* Namespaces *//
namespace Product;

////////////////////////////////
//* Product Build Form Model *//
////////////////////////////////
class ProductBuildForm extends \BaseModel
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'productBuildForm';

	//* Primary Key *//
	/**
	 * The Primary Key of the Table.
	 *
	 * @var int
	 */
	protected $primaryKey = 'id';

	//////////////
	//* Traits *//
	//////////////
	//* Approvable Trait *//
	// Use the Approval Trait
	use Approvable;

	/**
	 * The Foreign Key to the Approval Table
	 *
	 * @var string
	 */
	protected $approvable_key = 'approval_id';

	//* Commentable Trait *//
	// Use the Commentable Trait
	use Commentable;

	/**
	 * The Foreign Key to the Comment Block Table
	 *
	 * @var string
	 */
	protected $commentable_key = 'comments_id';

	//////////////////////////
	//* Form Relationships *//
	//////////////////////////
	//* Bill of Materials Relationships *//
	/**
	 * Sets the Bill of Materials that this Product Build Form is creating
	 *
	 * @param id 	$billOfMaterial 	The Bill of Material's ID
	 *
	 * @return void
	 */
	public function setBillOfMaterials($billOfMaterials)
	{
		// Determine the Bill of Materials Model
		$billOfMaterials = BillOfMaterials::find($billOfMaterials);

		// Associate this Bill of Materials with the Product Build Form
		$this->billOfMaterials()->associate($billOfMaterials);
		$this->save();
	}

	/**
	 * Returns the Bill of Materials that this Product Build Form is creating
	 *
	 * @return BillOfMaterials
	 */
	public function getBillOfMaterials()
	{
		return $this->billOfMaterials();
	}

	//* Puller Relationships *//
	/**
	 * Adds the specified Pullers to this Product Build Form
	 *
	 * @param id 		$pullers 	The Pullers's (Employee's) ID
	 * @param datetime 	$date 		The Date at which the Batch was Sealed
	 * @param int 		$quantity 	The amount that was pulled
	 *
	 * @return void
	 */
	public function addPullers($pullers, $quantity, $date)
	{
		$this->pullers()->attach($pullers, array('quantity' => $quantity), array('date' => $date));
	}

	/**
	 * Returns the Pullers for this Product Build Form
	 *
	 * @return ProductBuildFormPullers[]
	 */
	public function getPullers()
	{
		return $this->pullers();
	}

    //** Comment Relationships *//
	/**
	 * Returns the Comments for this Product Build Form
	 *
	 * @param id 	$comment 	The Comments that are attached to the Product Build Form
	 * @param text 	$text 		The Text of the Comment that is attached to the Product Build Form
	 * @return Comment
	*/
	public function addComment($comment, $text)
	{
		$comment = new Comment(array('message' => $text));

		$productBuildForm = ProductBuildForm::find(1);

		$comment = $productBuildForm->comment()->save($comment);
	}

	//** Approver Relationships *//
	/**
	 * Returns the Product Build Form approval
	 *
	 * @param id 		$approver 	The Approver's (Employee's) ID
	 * @param datetime 	$date 		The Date at which the Product Build Form was Approved
	 *
	 * @return Approval
	*/
	public function approveProductBuildForm($approver, $date)
	{
		// Create the new Approval
		$approval = new Approval(array('approver' => $approver, 'date' => $date));
		$approval->save();

		// Return the Approval of the Product Build Form
		return $approval;
	}

	//* Batch Relationships *//
	/**
	 * Returns the Batch for the Product Build Form
	 *
	 * @param id 		$batch 		The Batch associated with a component on this Product Build Form
	 * @param int 		$component 	The Component associated with this Product Build From
	 *
	 * @return Batch
	*/
	public function addBatch($batch, $component)
	{
		// Determine the Batch that makes the component product
		$batch = Batch::find($batch)->where('component', '=', $component);

		// Associate the batch to the BillOfMaterials
		$batch->billOfMaterials()->associate($billOfMaterials);
		$batch->save();

		return $batch;
	}

	//////////////////////////////////////
	//* Singular General Relationships *//
	//////////////////////////////////////
	/**
	 * Returns the Revision for this Form
	 *
	 * @return Revision
	 */
	public function revision()
	{
		$this->belongsTo('Revision', 'revision_id', 'id');
	}

	/**
	 * Returns Bill of Materials that this Form is linking to
	 *
	 * @return BillOfMaterials
	 */
	public function billOfMaterials()
	{
		return $this->belongsTo('BillOfMaterials', 'bom_id', 'id');
	}

	/**
	 * Returns the Employee that pulled the Components to
	 * complete the Form
	 *
	 * @return Employee
	 */
	public function puller()
	{
		return $this->belongsTo('Employee', 'pulled_by', 'id');
	}

	////////////////////////////////////
	//* Plural General Relationships *//
	////////////////////////////////////
	/**
	 * Returns the Components used to fill this Form
	 *
	 * @return BillOfMaterialsComponent[]
	 */
	public function billOfMaterialsComponents()
	{
		return $this->belongsToMany('BillOfMaterialsComponent', 'batch_bomComponent_pbf', 'pbf_id', 'bom_component_id')->withPivot('batch_id');
	}

	/**
	 * Returns Batches used for each Component
	 *
	 * @return Batch[]
	 */
	public function batches()
	{
		return $this->belongsToMany('Batch', 'batch_bomComponent_pbf', 'pbf_id', 'batch_id')->withPivot('bom_component_id');
	}
}