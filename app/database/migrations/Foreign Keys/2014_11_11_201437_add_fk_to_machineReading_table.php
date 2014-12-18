<?php

/**
 * Creates the Foreign Key Constraints for the Machine Reading Table
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

//* Add Foreign Key(s) to Machine Reading Migration *//
class AddFkToMachineReadingTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('machineReading', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('setting_id', 	'fk_machineReading_setting')	->references('id')->on('machineSetting')	->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_machineReading_created_by') ->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_machineReading_updated_by') ->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_machineReading_deleted_by') ->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('current_id', 	'fk_machineReading_current_id') ->references('id')->on('machineReading')	->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('machineReading', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_machineReading_setting');

			$table->dropForeign('fk_machineReading_created_by');
			$table->dropForeign('fk_machineReading_updated_by');
			$table->dropForeign('fk_machineReading_deleted_by');
			$table->dropForeign('fk_machineReading_current_id');
		});
	}
}
