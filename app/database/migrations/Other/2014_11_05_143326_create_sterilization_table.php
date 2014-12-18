<?php

/**
 * Creates the initial Sterilization Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Other
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.5 (12/10/14)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Sterilization Table Migration *//
class CreateSterilizationTable extends Migration
{
	/**
	 * Run the migration.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sterilization', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');

			// Foreign Keys
			$table->integer('sterilized_by')->unsigned()->index();
			$table->integer('approval_id')	->unsigned()->index();

			// Attributes
			$table->dateTime('date');
			$table->string('work_order', 10)			->unique();			
			$table->smallInteger('quantity')->unsigned();

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
		Schema::drop('sterilization');
	}
}