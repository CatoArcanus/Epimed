<?php namespace Employee;
///////////////////
//* Description *//
///////////////////
/**
 * The Employee Title represents a Title belonging to an Employee
 *
 * Note: Employees may have many Titles
 *
 * @category   MVC
 * @package    Models
 * @subpackage Employee
 * @author     Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @author     Monte Nichols (Revisor) <monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.3 (11/29/2014)
 */

////////////////////////////
//* Employee Title Model *//
////////////////////////////
class EmployeeTitle extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'employeeTitle';

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
	protected $fillable = array('title');

	//////////////////////////////////////
	//* Singular General Relationships *//
	//////////////////////////////////////
	/**
	 * Returns the Employees linked to this Title
	 *
	 * @return Employees
	 */
	public function employees()
	{
		return $this->belongsToMany('Employee', 'employee_employeeTitle', 'title_id', 'employee_id');
	}
}