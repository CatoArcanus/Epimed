<?php

/**
 * Creates the initial Procedure Table schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Other
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.4 (12/10/14)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create Procedure Table Migration *//
class CreateProcedureTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('procedure', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');
			
			// Attributes
			$table->string('alphanumeric', 7)			->index();
			$table->string('name', 48);

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->unsigned() 	->index()->nullable();
			$table->integer('updated_by')->unsigned() 	->index()->nullable();
			$table->integer('deleted_by')->unsigned() 	->index()->nullable();
			$table->integer('current_id')->unsigned() 	->index()->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('procedure');
	}
}