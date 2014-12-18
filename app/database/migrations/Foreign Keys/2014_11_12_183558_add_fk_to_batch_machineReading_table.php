<?php

/**
 * Creates the Foreign Key Constraints for the Batch-MachineReading Table
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Bridge
 * @author 		Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @copyright  	2014 Epimed International
 * @version 	1.3 (12/11/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Add Foreign Key(s) to Batch-MachineReading Migration *//
class AddFkToBatchMachineReadingTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('batch_machineReading', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('batch_id', 	'fk_batch_machineReading_batch')	->references('id')		->on('batch')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('reading_id', 	'fk_batch_machineReading_reading')	->references('id')		->on('machineReading') 	->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_batch_machineReading_created_by')	->references('id')	->on('user')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_batch_machineReading_updated_by')	->references('id')	->on('user')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_batch_machineReading_deleted_by')	->references('id')	->on('user')			->onUpdate('cascade')->onDelete('restrict');

			$table 	->foreign(		array('current_batch_id', 	'current_reading_id'), 'fk_batch_machineReading_current_id')
					->references(	array('batch_id', 			'reading_id'))
					->on('batch_machineReading')->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('batch_machineReading', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_batch_machineReading_batch');
			$table->dropForeign('fk_batch_machineReading_reading');

			$table->dropForeign('fk_batch_machineReading_created_by');
			$table->dropForeign('fk_batch_machineReading_updated_by');
			$table->dropForeign('fk_batch_machineReading_deleted_by');
			$table->dropForeign('fk_batch_machineReading_current_id');
		});
	}
}