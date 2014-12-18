<?php
use Batch\Batch;
/*
class DatabaseSeeder extends Seeder
{
	
	public function run()
	{
		// Disable Foreign Key Checks during the Seeding Process
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');

		// All Filling of all Columns
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('MachineTableSeeder');

		// Renable Foreign Key Checks after the Seeding Process
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}
}
*/

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard ();
		//if (App::environment () === 'development') {

			$this->command->info ('Seeding `users` table...');
			$this->call('UserTableSeeder');
			$this->command->info ('OK');

			DB::statement('SET FOREIGN_KEY_CHECKS = 0');

			$this->command->info('Seeding `Product` and `Bill of Materials` Table...');
			$this->call('ProductSeeder');
			$this->command->info('Seeding Complete.');

			DB::statement('SET FOREIGN_KEY_CHECKS = 1');

			//$this->command->info ('Dropping `batch` tables...');
			//$this->call('BatchFormDropper');
			//$this->command->info ('OK');
			
			//$this->command->info ('Seeding `batch` tables 1 ...');
			//$this->call('BatchSeeder1');
			//$this->command->info ('OK');
			
			//$this->command->info ('Seeding `batch` tables for generate ...');
			//$this->call('BatchSeederForGenerate');
			//$this->command->info ('OK');
			
			//$this->command->info ('Seeding `batch` tables for approve ...');
			//$this->call('BatchSeederForApprove');
			//$this->command->info ('OK');
	
			//$this->command->info ('Seeding `batch` tables for destroy ...');
			//$this->call('BatchSeederForDestroy');
			//$this->command->info ('OK');	

			//$this->command->info ('Seeding `batch` tables for burst ...');
			//$this->call('BatchSeederForBurst');
			//$this->command->info ('OK');	

			//$this->command->info ('Seeding `batch` tables for inspect ...');
			//$this->call('BatchSeederForInspect');
			//$this->command->info ('OK');	

			//$this->command->info ('Seeding `batch` tables for sterlize ...');
			//$this->call('BatchSeederForSterlize');
			//$this->command->info ('OK');	

			//$this->command->info ('Seeding `batch` tables for release ...');
			//$this->call('BatchSeederForRelease');
			//$this->command->info ('OK');	

			//$this->command->info ('Seeding `batch` tables 2 ...');
			//$this->call('BatchSeeder2');
			//$this->command->info ('OK');

		//}
	}

}

class BatchFormDropper extends Seeder {
	public function run () {

		DB::statement('SET FOREIGN_KEY_CHECKS = 0');

		DB::table('approval')							->delete();
		DB::table('batch')								->delete();
		// DB::table('batchActivityEntry')				->delete();
		DB::table('batchBurstEntry')					->delete();
		 // DB::table('batchBurstEntryOptional')		->delete();
		DB::table('batchCartonLabel')					->delete();
		DB::table('batchDestruction')					->delete();
		DB::table('batchGeneration')					->delete();
		DB::table('batchInspection')					->delete();
		DB::table('batchPouchLabel')					->delete();
		DB::table('batch_machineReading')				->delete();
		DB::table('batch_sealer')						->delete();
		DB::table('cartonLabel_generation')				->delete();
		DB::table('comment')							->delete();
		DB::table('inspection')							->delete();
		DB::table('machine')							->delete();
		DB::table('machineReading')						->delete();
		DB::table('machineReadingType')					->delete();
		DB::table('machineSetting')						->delete();
		DB::table('machine_machineReadingType_product')	->delete();
		DB::table('pouchLabel_generation')				->delete();
		// DB::table('procedure')						->delete();
		// DB::table('procedure_product')				->delete();
		DB::table('productHeatSeal')					->delete();
		// DB::table('revision')						->delete();
		DB::table('sterilization')						->delete();
				
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}
		
}
