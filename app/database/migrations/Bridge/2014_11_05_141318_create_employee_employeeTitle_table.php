<?php

/**
 * Creates the initial Employee-EmployeeTitle Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Bridge
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.5 (12/10/14)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Employee_EmployeeTitle Table Migration *//
class CreateEmployeeEmployeeTitleTable extends Migration
{
	/**
	 * Run the migration.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employee_employeeTitle', function(Blueprint $table)
		{
			// Primary Key
			$table->integer('employee_id')	->unsigned();
			$table->integer('title_id')		->unsigned();

			$table->primary(array('employee_id', 'title_id'), 'pk_employee_employeeTitle');

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 				->unsigned()->index()	->nullable();
			$table->integer('updated_by') 				->unsigned()->index()	->nullable();
			$table->integer('deleted_by') 				->unsigned()->index()	->nullable();
			$table->integer('current_employee_id') 		->unsigned()			->nullable();
			$table->integer('current_title_id') 		->unsigned()			->nullable();

			$table->index(array('current_employee_id', 'current_title_id'), 'idx_employee_employeeTitle_current');
		});
	}

	/**
	 * Reverse the migration.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employee_employeeTitle');
	}
}