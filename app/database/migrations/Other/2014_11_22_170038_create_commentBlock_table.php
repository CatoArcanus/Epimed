<?php

/**
 * Creates the initial Comment Block Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Other
 * @author 		Tyler Reed 	(Original Author) 	<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.2 (12/10/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Comment Block Table Migration *//
class CreateCommentBlockTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('commentBlock', function(Blueprint $table)
		{
			// Primary Key			
			$table->increments('id');

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
		Schema::drop('commentBlock');
	}
}