<?php

/**
 * Creates the initial Batch Burst Entry Table Schema
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

class CreateBatchBurstEntryTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('batchBurstEntry', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');

			// Foreign Keys
			$table->integer('batch_id')		->unsigned()->index();

			// Attributes
			$table->time('time');
			$table->tinyInteger('pressure')	->unsigned();
			$table->string('location', 12);

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 	->unsigned()->index();
			$table->integer('updated_by') 	->unsigned()->index()->nullable();
			$table->integer('deleted_by') 	->unsigned()->index()->nullable();
			$table->integer('current_id') 	->unsigned()->index()->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('batchBurstEntry');
	}
}
