<?php

///////////////////
//* Description *//
///////////////////
/**
 * The Batch Model represents the creation and testing of a batch of Products.
 *
 * Note: This Model also represents the Batch History Record Form
 *
 * @category   MVC
 * @package    Models
 * @subpackage Batch
 * @author     Michael Evans (Original Author) <khstennispro@gmail.com>
 * @author 	   Tyler Reed (Revisor) <tylernathanreed@gmail.com>
 * @author     Monte Nichols (Revisor) <monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.4 (11/29/2014)
 */

//* Namespaces *//
namespace Batch;

use Illuminate\Database\Eloquent\Builder;

////////////////////
//* Batch Model *//
///////////////////
class Batch extends \BaseModel 
// \Eloquent
{
	//* Table Information *//
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'batch';

	//* Primary Key *//
	/**
	 * The Primary Key of the Table (usually 'id').
	 *
	 * @var int
	 */
	protected $primaryKey = 'id';

	//////////////
	//* Traits *//
	//////////////
	//* Approvable Trait *//
	// Use the Approval Trait
	use \Approvable;

	/**
	 * The Foreign Key to the Approval Table
	 *
	 * @var string
	 */
	protected $approvable_key = 'approval_id';

	//* Commentable Trait *//
	// Use the Commentable Trait
	use \Commentable;

	/**
	 * The Foreign Key to the Comment Block Table
	 *
	 * @var string
	 */
	protected $commentable_key = 'comments_id';

	//////////////////////
	//* Batch Tracker *///
	//////////////////////
	//* Get Verb *//
	/**
	 * Gets a verb based on how complete the batch form is 
	 *
	 * @return string
	 */
	public function getVerb()
	{
		$verb = 'edit';
		if(is_null($this->carton_id))
		{
			return 'generate';
		}
		$generations = $this->getCartonLabelGenerations;
		foreach( $generations as $generation)
		{			
			if(is_null($generation->approval_id))
			{
				$verb = 'approve';
			}
		}
		/*
		$generations = $this->getPouchLabelGenerations;
		foreach( $generations as $generation)
		{			
			if(is_null($generation->approval_id))
			{
				$verb = 'approve';
			}
		}
		*/		
		if($verb != 'edit')
		{
			return $verb;
		}					
		if(is_null($this->batchCartonLabel->destruction_id))
		{
			return 'destroy';
		}
		$bursts = $this->burstEntries->toArray();
		if(empty($bursts))
		{
			return 'burst';
		}
		if(is_null($this->inspection_id))
		{
			return 'inspect';
		}
		if(is_null($this->sterilization_id))
		{
			return 'sterlize';
		}
		if(is_null($this->approval_id))
		{
			return 'release';
		}
		return $verb;
	}
	
	//* Get Num *//
	/**
	 * Gets a num based on how complete the batch form is 
	 *
	 * @return int
	 */
	public function getNum()
	{
		$verb = 100;
		if(is_null($this->carton_id))
		{
			return 40;
		}
		$generations = $this->getCartonLabelGenerations;
		foreach( $generations as $generation)
		{			
			if(is_null($generation->approval_id))
			{
				$verb = 50;
			}
		}		
		if($verb != 100)
		{
			return $verb;
		}					
		if(is_null($this->batchCartonLabel->destruction_id))
		{
			return 60;
		}
		$bursts = $this->burstEntries->toArray();
		if(empty($bursts))
		{
			return 70;
		}
		if(is_null($this->inspection_id))
		{
			return 80;
		}
		if(is_null($this->sterilization_id))
		{
			return 90;
		}
		if(is_null($this->approval_id))
		{
			return 95;
		}
		return $verb;
	}
	
	//////////////////////////
	//* Form Relationships *//
	//////////////////////////
	//* Product Relationships *//
	/**
	 * Sets the Product that this Batch is creating
	 *
	 * @param id $product The Product's ID
	 *
	 * @return void
	 */
	public function setProduct($product)
	{
		// Determine the Product Model
		$product = Product::find($product);

		// Associate this Batch with the Product
		$this->product()->associate($product);
		$this->save();
	}

	/**
	 * Returns the Product that this Batch is creating
	 *
	 * @return Product
	 */
	public function getProduct()
	{
		return $this->product();
	}

	//* Pouch Label Relationships *//
	/**
	 * Adds a Pouch Label Generation to this Batch
	 *
	 * @param tinyint	$index 		The Index (Ordering) of the Label
	 * @param id 		$generated_by 	The Generator's (Employee's) ID
	 * @param datetime 	$date 		The Date at which the Labels were Generated
	 * @param smallint 	$amount		The amount that was generated
	 *
	 * @return Generation
	 */
	public function addPouchLabelGeneration($generated_by, $date, $amount)
	{
		// Find the Pouch Label to add the Generation to
		$pouchLabel = $this->batchPouchLabel();

		// Create the new Generation
		$generation = new BatchGeneration(array(
			'generated_by' => $generated_by, 
			'date' => $date, 
			'amount' => $amount
		));
		$generation->save();

		// Attach the Generation to the Pouch Label
		$pouchLabel->batchGenerations()->attach($generation->id);

		return $generation;
	}

	/**
	 * Approves the specified Pouch Label Generation
	 *
	 * @param tinyint	$index 		The Index (Ordering) of the Label
	 * @param id 		$approved_by 	The Approver's (Employee's) ID
	 * @param datetime 	$date 		The Date at which the Labels were Approved
	 * @param smallint 	$used 		The Amount of the Generated Sample that was Used
	 *
	 * @return Approval
	 */
	public function approvePouchLabelGeneration($index, $approved_by, $date, $used)
	{
		// Find the Generation to Approve
		$generation = $this->batchPouchLabel()->batchGenerations()->where('idx', '=', $index)->take(1)->get();

		// Create the new Approval
		$approval = new Approval(array(
			'approved_by' => $approved_by,
			'date' => $date
		));
		$approval->save();

		// Apply the Amount used to the Generation
		$generation->attributes['used'] = $used;

		// Associate the Approval with the Generation
		$generation->approval()->associate($approval);
		$generation ->save();

		return $approval;
	}

	/**
	 * Sets the Pouch Label Destruction to this Batch
	 *
	 * @param id 		$destroyed_by 	The Destroyer's (Employee's) ID
	 * @param datetime 	$date 		The Date at which the Labels were Destroyed
	 * @param smallint 	$destroyed 	The Amount of the Generated Sample that was Destroyed
	 *
	 * @return Destruction
	 */
	public function setPouchLabelDestruction($destroyed_by, $date, $destroyed)
	{
		// Find the Pouch Label to set the Destruction of
		$pouchLabel = $this->batchPouchLabel();

		// Create the new Destruction
		$destruction = new Destruction(array(
			'destroyed_by' => $destroyed_by,
			'date' => $date,
			'amount' => $destroyed
		));
		$destruction->save();

		// Associate the Destruction with the Pouch Label
		$pouchLabel->destruction()->associate($destruction);
		$pouchLabel->save();

		return $destruction;
	}

	/**
	 * Returns all of the Pouch Label Generations for this Batch
	 *
	 * @return Generation[]
	 */
	public function getPouchLabelGenerations()
	{
		return $this->batchPouchLabel()->generation();
	}

	/**
	 * Returns the Pouch Label Destruction for this Batch
	 *
	 * @return Destruction
	 */
	public function getPouchLabelDestruction()
	{
		return $this->batchPouchLabel()->destruction();
	}

	//* Carton Label Relationships *//
	/**
	 * Adds a Carton Label Generation to this Batch
	 *
	 * @param id 		$generated_by 	The Generator's (Employee's) ID
	 * @param datetime 	$date 		The Date at which the Labels were Generated
	 * @param smallint 	$amount		The amount that was generated
	 *
	 * @return Generation
	 */
	public function addCartonLabelGeneration($index, $generated_by, $date, $amount)
	{
		// Find the Carton Label to add the Generation to
		$cartonLabel = $this->batchCartonLabel;

		// Create the new Generation
		$generation = new BatchGeneration(array(
			'index' => $index,
			'generated_by' => $generated_by,
			'date' => $date,
			'amount' => $amount
		));
		$generation->save();

		// Attach the Generation to the Carton Label
		$cartonLabel->batchGenerations()->attach($generation->id);

		return $generation;
	}

	/**
	 * Approves the specified Carton Label Generation
	 *
	 * @param tinyint	$index 		The Index (Ordering) of the Label
	 * @param id 		$approved_by 	The Approver's (Employee's) ID
	 * @param datetime 	$date 		The Date at which the Labels were Approved
	 * @param smallint 	$used 		The Amount of the Generated Sample that was Used
	 *
	 * @return Approval
	 */
	public function approveCartonLabelGeneration($index, $approved_by, $date, $used)
	{
		// Find the Generation to Approve
		$generation = $this->batchCartonLabel->batchGenerations()->where('idx', '=', $index)->take(1)->get();

		// Create the new Approval
		$approval = new Approval(array(
			'approved_by' => $approved_by,
			'date' => $date
		));
		$approval->save();

		// Apply the Amount used to the Generation
		$generation->attributes['used'] = $used;

		// Associate the Approval with the Generation
		$generation->approval()->associate($approval);
		$generation ->save();

		return $approval;
	}

	/**
	 * Sets the Carton Label Destruction to this Batch
	 *
	 * @param id 		$destroyed_by 	The Destroyer's (Employee's) ID
	 * @param datetime 	$date 		The Date at which the Labels were Destroyed
	 * @param smallint 	$destroyed 	The Amount of the Generated Sample that was Destroyed
	 *
	 * @return Destruction
	 */
	public function setCartonLabelDestruction($destroyed_by, $date, $destroyed)
	{
		// Find the Carton Label to set the Destruction of
		$cartonLabel = $this->batchCartonLabel;

		// Create the new Destruction
		$destruction = new Destruction(array(
			'destroyed_by' => $destroyed_by,
			'date' => $date,
			'amount' => $destroyed
		));
		$destruction->save();

		// Associate the Destruction with the Carton Label
		$cartonLabel->destruction()->associate($destruction);
		$cartonLabel->save();

		return $destruction;
	}

	/**
	 * Returns the Carton Label Generations for this Batch
	 *
	 * @return Generation[]
	 */
	public function getCartonLabelGenerations()
	{
		return $this->batchCartonLabel->batchGenerations();
	}

	/**
	 * Returns the Carton Label Destruction for this Batch
	 *
	 * @return Destruction
	 */
	public function getCartonLabelDestruction()
	{
		return $this->batchCartonLabel->destruction();
	}

	//* Burst Entry Relationships *//
	/**
	 * Adds the specified Burst Entry to the Batch Burst Table
	 *
	 * @param time 			$time 		The Time at which the Burst was performed
	 * @param smallint 		$amount 	The Sample Amount that was tested
	 * @param tinyint 		$pressure 	The Pressure Amount on the Sample
	 * @param string(12)	$location 	The Location on the Sample where the Burst occured
	 * @param tinyint 		$transfer 	(Optional) The Transfer Seal Percentage of the Burst
	 * @param boolean 		$wicking 	(Optional) Whether or not Wicking was Present or Absent
	 *
	 * @return BatchBurstEntry
	 */
	public function addBurstEntry($time, $amount, $pressure, $location, $transfer = null, $wicking = null)
	{
		// Create the new Burst Entry
		$entry = new BatchBurstEntry(array(
			'batch_id' => $this->id,
			'time' => $time,
			'amount' => $amount,
			'pressure' => $pressure,
			'location' => $location
		));
		$entry->save();

		// Add Optional Entry Data
		if($transfer != null && $wicking != null)
		{
			// Create new Optional Burst Entry
			$optional = new BatchBurstEntryOptional(array(
				'entry' => $entry->id,
				'transfer' => $transfer,
				'wicking' => $wicking
			));
			$optional->save();
		}

		return $entry;
	}

	/**
	 * Returns the Burst Entries for this Batch
	 *
	 * @return BatchBurstEntry[]
	 */
	public function getBurstTable()
	{
		return $this->burstEntries();
	}

	//* Machine Relationships *//
	/**
	 * Adds the specified Machine Reading to this Batch
	 *
	 * @param id 	$machine 	The Machine's ID
	 * @param array $readings 	The Associative Array for the Machine and its Readings
	 *
	 * Expected Reading Format: <reading type> => <reading value>
	 *
	 * @return MachineReading
	 */
	public function addMachineReading($machine, $readings)
	{
	}

	/**
	 * Returns the Machine Readings for this Batch
	 *
	 * @return MachineReading[]
	 */
	public function getMachineReadings()
	{
		return $this->machineReadings();
	}

	//* Sealer Relationships *//
	/**
	 * Adds the specified Sealer to this Batch
	 *
	 * @param id 		$sealer 	The Sealer's (Employee's) ID
	 * @param datetime 	$date 		The Date at which the Batch was Sealed
	 *
	 * @return void
	 */
	public function addSealer($sealer, $date)
	{
		$this->sealers()->attach($sealer, array('date' => $date));
	}

	/**
	 * Returns the Sealers for this Batch
	 *
	 * @return BatchSealer[]
	 */
	public function getSealers()
	{
		return $this->sealers();
	}

	//* Inspection Relationships *//
	/**
	 * Sets the Inspection for this Batch
	 *
	 * @param char(1) 	$letter 		The Sample Code Letter
	 * @param smallint 	$size 			The Final Sample Size
	 * @param tinyint 	$aql_min 		The Minimum AQL Rejection Level
	 * @param tinyint 	$aql_max 		The Maximum AQL Rejection Level
	 * @param array 	$inspections 	The Associative Array for the Inspections and their Values
	 * @param text 		$comment 		(Optional) The Comment on the Inspection
	 *
	 * @return BatchInspection
	 */
	public function setInspection($letter, $size, $aql_min, $aql_max, $inspections, $comment = null)
	{
		// Create the new Batch Inspection
		$inspection = new BatchInspection(array('batch_id' => $this->id, 'code_letter' => $letter, 'size' => $size, 'aql_min' => $aql_min, 'aql_max' => $aql_max));

		// Create the new General Inspections
		$heal_seal 		= new Inspection(array('pass' => $inspections['heat_seal']['pass'], 	'rejected' => $inspections['heat_seal']['rejected']));
		$contents 		= new Inspection(array('pass' => $inspections['contents']['pass'], 		'rejected' => $inspections['contents']['rejected']));
		$particulate 	= new Inspection(array('pass' => $inspections['particulate']['pass'], 	'rejected' => $inspections['particulate']['rejected']));
		$burst_strength = new Inspection(array('pass' => $inspections['burst_strength']['pass'],'rejected' => $inspections['burst_strength']['rejected']));

		// Save the General Inspections
		$heat_seal		->save();
		$contents		->save();
		$particulate 	->save();
		$burst_stength 	->save();

		// Associte the General Inspections with the Batch Inspection
		$inspection->heatSealInspection()		->associate($heat_seal);
		$inspection->contentsInspection()		->associate($contents);
		$inspection->particulateInspection()	->associate($particulate);
		$inspection->burstStrengthInspection()	->associate($burst_strength);

		// Check for Comments
		if($comment != null)
		{
			// Create the new Comment
			$comment = new Comment(array('commenter' => '???', 'date' => '???', 'text' => $comment));

			// PROBLEM! Comment Owner Unknown!
			throw new Exception("Operation not supported"); // <-- Resolve by 11/21/14
		}

		// Save and Return the Batch Inspection
		$inspection->save();

		return $inspection;
	}

	/**
	 * Returns the Inspection for this Batch
	 *
	 * @return BatchInspection
	 */
	public function getInspection()
	{
		return $this->inspection();
	}

	//* Sterilization Relationships *//
	/**
	 * Sets the Sterilization for this Batch
	 *
	 * @param datetime 		$date 		The Date at which the Batch was Sterilized
	 * @param id 			$sterilized_by The Sterilizer's (Employee's) ID
	 * @param string(10) 	$order 		The Work Order for the Sterilization
	 * @param smallint 		$quantity 	The Sample Amount that was Sterilized
	 *
	 * @return Sterilization
	 */
	public function setSterilization($date, $sterilized_by, $order, $quantity)
	{
		// Create the new Sterilization
		$sterilization = new Sterilization(array(
			'date' => $date,
			'sterilized_by' => $sterilized_by,
			'work_order' => $order,
			'quantity' => $quantity
		));
		$sterilization->save();

		// Associate the Sterilization with this Batch
		$this->sterilization()->associate($sterilization);
		$this->save();

		return $sterilization;
	}

	/**
	 * Approves the Sterilization for this Batch
	 *
	 * @param id 		$approved_by 	The Approver's (Employee's) ID
	 * @param datetime 	$date 		The Date at which the Sterilization was Approved
	 *
	 * @return Approval
	 */
	public function approveSterlization($approved_by, $date)
	{
		// Find the Sterilization to Approve
		$sterilization = $this->sterilization();

		// Create the new Approval
		$approval = new Approval(array(
			'approved_by' => $approved_by,
			'date' => 'date'));
		$approval->save();

		// Associate the Approval with the Sterilization
		$sterilization->approval()->associate($approval);
		$sterilization->save();

		return $approval;
	}

	/**
	 * Returns the Sterilziation for this Batch
	 *
	 * @return Sterilization
	 */
	public function getSterilization()
	{
		return $this->sterilization();
	}

	////////////////////////////////////
	//* Plural General Relationships *//
	////////////////////////////////////
	/**
	 * Returns the Batch Activity Entries linking to this Batch
	 *
	 * @return BatchActivityEntry[]
	 */
	public function activityEntries()
	{
		return $this->hasMany('BatchActivityEntry', 'batch_id', 'id');
	}

	/**
	 * Returns the Batch Burst Entries linking to this Batch
	 *
	 * @return BatchBurstEntry[]
	 */
	public function burstEntries()
	{
		return $this->hasMany('BatchBurstEntry', 'batch_id', 'id');
	}

	/**
	 * Returns the Optional Batch Burst Entries indirectly linking
	 * to this Batch
	 *
	 * @return BatchBurstEntryOptional[]
	 */
	public function optionalBurstEntries()
	{
		return $this->hasManyThrough('BatchBurstEntryOptional', 'BatchBurstEntry', 'batch_id', 'entry_id');
	}

	/**
	 * Returns Sealers linking to this Batch
	 *
	 * @return Employee[]
	 */
	public function sealers()
	{
		return $this->belongsToMany('Employee', 'batch_sealer', 'batch_id', 'sealed_by')->withPivot('date');
	}

	/**
	 * Returns ProductBuildForm linking to this Batch
	 *
	 * @return ProductBuildForm
	 */
	public function productBuildForm()
	{
		return $this->hasManyThrough('ProductBuildForm', 'batch_bomComponent_pbf', 'batch_id', 'pbf_id');
	}

	/**
	* Returns machineReadings linking to this Batch
	*
	* @return machine
	*/
	public function machineReadings()
	{
		return $this->belongsToMany('MachineReading', 'batch_machineReading', 'batch_id', 'reading_id');
	}

		/**
	 * Returns BillOfMaterialsComponent linking to this Batch
	 *
	 * @return BillOfMaterialsComponent
	 */
	public function billOfMaterialsComponent()
	{
		return $this->belongsToMany('BillOfMaterialsComponent', 'batch_bomComponent_pbf', 'batch_id', 'bom_component_id');
	}	

	//////////////////////////////////////
	//* Singular General Relationships *//
	//////////////////////////////////////
	/**
	* Returns Revision linking to this Batch
	*
	* @return revision
	*/
	public function revision()
	{
		return $this->hasOne('Revision', 'revision_id', 'id');
	}

	/**
	 * Returns Batch Inspection linking to this Batch
	 *
	 * @return BatchInspection
	 */
	public function batchInspection()
	{
		return $this->belongsTo('BatchInspection', 'inspection_id', 'id');
	}

	/**
	 * Returns sterilization linking to this Batch
	 *
	 * @return sterilization
	 */
	public function sterilization()
	{
		return $this->belongsTo('Sterilization', 'sterilization_id', 'id');
	}

	/**
	 * Returns pouchLabel linking to this Batch
	 *
	 * @return pouchLabel
	 */
	public function batchPouchLabel()
	{
		return $this->belongsTo('BatchPouchLabel', 'pouch_id', 'id');
	}

	/**
	 * Returns cartonLabel linking to this Batch
	 *
	 * @return cartonLabel
	 */
	public function batchCartonLabel()
	{
		return $this->belongsTo('BatchCartonLabel', 'carton_id', 'id');
	}

	/**
	 * Returns product linking to this Batch
	 *
	 * @return product
	 */
	public function product()
	{
		return $this->belongsTo('Product', 'product_id', 'id');
	}
}