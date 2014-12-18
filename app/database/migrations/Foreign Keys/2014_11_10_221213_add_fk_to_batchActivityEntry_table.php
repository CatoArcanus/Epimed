<?php

/**
 * Creates the Foreign Key Constraints for the Batch Activity Entry Table
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Batch
 * @author 		Tyler Reed 	(Original Author) 	<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.3 (12/10/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Add Foreign Key(s) to Batch Activity Entry Migration *//
class AddFkToBatchActivityEntryTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('batchActivityEntry', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('batch_id', 	'fk_batchActivityEntry_batch')		->references('id')->on('batch')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('acted_by', 	'fk_batchActivityEntry_actor')		->references('id')->on('employee')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('comments_id', 	'fk_batchActivityEntry_comments')	->references('id')->on('commentBlock')		->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_batchActivityEntry_created_by') ->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_batchActivityEntry_updated_by') ->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_batchActivityEntry_deleted_by') ->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('current_id', 	'fk_batchActivityEntry_current_id') ->references('id')->on('batchActivityEntry')->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('batchActivityEntry', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_batchActivityEntry_batch');
			$table->dropForeign('fk_batchActivityEntry_actor');
			$table->dropForeign('fk_batchActivityEntry_comments');

			$table->dropForeign('fk_batchActivityEntry_created_by');
			$table->dropForeign('fk_batchActivityEntry_updated_by');
			$table->dropForeign('fk_batchActivityEntry_deleted_by');
			$table->dropForeign('fk_batchActivityEntry_current_id');
		});
	}
}
