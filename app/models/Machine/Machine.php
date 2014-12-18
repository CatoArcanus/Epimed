<?php namespace Machine;
///////////////////
//* Description *//
///////////////////
/**
 * The Machine Model represents a Machine used to conduct tests on
 * things. These tests typically result in a set of Readings.
 *
 * Each Machine must:
 *  - Have a preferred setting for each environment
 *  - Have specific settings for each reading
 *
 * Machines will require many Bridge Tables between its Readings and
 * the tables that reference those Readings.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Machine
 * @author     Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @author     Monte Nichols (Revisor) <monte.nichols.ii@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.3 (11/29/2014)
 */

/////////////////////
//* Machine Model *//
/////////////////////
class Machine extends \BaseModel
{
	/////////////////////////
	//* Table Information *//
	/////////////////////////
	/**
	 * The Database Table used by the Model.
	 *
	 * @var string
	 */
	protected $table = 'machine';

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
	protected $fillable = array('name');

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
		return $this->belongsToMany('Product', 'machine_machineReadingType_product', 'machine_id', 'product_id')->withPivot('reading_type', 'default');
	}

	/**
	 * Returns the Reading Types this Machine works with
	 *
	 * @return MachineReadingType[]
	 */
	public function readingTypes()
	{
		return $this->belongsToMany('MachineReadingType', 'machine_machineReadingType_product', 'machine_id', 'reading_type_id')->withPivot('product', 'default');
	}
}