<?php

/**
 * Creates the initial PouchLabel-Generation Table Schema
 *
 * @category   Database
 * @package    Migrations
 * @subpackage Bridge
 * @author     Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 	   Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.5 (12/10/14)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Create PouchLabel-Generation Table Migration *//
class CreatePouchLabelGenerationTable extends Migration
{
	/**
	 * Run the migration.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pouchLabel_generation', function(Blueprint $table)
		{
			// Primary Key
			$table->integer('pouch_id')		->unsigned();
			$table->integer('generation_id')->unsigned();

			$table->primary(array('pouch_id', 'generation_id'), 'pk_pouchLabel_generation');

			// Timestamps and Signatures
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by') 				->unsigned()->index()	->nullable();
			$table->integer('updated_by') 				->unsigned()->index()	->nullable();
			$table->integer('deleted_by') 				->unsigned()->index()	->nullable();
			$table->integer('current_pouch_id') 		->unsigned()			->nullable();
			$table->integer('current_generation_id') 	->unsigned()			->nullable();

			$table->index(array('current_pouch_id', 'current_generation_id'), 'idx_pouchLabel_generation_current');
		});
	}

	/**
	 * Reverse the migration.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pouchLabel_generation');
	}
}