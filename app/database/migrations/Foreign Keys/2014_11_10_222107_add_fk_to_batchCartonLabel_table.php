<?php

/**
 * Creates the Foreign Key Constraints for the Batch Carton Label Table
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Batch
 * @author 		Tyler Reed 	(Original Author) 	<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.3 (12/11/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Add Foreign Key(s) to Batch Carton Label Migration *//
class AddFkToBatchCartonLabelTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('batchCartonLabel', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('destruction_id', 	'fk_batchCartonLabel_destruction')	->references('id')->on('batchDestruction')	->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 		'fk_batchCartonLabel_created_by') 	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 		'fk_batchCartonLabel_updated_by') 	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 		'fk_batchCartonLabel_deleted_by') 	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('current_id', 		'fk_batchCartonLabel_current_id') 	->references('id')->on('batchCartonLabel')	->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('batchCartonLabel', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_batchCartonLabel_destruction');

			$table->dropForeign('fk_batchCartonLabel_created_by');
			$table->dropForeign('fk_batchCartonLabel_updated_by');
			$table->dropForeign('fk_batchCartonLabel_deleted_by');
			$table->dropForeign('fk_batchCartonLabel_current_id');
		});
	}
}
