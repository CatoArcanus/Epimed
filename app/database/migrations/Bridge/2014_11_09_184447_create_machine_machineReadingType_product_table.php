<?php

/**
 * Creates the initial Machine-MachineReadingType-Product
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Bridge
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.5 (12/10/14)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Machine-MachineReadingType-Product Table Migration *//
class CreateMachineMachineReadingTypeProductTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('machine_machineReadingType_product', function(Blueprint $table)
		{
			// Primary Key
			$table->integer('machine_id')				->unsigned();
			$table->integer('reading_type_id')			->unsigned();
			$table->integer('product_id')				->unsigned();

			$table->primary(array('machine_id', 'reading_type_id', 'product_id'), 'pk_machine_machineReadingType_product');

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 				->unsigned()->index()	->nullable();
			$table->integer('updated_by') 				->unsigned()->index()	->nullable();
			$table->integer('deleted_by') 				->unsigned()->index()	->nullable();
			$table->integer('current_machine_id') 		->unsigned()			->nullable();
			$table->integer('current_reading_type_id') 	->unsigned()			->nullable();
			$table->integer('current_product_id')		->unsigned()			->nullable();

			$table->index(array('current_machine_id', 'current_reading_type_id', 'current_product_id'), 'idx_machine_machineReadingType_product_current');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('machine_machineReadingType_product');
	}

}
