<?php

/**
 * Creates the initial Procedure-Product Table Schema
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

//* Create Procedure-Product Table Migration *//
class CreateProcedureProductTable extends Migration
{
	/**
	 * Run the migration.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('procedure_product', function(Blueprint $table)
		{
			// Primary Key
			$table->integer('procedure_id') 		->unsigned();
			$table->integer('product_id')			->unsigned();

			$table->primary(array('procedure_id', 'product_id'), 'pk_procedure_product');

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 			->unsigned()->index()	->nullable();
			$table->integer('updated_by') 			->unsigned()->index()	->nullable();
			$table->integer('deleted_by') 			->unsigned()->index()	->nullable();
			$table->integer('current_procedure_id') ->unsigned()			->nullable();
			$table->integer('current_product_id') 	->unsigned()			->nullable();

			$table->index(array('current_procedure_id', 'current_product_id'), 'idx_procedure_product_current');
		});
	}

	/**
	 * Reverse the migration.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('procedure_product');
	}
}