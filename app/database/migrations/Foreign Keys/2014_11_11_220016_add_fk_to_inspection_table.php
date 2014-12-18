<?php

/**
 * Creates the Foreign Key Constraints for the Inspection Table
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Other
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.5 (12/11/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Add Foreign Key(s) to Inspection Migration *//
class AddFkToInspectionTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inspection', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('approval_id', 	'fk_inspection_approval') 	->references('id')->on('approval') 		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('comments_id', 	'fk_inspection_comments')	->references('id')->on('commentBlock')	->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_inspection_created_by')	->references('id')->on('user')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_inspection_updated_by')	->references('id')->on('user')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_inspection_deleted_by')	->references('id')->on('user')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('current_id', 	'fk_inspection_current_id')	->references('id')->on('inspection')	->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inspection', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_inspection_approval');
			$table->dropForeign('fk_inspection_comments');

			$table->dropForeign('fk_inspection_created_by');
			$table->dropForeign('fk_inspection_updated_by');
			$table->dropForeign('fk_inspection_deleted_by');
			$table->dropForeign('fk_inspection_current_id');
		});
	}
}