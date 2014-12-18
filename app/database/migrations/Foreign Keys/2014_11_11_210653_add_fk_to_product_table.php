<?php

/**
 * Creates the Foreign Key Constraints for the Product Table
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Product
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.4 (12/11/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Add Foreign Key(s) to Product *//
class AddFkToProductTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('revision_id', 	'fk_product_revision') 	->references('id')->on('revision') 	->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_product_created_by')->references('id')->on('user')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_product_updated_by')->references('id')->on('user')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_product_deleted_by')->references('id')->on('user')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('current_id', 	'fk_product_current_id')->references('id')->on('product')	->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('product', function(Blueprint $table)
		{
			$table->dropForeign('fk_product_revision');

			$table->dropForeign('fk_product_created_by');
			$table->dropForeign('fk_product_updated_by');
			$table->dropForeign('fk_product_deleted_by');
			$table->dropForeign('fk_product_current_id');
		});
	}
}
