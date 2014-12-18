<?php

/**
 * Creates the Foreign Key Constraints for the User_User Permission Group Table
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	User
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright  	2014 Epimed International
 * @version 	1.3 (12/11/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Add Foreign Key(s) to User-UserPermissionGroup Migration *//
class AddFkToUserUserPermissionGroupTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_userPermissionGroup', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('user_id', 		'fk_user_userPermissionGroup_user')			->references('id')->on('user')					->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('group_id', 	'fk_user_userPermissionGroup_group')		->references('id')->on('userPermissionGroup')	->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_user_userPermissionGroup_created_by')	->references('id')->on('user')					->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_user_userPermissionGroup_updated_by')	->references('id')->on('user')					->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_user_userPermissionGroup_deleted_by')	->references('id')->on('user')					->onUpdate('cascade')->onDelete('restrict');

			$table 	->foreign(		array('current_user_id', 	'current_group_id'), 'fk_user_userPermissionGroup_current_id')
					->references(	array('user_id', 			'group_id'))
					->on('user_userPermissionGroup')->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_userPermissionGroup', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_user_userPermissionGroup_user');
			$table->dropForeign('fk_user_userPermissionGroup_group');

			$table->dropForeign('fk_user_userPermissionGroup_created_by');
			$table->dropForeign('fk_user_userPermissionGroup_updated_by');
			$table->dropForeign('fk_user_userPermissionGroup_deleted_by');
			$table->dropForeign('fk_user_userPermissionGroup_current_id');
		});
	}
}
