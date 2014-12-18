<?php

/**
 * Creates the initial Employee Expiration Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Employee
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.4 (12/4/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Employee Expiration Table Migration *//
class CreateEmployeeExpirationTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employeeExpiration', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');

			// Foreign Keys
			$table->integer('employee_id') 	->unsigned();

			// Attributes
			$table->dateTime('expires_at');

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 	->unsigned()->index()->nullable();
			$table->integer('updated_by') 	->unsigned()->index()->nullable();
			$table->integer('deleted_by') 	->unsigned()->index()->nullable();
			$table->integer('current_id') 	->unsigned()->index()->nullable();
		});
	}

	/**
	 * Reverse the migration.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employeeExpiration');
	}
}