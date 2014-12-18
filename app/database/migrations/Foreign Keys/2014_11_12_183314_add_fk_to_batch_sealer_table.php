<?php

/**
 * Creates the Foreign Key Constraints for the Batch-Sealer Table
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

//* Add Foreign Key(s) to Batch-Sealer Migration *//
class AddFkToBatchSealerTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('batch_sealer', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('batch_id', 	'fk_batch_sealer_batch')		->references('id')->on('batch')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('sealed_by', 	'fk_batch_sealer_sealer')		->references('id')->on('employee')		->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_batch_sealer_created_by')	->references('id')->on('user')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_batch_sealer_updated_by')	->references('id')->on('user')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_batch_sealer_deleted_by')	->references('id')->on('user')			->onUpdate('cascade')->onDelete('restrict');

			$table 	->foreign(		array('current_batch_id', 	'current_sealer_id'), 'fk_batch_sealer_current_id')
					->references(	array('batch_id', 			'sealed_by'))
					->on('batch_sealer')->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('batch_sealer', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_batch_sealer_batch');
			$table->dropForeign('fk_batch_sealer_sealer');

			$table->dropForeign('fk_batch_sealer_created_by');
			$table->dropForeign('fk_batch_sealer_updated_by');
			$table->dropForeign('fk_batch_sealer_deleted_by');
			$table->dropForeign('fk_batch_sealer_current_id');
		});
	}
}
