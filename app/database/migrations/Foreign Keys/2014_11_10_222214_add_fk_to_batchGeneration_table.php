<?php

/**
 * Creates the Foreign Key Constraints for the Batch Generation Table
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

//* Add Foreign Key(s) to Batch Generation Migration *//
class AddFkToBatchGenerationTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('batchGeneration', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('generated_by', 'fk_batchGeneration_generator')		->references('id')->on('employee')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('approval_id',	'fk_batchGeneration_approval')		->references('id')->on('approval')			->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_batchGeneration_created_by') 	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_batchGeneration_updated_by') 	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_batchGeneration_deleted_by') 	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('current_id', 	'fk_batchGeneration_current_id') 	->references('id')->on('batchGeneration')	->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('batchGeneration', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_batchGeneration_generator');
			$table->dropForeign('fk_batchGeneration_approval');

			$table->dropForeign('fk_batchGeneration_created_by');
			$table->dropForeign('fk_batchGeneration_updated_by');
			$table->dropForeign('fk_batchGeneration_deleted_by');
			$table->dropForeign('fk_batchGeneration_current_id');
		});
	}
}
