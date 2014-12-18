<?php namespace Other;
///////////////////
//* Description *//
///////////////////
/**
 * The Procedure Model represents a Procedure that an Employee can
 * be trained for.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Other
 * @author     Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @author     Monte Nichols (Revisor) <monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.3 (11/29/2014)
 */

///////////////////////
//* Procedure Model *//
///////////////////////
class Procedure extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'procedure';

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
	protected $fillable = array('alphanumeric', 'name');

	////////////////////////////////////
	//* Plural General Relationships *//
	////////////////////////////////////
	/**
	 * Returns the Products that require this Procedure
	 *
	 * @return Product[]
	 */
	public function products()
	{
		return $this->belongsToMany('Product', 'procedure_product', 'procedure_id', 'product_id');
	}

	/**
	 * Returns the Employees trained on this Procedure
	 *
	 * @return Employee[]
	 */
	public function employees()
	{
		return $this->belongsToMany('Employee', 'employee_procedure', 'procedure_id', 'employee_id')->withPivot('expires_at');
	}
}