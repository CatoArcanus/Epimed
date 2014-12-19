<?php

/**
 * Creates the initial Batch Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Batch
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.7 (12/19/14)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Batch Table Migration *//
class CreateBatchTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('batch', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');
			
			// Foreign Keys
			$table->integer('revision_id')		->unsigned()->index();
			$table->integer('product_id')		->unsigned()->index();
			$table->integer('carton_id')		->unsigned()->index()->nullable();
			$table->integer('pouch_id')			->unsigned()->index()->nullable();
			$table->integer('inspection_id')	->unsigned()->index()->nullable();
			$table->integer('sterilization_id')	->unsigned()->index()->nullable();
			$table->integer('approval_id')		->unsigned()->index()->nullable();
			$table->integer('comments_id')		->unsigned()->index()->nullable();

			// Attributes
			$table->integer('lot') 				->unsigned()->index();

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
		Schema::drop('batch');
	}
}
