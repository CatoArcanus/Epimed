<?php

/**
 * Creates the Foreign Key Constraints for the Batch-BoM Component-PBF Table
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

//* Add Foreign Key(s) to Batch-BoM Component-PBF Migration *//
class AddFkToBatchBomComponentPbfTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('batch_bomComponent_pbf', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('batch_id', 		'fk_batch_bomComponent_pbf_batch')			->references('id')->on('batch')						->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('bom_component_id', 'fk_batch_bomComponent_pbf_bomComponent')	->references('id')->on('billOfMaterialsComponent')	->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('pbf_id', 			'fk_batch_bomComponent_pbf_pbf')			->references('id')->on('productBuildForm')			->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 		'fk_batch_bomComponent_pbf_created_by')		->references('id')->on('user')						->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 		'fk_batch_bomComponent_pbf_updated_by')		->references('id')->on('user')						->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 		'fk_batch_bomComponent_pbf_deleted_by')		->references('id')->on('user')						->onUpdate('cascade')->onDelete('restrict');

			$table 	->foreign(		array('current_batch_id', 	'current_bom_component_id', 'current_pbf_id'), 'fk_batch_bomComponent_pbf_current_id')
					->references(	array('batch_id', 			'bom_component_id', 		'pbf_id'))
					->on('batch_bomComponent_pbf')->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('batch_bomComponent_pbf', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_batch_bomComponent_pbf_batch');
			$table->dropForeign('fk_batch_bomComponent_pbf_bomComponent');
			$table->dropForeign('fk_batch_bomComponent_pbf_pbf');

			$table->dropForeign('fk_batch_bomComponent_pbf_created_by');
			$table->dropForeign('fk_batch_bomComponent_pbf_updated_by');
			$table->dropForeign('fk_batch_bomComponent_pbf_deleted_by');
			$table->dropForeign('fk_batch_bomComponent_pbf_current_id');
		});
	}
}
