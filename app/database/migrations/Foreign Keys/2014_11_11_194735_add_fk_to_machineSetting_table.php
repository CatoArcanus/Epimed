<?php

/**
 * Creates the Foreign Key Constraints for the Machine Setting Table
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Machine
 * @author 		Tyler Reed 	(Original Author) 	<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.3 (12/11/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Add Foreign Key(s) to Machine Setting Migration *//
class AddFkToMachineSettingTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('machineSetting', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('machine_id', 		'fk_machineSetting_machine')		->references('id')->on('machine')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('reading_type_id', 	'fk_machineSetting_readingType')	->references('id')->on('machineReadingType')	->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 		'fk_machineSetting_created_by') 	->references('id')->on('user')					->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 		'fk_machineSetting_updated_by') 	->references('id')->on('user')					->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 		'fk_machineSetting_deleted_by') 	->references('id')->on('user')					->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('current_id', 		'fk_machineSetting_current_id') 	->references('id')->on('machineSetting')		->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('machineSetting', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_machineSetting_machine');
			$table->dropForeign('fk_machineSetting_readingType');

			$table->dropForeign('fk_machineSetting_created_by');
			$table->dropForeign('fk_machineSetting_updated_by');
			$table->dropForeign('fk_machineSetting_deleted_by');
			$table->dropForeign('fk_machineSetting_current_id');
		});
	}
}
