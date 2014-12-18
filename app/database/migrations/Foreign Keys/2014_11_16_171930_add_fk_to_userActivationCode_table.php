<?php

/**
 * Creates the Foreign Key Constraints for the User Activation Code Table
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	User
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright  	2014 Epimed International
 * @version 	1.3 (12/11/14)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Add Foreign Key(s) to User Activaiton Code Migration *//
class AddFkToUserActivationCodeTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('userActivationCode', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('user_id', 		'fk_userActivationCode_user') 		->references('id')->on('user')				->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('userActivationCode', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_userActivationCode_user');
		});
	}
}
