<?php

/**
 * Creates the initial User_User Permission Group Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Bridge
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.3 (12/10/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create User_UserPermissionGroup Table Migration *//
class CreateUserUserPermissionGroupTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_userPermissionGroup', function(Blueprint $table)
		{
			// Primary Key
			$table->integer('user_id') 			->unsigned();
			$table->integer('group_id') 		->unsigned();
			
			$table->primary(array('user_id', 'group_id'), 'pk_user_userPermissionGroup');

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 		->unsigned()->index()	->nullable();
			$table->integer('updated_by') 		->unsigned()->index()	->nullable();
			$table->integer('deleted_by') 		->unsigned()->index()	->nullable();
			$table->integer('current_user_id') 	->unsigned()			->nullable();
			$table->integer('current_group_id') ->unsigned()			->nullable();

			$table->index(array('current_user_id', 'current_group_id'), 'idx_user_userPermissionGroup_current');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_userPermissionGroup');
	}
}
