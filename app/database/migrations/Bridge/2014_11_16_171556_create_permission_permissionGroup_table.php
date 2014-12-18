<?php

/**
 * Creates the initial Permission-Permission Group Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Bridge
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.4 (12/10/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Permission-PermissionGroup Table Migration *//
class CreatePermissionPermissionGroupTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permission_permissionGroup', function(Blueprint $table)
		{
			// Primary Key
			$table->integer('permission_id')			->unsigned();
			$table->integer('group_id') 				->unsigned();
			
			$table->primary(array('permission_id', 'group_id'), 'pk_permission_permissionGroup');

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 				->unsigned()->index()	->nullable();
			$table->integer('updated_by') 				->unsigned()->index()	->nullable();
			$table->integer('deleted_by') 				->unsigned()->index()	->nullable();
			$table->integer('current_permission_id') 	->unsigned()			->nullable();
			$table->integer('current_group_id') 		->unsigned()			->nullable();

			$table->index(array('current_permission_id', 'current_group_id'), 'idx_permission_permissionGroup_current');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('permission_permissionGroup');
	}
}
