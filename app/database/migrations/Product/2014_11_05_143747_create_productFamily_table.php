<?php

/**
 * Creates the initial Product Group Table Schema
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

//* Create Product Group Table Migration *//
class CreateProductFamilyTable extends Migration
{
	/**
	 * Run the migration.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productFamily', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');
			
			// Attributes
			$table->string('name', 24);

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') ->unsigned()->index()->nullable();
			$table->integer('updated_by') ->unsigned()->index()->nullable();
			$table->integer('deleted_by') ->unsigned()->index()->nullable();
			$table->integer('current_id') ->unsigned()->index()->nullable();
		});
	}

	/**
	 * Reverse the migration.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('productFamily');
	}
}