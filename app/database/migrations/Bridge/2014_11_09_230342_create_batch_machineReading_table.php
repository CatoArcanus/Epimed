<?php

/**
 * Creates the initial Batch-MachineReading Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Batch
 * @author 		Tyler Reed 	(Original Author) 	<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.5 (12/10/14)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchMachineReadingTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('batch_machineReading', function(Blueprint $table)
		{
			// Primary Key
			$table->integer('batch_id')				->unsigned();
			$table->integer('reading_id') 			->unsigned();

			$table->primary(array('batch_id', 'reading_id'), 'pk_batch_machineReading');

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 			->unsigned()->index()	->nullable();
			$table->integer('updated_by') 			->unsigned()->index()	->nullable();
			$table->integer('deleted_by') 			->unsigned()->index()	->nullable();
			$table->integer('current_batch_id') 	->unsigned()			->nullable();
			$table->integer('current_reading_id') 	->unsigned()			->nullable();

			$table->index(array('current_batch_id', 'current_reading_id'), 'idx_batch_machineReading_current');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('batch_machineReading');
	}
}
