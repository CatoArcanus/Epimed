<?php

/**
 * Creates the Foreign Key Constraints for the Permission-Permission Group Table
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	User
 * @author 		Michael Evans 	(Original Author) 	<khstennispro01@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright  	2014 Epimed International
 * @version 	1.3 (12/11/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Add Foreign Key(s) to Permission-PermissionGroup Migration *//
class AddFkToPermissionPermissionGroupTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('permission_permissionGroup', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('permission_id', 	'fk_permission_permissionGroup_permission')	->references('id')->on('userPermission')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('group_id', 		'fk_permission_permissionGroup_group')		->references('id')->on('userPermissionGroup')	->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 		'fk_permission_permissionGroup_created_by')	->references('id')->on('user')					->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 		'fk_permission_permissionGroup_updated_by')	->references('id')->on('user')					->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 		'fk_permission_permissionGroup_deleted_by')	->references('id')->on('user')					->onUpdate('cascade')->onDelete('restrict');

			$table 	->foreign(		array('current_permission_id', 	'current_group_id'), 'fk_permission_permissionGroup_current_id')
					->references(	array('permission_id', 			'group_id'))
					->on('permission_permissionGroup')->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('permission_permissionGroup', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_permission_permissionGroup_permission');
			$table->dropForeign('fk_permission_permissionGroup_group');

			$table->dropForeign('fk_permission_permissionGroup_created_by');
			$table->dropForeign('fk_permission_permissionGroup_updated_by');
			$table->dropForeign('fk_permission_permissionGroup_deleted_by');
			$table->dropForeign('fk_permission_permissionGroup_current_id');
		});
	}
}
