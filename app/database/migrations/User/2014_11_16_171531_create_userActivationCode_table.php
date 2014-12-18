<?php

/**
 * Creates the initial User Activation Code Table Schema
 *
 * Note: This Table does not contain Signatures because all
 * 		 content within this table is too insignificant for
 * 		 providing a modification history.
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

//* Create User Activation Code Table Migration *//
class CreateUserActivationCodeTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userActivationCode', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');

			// Foreign Key(s)
			$table->integer('user_id')->unsigned();
			
			// Attributes
			$table->string('code', 60);

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('userActivationCode');
	}
}