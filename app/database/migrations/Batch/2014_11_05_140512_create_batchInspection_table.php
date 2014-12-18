<?php

/**
 * Creates the initial Batch Inspection Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Batch
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.5 (12/10/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Batch Inspection Table Migration *//
class CreateBatchInspectionTable extends Migration
{
	/**
	 * Run the migration.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('batchInspection', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');
			
			// Foreign Keys
			$table->integer('heat_seal_id')		->unsigned()->index()->nullable();
			$table->integer('contents_id')		->unsigned()->index()->nullable();
			$table->integer('particulate_id')	->unsigned()->index()->nullable();
			$table->integer('burst_strength_id')->unsigned()->index()->nullable();

			// Attributes
			$table->string('code_letter', 1);			
			$table->smallInteger('size')		->unsigned();
			$table->tinyInteger('aql_min')		->unsigned();
			$table->tinyInteger('aql_max')		->unsigned();

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
	 * Reverse the migration.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('batchInspection');
	}
}