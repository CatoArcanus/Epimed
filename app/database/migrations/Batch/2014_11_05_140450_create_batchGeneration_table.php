<?php

/**
 * Creates the initial Batch Generation Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Batch
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.5 (12/10/14)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Batch Generation Table Migration *//
class CreateBatchGenerationTable extends Migration
{
	/**
	 * Run the migration.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('batchGeneration', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');
			
			// Foreign Keys
			$table->integer('generated_by')	->unsigned()->index();
			$table->integer('approval_id')	->unsigned()->index()	->nullable();

			// Attributes
			$table->smallInteger('amount')	->unsigned();
			$table->smallInteger('used')	->unsigned()			->nullable();
			$table->dateTime('date');

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 	->unsigned()->index()	->nullable();
			$table->integer('updated_by') 	->unsigned()->index() 	->nullable();
			$table->integer('deleted_by') 	->unsigned()->index() 	->nullable();
			$table->integer('current_id') 	->unsigned()->index() 	->nullable();
		});
	}

	/**
	 * Reverse the migration.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('batchGeneration');
	}
}