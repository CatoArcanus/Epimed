<?php

/**
 * Creates the Foreign Key Constraints for the PouchLabel-Generation Table
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

//* Add Foreign Key(s) to PouchLabel-Generation Migration *//
class AddFkToPouchLabelGenerationTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pouchLabel_generation', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('pouch_id', 		'fk_pouchLabel_generation_pouch')		->references('id')->on('batchPouchLabel')	->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('generation_id', 	'fk_pouchLabel_generation_generation')	->references('id')->on('batchGeneration')	->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 		'fk_pouchLabel_generation_created_by')	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 		'fk_pouchLabel_generation_updated_by')	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 		'fk_pouchLabel_generation_deleted_by')	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');

			$table 	->foreign(		array('current_pouch_id', 	'current_generation_id'), 'fk_pouchLabel_generation_current_id')
					->references(	array('pouch_id', 			'generation_id'))
					->on('pouchLabel_generation')->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pouchLabel_generation', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_pouchLabel_generation_pouch');
			$table->dropForeign('fk_pouchLabel_generation_generation');

			$table->dropForeign('fk_pouchLabel_generation_created_by');
			$table->dropForeign('fk_pouchLabel_generation_updated_by');
			$table->dropForeign('fk_pouchLabel_generation_deleted_by');
			$table->dropForeign('fk_pouchLabel_generation_current_id');
		});
	}
}
