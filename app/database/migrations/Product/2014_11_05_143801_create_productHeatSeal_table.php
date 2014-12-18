<?php

/**
 * Creates the initial Product Heat Seal Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Product
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.6 (12/11/14)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Product Heat Seal Table Migration *//
class CreateProductHeatSealTable extends Migration
{
	/**
	 * Run the migration.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productHeatSeal', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');

			// Foreign Key(s)
			$table->integer('product_id')	->unsigned()->index();

			// Attributes
			$table->integer('target')		->unsigned();
			$table->integer('alert')		->unsigned();
			$table->integer('action')		->unsigned();

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 	->unsigned()->index()->nullable();
			$table->integer('updated_by') 	->unsigned()->index()->nullable();
			$table->integer('deleted_by') 	->unsigned()->index()->nullable();
			$table->integer('current_id') 	->unsigned()->index()->nullable();
		});
	}

	/**
	 * Reverse the migration.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('productHeatSeal');
	}
}