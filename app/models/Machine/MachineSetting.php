<?php namespace Machine;
///////////////////
//* Description *//
///////////////////
/**
 * The Machine Setting Model represents a Machine Setting configuration for
 * a Reading or some default state.
 *
 * A Setting may only map to a single Machine, and single Reading
 *
 * @category   MVC
 * @package    Models
 * @subpackage Machine
 * @author     Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @author     Monte Nichols (Revisor) <monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.1 (11/29/2014)
 */
  
/////////////////////////////
//* Machine Setting Model *//
/////////////////////////////
class MachineSetting extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'machineSetting';

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
	 * @var string[]
	 */
	protected $fillable = array('setting');

	//////////////////////////////////////
	//* Singular General Relationships *//
	//////////////////////////////////////
	/**
	 * Returns the Machine that this Setting is for
	 *
	 * @return Machine
	 */
	public function machineUsed()
	{
		return $this->belongsTo('Machine', 'machine_id', 'id');
	}

	/**
	 * Returns the Machine Reading that used this Setting
	 *
	 * @return MachineReading
	 */
	public function reading()
	{
		return $this->hasOne('MachineReading', 'setting_id', 'id');
	}

	/**
	 * Returns the Maching Reading Type for this Setting
	 *
	 * @return MachineReadingType
	 */
	public function readingType()
	{
		return $this->belongsTo('MachineReadingType', 'reading_type_id', 'id');
	}
}