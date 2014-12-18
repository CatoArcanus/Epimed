<?php namespace Machine;
///////////////////
//* Description *//
///////////////////
/**
 * The Machine Reading Type Model represents the Type of a
 * Machine Reading.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Machine
 * @author     Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.0 (11/9/2014)
 */

//////////////////////////////////
//* Machine Reading Type Model *//
//////////////////////////////////
class MachineReadingType extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'machineReadingType';

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
	protected $fillable = array('type');

	////////////////////////////////////
	//* Plural General Relationships *//
	////////////////////////////////////
	/**
	 * Returns the Settings used for various Readings by this Machine
	 *
	 * @return MachineSetting[]
	 */
	public function settings()
	{
		return $this->hasMany('MachineSetting', 'machine_id', 'id');
	}

	/**
	 * Returns the Readings produced by this Machine
	 *
	 * @return MachinReading[]
	 */
	public function readings()
	{
		return $this->hasManyThrough('MachineReading', 'MachineSetting', 'machine_id', 'setting_id');
	}

	/**
	 * Returns the Products this Machine has made Readings for
	 *
	 * @return Product[]
	 */
	public function products()
	{
		return $this->belongsToMany('Product', 'machine_machineReadingType_product', 'reading_type_id', 'product_id')->withPivot('machine_id', 'default');
	}

	/**
	 * Returns the Machines that generate Readings of this Type
	 *
	 * @return Machine[]
	 */
	public function machines()
	{
		return $this->belongsToMany('Machine', 'machine_machineReadingType_product', 'reading_type_id', 'machine_id')->withPivot('product_id', 'default');
	}
}