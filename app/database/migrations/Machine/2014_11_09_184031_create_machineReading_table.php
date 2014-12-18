<?php

/**
 * Creates the initial Machine Reading Type Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Machine
 * @author 		Tyler Reed 	(Original Author) 	<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.3 (12/10/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Machine Reading Table Migration *//
class CreateMachineReadingTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('machineReading', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');

			// Foreign Keys
			$table->integer('setting_id')	->unsigned()->index();

			// Attributes
			$table->smallInteger('value')	->unsigned();

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 	->unsigned()->index()->nullable();
			$table->integer('updated_by') 	->unsigned()->index()->nullable();
			$table->integer('deleted_by') 	->unsigned()->index()->nullable();
			$table->integer('current_id') 	->unsigned()->index()->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('machineReading');
	}
}
