<?php

/**
 * Creates the Foreign Key Constraints for the Machine-MachineReadingType-Product Table
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

//* Add Foreign Key(s) to Machine-MachineReadingType-Product Migration *//
class AddFkToMachineMachineReadingTypeProductTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('machine_machineReadingType_product', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('machine_id', 		'fk_machine_machineReadingType_product_machine')	->references('id')->on('machine')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('reading_type_id', 	'fk_machine_machineReadingType_product_readingType')->references('id')->on('machineReadingType')->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('product_id', 		'fk_machine_machineReadingType_product_product')	->references('id')->on('product')			->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 		'fk_machine_machineReadingType_product_created_by')	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 		'fk_machine_machineReadingType_product_updated_by')	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 		'fk_machine_machineReadingType_product_deleted_by')	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');

			$table 	->foreign(		array('current_machine_id', 	'current_reading_type_id', 	'current_product_id'), 'fk_machine_machineReadingType_product_current_id')
					->references(	array('machine_id', 			'reading_type_id',			'product_id'))
					->on('machine_machineReadingType_product')->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('machine_machineReadingType_product', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_machine_machineReadingType_product_machine');
			$table->dropForeign('fk_machine_machineReadingType_product_readingType');
			$table->dropForeign('fk_machine_machineReadingType_product_product');

			$table->dropForeign('fk_machine_machineReadingType_product_created_by');
			$table->dropForeign('fk_machine_machineReadingType_product_updated_by');
			$table->dropForeign('fk_machine_machineReadingType_product_deleted_by');
			$table->dropForeign('fk_machine_machineReadingType_product_current_id');
		});
	}
}
