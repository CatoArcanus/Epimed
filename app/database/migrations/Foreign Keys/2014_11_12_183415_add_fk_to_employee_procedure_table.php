<?php

/**
 * Creates the Foreign Key Constraints for the Employee-Procedure Table
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

//* Add Foreign Key(s) to Employee-Procedure Migration *//
class AddFkToEmployeeProcedureTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('employee_procedure', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('employee_id', 	'fk_employee_procedure_employee')	->references('id')->on('employee')	->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('procedure_id', 'fk_employee_procedure_procedure')	->references('id')->on('procedure')	->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_employee_procedure_created_by')	->references('id')->on('user')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_employee_procedure_updated_by')	->references('id')->on('user')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_employee_procedure_deleted_by')	->references('id')->on('user')		->onUpdate('cascade')->onDelete('restrict');

			$table 	->foreign(		array('current_employee_id', 	'current_procedure_id'), 'fk_employee_procedure_current_id')
					->references(	array('employee_id', 			'procedure_id'))
					->on('employee_procedure')->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('employee_procedure', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_employee_procedure_employee');
			$table->dropForeign('fk_employee_procedure_procedure');

			$table->dropForeign('fk_employee_procedure_created_by');
			$table->dropForeign('fk_employee_procedure_updated_by');
			$table->dropForeign('fk_employee_procedure_deleted_by');
			$table->dropForeign('fk_employee_procedure_current_id');
		});
	}
}

