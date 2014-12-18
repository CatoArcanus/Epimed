<?php

/**
 * Seeds the Batch and all related tables
 * as well as the bridges between them.
 * This only seeds to throw a "release" exception 
 *  
 * @category 	Database
 * @package 	Seeding
 * @subpackage 	Batch
 * @author 		Monte Nichols (Generator Author) <monte.nichols.ii@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.0 (12/10/2014)
 */

//* Batch Category Seeder *//
class BatchSeederForRelease extends Seeder
{
	/**
	 * Called when Seeding the Database
	 *
	 * @return void
	 */
	public function run()
	{
		//** Create Product **//
		$product = Product::where('alphanumeric', 'A-NE-035')->firstOrFail();
		
		//** Create Batch **//		
		$batch = Batch::create(array(
			'lot' => 12187000,
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
		
		//** Create a Product Heat Seal**//
		ProductHeatSeal::create(array(
			'product_id' => $product->id,
			'target' => 45,
			'alert' => 34,
			'action' => 23
		));
		
		//** Create some Burst Entries**//
		BatchBurstEntry::create(array(
			'batch_id' => $batch->id,
			'time' => "8:30am",
			'pressure' => 60,
			'location' => 'RS'
		));
		
		BatchBurstEntry::create(array(
			'batch_id' => $batch->id,
			'time' => "8:30am",
			'pressure' => 66,
			'location' => 'RS'
		));	
		
		BatchBurstEntry::create(array(
			'batch_id' => $batch->id,
			'time' => '11:05am',
			'pressure' => 80,
			'location' => 'LS'
		));
		
		BatchBurstEntry::create(array(
			'batch_id' => $batch->id,
			'time' => "12:50am",
			'pressure' => 60,
			'location' => 'LS'
		));
		
		BatchBurstEntry::create(array(
			'batch_id' => $batch->id,
			'time' => "12:50am",
			'pressure' => 60,
			'location' => 'LS'
		));
		
		//Link some seals
		DB::table('batch_sealer')->insert(array(
			array(
				'batch_id' => $batch->id, 
				'sealed_by' => $employee_caesar->id, 
				'date' => $employee_pompey->created_at
			)
		));
			
		//FIXME: batchinspection has 2 relations to Batch, 
		//** Create BatchInspection **//
		$batchInspection = BatchInspection::create(array(
			'code_letter' => 'H',
			'size' => 20,
			'aql_min' => 0,
			'aql_max' => 2
		));
		
		$batch->inspection_id = $batchInspection->id;
		$batch->save();
		
		//** Create Inspections **//
		$inspection_heatSeal = Inspection::create(array(
			'pass' => 1,
			'rejected' => 0
		));
		
		$inspection_contents = Inspection::create(array(
			'pass' => 1,
			'rejected' => 0
		));
		
		$inspection_particulate = Inspection::create(array(
			'pass' => 1,
			'rejected' => 0
		));
		
		$inspection_burstStrength = Inspection::create(array(
			'pass' => 1,
			'rejected' => 0
		));
		
		//approve them
		$inspection_heatSeal->approve($employee_crassus->id, $employee_crassus->created_at);	
		$inspection_contents->approve($employee_crassus->id, $employee_crassus->created_at);	
		$inspection_particulate->approve($employee_crassus->id, $employee_crassus->created_at);	
		$inspection_burstStrength->approve($employee_crassus->id, $employee_crassus->created_at);
		
		//add the inspections to the batchInspection 		
		$batchInspection->heat_seal_id = $inspection_heatSeal->id;	
		$batchInspection->contents_id = $inspection_contents->id;	
		$batchInspection->particulate_id = $inspection_particulate->id;	
		$batchInspection->burst_strength_id = $inspection_burstStrength->id;	
		$batchInspection->save();
		
		$sterilization = Sterilization::create(array(
			'sterilized_by' => $employee_pompey->id,
			'date' => $employee_pompey->created_at,
			'work_order' => 'EP154108',
			'quantity' => 1700,
		));
		
		$batch->sterilization_id = $sterilization->id;
		$batch->save();		
		
		$sterilization->approve($employee_caesar->id, $employee_caesar->created_at);
		
		//FIXME: Batch needs an overall approver
		//FIXME: Comments Broken
		$commentBlock = CommentBlock::create(array(
			
		));

		$batch->comments_id = $commentBlock->id;
		$batch->save();

		$comment = Comment::create(array(
			'block_id' => $commentBlock->id,
			'commented_by' => $employee_caesar->id,
			'date' => $employee_caesar->created_at,
			'text' => 'Veni. Vidi. Vici.'
		));				
	}
}