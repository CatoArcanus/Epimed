<?php

/**
 * Creates the Foreign Key Constraints for the Sterilization Table
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Other
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.4 (12/11/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Add Foreign Key(s) to Sterilization Migration *//
class AddFkToSterilizationTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sterilization', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('sterilized_by', 	'fk_sterilization_sterilizer')	->references('id')->on('employee')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('approval_id', 		'fk_sterilization_approval')	->references('id')->on('approval')		->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 		'fk_sterilization_created_by')	->references('id')->on('user')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 		'fk_sterilization_updated_by')	->references('id')->on('user')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 		'fk_sterilization_deleted_by')	->references('id')->on('user')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('current_id', 		'fk_sterilization_current_id')	->references('id')->on('sterilization') ->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sterilization', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_sterilization_sterilizer');

			$table->dropForeign('fk_sterilization_created_by');
			$table->dropForeign('fk_sterilization_updated_by');
			$table->dropForeign('fk_sterilization_deleted_by');
			$table->dropForeign('fk_sterilization_current_id');
		});
	}
}
