<?php

/**
 * Creates the Foreign Key Constraints for the Batch Inspection Table
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Batch
 * @author 		Tyler Reed 	(Original Author) 	<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.4 (12/11/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Add Foreign Key(s) to Batch Inspection Migration *//
class AddFkToBatchInspectionTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('batchInspection', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('heat_seal_id', 	'fk_batchInspection_heatSeal')		->references('id')->on('inspection')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('contents_id', 		'fk_batchInspection_contents')		->references('id')->on('inspection')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('particulate_id', 	'fk_batchInspection_particulate')	->references('id')->on('inspection')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('burst_strength_id','fk_batchInspection_burstStrength')	->references('id')->on('inspection')		->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 		'fk_batchInspection_created_by') 	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 		'fk_batchInspection_updated_by') 	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 		'fk_batchInspection_deleted_by') 	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('current_id', 		'fk_batchInspection_current_id') 	->references('id')->on('batchInspection')	->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('batchInspection', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_batchInspection_heatSeal');
			$table->dropForeign('fk_batchInspection_contents');
			$table->dropForeign('fk_batchInspection_particulate');
			$table->dropForeign('fk_batchInspection_burstStrength');

			$table->dropForeign('fk_batchInspection_created_by');
			$table->dropForeign('fk_batchInspection_updated_by');
			$table->dropForeign('fk_batchInspection_deleted_by');
			$table->dropForeign('fk_batchInspection_current_id');
		});
	}
}
