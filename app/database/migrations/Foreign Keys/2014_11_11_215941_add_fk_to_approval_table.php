<?php
/**
 * Creates the Foreign Key Constraints for the Approval Table
 *
 * @category 	Database
 * @package 	Migrations
 * @subpackage 	Other
 * @author 		Michael Evans 	(Original Author) 	<khstennispro@gmail.com>
 * @author 		Tyler Reed 		(Revisor) 			<tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.4 (12/11/2014)
 */

//* Namespaces *//
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//* Add Foreign Key(s) to Approval Migration *//
class AddFkToApprovalTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('approval', function(Blueprint $table)
		{
			// Foreign Keys
			$table->foreign('approved_by', 'fk_approval_approved_by')->references('id')->on('employee')->onUpdate('cascade')->onDelete('restrict');

			$table->foreign('created_by', 	'fk_approval_created_by')->references('id')->on('user')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('updated_by', 	'fk_approval_updated_by')->references('id')->on('user')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('deleted_by', 	'fk_approval_deleted_by')->references('id')->on('user')		->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('current_id', 	'fk_approval_current_id')->references('id')->on('approval')	->onUpdate('cascade')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('approval', function(Blueprint $table)
		{
			// Drop Foreign Keys
			$table->dropForeign('fk_approval_approver');

			$table->dropForeign('fk_approval_created_by');
			$table->dropForeign('fk_approval_updated_by');
			$table->dropForeign('fk_approval_deleted_by');
			$table->dropForeign('fk_approval_current_id');
		});
	}
}
