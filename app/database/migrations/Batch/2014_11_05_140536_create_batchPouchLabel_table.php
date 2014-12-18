<?php

/**
 * Creates the initial Batch Pouch Label Table Schema
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

//* Create Batch Pouch Label Table Migration *//
class CreateBatchPouchLabelTable extends Migration
{
	/**
	 * Run the migration.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('batchPouchLabel', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');
			
			// Foreign Key
			$table->integer('destruction_id')->unsigned()->index()->nullable();


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
		Schema::drop('batchPouchLabel');
	}
}