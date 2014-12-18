<?php

/**
 * Creates the Foreign Key Constraints for the Product Build Form Table
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Product
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.5 (12/11/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Add Foreign Key(s) to Product Build Form Migration *//
class AddFkToProductBuildFormTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('productBuildForm', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('revision_id', 	'fk_productBuildForm_revision')		->references('id')->on('revision') 			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('bom_id', 		'fk_productBuildForm_bom')			->references('id')->on('billOfMaterials') 	->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('approval_id', 	'fk_productBuildForm_approval')		->references('id')->on('approval') 			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('pulled_by', 	'fk_productBuildForm_puller')		->references('id')->on('employee') 			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('comments_id', 	'fk_productBuildForm_comments')		->references('id')->on('commentBlock') 		->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_productBuildForm_created_by')	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_productBuildForm_updated_by')	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_productBuildForm_deleted_by')	->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('current_id', 	'fk_productBuildForm_current_id')	->references('id')->on('productBuildForm')	->onUpdate('cascade')->onDelete('restrict');
		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('productBuildForm', function(Blueprint $table)
		{
			$table->dropForeign('fk_productBuildForm_revision');
			$table->dropForeign('fk_productBuildForm_bom');
			$table->dropForeign('fk_productBuildForm_approval');
			$table->dropForeign('fk_productBuildForm_puller');
			$table->dropForeign('fk_productBuildForm_comments');

			$table->dropForeign('fk_productBuildForm_created_by');
			$table->dropForeign('fk_productBuildForm_updated_by');
			$table->dropForeign('fk_productBuildForm_deleted_by');
			$table->dropForeign('fk_productBuildForm_current_id');
		});
	}
}
