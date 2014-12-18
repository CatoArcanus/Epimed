<?php

/**
 * Creates the Foreign Key Constraints for the Comment Table
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Other
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.4 (12/11/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Add Foreign Key(s) to Comment Migration *//
class AddFkToCommentTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comment', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('commented_by', 'fk_comment_commenter') ->references('id')->on('employee') 		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('block_id', 	'fk_comment_block') 	->references('id')->on('commentBlock') 	->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_comment_created_by')->references('id')->on('user')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_comment_updated_by')->references('id')->on('user')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_comment_deleted_by')->references('id')->on('user')			->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('current_id', 	'fk_comment_current_id')->references('id')->on('comment')		->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comment', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_comment_commenter');
			$table->dropForeign('fk_comment_block');

			$table->dropForeign('fk_comment_created_by');
			$table->dropForeign('fk_comment_updated_by');
			$table->dropForeign('fk_comment_deleted_by');
			$table->dropForeign('fk_comment_current_id');
		});
	}
}
