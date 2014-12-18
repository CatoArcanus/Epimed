<?php

/**
 * Creates the Foreign Key Constraints for the Product-Product Family Table
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Product
 * @author 		Tyler Reed 	(Original Author) 	<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.3 (12/11/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToProductProductFamilyTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product_productFamily', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('product_id', 	'fk_product_productFamily_product')		->references('id')->on('product')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('family_id', 	'fk_product_productFamily_family')		->references('id')->on('productFamily')	->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_product_productFamily_created_by')	->references('id')->on('user')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_product_productFamily_updated_by')	->references('id')->on('user')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_product_productFamily_deleted_by')	->references('id')->on('user')			->onUpdate('cascade')->onDelete('restrict');

			$table 	->foreign(		array('current_product_id', 	'current_family_id'), 'fk_product_productFamily_current_id')
					->references(	array('product_id', 			'family_id'))
					->on('product_productFamily')->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('product_productFamily', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_product_productFamily_product');
			$table->dropForeign('fk_product_productFamily_family');

			$table->dropForeign('fk_product_productFamily_created_by');
			$table->dropForeign('fk_product_productFamily_updated_by');
			$table->dropForeign('fk_product_productFamily_deleted_by');
			$table->dropForeign('fk_product_productFamily_current_id');
		});
	}
}
