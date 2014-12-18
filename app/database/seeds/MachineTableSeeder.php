<?php

/**
 * Seeds the Machine Table
 *
 * @category   Database
 * @package    Seeding
 * @subpackage Machine
 * @author 	   Tyler Reed (Revisor) <tylernathanreed@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.0 (11/13/2014)
 */

//* Machine Table Seeder *//
class MachineTableSeeder extends AbstractSeeder
{
	/**
	 * The Name of the Table to be Seeded
	 *
	 * @var string
	 */
	protected $table = 'machine';

	/**
	 * Returns a Multi-Dimensional Array where each sub-array
	 * is an entry in the Table, and each element in the sub-arrays
	 * are the column values.
	 *
	 * @return array
	 */
	public function getData()
	{
		return array(
			array('name' => 'CE-002'),
			array('name' => 'CE-009'),
			array('name' => 'CE-029'),
			array('name' => 'CE-030'),
			array('name' => 'CE-376')
		);
	}
}