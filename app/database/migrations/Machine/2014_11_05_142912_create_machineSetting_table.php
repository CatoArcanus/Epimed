<?php

/**
 * Creates the initial Machine Setting Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Machine
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.5 (12/10/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Machine Setting Table Migration *//
class CreateMachineSettingTable extends Migration
{
	/**
	 * Run the migration.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('machineSetting', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');
	
			// Foreign Key
			$table->integer('machine_id')		->unsigned()->index();
			$table->integer('reading_type_id')	->unsigned()->index();

			// Attributes
			$table->smallInteger('setting')		->unsigned();

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 		->unsigned()->index()->nullable();
			$table->integer('updated_by') 		->unsigned()->index()->nullable();
			$table->integer('deleted_by') 		->unsigned()->index()->nullable();
			$table->integer('current_id') 		->unsigned()->index()->nullable();
		});
	}

	/**
	 * Reverse the migration.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('machineSetting');
	}
}