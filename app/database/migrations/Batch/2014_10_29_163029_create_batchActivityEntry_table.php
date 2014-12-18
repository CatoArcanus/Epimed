<?php

/**
 * Creates the initial Batch Activity Entry Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Batch
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.6 (12/10/14)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchActivityEntryTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('batchActivityEntry', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');

			// Foreign Keys
			$table->integer('batch_id')			->unsigned()->index();
			$table->integer('acted_by')			->unsigned()->index();
			$table->integer('comments_id')		->unsigned()->index()->nullable();

			// Attributes
			$table->dateTime('date');
			$table->tinyInteger('operation')	->unsigned();
			$table->integer('labor_time')		->unsigned();
			$table->smallInteger('qty_complete')->unsigned();
			$table->smallInteger('qty_rejected')->unsigned()->nullable();

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 		->unsigned()->index()->nullable();
			$table->integer('updated_by') 		->unsigned()->index()->nullable();
			$table->integer('deleted_by') 		->unsigned()->index()->nullable();
			$table->integer('current_id') 		->unsigned()->index()->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('batchActivityEntry');
	}
}
