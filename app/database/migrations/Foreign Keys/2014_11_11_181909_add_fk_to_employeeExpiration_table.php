<?php

/**
 * Creates the Foreign Key Constraints for the Employee Expiration Table
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Employee
 * @author 		Tyler Reed 	(Original Author) 	<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.3 (12/11/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Add Foreign Key(s) to Employee Expiration Migration *//
class AddFkToEmployeeExpirationTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('employeeExpiration', function(Blueprint $table)
		{
			$table->foreign('employee_id', 'fk_employeeExpiration_employee') 	->references('id')->on('employee')				->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_employeeExpiration_created_by') ->references('id')->on('user')					->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_employeeExpiration_updated_by') ->references('id')->on('user')					->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_employeeExpiration_deleted_by') ->references('id')->on('user')					->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('current_id', 	'fk_employeeExpiration_current_id') ->references('id')->on('employeeExpiration')	->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('employeeExpiration', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_employeeExpiration_employee');

			$table->dropForeign('fk_employeeExpiration_created_by');
			$table->dropForeign('fk_employeeExpiration_updated_by');
			$table->dropForeign('fk_employeeExpiration_deleted_by');
			$table->dropForeign('fk_employeeExpiration_current_id');
		});
	}
}
