<?php

/**
 * Creates the initial Batch-Sealer Table Schema
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

//* Create Batch-Sealer Table Migration *//
class CreateBatchSealerTable extends Migration
{
	/**
	 * Run the migration.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('batch_sealer', function(Blueprint $table)
		{
			// Primary Key
			$table->integer('batch_id')	->unsigned();
			$table->integer('sealed_by')->unsigned();

			$table->primary(array('batch_id', 'sealed_by'), 'pk_batch_sealer');

			// Attributes
			$table->dateTime('date');

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 				->unsigned()->index()	->nullable();
			$table->integer('updated_by') 				->unsigned()->index()	->nullable();
			$table->integer('deleted_by') 				->unsigned()->index()	->nullable();
			$table->integer('current_batch_id') 		->unsigned()			->nullable();
			$table->integer('current_sealer_id') 		->unsigned()			->nullable();

			$table->index(array('current_batch_id', 'current_sealer_id'), 'idx_batch_sealer_current');
		});
	}

	/**
	 * Reverse the migration.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('batch_sealer');
	}
}