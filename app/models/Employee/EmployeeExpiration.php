<?php namespace Employee;
///////////////////
//* Description *//
///////////////////
/**
 * The Employee Expiration represents a date where the Employee's account
 * will become automatically deactivated (but not deleted)
 *
 * Note: Not all accounts will expire
 *
 * @category   MVC
 * @package    Models
 * @subpackage Employee
 * @author     Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @author     Monte Nichols (Revisor) <monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.3(11/29/2014)
 */

/////////////////////////////////
//* Employee Expiration Model *//
/////////////////////////////////
class EmployeeExpiration extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'employeeExpiration';

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
	protected $fillable = array('expires_at');

	//////////////////////////////////////
	//* Singular General Relationships *//
	//////////////////////////////////////
	/**
	 * Returns the Employee linked to this Expiration
	 *
	 * @return Employee
	 */
	public function employee()
	{
		return $this->belongsTo('Employee', 'employee_id', 'id');
	}
}