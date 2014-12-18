<?php namespace Employee;
///////////////////
//* Description *//
///////////////////
/**
 * The Employee Model represents an Employee at Epimed International.
 *
 * Employees interact with Products, and fill out forms such as
 * Batch History Records and Bill of Materials.
 *
 * Each Employee must:
 *  - Have one or many Titles
 *  - Have exactly one Permission Group (Operator, QC, etc)
 *  - Be able to have their account expire
 *  - Be able to have their account locked
 *
 * Every Employee must have a User
 *
 * Employees will be referenced in many other Models, and thus
 * will have a large number of relationships within the Database.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Employee
 * @author     Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @author     Michael Evans (Revisior) <khstennispro2001@gmail.com>
 * @author     Monte Nichols (Revisior) <monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.6 (11/29/2014)
 */

//////////////////////
//* Employee Model *//
//////////////////////
class Employee extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'employee';

	///////////////////
	//* Primary Key *//
	///////////////////
	/**
	 * The Primary Key of the Table.
	 *
	 * @var int
	 */
	protected $primaryKey = 'id';

	//////////////////////////
	//* Column Information *//
	//////////////////////////
	/**
	 * Determines which Columns are Fillable. This protects against Mass Assignment.
	 *
	 * @var strings
	 */
	protected $fillable = array('username', 'password', 'permission', 'locked');

	/**
	 * Hide the Password from the JSON representation
	 *
	 * @var strings
	 */
	protected $hidden = array('password');

	/**
	 * Returns the Expiration Date linking to this Employee
	 *
	 * @return EmployeeExpiration
	 */
	public function expiration()
	{
		return $this->hasOne('EmployeeExpiration', 'employee_id', 'id');
	}

	/**
	* Returns the User of the Employee
	*
	* @return EmployeePermissionGroup
	*/
	public function user()
	{
		return $this->belongsTo('User', 'account_id', 'id');
	}

	////////////////////////////////////
	//* Plural General Relationships *//
	////////////////////////////////////
	/**
	 * Returns the Approvals linking to this Employee
	 *
	 * @return Approvals
	 */
	public function approvals()
	{
		return $this->hasMany('Approval', 'approved_by', 'id');
	}

	/**
	 * Returns the Batch Activity Entries linking to this Employee
	 *
	 * @return BatchActivityEntry[]
	 */
	public function batchActivityEntries()
	{
		return $this->hasMany('BatchActivityEntry', 'actor', 'id');
	}

	/**
	 * Returns the Titles linking to this Employee
	 *
	 * @return Title[]
	 */
	public function titles()
	{
		return $this->belongsToMany('EmployeeTitle', 'employee_employeeTitle', 'employee_id', 'title_id');
	}
	
	/**
	 * Returns the Batch_Sealers linking to this Employee
	 *
	 * @return Batch_Sealer
	 */
	public function batches_sealed()
	{
		return $this->belongsToMany('Batch', 'batch_sealer', 'sealed_by', 'batch_id')->withPivot('date');
	}

	///////////////////////////////
	//* Procedure Relationships *//
	///////////////////////////////
	/**
	 * Returns the Procedures linking to this Employee
	 *
	 * @return Procedure[]
	 */
	public function procedures()
	{
		return $this->belongsToMany('Procedure', 'employee_procedure', 'employee_id', 'procedure_d')->withPivot('expires_at');
	}

	///////////////////////////
	//* Batch Relationships *//
	///////////////////////////
	/**
	 * Returns the Batches where this Employee was a Sterilizer
	 *
	 * @return Batches
	 */
	public function batchesWhereSterilizer()
	{
		return $this->hasManyThrough('Batch', 'Sterilization', 'sterilized_by', 'batch_id');
	}

	/**
	 * Returns the Batches where this Employee was a Sealer
	 *
	 * @return Batch[]
	 */
	public function batchesWhereSealer()
	{
		return $this->belongsToMany('Batch', 'batch_sealer', 'sealed_by', 'batch_id')->withPivot('date');
	}

	////////////////////////////////////////
	//* Product Build Form Relationships *//
	////////////////////////////////////////
	/**
	 * Returns the Product Build Forms where this Employee was an Approver
	 *
	 * @return ProductBuildForms
	 */
	public function productBuildFormsWhereApprover()
	{
		return $this->hasManyThrough('ProductBuildForm', 'Approval', 'approved_by', 'approval_id');
	}

	////////////////////////////////
	//* Generation Relationships *//
	////////////////////////////////
	/**
	 * Returns the Generations linking to this Employee
	 *
	 * @return Generations
	 */
	public function generationsWhereGenerator()
	{
		return $this->hasMany('Generation', 'generated_by', 'id');
	}

	/**
	 * Returns the Generations where this Employee was an Approver
	 *
	 * @return Generations
	 */
	public function generationsWhereApprover()
	{
		return $this->hasManyThrough('Generation', 'Approval', 'approved_by', 'approval_id');
	}

	/////////////////////////////////
	//* Destruction Relationships *//
	/////////////////////////////////
	/**
	 * Returns the Destructions linking to this Employee
	 *
	 * @return Destructions
	 */
	public function destructionsWhereDestroyer()
	{
		return $this->hasMany('Destruction', 'destroyed_by', 'id');
	}

	///////////////////////////////////
	//* Sterilization Relationships *//
	///////////////////////////////////
	/**
	 * Returns the Sterilizations linking to this Employee
	 *
	 * @return Sterilizations
	 */
	public function sterilizationsWhereSterilizer()
	{
		return $this->hasMany('Sterilization', 'sterilized_by', 'id');
	}

	/**
	 * Returns the Sterilizations where this Employee was an Approver
	 *
	 * @return Sterilizations
	 */
	public function sterilizationsWhereApprover()
	{
		return $this->hasManyThrough('Sterilization', 'Approval', 'approved_by', 'approval_id');
	}

	//////////////////////////////////
	//* Carton Label Relationships *//
	//////////////////////////////////
	/**
	 * Returns the Carton Labels where this Employee was a Generator
	 *
	 * FUNCTION NOT YET TESTED
	 * TODO: TEST
	 *
	 * @return BatchCartonLabel
	 */
	public function cartonLabelsWhereGenerator()
	{
		return BatchCartonLabel::with(array('generations', 'generations.generated_by'));
	}

	/**
	 * Returns the Carton Labels where this Employee was a Destroyer
	 *
	 * @return CartonLabel[]
	 */
	public function cartonLabelsWhereDestroyer()
	{
		return $this->hasManyThrough('CartonLabel', 'Destruction', 'destoyed_by', 'destrection_id');
	}

	/////////////////////////////////
	//* Pouch Label Relationships *//
	/////////////////////////////////
	/**
	 * Returns the Pouch Labels where this Employee was a Generator
	 *
	 * FUNCTION NOT YET TESTED
	 *
	 * @return PouchLabel[]
	 */
	public function pouchLabelsWhereGenerator()
	{
		return BatchPouchLabel::with(array('generations', 'generations.generated_by'));
	}

	/**
	 * Returns the Pouch Labels where this Employee was a Destroyer
	 *
	 * @return PouchLabel[]
	 */
	public function pouchLabelsWhereDestroyer()
	{
		return $this->hasManyThrough('PouchLabel', 'Destruction', 'destoyed_by', 'destrection_id');
	}

	////////////////////////////////
	//* Inspection Relationships *//
	////////////////////////////////
	/**
	 * Returns the Inspections where this Employee was an Approver
	 *
	 * @return Inspections
	 */
	public function inspectionsWhereApprover()
	{
		return $this->hasManyThrough('Inspection', 'Approval', 'approved_by', 'approval_id');
	}

	/////////////////////////////
	//* Comment Relationships *//
	/////////////////////////////
	/**
	 * Returns the Comments linking to this Employee
	 *
	 * @return Comments
	 */
	public function comments()
	{
		return $this->hasMany('Comment', 'commented_by', 'id');
	}

	/**
	 * Returns the Batch Comments linking to this Employee
	 *
	 * NOT YET IMPLEMENTED
	 *
	 * @return Comments
	 */
	public function commentsOnBatches()
	{
		/*
		return Batch::with(array(
			'comment' => function($query) {
				$query->where('commenter', $this->id)
			})) -> get();
		*/
	}

	/**
	 * Returns the Batch Activity Entry Comments linking to this Employee
	 *
	 * @return Comments
	 */
	public function commentsOnBatchActivityEntries()
	{
		return $this->hasManyThrough('Comment', 'BatchActivityEntry', 'acted_by', 'comments_id');
	}
}