<?php

/**
 * Creates the Foreign Key Constraints for the Procedure-Product Table
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Bridge
 * @author 		Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @copyright  	2014 Epimed International
 * @version 	1.3 (12/11/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Add Foreign Key(s) to Procedure-Product Migration *//
class AddFkToProcedureProductTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('procedure_product', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('procedure_id', 'fk_procedure_product_procedure')	->references('id')->on('procedure')	->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('product_id', 	'fk_procedure_product_product')		->references('id')->on('product')	->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_procedure_product_created_by')	->references('id')->on('user')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_procedure_product_updated_by')	->references('id')->on('user')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_procedure_product_deleted_by')	->references('id')->on('user')		->onUpdate('cascade')->onDelete('restrict');

			$table 	->foreign(		array('current_procedure_id', 	'current_product_id'), 'fk_procedure_product_current_id')
					->references(	array('procedure_id', 			'product_id'))
					->on('procedure_product')->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('procedure_product', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_procedure_product_procedure');
			$table->dropForeign('fk_procedure_product_product');

			$table->dropForeign('fk_procedure_product_created_by');
			$table->dropForeign('fk_procedure_product_updated_by');
			$table->dropForeign('fk_procedure_product_deleted_by');
			$table->dropForeign('fk_procedure_product_current_id');
		});
	}
}
