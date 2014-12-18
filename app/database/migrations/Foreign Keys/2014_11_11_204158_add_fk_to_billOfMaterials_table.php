<?php

/**
 * Creates the Foreign Key Constraints for the Bill of Materials Table
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

//* Add Foreign Key(s) to Bill of Materials Migration *//
class AddFkToBillOfMaterialsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('billOfMaterials', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('product_id', 	'fk_billOfMaterials_product') 	->references('id')->on('product') 			->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_billOfMaterials_created_by')->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_billOfMaterials_updated_by')->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_billOfMaterials_deleted_by')->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('current_id', 	'fk_billOfMaterials_current_id')->references('id')->on('billOfMaterials')	->onUpdate('cascade')->onDelete('restrict');
		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('billOfMaterials', function(Blueprint $table)
		{
			$table->dropForeign('fk_billOfMaterials_product');

			$table->dropForeign('fk_billOfMaterials_created_by');
			$table->dropForeign('fk_billOfMaterials_updated_by');
			$table->dropForeign('fk_billOfMaterials_deleted_by');
			$table->dropForeign('fk_billOfMaterials_current_id');
		});
	}
}
