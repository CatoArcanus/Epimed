<?php

/**
 * Creates the initial Product-Product Family Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Product
 * @author 		Tyler Reed 		(Original Author) 	<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.1 (12/10/14)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Product-ProductFamily Table Migration *//
class CreateProductProductFamilyTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_productFamily', function(Blueprint $table)
		{
			// Primary Key
			$table->integer('product_id') 			->unsigned();
			$table->integer('family_id') 			->unsigned();
			
			$table->primary(array('product_id', 'family_id'), 'pk_product_productFamily');

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 			->unsigned()->index()	->nullable();
			$table->integer('updated_by') 			->unsigned()->index()	->nullable();
			$table->integer('deleted_by') 			->unsigned()->index()	->nullable();
			$table->integer('current_product_id') 	->unsigned()			->nullable();
			$table->integer('current_family_id') 	->unsigned()			->nullable();

			$table->index(array('current_product_id', 'current_family_id'), 'idx_product_productFamily_current');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_productFamily');
	}

}
