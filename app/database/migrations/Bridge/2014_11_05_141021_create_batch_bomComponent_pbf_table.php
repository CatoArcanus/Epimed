<?php

/**
 * Creates the initial Batch-BoM Component-PBF Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Bridge
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.4 (12/4/14)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Batch-BoM Component-PBF Table Migration *//
class CreateBatchBomComponentPbfTable extends Migration
{
	/**
	 * Run the migration.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('batch_bomComponent_pbf', function(Blueprint $table)
		{
			// Primary Keys
			$table->integer('batch_id')					->unsigned();
			$table->integer('bom_component_id')			->unsigned();
			$table->integer('pbf_id')					->unsigned();

			$table->primary(array('batch_id', 'bom_component_id', 'pbf_id'), 'pk_batch_bomComponent_pbf');			

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 				->unsigned()->index() 	->nullable();
			$table->integer('updated_by') 				->unsigned()->index() 	->nullable();
			$table->integer('deleted_by') 				->unsigned()->index() 	->nullable();
			$table->integer('current_batch_id') 		->unsigned() 			->nullable();
			$table->integer('current_bom_component_id') ->unsigned() 			->nullable();
			$table->integer('current_pbf_id') 			->unsigned() 			->nullable();

			$table->index(array('current_batch_id', 'current_bom_component_id', 'current_pbf_id'), 'idx_batch_bomComponent_pbf_current');
		});
	}

	/**
	 * Reverse the migration.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('batch_bomComponent_pbf');
	}
}