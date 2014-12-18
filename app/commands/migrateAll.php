<?php

/**
 * Creates the initial Batch Activity Entry Table Schema
 *
 * @category   Artisan
 * @package    Commands
 * @subpackage Migrations
 * @author 	   Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.0 (11/10/2014)
 */

//* Namespaces *//
use Illuminate\Database\Console\Migrations\BaseCommand;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

//* Migrate All Command *//
class migrateAll extends BaseCommand
{
	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'migrate:all';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Performs Migration Actions for sub-directories within the Migrations Folder.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$this->call('migrate', array('--path' => '/app/database/migrations/Batch'));
		$this->call('migrate', array('--path' => '/app/database/migrations/Employee'));
		$this->call('migrate', array('--path' => '/app/database/migrations/Machine'));
		$this->call('migrate', array('--path' => '/app/database/migrations/Product'));
		$this->call('migrate', array('--path' => '/app/database/migrations/Other'));
		$this->call('migrate', array('--path' => '/app/database/migrations/Bridge'));
		$this->call('migrate', array('--path' => '/app/database/migrations/User'));
		$this->call('migrate', array('--path' => '/app/database/migrations/Foreign Keys'));
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('bench', null, InputOption::VALUE_OPTIONAL, 'The name of the workbench to migrate.', null),

			array('database', null, InputOption::VALUE_OPTIONAL, 'The database connection to use.'),

			array('force', null, InputOption::VALUE_NONE, 'Force the operation to run when in production.'),

			array('path', null, InputOption::VALUE_OPTIONAL, 'The path to migration files.', null),

			array('package', null, InputOption::VALUE_OPTIONAL, 'The package to migrate.', null),

			array('pretend', null, InputOption::VALUE_NONE, 'Dump the SQL queries that would be run.'),

			array('seed', null, InputOption::VALUE_NONE, 'Indicates if the seed task should be re-run.'),
		);
	}
}
