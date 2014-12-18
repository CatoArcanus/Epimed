<?php

/**
 * Creates the initial CartonLabel-Generation Table Schema
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Bridge
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright  	2014 Epimed International
 * @version 	1.5 (12/4/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create CartonLabel_Generation Table Migration *//
class CreateCartonLabelGenerationTable extends Migration
{
	/**
	 * Run the migration.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cartonLabel_generation', function(Blueprint $table)
		{
			// Primary Key
			$table->integer('carton_id')		->unsigned();
			$table->integer('generation_id')	->unsigned();

			$table->primary(array('carton_id', 'generation_id'), 'pk_cartonLabel_generation');

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 				->unsigned()->index()	->nullable();
			$table->integer('updated_by') 				->unsigned()->index()	->nullable();
			$table->integer('deleted_by') 				->unsigned()->index()	->nullable();
			$table->integer('current_carton_id') 		->unsigned()			->nullable();
			$table->integer('current_generation_id') 	->unsigned()			->nullable();

			$table->index(array('current_carton_id', 'current_generation_id'), 'idx_cartonLabel_generation_current');
		});
	}

	/**
	 * Reverse the migration.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cartonLabel_generation');
	}
}