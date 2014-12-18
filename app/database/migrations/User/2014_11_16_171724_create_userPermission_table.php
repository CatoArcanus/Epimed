<?php

/**
 * Creates the initial User Permission Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	User
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.3 (12/10/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create User Permission Table Migration *//
class CreateUserPermissionTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userPermission', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');
			
			// Attributes
			$table->string('name', 32);

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->unsigned()->index()->nullable();
			$table->integer('updated_by')->unsigned()->index()->nullable();
			$table->integer('deleted_by')->unsigned()->index()->nullable();
			$table->integer('current_id')->unsigned()->index()->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('userPermission');
	}
}
