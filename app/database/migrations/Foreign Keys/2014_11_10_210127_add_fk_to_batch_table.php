<?php

/**
 * Creates the Foreign Key Constraints for the Batch Table
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

//* Add Foreign Key(s) to Batch Migration *//
class AddFkToBatchTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('batch', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('revision_id', 		'fk_batch_revision')		->references('id')->on('revision')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('product_id', 		'fk_batch_product')			->references('id')->on('product')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('carton_id',		'fk_batch_carton')			->references('id')->on('batchCartonLabel')	->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('pouch_id',			'fk_batch_pouch')			->references('id')->on('batchPouchLabel')	->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('inspection_id',	'fk_batch_inspection')		->references('id')->on('batchInspection')	->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('sterilization_id',	'fk_batch_sterilization')	->references('id')->on('sterilization')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('approval_id', 		'fk_batch_approval')		->references('id')->on('approval') 			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('comments_id',		'fk_batch_comments')		->references('id')->on('commentBlock')		->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 		'fk_batch_created_by') 		->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 		'fk_batch_updated_by') 		->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 		'fk_batch_deleted_by') 		->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('current_id', 		'fk_batch_current_id') 		->references('id')->on('batch')				->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('batch', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_batch_revision');
			$table->dropForeign('fk_batch_product');
			$table->dropForeign('fk_batch_carton');
			$table->dropForeign('fk_batch_pouch');
			$table->dropForeign('fk_batch_inspection');
			$table->dropForeign('fk_batch_sterilization');
			$table->dropForeign('fk_batch_approval');
			$table->dropForeign('fk_batch_comments');

			$table->dropForeign('fk_batch_created_by');
			$table->dropForeign('fk_batch_updated_by');
			$table->dropForeign('fk_batch_deleted_by');
			$table->dropForeign('fk_batch_current_id');
		});
	}
}
