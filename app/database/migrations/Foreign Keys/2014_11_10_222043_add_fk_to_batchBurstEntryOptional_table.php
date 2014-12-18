<?php

/**
 * Creates the Foreign Key Constraints for the Batch Burst Entry Optional Table
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

//* Add Foreign Key(s) to Batch Burst Entry Optional Migration *//
class AddFkToBatchBurstEntryOptionalTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('batchBurstEntryOptional', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('entry_id', 	'fk_batchBurstEntryOptional_entry') 		->references('id')->on('batchBurstEntry') 			->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_batchBurstEntryOptional_created_by') 	->references('id')->on('user')						->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_batchBurstEntryOptional_updated_by') 	->references('id')->on('user')						->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_batchBurstEntryOptional_deleted_by') 	->references('id')->on('user')						->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('current_id', 	'fk_batchBurstEntryOptional_current_id') 	->references('id')->on('batchBurstEntryOptional')	->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('batchBurstEntryOptional', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_batchBurstEntryOptional_entry');

			$table->dropForeign('fk_batchBurstEntryOptional_created_by');
			$table->dropForeign('fk_batchBurstEntryOptional_updated_by');
			$table->dropForeign('fk_batchBurstEntryOptional_deleted_by');
			$table->dropForeign('fk_batchBurstEntryOptional_current_id');
		});
	}
}
