<?php

/**
 * Creates the Foreign Key Constraints for the CartonLabel-Generation Table
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

//* Add Foreign Key(s) to CartonLabel-Generation Migration *//
class AddFkToCartonLabelGenerationTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cartonLabel_generation', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('carton_id', 		'fk_cartonLabel_generation_carton')		->references('id')->on('batchCartonLabel')	->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('generation_id', 	'fk_cartonLabel_generation_generation')	->references('id')->on('batchGeneration')	->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 		'fk_cartonLabel_generation_created_by')	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 		'fk_cartonLabel_generation_updated_by')	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 		'fk_cartonLabel_generation_deleted_by')	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');

			$table 	->foreign(		array('current_carton_id', 	'current_generation_id'), 'fk_cartonLabel_generation_current_id')
					->references(	array('carton_id', 			'generation_id'))
					->on('cartonLabel_generation')->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cartonLabel_generation', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_cartonLabel_generation_carton');
			$table->dropForeign('fk_cartonLabel_generation_generation');

			$table->dropForeign('fk_cartonLabel_generation_created_by');
			$table->dropForeign('fk_cartonLabel_generation_updated_by');
			$table->dropForeign('fk_cartonLabel_generation_deleted_by');
			$table->dropForeign('fk_cartonLabel_generation_current_id');
		});
	}
}
