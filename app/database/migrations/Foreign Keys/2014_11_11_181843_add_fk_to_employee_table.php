<?php

/**
 * Creates the Foreign Key Constraints for the Employee Table
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Employee
 * @author 		Tyler Reed 	(Original Author) 	<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.4 (12/11/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Add Foreign Key(s) to Employee Migration *//
class AddFkToEmployeeTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('employee', function(Blueprint $table)
		{
			$table->foreign('account_id', 	'fk_employee_account') 		->references('id')->on('user') 		->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_employee_created_by') 	->references('id')->on('user')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_employee_updated_by') 	->references('id')->on('user')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_employee_deleted_by') 	->references('id')->on('user')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('current_id', 	'fk_employee_current_id') 	->references('id')->on('employee')	->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('employee', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_employee_account');

			$table->dropForeign('fk_employee_created_by');
			$table->dropForeign('fk_employee_updated_by');
			$table->dropForeign('fk_employee_deleted_by');
			$table->dropForeign('fk_employee_current_id');
		});
	}
}
