<?php

/**
 * Creates the Foreign Key Constraints for the Employee-EmployeeTitle Table
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Bridge
 * @author 		Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @copyright  	2014 Epimed International
 * @version 	1.4 (12/11/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Add Foreign Key(s) to Employee-EmployeeTitle Migration *//
class AddFkToEmployeeEmployeeTitleTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('employee_employeeTitle', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('employee_id', 	'fk_employee_employeeTitle_employee')	->references('id')->on('employee')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('title_id', 	'fk_employee_employeeTitle_title')		->references('id')->on('employeeTitle')	->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_employee_employeeTitle_created_by')	->references('id')->on('user')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_employee_employeeTitle_updated_by')	->references('id')->on('user')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_employee_employeeTitle_deleted_by')	->references('id')->on('user')			->onUpdate('cascade')->onDelete('restrict');

			$table 	->foreign(		array('current_employee_id', 	'current_title_id'), 'fk_employee_employeeTitle_current_id')
					->references(	array('employee_id', 			'title_id'))
					->on('employee_employeeTitle')->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('employee_employeeTitle', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_employee_employeeTitle_employee');
			$table->dropForeign('fk_employee_employeeTitle_title');

			$table->dropForeign('fk_employee_employeeTitle_created_by');
			$table->dropForeign('fk_employee_employeeTitle_updated_by');
			$table->dropForeign('fk_employee_employeeTitle_deleted_by');
			$table->dropForeign('fk_employee_employeeTitle_current_id');
		});
	}
}
