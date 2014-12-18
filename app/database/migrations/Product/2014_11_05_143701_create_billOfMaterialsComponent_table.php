<?php

/**
 * Creates the initial Bill of Materials Component Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Product
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.4 (12/11/14)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Bill of Materials Component Table Migration *//
class CreateBillOfMaterialsComponentTable extends Migration
{
	/**
	 * Run the migrations
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('billOfMaterialsComponent', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');
			
			// Foreign Keys
			$table->integer('bom_id')		->unsigned()->index();
			$table->integer('product_id')	->unsigned()->index();
			
			// Attributes
			$table->tinyInteger('index') 	->unsigned();
			$table->float('quantity')		->unsigned();

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
		Schema::drop('billOfMaterialsComponent');
	}
}