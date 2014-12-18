<?php

/**
 * Creates the initial Employee-Procedure Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Bridge
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright  	2014 Epimed International
 * @version 	1.5 (12/10/14)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Employee_Procedure Table Migration *//
class CreateEmployeeProcedureTable extends Migration
{
	/**
	 * Run the migration.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employee_procedure', function(Blueprint $table)
		{
			// Primary Key
			$table->integer('employee_id')	->unsigned();
			$table->integer('procedure_id')->unsigned();

			$table->primary(array('employee_id', 'procedure_id'), 'pk_employee_procedure');

			// Attributes
			$table->date('expires');

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 				->unsigned()->index()	->nullable();
			$table->integer('updated_by') 				->unsigned()->index()	->nullable();
			$table->integer('deleted_by') 				->unsigned()->index()	->nullable();
			$table->integer('current_employee_id') 		->unsigned()			->nullable();
			$table->integer('current_procedure_id') 	->unsigned()			->nullable();

			$table->index(array('current_employee_id', 'current_procedure_id'), 'idx_employee_procedure_current');
		});
	}

	/**
	 * Reverse the migration.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employee_procedure');
	}
}