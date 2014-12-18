<?php

/**
 * Creates the Foreign Key Constraints for the Bill of Materials Component Table
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

//* Add Foreign Key(s) to Bill of Materials Component *//
class AddFkToBillOfMaterialsComponentTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('billOfMaterialsComponent', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('bom_id', 		'fk_billOfMaterialsComponent_bom')		->references('id')->on('billOfMaterials') 				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('product_id', 	'fk_billOfMaterialsComponent_product')	->references('id')->on('product') 						->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_billOfMaterialsComponent_created_by') ->references('id')->on('user')						->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_billOfMaterialsComponent_updated_by') ->references('id')->on('user')						->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_billOfMaterialsComponent_deleted_by') ->references('id')->on('user')						->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('current_id', 	'fk_billOfMaterialsComponent_current_id') ->references('id')->on('billOfMaterialsComponent')	->onUpdate('cascade')->onDelete('restrict');
		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('billOfMaterialsComponent', function(Blueprint $table)
		{
			$table->dropForeign('fk_billOfMaterialsComponent_bom');
			$table->dropForeign('fk_billOfMaterialsComponent_product');

			$table->dropForeign('fk_billOfMaterialsComponent_created_by');
			$table->dropForeign('fk_billOfMaterialsComponent_updated_by');
			$table->dropForeign('fk_billOfMaterialsComponent_deleted_by');
			$table->dropForeign('fk_billOfMaterialsComponent_current_id');
		});
	}

}
