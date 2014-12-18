<?php

/**
 * Seeds the Batch and all related tables
 * as well as the bridges between them.
 * This only seeds to throw a "burst" exception 
 *  
 * @category 	Database
 * @package 	Seeding
 * @subpackage 	Batch
 * @author 		Monte Nichols (Generator Author) <monte.nichols.ii@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.0 (12/10/2014)
 */

//* Batch Category Seeder *//
class BatchSeederForBurst extends Seeder
{
	/**
	 * Called when Seeding the Database
	 *
	 * @return void
	 */
	public function run()
	{
		//** Create Product **//
		$product = Product::where('alphanumeric', '525-57-B')->firstOrFail();
		
		//** Create Batch **//		
		$batch = Batch::create(array(
			'lot' => 12186500,
			'product_id' => $product->id
		));
						
		// Get an employee for generatons
		$caesar = User::where('username', 'caesar')->firstOrFail();
		$employee_caesar = Employee::where('account_id', $caesar->id)->firstOrFail();
		
		//** Create BatchPouchLabel **//	
		$batchPouchLabel = BatchPouchLabel::create(array(
			
		));
		
		// Save the BatchPouchLabel
		$batch->pouch_id = $batchPouchLabel->id;
		$batch->save();
		
		//** That employee is the generator of this Pouch **//	
		$batchGenerationforPouch = BatchGeneration::create(array(
			'generated_by' => $employee_caesar->id,
			'date' => $employee_caesar->created_at,
			'amount' => 1704
		));
				
		//Link it all together
		DB::table('pouchLabel_generation')->insert(array(
			array(
				'pouch_id' => $batchPouchLabel->id, 
				'generation_id' => $batchGenerationforPouch->id
			)
		));
		
		//** Create BatchCartonLabel **//	
		$batchCartonLabel = BatchCartonLabel::create(array(
			
		));
		
		//Save the BatchCartonLabel
		$batch->carton_id = $batchCartonLabel->id;
		$batch->save();
				
		//** That employee is the generator of this Carton **//	
		$batchGenerationforCarton = BatchGeneration::create(array(
			'generated_by' => $employee_caesar->id,
			'date' => $employee_caesar->created_at,
			'amount' => 172
		));
				
		//Link it all together
		DB::table('cartonLabel_generation')->insert(array(
			array(
				'carton_id' => $batchCartonLabel->id, 
				'generation_id' => $batchGenerationforCarton->id
			)
		));
		
		// Get an employee for approvals
		$crassus = User::where('username', 'crassus')->firstOrFail();
		$employee_crassus = Employee::where('account_id', $crassus->id)->firstOrFail();
		
		$batchGenerationforPouch->used = 1701;
		$batchGenerationforCarton->used = 171;
		$batchGenerationforPouch->save();
		$batchGenerationforCarton->save();
		
		//Aprove all the things!
		$batchGenerationforPouch->approve($employee_crassus->id, $employee_crassus->created_at);
		$batchGenerationforCarton->approve($employee_crassus->id, $employee_crassus->created_at);
		
		// Get an employee for destructions
		$pompey = User::where('username', 'pompey')->firstOrFail();
		$employee_pompey = Employee::where('account_id', $pompey->id)->firstOrFail();
		
		//** Create Batch Destructions **//
		$pompey_destruction_for_pouch = BatchDestruction::create(array(
			'destroyed_by' => $employee_pompey->id,
			'date' => $employee_pompey->created_at,
			'amount' => 3
		));
		
		$pompey_destruction_for_carton = BatchDestruction::create(array(
			'destroyed_by' => $employee_pompey->id,
			'date' => $employee_pompey->created_at,
			'amount' => 1
		));
		
		// Link them together
		$batchPouchLabel->destruction_id = $pompey_destruction_for_pouch->id;
		$batchPouchLabel->save();
		$batchCartonLabel->destruction_id = $pompey_destruction_for_carton->id;
		$batchCartonLabel->save();		
	}
}