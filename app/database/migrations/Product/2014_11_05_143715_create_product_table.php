<?php

/**
 * Creates the initial Product Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Product
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.6 (12/19/14)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Product Table Migration *//
class CreateProductTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');
			
			// Foreign Keys
			$table->integer('revision_id')		->unsigned()->index();

			// Attributes
			$table->string('alphanumeric', 16)	->index();
			$table->string('name', 48);
			$table->string('description', 64);

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 		->unsigned()->index()->nullable();
			$table->integer('updated_by') 		->unsigned()->index()->nullable();
			$table->integer('deleted_by') 		->unsigned()->index()->nullable();
			$table->integer('current_id') 		->unsigned()->index()->nullable();
		});
	}

	/**
	 * Reverse the migration.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product');
	}
}