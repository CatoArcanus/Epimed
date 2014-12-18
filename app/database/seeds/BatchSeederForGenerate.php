<?php

/**
 * Seeds the Batch and all related tables
 * as well as the bridges between them.
 * This only seeds to throw a "generate" exception 
 *
 * @category 	Database
 * @package 	Seeding
 * @subpackage 	Destroy
 * @author 		Monte Nichols (Generator Author) <monte.nichols.ii@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.0 (12/10/2014)
 */

//* Destroy Category Seeder *//
class BatchSeederForGenerate extends Seeder
{
	/**
	 * Called when Seeding the Database
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');

		//** Create Product **//
		$product = Product::where('alphanumeric', '502-XR1-8.5')->firstOrFail();
		
		//** Create Batch **//		
		$batch = Batch::create(array(
			'lot' => 12189674,
			'product_id' => $product->id
		));		
	}
}