<?php

/**
 * Defines an Abstract Seeder that helps make Concrete Seeders
 * more light-weight.
 *
 * @category   Database
 * @package    Seeding
 * @subpackage Abstract
 * @author 	   Tyler Reed (Revisor) <tylernathanreed@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.0 (11/13/2014)
 */

//* Abstract Seeder Class *//
abstract class AbstractSeeder extends Seeder
{
	/**
	 * The Name of the Table to be Seeded
	 *
	 * @var string
	 */
	protected $table = '__abstract__';

	/**
	 * Returns a Multi-Dimensional Array where each sub-array
	 * is an entry in the Table, and each element in the sub-arrays
	 * are the column values.
	 *
	 * @return array
	 */
	abstract public function getData();

	/**
	 * Called when Seeding the Database
	 *
	 * @return mixed
	 */
	public function run()
	{
		// Make sure that the Table has been defined
		if($this->table == '__abstract__')
			throw new Exception('Table not defined!');

		// Start Seeding Info
		$this->command->info('Seeding ' . $this->table . ' Table...');

		// Empty the Table
		DB::table($this->table)->truncate();

		// Populate the Table
		DB::table($this->table)->insert(getData());

		// Stop Seeding Info
		$this->command->info('OK!');
	}
}