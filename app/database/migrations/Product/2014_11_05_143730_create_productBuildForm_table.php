<?php

/**
 * Creates the initial Product Build Form Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Product
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version  	1.6 (12/11/14)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Product Build Form Table Migration *//
class CreateProductBuildFormTable extends Migration
{
	/**
	 * Run the migration.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productBuildForm', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');
			
			// Foreign Keys
			$table->integer('revision_id')		->unsigned()->index()	->nullable();
			$table->integer('bom_id')			->unsigned()->index()	->nullable();
			$table->integer('approval_id')		->unsigned()->index()	->nullable();
			$table->integer('pulled_by')		->unsigned()->index()	->nullable();
			$table->integer('comments_id')		->unsigned()->index()	->nullable();

			// Attributes
			$table->smallInteger('quantity') 	->unsigned();
			$table->dateTime('pulled_date')								->nullable();

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 		->unsigned()->index()	->nullable();
			$table->integer('updated_by') 		->unsigned()->index()	->nullable();
			$table->integer('deleted_by') 		->unsigned()->index()	->nullable();
			$table->integer('current_id') 		->unsigned()->index()	->nullable();
		});
	}

	/**
	 * Reverse the migration.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('productBuildForm');
	}
}