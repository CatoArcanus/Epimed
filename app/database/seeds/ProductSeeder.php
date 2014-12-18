<?php

/**
 * Seeds the Product and Bill of Materials.
 * 
 * Note: This file was automatically generated
 * 
 * @category 	Database
 * @package 	Seeding
 * @subpackage 	Product
 * @author 		Tyler Reed (Generator Author) <tylernathanreed@gmail.com>
 * @copyright 	2014 Epimed International
 * @version 	1.0 (12/10/2014)
 */

//* Product Category Seeder *//
class ProductSeeder extends Seeder
{
	/**
	 * Called when Seeding the Database
	 *
	 * @return void
	 */
	public function run()
	{
		// Unguard Eloquent for Mass Assignment
		Eloquent::unguard();

		// Clear the Tables and Related Table that are to be Seeded
		DB::table('product')					->delete();
		DB::table('productFamily')				->delete();
		DB::table('product_productFamily')		->delete();
		DB::table('billOfMaterials')			->delete();
		DB::table('billOfMaterialsComponent')	->delete();
		DB::table('productBuildForm')			->delete();
		DB::table('batch_bomComponent_pbf')		->delete();

		// Seed Products
		$revision_id = Revision::create(array('number' => 1, 'active' => true))->getKey();

		$products = array();

		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-BR-538-24', 		'name' => 'Apron Radiation Back Relief', 		'description' => '24" x 38"')); 						$products['515-BR-538-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FBVS-LF', 		'name' => 'FLEX BACK VEST/SKIRT - LARGE', 		'description' => 'FEMALE')); 							$products['515-FBVS-LF'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-98UFB-S', 		'name' => 'ULTRA FLEX-BLACK-PLANO W/', 			'description' => 'SIDE SHIELDS')); 						$products['525-98UFB-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '505-621US', 			'name' => 'Collar Radiation Thyroid', 			'description' => 'Ultra Small 24"')); 					$products['505-621US'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '502-XR2-6.5', 		'name' => 'Gloves Radiation Protection', 		'description' => 'XR2 size 6.5')); 						$products['502-XR2-6.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-VR1152', 		'name' => 'Anatomical Charts', 					'description' => 'Spinal Column')); 					$products['600-VR1152'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-200L/LO', 		'name' => 'Gloves Radiation 200 Series', 		'description' => 'Leather Left')); 						$products['500-200L/LO'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A31/1L', 		'name' => 'SKELETAL MODEL - FOOT, LEFT', 		'description' => 'FLEXIBLY MOUNTED')); 					$products['600-A31/1L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1911-506', 			'name' => 'SP Extension Set 6"', 				'description' => '')); 									$products['1911-506'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '502-XR1-8.5', 		'name' => 'Gloves Radiation Protection', 		'description' => 'XR1 size 8.5')); 						$products['502-XR1-8.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FBVS-LM', 		'name' => 'FLEX BACK VEST/SKIRT-LARGE', 		'description' => 'MALE')); 								$products['515-FBVS-LM'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '125-2045T', 			'name' => 'SP Needle Epidural Tuohy', 			'description' => '20g TW x 4.5"')); 					$products['125-2045T'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-W19001', 		'name' => 'MINI-SKELETON', 						'description' => '')); 									$products['600-W19001'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '505-621UL', 			'name' => 'Collar Radiation Thyroid', 			'description' => 'Ultra Large 26.5"')); 				$products['505-621UL'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '180-1353', 			'name' => '*Disc*T Catheter Epidural REC', 		'description' => 'Glass')); 							$products['180-1353'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-98UFR', 			'name' => 'ULTRA FLEX-PLANO', 					'description' => '***RED****')); 						$products['525-98UFR'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '100-1416', 			'name' => 'SP Needle Epidural RK', 				'description' => '16g TW x 3.5"')); 					$products['100-1416'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '100-1417', 			'name' => 'SP Needle Epidural RK', 				'description' => '17g XTW x 3.5"')); 					$products['100-1417'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '100-1415', 			'name' => 'SP Needle Epidural RK', 				'description' => '15g TW x 3.5"')); 					$products['100-1415'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'T60-156-00', 		'name' => 'Catheter Pandin 20g x 24"', 		'description' => 'Safety-Kath')); 						$products['T60-156-00'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-66-P', 			'name' => 'Eyewear Radiation Plano', 			'description' => 'Clip-On')); 							$products['525-66-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-095', 			'name' => 'Introducer Flexible Cannula', 		'description' => 'Molded 14g x 5"')); 					$products['B-MP-095'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-094', 			'name' => 'Adapter Small Bore Female LL', 		'description' => 'Gamma Resistant')); 					$products['B-MP-094'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A10/1', 			'name' => 'Anatomical Model Full Skeleton', 	'description' => 'Adult Standard')); 					$products['600-A10/1'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-093', 			'name' => 'Needle Molded RF Cannula', 			'description' => '20g TW x 4"')); 						$products['B-MP-093'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-092', 			'name' => 'Needle Molded RF Cannula', 			'description' => '20g TW x 6"')); 						$products['B-MP-092'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-091', 			'name' => 'Needle Blank Molded 25g RW', 		'description' => 'x 3.5"')); 							$products['B-MP-091'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-090', 			'name' => 'Stylet Molded .015 24.5"', 			'description' => '')); 									$products['B-MP-090'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-099', 			'name' => 'Needle Molded RF Cannula', 			'description' => '22g TW x 4"')); 						$products['B-MP-099'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-098', 			'name' => 'Needle Blank Molded 20g RW', 		'description' => 'x 11.5"')); 							$products['B-MP-098'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1505J', 				'name' => 'Connector Stingray Epidural', 		'description' => 'Catheter 19g')); 						$products['1505J'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1505I', 				'name' => 'IFU Stingray Connector', 			'description' => '')); 									$products['1505I'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '130-2245', 			'name' => 'SP Needle Spinal Quincke', 			'description' => '22g TW x 4.5"')); 					$products['130-2245'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-200L/RO', 		'name' => 'Gloves Radiation 200 Series', 		'description' => 'Leather Right')); 					$products['500-200L/RO'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '700-S-020', 			'name' => 'Vuecath Fiberscope Accessories', 	'description' => 'Wolf Light Cord Adapter')); 			$products['700-S-020'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '700-S-021', 			'name' => 'Vuecath Fiberscope Accessories', 	'description' => 'Storz Light Cord Adapter')); 			$products['700-S-021'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '260-2010', 			'name' => 'SP R-F 20g TW 10cm 3mm Tip', 		'description' => 'Blunt Straight')); 					$products['260-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VA-534-24', 		'name' => 'Apron Radiation Velcro', 			'description' => 'Adjustable 24" x 34"')); 			$products['515-VA-534-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-073', 			'name' => 'Needle Introducer Sharp', 			'description' => '18g XTW X 3.7"')); 					$products['A-NE-073'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-074', 			'name' => 'Needle Introducer Sharp', 			'description' => '18g XTW X 2.5"')); 					$products['A-NE-074'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A76/5', 			'name' => 'Anatomical Models Spine', 			'description' => 'Lumbar Spinal Column')); 				$products['600-A76/5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-076', 			'name' => 'Needle Epidural Tuohy', 				'description' => '19g TW x 4"')); 						$products['A-NE-076'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '260-2015', 			'name' => 'SP R-F 20g TW 15cm 3mm Tip', 		'description' => 'Blunt Straight')); 					$products['260-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '501-XR496500', 		'name' => 'Gloves Radiation Attenuation', 		'description' => 'Lead Free 6.5')); 					$products['501-XR496500'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '130-2235', 			'name' => '***DISC*** Ndl Spinal Quincke', 		'description' => '22g TW x 3.5"')); 					$products['130-2235'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '268-2215', 			'name' => 'SP R-F 22g TW 15cm 15mm Tip', 		'description' => 'Blunt Coudé')); 						$products['268-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '276-2010', 			'name' => 'SP R-F 20g TW 10cm 5mm Tip', 		'description' => 'Sharp Coudé')); 						$products['276-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '268-2210', 			'name' => 'SP R-F 22g TW 10cm 15mm Tip', 		'description' => 'Blunt Coudé')); 						$products['268-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '276-2015', 			'name' => 'SP R-F 20g TW 15cm 5mm Tip', 		'description' => 'Sharp Coudé')); 						$products['276-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A76/8', 			'name' => 'Anatomical Models Spine', 			'description' => 'Three Section Lumbar')); 				$products['600-A76/8'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A76/9', 			'name' => 'Anatomical Models Spine', 			'description' => 'Two Section Lumbar')); 				$products['600-A76/9'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-57-P', 			'name' => 'Eyewear Radiation Plano', 			'description' => 'Metal Oval')); 						$products['525-57-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-57-S', 			'name' => 'Eyewear Radiation Single', 			'description' => 'Metal Oval')); 						$products['525-57-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-102/6.5', 		'name' => '*DISC* use 500-102-65', 				'description' => 'Gloves Radiation Resistant 6.5')); 	$products['500-102/6.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-NST-532-24', 	'name' => 'Apron Radiation New Style Tie', 		'description' => '24" x 32"')); 						$products['515-NST-532-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'F22RAC0073', 		'name' => 'Safety Cath 20g x 24"', 			'description' => '')); 									$products['F22RAC0073'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-57-B', 			'name' => 'Eyewear Radiation Bifocal', 			'description' => 'Metal Oval')); 						$products['525-57-B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'XP41110', 			'name' => 'Catheter SmartInfuser Pain', 		'description' => 'Pump')); 								$products['XP41110'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-094', 			'name' => 'Needle Introcan Safety', 			'description' => '20g x 1.75" BNS')); 					$products['A-NE-094'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-S-538-24Q/T', 	'name' => 'Apron Radiation Coat Standard', 		'description' => 'Thyroid/Quick Release24"x 38"')); 	$products['515-S-538-24Q/T'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-097', 			'name' => 'Needle Epidural Tuohy', 				'description' => '20g x 38mm Huber Point')); 			$products['A-NE-097'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-NST-532-18', 	'name' => 'Apron Radiation New Style Tie', 		'description' => '18" x 32"')); 						$products['515-NST-532-18'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-VR1175', 		'name' => 'ANATOMICAL CHART - THE FOOT', 		'description' => '')); 									$products['600-VR1175'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1505G', 				'name' => 'Spirol 19g CE w/Thread Assist', 		'description' => 'Wound in Sleeve')); 					$products['1505G'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB9.5', 			'name' => 'Blocker Radiation Lead .5mm', 		'description' => '8.5" x 17"')); 						$products['550-SB9.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-W47500', 		'name' => 'Anatomical Models Lumbar Set', 		'description' => '4 Stage Degenerative w/Base')); 		$products['600-W47500'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '267-2010', 			'name' => 'SP R-F 20g TW 10cm 10mm Tip', 		'description' => 'Blunt Coudé')); 						$products['267-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-040', 			'name' => 'Needle Introducer 20g x 1.25"', 	'description' => '')); 									$products['A-NE-040'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-041', 			'name' => 'Needle Spinal Chiba 22g TW', 		'description' => 'x 2.5" Mrkd')); 						$products['A-NE-041'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-044', 			'name' => 'Needle Spinal Chiba 22g TW', 		'description' => 'x 3.5" Mrkd')); 						$products['A-NE-044'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-046', 			'name' => 'Needle Infiltration 25g x 1.5"', 	'description' => '')); 									$products['A-NE-046'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '267-2015', 			'name' => 'SP R-F 20g TW 15cm 10mm Tip', 		'description' => 'Blunt Coudé')); 						$products['267-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-049', 			'name' => 'Needle Spinal Quincke', 				'description' => '25g TW x 3.5"')); 					$products['A-NE-049'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '516-TB-F', 			'name' => 'Apron Radiation Protection', 		'description' => 'Free with 1" Tie')); 				$products['516-TB-F'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '196-4020', 			'name' => '*DISC* T Epidural Crawford 20g', 	'description' => 'Plastic Mini')); 						$products['196-4020'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '196-4022', 			'name' => '*DISC* T Epidural Crawford 22g', 	'description' => 'Plastic Mini')); 						$products['196-4022'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '275-2210', 			'name' => 'SP R-F 22g TW 10cm 3mm Tip', 		'description' => 'Sharp Coudé')); 						$products['275-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '196-4018', 			'name' => '*DISC* T Epidural Crawford 18g', 	'description' => 'Plastic Mini')); 						$products['196-4018'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-SDO-538-24', 	'name' => 'Apron Radiation Surgical Drop', 		'description' => 'Off 24"x 38"')); 					$products['515-SDO-538-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-C25', 			'name' => 'DELUXE BRAIN W/ARTERIES, 10-P', 		'description' => 'ON BASE OF HEAD')); 					$products['600-C25'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '105-1314AB', 		'name' => '*DISC* RX Coudé 14g TW x 4"', 		'description' => 'Advanced Bionics')); 					$products['105-1314AB'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FB-532-20', 		'name' => 'FLEX BACK', 							'description' => '')); 									$products['515-FB-532-20'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-031', 			'name' => 'Needle Epidural Tuohy', 				'description' => '17g TW x 6" Wng Mrkd')); 			$products['A-NE-031'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-033', 			'name' => 'Needle Spinal Chiba 22g TW', 		'description' => 'x 6" Mrkd')); 						$products['A-NE-033'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '122-2080', 			'name' => 'SP Needle Day Bullet Tip Coude', 	'description' => '20g RW x 8"')); 						$products['122-2080'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-034', 			'name' => 'Needle Spinal Chiba 22g TW', 		'description' => 'x 8" Mrkd')); 						$products['A-NE-034'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-035', 			'name' => 'Needle Introducer 18g x 1.25"', 	'description' => '')); 									$products['A-NE-035'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FB-532-24', 		'name' => 'Apron Radiation Flex Back', 			'description' => '24" x 32"')); 						$products['515-FB-532-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-061', 			'name' => 'Needle Epidural Tuohy', 				'description' => '20g TW x 6" Wng Mrkd')); 			$products['A-NE-061'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-PI-011', 			'name' => 'IFU Blunt Access Cannula', 			'description' => '')); 									$products['B-PI-011'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-065', 			'name' => 'Flexible Introducer Cannula', 		'description' => '16g x 2.5"')); 						$products['A-NE-065'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-PI-010', 			'name' => 'IFU Wiley-Spinal', 					'description' => '')); 									$products['B-PI-010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-066', 			'name' => 'Introducer Peelaway 2F', 			'description' => '22g x 1.68"')); 						$products['A-NE-066'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-067', 			'name' => 'Introducer Peelaway 5F', 			'description' => '16g')); 								$products['A-NE-067'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-PI-015', 			'name' => 'IFU Stingray Connector', 			'description' => '')); 									$products['B-PI-015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-PI-014', 			'name' => 'IFU R-F Cannula', 					'description' => '')); 									$products['B-PI-014'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FB-532-18', 		'name' => 'Apron Radiation Flex Back', 			'description' => '18" x 32"')); 						$products['515-FB-532-18'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-PI-012', 			'name' => 'Insert for Sodium Chloride', 		'description' => '')); 									$products['B-PI-012'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '505-RSC-L', 			'name' => 'RADIATIN SAFETY CAP-LARGE', 			'description' => '')); 									$products['505-RSC-L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '122-2060', 			'name' => 'SP Needle Day Bullet Tip Coude', 	'description' => '20g RW x 6"')); 						$products['122-2060'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-PIA06B', 		'name' => 'RF Probe Adapter Intermediate', 		'description' => '6" Baylis')); 						$products['296-PIA06B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '70148607', 			'name' => 'Cath Epid Spirol 20gCE Stylet', 		'description' => 'Wound with Thread Assist Guide')); 	$products['70148607'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '277-2215', 			'name' => 'SP R-F 22g TW 15cm 10mm Tip', 		'description' => 'Sharp Coudé')); 						$products['277-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-052', 			'name' => 'Needle Spinal Quincke', 				'description' => '25g TW x 4.5"')); 					$products['A-NE-052'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-054', 			'name' => 'Needle Introducer 17g TW x 3"', 	'description' => '')); 									$products['A-NE-054'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-055', 			'name' => 'Needle Introducer 17g x 1"', 		'description' => '')); 									$products['A-NE-055'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '277-2210', 			'name' => 'SP R-F 22g TW 10cm 10mm Tip', 		'description' => 'Sharp Coudé')); 						$products['277-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-056', 			'name' => 'Needle Epidural Tuohy', 				'description' => '18g TW x 2.5" Wng Mrkd')); 			$products['A-NE-056'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-057', 			'name' => 'Needle Epidural Tuohy', 				'description' => '18g TW x 4.5" Wng Mrkd')); 			$products['A-NE-057'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-PI-004', 			'name' => 'IFU Catheter 19g & 21g', 			'description' => '')); 									$products['B-PI-004'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '700-S-001', 			'name' => 'Vuecath Fiberscope', 				'description' => '')); 									$products['700-S-001'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-058', 			'name' => 'Needle Epidural Tuohy', 				'description' => '18g TW x 6" Wng Mrkd')); 			$products['A-NE-058'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-PI-003', 			'name' => 'IFU Needle Epidural', 				'description' => '')); 									$products['B-PI-003'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '700-S-002', 			'name' => 'Vuecath Fiberscope', 				'description' => '')); 									$products['700-S-002'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-059', 			'name' => 'Needle Epidural Tuohy', 				'description' => '20g TW x 2.5" Wng Mrkd')); 			$products['A-NE-059'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-PI-008', 			'name' => 'IFU Blunt Nerve Block Needle', 		'description' => '')); 									$products['B-PI-008'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-PI-007', 			'name' => 'IFU Flexible Introducer', 			'description' => 'Cannula')); 							$products['B-PI-007'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-816M', 			'name' => 'Apron Radiation VDT Medium', 		'description' => '')); 									$products['515-816M'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-816L', 			'name' => 'Apron Radiation VDT Large', 			'description' => '')); 									$products['515-816L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-BR-534-24', 		'name' => 'Apron Radiation Back Relief', 		'description' => '24" x 34"')); 						$products['515-BR-534-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-816S', 			'name' => 'Apron Radiation VDT Small', 			'description' => '')); 									$products['515-816S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '20014', 				'name' => 'Thread Assist Guide', 				'description' => '')); 									$products['20014'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-PI-032', 			'name' => 'IFU Spirol Block', 					'description' => '')); 									$products['B-PI-032'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '270-2210', 			'name' => 'SP R-F 22g TW 10cm 3mm Tip', 		'description' => 'Sharp Straight')); 					$products['270-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-004', 			'name' => 'Needle Epidural RK 16gTW x3.5"', 	'description' => 'printed')); 							$products['A-NE-004'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '270-2215', 			'name' => 'SP R-F 22g TW 15cm 3mm Tip', 		'description' => 'Sharp Straight')); 					$products['270-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-007', 			'name' => 'Needle Epidural RK 16gTW x7.0"', 	'description' => 'printed')); 							$products['A-NE-007'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-008', 			'name' => 'Needle Epidural RK 17gXTWx3.5"', 	'description' => 'printed')); 							$products['A-NE-008'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-009', 			'name' => 'Needle Epidural Tuohy', 				'description' => '16g TW x 3.5" Wng Mrkd')); 			$products['A-NE-009'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'XANE-004', 			'name' => 'Needle Epidural RK 16gTW x3.5"', 	'description' => 'w/Wing Bulk Non Sterile')); 			$products['XANE-004'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-S-534-20', 		'name' => 'STANDARD APRON', 					'description' => '')); 									$products['515-S-534-20'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-53-UFO', 		'name' => 'ULTRA FIT OVER', 					'description' => '')); 									$products['525-53-UFO'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-S-534-24', 		'name' => 'Apron Radiation Coat Standard', 		'description' => '24" x 34"')); 						$products['515-S-534-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-811M', 			'name' => 'MOBILE SWING ARM APRON RACK', 		'description' => '')); 									$products['515-811M'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '102173', 			'name' => 'Universal Block Tray', 				'description' => 'Vassar Brothers')); 					$products['102173'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-PI-020', 			'name' => 'IFU RX-2', 							'description' => '')); 									$products['B-PI-020'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-010', 			'name' => 'Wire Spring .0045 19g', 				'description' => '')); 									$products['B-WI-010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-005', 			'name' => 'Wire .018 x 9.5"', 					'description' => '')); 									$products['B-WI-005'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '165-2036', 			'name' => 'SP Catheter Epidural Spirol', 		'description' => '20g Open End')); 						$products['165-2036'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '516-BF-S', 			'name' => 'Apron Radiation Protection', 		'description' => 'Standard Velcro')); 					$products['516-BF-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-001', 			'name' => 'Wire Stylet .010 40"', 				'description' => '')); 									$products['B-WI-001'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-E-532-18', 		'name' => 'Apron Radiation Coat Economy', 		'description' => '18" x 32"')); 						$products['515-E-532-18'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-002', 			'name' => 'Wire Stylet .012 40"', 				'description' => '')); 									$products['B-WI-002'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '516-BF-L', 			'name' => 'Apron Radiation Protection', 		'description' => 'Lite Velcro')); 						$products['516-BF-L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-009', 			'name' => 'Wire Spring .003 20g', 				'description' => '')); 									$products['B-WI-009'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-008', 			'name' => 'Wire Heart Ring .045', 				'description' => '')); 									$products['B-WI-008'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '516-BF-F', 			'name' => 'Apron Radiation Protection', 		'description' => 'Free Velcro')); 						$products['516-BF-F'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A85/1', 			'name' => 'MINI KNEE JOINT', 					'description' => '')); 									$products['600-A85/1'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-020', 			'name' => 'Needle Epidural Crawford', 			'description' => '22g RW x 3.5" Wng Mrkd')); 			$products['A-NE-020'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-022', 			'name' => 'Needle Infiltration 21g x 1.5"', 	'description' => '')); 									$products['A-NE-022'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-023', 			'name' => 'Needle Infiltration 22g x 1.5"', 	'description' => '')); 									$products['A-NE-023'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-025', 			'name' => 'Needle Skin Wheal 25g x 1"', 		'description' => '')); 									$products['A-NE-025'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-026', 			'name' => 'Needle Skin Wheal 27g x 1.25"', 	'description' => '')); 									$products['A-NE-026'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-303', 			'name' => 'Cannula Stellate 22g TW x 2.75', 	'description' => '')); 									$products['B-NE-303'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-021', 			'name' => 'Wire Stylet .014 26"', 				'description' => '')); 									$products['B-WI-021'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-302', 			'name' => 'Torcar Stylet 16g x 1.216"', 		'description' => '')); 									$products['B-NE-302'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-020', 			'name' => 'Wire SS .009 x 9"', 				'description' => '')); 									$products['B-WI-020'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-028', 			'name' => 'Needle Infiltration 18g x 1.5"', 	'description' => '')); 									$products['A-NE-028'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-305', 			'name' => 'Cannula Spinal Pencil Point', 		'description' => '27g TW x 5.9"')); 					$products['B-NE-305'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-304', 			'name' => 'Cannula Spinal Pencil Point', 		'description' => '25g RW x 7.9"')); 					$products['B-NE-304'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-015', 			'name' => 'Ribbon Flat Rolled .003"x.010"', 	'description' => '')); 									$products['B-WI-015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-018', 			'name' => 'Wire Stylet .010 15"', 				'description' => '')); 									$products['B-WI-018'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-017', 			'name' => 'Wire Stylet .014 9"', 				'description' => '')); 									$products['B-WI-017'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-012', 			'name' => 'Wire Spring .006', 					'description' => '')); 									$products['B-WI-012'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-011', 			'name' => 'Wire Spring .005', 					'description' => '')); 									$products['B-WI-011'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-013', 			'name' => 'Wire Flat Rolled .002" x .008"', 	'description' => '')); 									$products['B-WI-013'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-019', 			'name' => 'Wire SS Twisted .0075"', 			'description' => '')); 									$products['B-WI-019'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-010', 			'name' => 'Needle Filter 5 Micron', 			'description' => '18g x 1.5"')); 						$products['A-NE-010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-012', 			'name' => 'Needle Epidural Tuohy', 				'description' => '18g TW x 3.5" Wng Mrkd')); 			$products['A-NE-012'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-PI-048', 			'name' => 'IFU Versa-Kath', 					'description' => '')); 									$products['B-PI-048'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-030', 			'name' => 'Wire Stylet .014 40"', 				'description' => '')); 									$products['B-WI-030'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-014', 			'name' => 'Needle Epidural Tuohy', 				'description' => '20g TW x 3.5" Wng Mrkd')); 			$products['A-NE-014'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-032', 			'name' => 'Support Cord Coil Reel', 			'description' => '1x2x0.007;LHL 0.109"')); 			$products['B-WI-032'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-016', 			'name' => 'Needle Epidural Tuohy', 				'description' => '22g RW x 3.5" Wng Mrkd')); 			$products['A-NE-016'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-031', 			'name' => 'Wire Twisted .00935"', 				'description' => '')); 									$products['B-WI-031'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'P5182EPMRWOL', 		'name' => 'LEATHER DISPLAY CASE', 				'description' => '')); 									$products['P5182EPMRWOL'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-018', 			'name' => 'Needle Epidural Crawford', 			'description' => '18g TW x 3.5" Wng Mrkd')); 			$products['A-NE-018'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FBVS-SF', 		'name' => 'FLEX BACK-VEST/SKIRT-SMALL-', 		'description' => 'FEMALE')); 							$products['515-FBVS-SF'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-019', 			'name' => 'Needle Epidural Crawford', 			'description' => '20g TW x 3.5" Wng Mrkd')); 			$products['A-NE-019'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-027', 			'name' => 'Wire Speaker', 						'description' => 'Spool = 1000 feet')); 				$products['B-WI-027'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '516-TB-S', 			'name' => 'Apron Radiation Protection', 		'description' => 'Standard with 1" Tie')); 			$products['516-TB-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-026', 			'name' => 'Wire Stylet .014 15"', 				'description' => '')); 									$products['B-WI-026'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '275-2215', 			'name' => 'SP R-F 22g TW 15cm 3mm Tip', 		'description' => 'Sharp Coudé')); 						$products['275-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-028', 			'name' => 'Support Cord Coil Reel', 			'description' => '1x2x0.006;0.012 LHL 0.109"')); 		$products['B-WI-028'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-023', 			'name' => 'Wire Stylet PTFE Coated .008"', 	'description' => '')); 									$products['B-WI-023'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '516-TB-L', 			'name' => 'Apron Radiation Protection', 		'description' => 'Lite with 1" Tie')); 				$products['516-TB-L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-025', 			'name' => 'Wire Titanium .005"', 				'description' => '')); 									$products['B-WI-025'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-024', 			'name' => 'Wire Stylet .015 40"', 				'description' => '')); 									$products['B-WI-024'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB5.5', 			'name' => 'Blocker Radiation Lead .5mm', 		'description' => '5.5" x 14"')); 						$products['550-SB5.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-346', 			'name' => 'Needle Bella D Coude 25g RW x', 		'description' => '2.5"')); 							$products['A-EP-346'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-345', 			'name' => 'Needle Bella D Coude 22g RW x', 		'description' => '3.5"')); 							$products['A-EP-345'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-344', 			'name' => 'Needle Bella D Coude 22g RW x', 		'description' => '2.5"')); 							$products['A-EP-344'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-342', 			'name' => 'Needle Bella D 25g RW x 2.5"', 		'description' => '')); 									$products['A-EP-342'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-340', 			'name' => 'Needle Bella D 22g RW x 2.5"', 		'description' => '')); 									$products['A-EP-340'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'LT-009', 			'name' => '# 54637 - EPIMED CATHETER', 			'description' => 'BROCHURE')); 							$products['LT-009'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '4867218', 			'name' => 'Catheter Epidural Spirol 19gOE', 	'description' => '')); 									$products['4867218'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-QRVS', 			'name' => 'QUICK RELEASE-VEST/SKIRT', 			'description' => 'CUSTOM')); 							$products['515-QRVS'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-53FO-L', 		'name' => 'WRAP AROUND FIT-OVER- LARGE', 		'description' => '')); 									$products['525-53FO-L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-CH-023', 			'name' => 'Adhesive 3341 Light Cure', 			'description' => '')); 									$products['B-CH-023'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-CH-021', 			'name' => 'Cyclohexanone', 						'description' => '')); 									$products['B-CH-021'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-53FO-M', 		'name' => 'WRAP AROUND FIT-OVER', 				'description' => 'W/SIDE SHIELDS')); 					$products['525-53FO-M'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-CH-029', 			'name' => 'Adhesive UV Curing', 				'description' => 'Cyanoacrylate')); 					$products['B-CH-029'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-336', 			'name' => 'Needle RF Blunt 22g TW', 			'description' => 'x 8.06cm 10mm Active Tip')); 			$products['A-EP-336'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '292-GA06B', 			'name' => 'RF Probe Grounding Pad Adapter', 	'description' => '6" Baylis')); 						$products['292-GA06B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '700-S-500', 			'name' => 'Vuecath Fiberscope Accessories', 	'description' => 'Light Cord')); 						$products['700-S-500'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '189-2340', 			'name' => 'T Wiley Spinal', 					'description' => 'Single Set Tray')); 					$products['189-2340'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-BX-003', 			'name' => 'Box Presentation', 					'description' => '')); 									$products['B-BX-003'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-CH-010', 			'name' => 'Titanium Dioxide TiO2', 				'description' => '')); 									$products['B-CH-010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '105-1314SJM', 		'name' => 'SP Needle RX Coudé 14g TW x 4"', 	'description' => 'SJM')); 								$products['105-1314SJM'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-BX-001', 			'name' => 'Box Presentation Mini Tray', 		'description' => '')); 									$products['B-BX-001'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '126-1835C', 			'name' => '*Disc* SP Needle Epidural', 			'description' => 'Crawford 18g TW x 3.5"')); 			$products['126-1835C'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '175-1924', 			'name' => 'SP Catheter Spirol Block', 			'description' => '19g Open End 24"')); 				$products['175-1924'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-348', 			'name' => 'Needle Bella D Coude 22g RW x', 		'description' => '4.5"')); 							$products['A-EP-348'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-347', 			'name' => 'Needle Bella D Coude 25g RW x', 		'description' => '3.5"')); 							$products['A-EP-347'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '174-2024', 			'name' => 'SP Catheter Spirol Block', 			'description' => '20g Closed End w/Stylet 24"')); 		$products['174-2024'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '182-2340', 			'name' => '*DISC* T Cath Epid Brevi-XL', 		'description' => 'Plastic Mid Size')); 					$products['182-2340'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-PGA06B', 		'name' => 'RF Probe Adapter Ground 6"', 		'description' => 'Baylis Bi-Polar')); 					$products['296-PGA06B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-NE-100', 			'name' => 'Needle Epidural Crawford', 			'description' => '20g x 38mm')); 						$products['A-NE-100'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-70-P', 			'name' => 'Eyewear Radiation Ultra Light', 		'description' => 'Plano Astro Flex')); 					$products['525-70-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '286-2205', 			'name' => 'SP R-F 22g TW 5cm 5mm Tip', 			'description' => 'S Type Coudé')); 						$products['286-2205'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-70-S', 			'name' => 'Eyewear Radiation Ultra Light', 		'description' => 'Single Astro Flex')); 				$products['525-70-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '286-2210', 			'name' => 'SP R-F 22g TW 10cm 5mm Tip', 		'description' => 'S Type Coudé')); 						$products['286-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-CH-002', 			'name' => 'MEK Methyl Ethyl Ketone', 			'description' => '')); 									$products['B-CH-002'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-70-B', 			'name' => 'Eyewear Radiation Ultra Light', 		'description' => 'Bifocal Astro Flex')); 				$products['525-70-B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-CH-009', 			'name' => 'Magnesium Oxide 50', 				'description' => '')); 									$products['B-CH-009'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-207', 			'name' => 'Receptacle Spring Socket', 			'description' => '')); 									$products['B-MX-207'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-318', 			'name' => 'Needle Stealth Coude', 				'description' => '20g HW x 2.75"')); 					$products['A-EP-318'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-208', 			'name' => 'Connector Hypertronics 4 Pin', 		'description' => 'Male Diros')); 						$products['B-MX-208'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-317', 			'name' => 'Needle Stealth', 					'description' => '20g HW x 2.75"')); 					$products['A-EP-317'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-316', 			'name' => 'Needle Wiley Spinal Flexible', 		'description' => 'Finished Product')); 					$products['A-EP-316'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-CH-008', 			'name' => 'Fluorel', 							'description' => '')); 									$products['B-CH-008'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-E-532-24', 		'name' => 'Apron Radiation Coat Economy', 		'description' => '24" x 32"')); 						$products['515-E-532-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-315', 			'name' => 'Needle RF B Bevel', 					'description' => '18g TW x 15cm 10mm Active Tip')); 	$products['A-EP-315'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-314', 			'name' => 'Needle RF B Bevel', 					'description' => '18g TW x 5cm 5mm Active Tip')); 		$products['A-EP-314'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-DPA06X', 		'name' => 'RF Probe Adapter Stryker', 			'description' => 'Universal Disposable')); 				$products['296-DPA06X'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-W51524', 		'name' => 'ADVANTAGE SEMI-AUTOMATIC', 			'description' => 'BP MONITOR')); 						$products['600-W51524'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-335', 			'name' => 'Peelaway Introducer 17g RW', 		'description' => 'Tuohy x 5"')); 						$products['A-EP-335'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-334', 			'name' => 'Peelaway Introducer 18g RW', 		'description' => 'Tuohy x 3.5"')); 					$products['A-EP-334'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-DPA06N', 		'name' => 'RF Probe Adapter Neurotherm', 		'description' => 'Disposable')); 						$products['296-DPA06N'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '286-2215', 			'name' => 'SP R-F 22g TW 15cm 5mm Tip', 		'description' => 'S Type Coudé')); 						$products['286-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-DPA06R', 		'name' => 'RF Probe Adapter Radionics', 		'description' => 'Disposable')); 						$products['296-DPA06R'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-BELT', 			'name' => 'BACK RELIEF BELT-MEDIUM', 			'description' => '')); 									$products['520-BELT'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '190-2540', 			'name' => 'T Catheter Epidural Tun-L-XL', 		'description' => 'Plastic Full Size')); 				$products['190-2540'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FW-CUSTOM', 		'name' => 'FLEX-WRAP - CUSTOM', 				'description' => '')); 									$products['515-FW-CUSTOM'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-DPA06D', 		'name' => 'RF Probe Adapter Diros', 			'description' => 'Disposable')); 						$products['296-DPA06D'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-DPA06C', 		'name' => 'RF Probe Adapter Cosman', 			'description' => 'Disposable')); 						$products['296-DPA06C'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VO-PT', 			'name' => 'Apron Radiation Combo', 				'description' => 'Vest Petite')); 						$products['515-VO-PT'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '156-2112', 			'name' => 'SP Catheter Epid Versa-Kath 12', 	'description' => '')); 									$products['156-2112'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-302', 			'name' => 'Needle Bullet Tip Coudé', 			'description' => '20g RW x 6"')); 						$products['A-EP-302'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '503-60', 			'name' => 'Gloves Radiation RR-2 6.0', 			'description' => '')); 									$products['503-60'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-300', 			'name' => 'Needle Wiley Spinal Flexible', 		'description' => '')); 									$products['A-EP-300'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1911-491', 			'name' => '***DISC*** SP Cathinloc', 			'description' => '')); 									$products['1911-491'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '4869432', 			'name' => '***DISC ***Thread Assist Guide', 	'description' => 'Use 4895462')); 						$products['4869432'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'LT-047', 			'name' => 'Patient Ed Brochure', 				'description' => '')); 									$products['LT-047'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FBVS-M', 		'name' => 'FLEX-BACK, VEST/SKIRT-MEDIUM', 		'description' => 'UNISEX')); 							$products['515-FBVS-M'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FBVS-L', 		'name' => 'FLEX-BACK, VEST/SKIRT-LARGE', 		'description' => 'UNISEX')); 							$products['515-FBVS-L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '262-2015', 			'name' => 'SP R-F 20g TW 15cm 10mm Tip', 		'description' => 'Blunt Straight')); 					$products['262-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FW-534-24', 		'name' => 'Apron Radiation Fast Wrap', 			'description' => '24" x 34"')); 						$products['515-FW-534-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1911-498', 			'name' => 'SP Filter Epidural Flat', 			'description' => '')); 									$products['1911-498'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-127', 			'name' => 'Stylet Molded .010 12.5" Min', 		'description' => 'Green')); 							$products['B-MP-127'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-126', 			'name' => 'Stylet Molded .010 34" Min', 		'description' => 'Green')); 							$products['B-MP-126'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-125', 			'name' => 'Needle Molded RF Cannula', 			'description' => 'B Bevel 20g TW x 5cm')); 				$products['B-MP-125'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-124', 			'name' => 'Needle Molded RF Cannula', 			'description' => 'B Bevel 22g TW x 5cm')); 				$products['B-MP-124'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-123', 			'name' => 'Grounding Pad Connector', 			'description' => 'Housing')); 							$products['B-MP-123'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'LT-049', 			'name' => 'Patient Ed Brochure-Spanish', 		'description' => '')); 									$products['LT-049'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-122', 			'name' => 'Needle Epidural RX Molded', 			'description' => '14g TW x 6"')); 						$products['B-MP-122'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-121', 			'name' => 'Needle Molded RF Cannula', 			'description' => 'B Bevel 20g TW x 15cm')); 			$products['B-MP-121'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-120', 			'name' => 'Needle Molded RF Cannula', 			'description' => 'B Bevel 20g TW x 10cm')); 			$products['B-MP-120'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '503-65', 			'name' => 'Gloves Radiation RR-2 6.5', 			'description' => '')); 									$products['503-65'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '106-1518', 			'name' => 'SP Needle Epidural RX', 				'description' => '18g TW x 4.5"')); 					$products['106-1518'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-129', 			'name' => 'Filter Air Eliminating Wiley', 		'description' => '')); 									$products['B-MP-129'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-128', 			'name' => 'Needle Molded Pencil Point', 		'description' => '27g TW x 5.24"')); 					$products['B-MP-128'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-313', 			'name' => 'Needle RF B Bevel Coude', 			'description' => '18g TW x 15cm 10mm Active Tip')); 	$products['A-EP-313'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '72600301', 			'name' => 'Spirol 20g CE w/ Thread Assist', 	'description' => 'Wound in Tyvek Sleeve')); 			$products['72600301'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-311', 			'name' => 'Stellate', 							'description' => '')); 									$products['A-EP-311'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-310', 			'name' => 'Needle RF B Bevel Coude', 			'description' => '20g TW x 5cm 5mm Active Tip')); 		$products['A-EP-310'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '106-1516', 			'name' => 'SP Needle Epidural RX', 				'description' => '16g TW x 4.5"')); 					$products['106-1516'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-201', 			'name' => 'RF Adapter Bend Relief 0B', 			'description' => '.025 Green')); 						$products['B-MX-201'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '106-1515', 			'name' => 'SP Needle Epidural RX', 				'description' => '15g RW x 4.5"')); 					$products['106-1515'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-202', 			'name' => 'RF Adapter Bend Relief 0B', 			'description' => '.025 Black')); 						$products['B-MX-202'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-203', 			'name' => 'RF Adapter Bend Relief 0B', 			'description' => '.025 Blue')); 						$products['B-MX-203'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-204', 			'name' => 'Connector Lemo 4 Pin Male', 			'description' => 'Cosman')); 							$products['B-MX-204'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-61-P', 			'name' => 'Eyewear Radiation Plano', 			'description' => 'Metal Standard')); 					$products['525-61-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-61-S', 			'name' => 'Eyewear Radiation Single', 			'description' => 'Metal Standard')); 					$products['525-61-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-116', 			'name' => 'Adapter Check Valve', 				'description' => '')); 									$products['B-MP-116'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-115', 			'name' => 'Adapter Parallel Tube', 				'description' => '')); 									$products['B-MP-115'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '262-2010', 			'name' => 'SP R-F 20g TW 10cm 10mm Tip', 		'description' => 'Blunt Straight')); 					$products['262-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '297-10', 			'name' => 'SP R-F Electrode 10cm', 				'description' => 'Stainless Steel')); 					$products['297-10'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-113', 			'name' => 'Needle Molded RF Cannula', 			'description' => 'Chiba 22g TW x 10cm')); 				$products['B-MP-113'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-112', 			'name' => 'Needle Molded RF Cannula', 			'description' => 'Chiba 22g TW x 15cm')); 				$products['B-MP-112'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-111', 			'name' => 'Needle Molded RF Cannula', 			'description' => 'Chiba 20g TW x 10cm')); 				$products['B-MP-111'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-309', 			'name' => 'Needle RF B Bevel Coude', 			'description' => '22g TW x 5cm 5mm Active Tip')); 		$products['A-EP-309'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-308', 			'name' => 'Needle RF B Bevel', 					'description' => '20g TW x 5cm 5mm Active Tip')); 		$products['A-EP-308'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '135-1735', 			'name' => 'FIC With 17g TW x 3.5" Tuohy', 		'description' => '15g Cannula')); 						$products['135-1735'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-307', 			'name' => 'Needle RF B Bevel', 					'description' => '22g TW x 5cm 5mm Active Tip')); 		$products['A-EP-307'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-119', 			'name' => 'Needle Molded RF Cannula', 			'description' => 'B Bevel 22g TW x 15cm')); 			$products['B-MP-119'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-304', 			'name' => 'Needle Stealth Coude', 				'description' => '22g RW x 1.5"')); 					$products['A-EP-304'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-118', 			'name' => 'Needle Molded RF Cannula', 			'description' => 'B Bevel 22g TW x 10cm')); 			$products['B-MP-118'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-61-B', 			'name' => 'Eyewear Radiation Bifocal', 			'description' => 'Metal Standard')); 					$products['525-61-B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-303', 			'name' => 'Needle Stealth', 					'description' => '22g RW x 1.5"')); 					$products['A-EP-303'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-117', 			'name' => 'Adapter Male LL .082 ID', 			'description' => '')); 									$products['B-MP-117'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '181-1520', 			'name' => 'T Catheter Epidural Tun-L-Kath', 	'description' => 'Plastic')); 							$products['181-1520'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '503-80', 			'name' => 'Gloves Radiation RR-2 8.0', 			'description' => '')); 									$products['503-80'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VO-LG', 			'name' => 'Apron Radiation Combo', 				'description' => 'Vest Large')); 						$products['515-VO-LG'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '297-15', 			'name' => 'SP R-F Electrode 15cm', 				'description' => 'Stainless Steel')); 					$products['297-15'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-104', 			'name' => 'Stim Box Alligator Clip', 			'description' => 'Adapter')); 							$products['B-MP-104'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-103', 			'name' => 'Stim Box Leadwire', 					'description' => '')); 									$products['B-MP-103'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-101', 			'name' => 'Stim Box Plastic Enclosure', 		'description' => 'Model H65-9V Custom Machined')); 		$products['B-MP-101'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-100', 			'name' => 'Needle Molded RF Cannula', 			'description' => '22g TW x 6"')); 						$products['B-MP-100'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '282-2210', 			'name' => 'SP R-F 22g TW 10cm 10mm Tip', 		'description' => 'S Type')); 							$products['282-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-109', 			'name' => 'Stim Box alligator Clip', 			'description' => 'Adapter White')); 					$products['B-MP-109'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-108', 			'name' => 'Connector Stringray Top', 			'description' => 'Overmold 21g')); 						$products['B-MP-108'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '282-2215', 			'name' => 'SP R-F 22g TW 15cm 10mm Tip', 		'description' => 'S Type')); 							$products['282-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-107', 			'name' => 'Connector Stringray Bottom', 		'description' => 'Overmold  21g')); 					$products['B-MP-107'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '503-85', 			'name' => 'Gloves Radiation RR-2 8.5', 			'description' => '')); 									$products['503-85'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-106', 			'name' => 'Cap Non Vented Male', 				'description' => '')); 									$products['B-MP-106'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB1.5', 			'name' => 'Blocker Radiation Lead .5mm', 		'description' => '4" x 10"')); 						$products['550-SB1.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '503-70', 			'name' => 'Gloves Radiation RR-2 7.0', 			'description' => '')); 									$products['503-70'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '160-2530', 			'name' => '***DISC***SP Cath Epid PN-Stim', 	'description' => '')); 									$products['160-2530'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VO-MD', 			'name' => 'Apron Radiation Combo', 				'description' => 'Vest Medium')); 						$products['515-VO-MD'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '4867226', 			'name' => 'Catheter Epidural Spirol 19gCE', 	'description' => '')); 									$products['4867226'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VO-LM', 			'name' => 'VEST ONLY - LARGE - MALE', 			'description' => '')); 									$products['515-VO-LM'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '503-75', 			'name' => 'Gloves Radiation RR-2 7.5', 			'description' => '')); 									$products['503-75'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'LT-089', 			'name' => 'SALES FLYER- JOHN ROSCHUK', 			'description' => '')); 									$products['LT-089'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-162', 			'name' => 'Stylet Needle Blunt Sub Assy', 		'description' => '14g')); 								$products['B-MP-162'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-161', 			'name' => 'Stylet Needle Blunt Sub Assy', 		'description' => '18g')); 								$products['B-MP-161'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-160', 			'name' => 'Stylet Needle Blunt Sub Assy', 		'description' => '15g')); 								$products['B-MP-160'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-52-P', 			'name' => 'OVAL METAL - PLANO', 				'description' => '')); 									$products['525-52-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-169', 			'name' => 'Needle Molded Bella D 22g RW x', 	'description' => '4.5"')); 							$products['B-MP-169'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-167', 			'name' => 'Needle Molded Bella D 25g RW x', 	'description' => '3.5"')); 							$products['B-MP-167'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '195-1936', 			'name' => 'SP Spirol Long Epidural Set', 		'description' => '19g CE Stylet 36"')); 				$products['195-1936'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-166', 			'name' => 'Needle Molded Bella D 25g RW x', 	'description' => '2.5"')); 							$products['B-MP-166'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-165', 			'name' => 'Needle Molded Bella D 22g RW x', 	'description' => '3.5"')); 							$products['B-MP-165'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-164', 			'name' => 'Needle Molded Bella D 22g RW x', 	'description' => '2.5"')); 							$products['B-MP-164'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'C-MX-108', 			'name' => 'Dispensing Tip SS 22g', 				'description' => '')); 									$products['C-MX-108'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-MAX30-S', 		'name' => 'ULTRA MAX 30- VISION', 				'description' => 'Rx')); 								$products['525-MAX30-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'LT-072', 			'name' => 'PHYSICAL REHAB GUIDE FOR', 			'description' => 'CERVICAL AND NEURAL FLOSSING')); 		$products['LT-072'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-152', 			'name' => 'Needle Introducer Tuohy 19g x', 		'description' => '5" Peelaway Hub')); 					$products['B-MP-152'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-151', 			'name' => 'Needle Introducer Tuohy 19g', 		'description' => 'x 3.475 Peelaway Hub')); 				$products['B-MP-151'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-97RX-S-SV', 		'name' => 'ULTRALIGHT VIPER-W/SIDESHIELD', 		'description' => '-SINGLE VISION - SILVER')); 			$products['525-97RX-S-SV'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'LT-074', 			'name' => 'DVD Interventional Pain', 			'description' => 'Workshop')); 							$products['LT-074'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A59/9', 			'name' => 'Anatomical Models Spine', 			'description' => 'Stand')); 							$products['600-A59/9'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-159', 			'name' => 'Peelaway Introducer Molded 17g', 	'description' => '')); 									$products['B-MP-159'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-158', 			'name' => 'Peelaway Introducer Molded 18g', 	'description' => '')); 									$products['B-MP-158'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-156', 			'name' => 'Needle Introducer Tuohy 17g', 		'description' => 'x 5" Peelaway Adapter Hub')); 		$products['B-MP-156'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-155', 			'name' => 'Needle Introducer Tuohy 18g', 		'description' => 'x 3.5" Peelaway Adapter Hub')); 		$products['B-MP-155'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-154', 			'name' => 'Stylet Molded Plastic 17g RW', 		'description' => '8.5"')); 							$products['B-MP-154'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-153', 			'name' => 'Stylet Molded Plastic 18g RW', 		'description' => '8.5"')); 							$products['B-MP-153'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A59/2', 			'name' => 'LIFETIME FLEXIBLE SPINE', 			'description' => 'W/FEMUR HEADS')); 					$products['600-A59/2'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '155-1353', 			'name' => 'SP Catheter Epidural REC', 			'description' => '')); 									$products['155-1353'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A59/8', 			'name' => 'MULTI SPINAL COLUMN STAND', 			'description' => '')); 									$products['600-A59/8'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '121-2225', 			'name' => 'SP Needle Bella-D Coude 22g', 		'description' => 'RW x 2.5"')); 						$products['121-2225'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '125-1635T', 			'name' => 'SP Needle Epidural Tuohy', 			'description' => '16g TW x 3.5"')); 					$products['125-1635T'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-74-S', 			'name' => 'Eyewear Radiation Ultra Light', 		'description' => 'Single Euro Shield')); 				$products['525-74-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'P0514', 				'name' => 'Lifetech Conti Stim Catheter', 		'description' => '')); 									$products['P0514'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '156-2136', 			'name' => 'SP Catheter Epid Versa-Kath 36', 	'description' => '')); 									$products['156-2136'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'P0517', 				'name' => 'Connector Stingray Stimulating', 	'description' => '21g 1.5mm 8" Female Lead')); 		$products['P0517'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-CORE-G', 		'name' => 'Genesis Replacement Core', 			'description' => 'Geriatric')); 						$products['600-CORE-G'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-141', 			'name' => 'Wiley Spinal Flexible Cannula', 		'description' => 'Overmold 21g x 7.380"')); 			$products['B-MP-141'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '20241X', 			'name' => 'Catheter Epidural Feth-R-Kath', 		'description' => '19g x 24"')); 						$products['20241X'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-140', 			'name' => 'Ring Finger Snap Luer Lock', 		'description' => 'Black Nylon')); 						$products['B-MP-140'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-CORE-S', 		'name' => 'Genesis Replacement Core', 			'description' => 'Standard')); 							$products['600-CORE-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'LT-069', 			'name' => 'DVD Live Interventional', 			'description' => 'Procedures')); 						$products['LT-069'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '117-2535', 			'name' => 'SP Needle Blunt Coude', 				'description' => '25g RW x 3.5"')); 					$products['117-2535'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-74-P', 			'name' => 'Eyewear Radiation Ultra Light', 		'description' => 'Plano Euro Shield')); 				$products['525-74-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-CORE-O', 		'name' => 'Genesis Replacement Core Obese', 	'description' => '')); 									$products['600-CORE-O'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'C-MX-130', 			'name' => 'Electrode Brass .0157 x .005', 		'description' => '')); 									$products['C-MX-130'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-410', 			'name' => 'Cryo Machine Tube Silicone', 		'description' => '.25" OD x .125" ID')); 				$products['B-TU-410'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-146', 			'name' => '**DISC** Peelaway Introducer', 		'description' => 'Sheath Blank 2F x 5"')); 			$products['B-MP-146'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-411', 			'name' => 'Cryo Machine Tube Silicone', 		'description' => '.438" OD x .313" ID')); 			$products['B-TU-411'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-145', 			'name' => 'Needle Molded Pencil Point', 		'description' => '25g TW x 7.25"')); 					$products['B-MP-145'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-412', 			'name' => 'Cryo Machine Tube Silicone', 		'description' => '.344 OD x .281 ID 200 ft Spool')); 	$products['B-TU-412'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-413', 			'name' => 'Cryo Machine Tube Silicone', 		'description' => '.187 OD x .100 ID 200 ft Spool')); 	$products['B-TU-413'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-414', 			'name' => 'Cryo Machine Tube Nylon .083"', 	'description' => 'OD x .048" ID')); 					$products['B-TU-414'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-142', 			'name' => 'Needle Wiley Spinal Assemble', 		'description' => 'Luer Lock')); 						$products['B-MP-142'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-416', 			'name' => 'Cryo Machine Tube Extrd Heavy', 		'description' => 'Wall PVC.190 ID 100 ft Spool')); 		$products['B-TU-416'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-417', 			'name' => 'Cryo Machine Insert .156" OD x', 	'description' => '.136" ID x .313" Long')); 			$products['B-TU-417'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'C-MX-129', 			'name' => 'Electrode Brass .0118 x .005', 		'description' => '')); 									$products['C-MX-129'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-418', 			'name' => 'Cryo Probe Tube Teflon TC', 			'description' => 'Cover')); 							$products['B-TU-418'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-74-B', 			'name' => 'Eyewear Radiation Ultra Light', 		'description' => 'Bifocal Euro Shield')); 				$products['525-74-B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '121-2235', 			'name' => 'SP Needle Bella-D Coude 22g', 		'description' => 'RW x 3.5"')); 						$products['121-2235'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '156-2124', 			'name' => 'SP Catheter Epid Versa-Kath 24', 	'description' => '')); 									$products['156-2124'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-130', 			'name' => 'Needle Molded RF Cannula', 			'description' => 'B Bevel 18g TW x 10cm')); 			$products['B-MP-130'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-820', 			'name' => 'Apron Radiation Hangers', 			'description' => 'Combo Apron/Glove Holder')); 			$products['520-820'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'LT-052', 			'name' => 'PHYSICAL REHAB GUIDE FOR LOWER', 	'description' => 'LUMBAR NEURAL FLOSSING')); 			$products['LT-052'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '168-2014', 			'name' => 'SP Catheter Epidural Spirol', 		'description' => '20g OE Stylet 14" w/18g Tuohy')); 	$products['168-2014'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-819', 			'name' => 'Apron Radaition Porta-Rak', 			'description' => 'TM w/ Glove Rack 13" x 18"')); 		$products['520-819'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-138', 			'name' => 'Ring Finger Snap Luer Lock', 		'description' => 'Green Nylon')); 						$products['B-MP-138'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-137', 			'name' => 'Connector Nexus Bottom', 			'description' => '')); 									$products['B-MP-137'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-817', 			'name' => 'Apron Radaition Porta-Rak', 			'description' => 'TM 24" x 50"')); 					$products['520-817'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-136', 			'name' => 'Connector Nexus Top', 				'description' => '')); 									$products['B-MP-136'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-818', 			'name' => 'Apron Radaition Porta-Rak', 			'description' => 'TM w/ Glove Rack 24" x 68"')); 		$products['520-818'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-135', 			'name' => 'Needle Molded RF Cannula', 			'description' => 'B Bevel 18g TW x 15cm')); 			$products['B-MP-135'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-815', 			'name' => 'Apron Radiation Rack', 				'description' => 'Mobile 22.5" x 55"')); 				$products['520-815'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-134', 			'name' => 'Needle Molded RF Cannula', 			'description' => 'B Bevel 18g TW x 5cm')); 				$products['B-MP-134'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-816', 			'name' => 'VALET RACK', 						'description' => '')); 									$products['520-816'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-133', 			'name' => 'Wiley Spinal Flexible Cannula', 		'description' => 'Overmold 23g x 5.380"')); 			$products['B-MP-133'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-402', 			'name' => 'Cryo Probe Insert .156" OD x', 		'description' => '.136" ID x .875" Long')); 			$products['B-TU-402'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-813', 			'name' => 'RACK - PEG (8 PEG)', 				'description' => '')); 									$products['520-813'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-132', 			'name' => 'Needle Spinal Needle Assembly', 		'description' => 'Luer Lock')); 						$products['B-MP-132'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-403', 			'name' => 'Cryo Probe Hand Piece Tube', 		'description' => '')); 									$products['B-TU-403'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-814', 			'name' => 'Apron Radiation Rack Mobile', 		'description' => 'w/6-Arm Glove Rack 22.5"x76.75')); 	$products['520-814'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-406', 			'name' => 'Cryo Machine Insert .072" OD x', 	'description' => '.054" ID')); 						$products['B-TU-406'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '105-1314', 			'name' => 'SP Needle RX Coudé 14g TW x 4"', 	'description' => '')); 									$products['105-1314'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-CORE', 			'name' => 'Genesis Replaceable Core', 			'description' => '')); 									$products['600-CORE'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-407', 			'name' => 'Cryo Machine Insert .046" OD x', 	'description' => '.034" ID')); 						$products['B-TU-407'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-408', 			'name' => 'Cryo Machine Insert .028" OD x', 	'description' => '.020" ID')); 						$products['B-TU-408'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-409', 			'name' => 'Cryo Probe Insert .03" OD x', 		'description' => '.024" ID')); 						$products['B-TU-409'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '121-2245', 			'name' => 'SP Needle Bella-D Coude 22g', 		'description' => 'RW x 4.5"')); 						$products['121-2245'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-139', 			'name' => 'Ring Finger Snap Luer Lock', 		'description' => 'Blue Nylon')); 						$products['B-MP-139'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '107-1415', 			'name' => 'SP Needle Epid RX-2 Coudé 15g', 		'description' => 'RW x 3.5" w/Obturator Stylet')); 	$products['107-1415'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '107-1416', 			'name' => 'SP Needle Epid RX-2 Coudé 16g', 		'description' => 'TW x 3.5" w/Obturator Stylet')); 	$products['107-1416'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '107-1418', 			'name' => 'SP Needle Epid RX-2 Coudé 18g', 		'description' => 'TW x 3.5" w/Obturator Stylet')); 	$products['107-1418'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1532', 				'name' => 'Spirol 19gOE w/ Thread Assist', 		'description' => 'Indigo Orb')); 						$products['1532'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '266-2210', 			'name' => 'SP R-F 22g TW 10cm 5mm Tip', 		'description' => 'Blunt Coudé')); 						$products['266-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-LINE', 			'name' => 'Genesis Fill Line & Syringe', 		'description' => '')); 									$products['600-LINE'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '266-2215', 			'name' => 'SP R-F 22g TW 15cm 5mm Tip', 		'description' => 'Blunt Coudé')); 						$products['266-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '118-2045', 			'name' => 'SP Needle Blunt Coude', 				'description' => '20g TW x 4.5"')); 					$products['118-2045'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-BR-BELT', 		'name' => 'Apron Radiation Wrap Around', 		'description' => 'Back Relief')); 						$products['515-BR-BELT'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '180-1838', 			'name' => '*Disc* T Catheter Epidural', 		'description' => 'Caud-A-Kath Glass')); 				$products['180-1838'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-98UFS-S', 		'name' => 'ULTRA FLEX W/SIDE SHIELDS', 			'description' => '***SILVER***')); 						$products['525-98UFS-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-101MIT', 		'name' => 'Gloves Radiation Lead Mittens', 		'description' => 'Leather')); 							$products['500-101MIT'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-E-536-24', 		'name' => 'Apron Radiation Coat Economy', 		'description' => '24" x 36"')); 						$products['515-E-536-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-CH-032', 			'name' => 'Silicone 162 White', 				'description' => 'Noncorrosive')); 						$products['B-CH-032'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-CH-033', 			'name' => 'Solder Lead free .015"', 			'description' => '')); 									$products['B-CH-033'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-CH-030', 			'name' => 'Adhesive UV Curing', 				'description' => 'Cyanoacrylate 4305')); 				$products['B-CH-030'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-CH-031', 			'name' => 'Adhesive Epoxy', 					'description' => 'Silver Filled')); 					$products['B-CH-031'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600S-DURA', 			'name' => 'Genesis Spinal Tubing', 				'description' => 'Standard Wall')); 					$products['600S-DURA'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '121-2525', 			'name' => 'SP Needle Bella-D Coude 25g', 		'description' => 'RW x 2.5"')); 						$products['121-2525'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '117-2230', 			'name' => 'SP Needle Blunt Coude', 				'description' => '22g RW x 3"')); 						$products['117-2230'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '125-2035T', 			'name' => 'SP Needle Epidural Tuohy', 			'description' => '20g TW x 3.5"')); 					$products['125-2035T'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '155-2393', 			'name' => 'SP Catheter Epidural Brevi-Kat', 	'description' => '')); 									$products['155-2393'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '180-2340', 			'name' => '*Disc* T Catheter Epidural', 		'description' => 'Brevi-XL Glass')); 					$products['180-2340'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '100-1515', 			'name' => '***DISC*** SP Needle Epid RK', 		'description' => '15g TW x 4.5"')); 					$products['100-1515'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-102-90', 		'name' => 'Gloves Radiation Attenuating', 		'description' => '9.0')); 								$products['500-102-90'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '100-1516', 			'name' => 'SP Needle Epidural RK', 				'description' => '16g TW x 4.5"')); 					$products['100-1516'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-E-538-24', 		'name' => 'Apron Radiation Coat Economy', 		'description' => '24" x 38"')); 						$products['515-E-538-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '117-2245', 			'name' => 'SP Needle Blunt Coude', 				'description' => '22g RW x 4.5"')); 					$products['117-2245'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '121-2535', 			'name' => 'SP Needle Bella-D Coude 25g', 		'description' => 'RW x 3.5"')); 						$products['121-2535'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FFP60', 			'name' => 'VELCRO COLLAR NECESSARY FOR', 		'description' => 'APRON/MASK ATTACHMENT')); 			$products['515-FFP60'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '281-2005', 			'name' => 'SP R-F 20g TW 5cm 5mm Tip', 			'description' => 'S Type')); 							$products['281-2005'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-67-P', 			'name' => 'Eyewear Radiation Plano', 			'description' => 'Flexing Goggle')); 					$products['525-67-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '165-1936', 			'name' => 'SP Catheter Epidural Spirol', 		'description' => '19g Open End')); 						$products['165-1936'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-67-S', 			'name' => 'Eyewear Radiation Single', 			'description' => 'Flexing Goggle')); 					$products['525-67-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FW-538-24', 		'name' => 'Apron Radiation Fast Wrap', 			'description' => '24" x 38"')); 						$products['515-FW-538-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VS-SM', 			'name' => 'Apron Radiation Combo', 				'description' => 'Vest & Skirt Small')); 				$products['515-VS-SM'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-67-B', 			'name' => 'Eyewear Radiation Bifocal', 			'description' => 'Flexing Goggle')); 					$products['525-67-B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-S-CUSTOM', 		'name' => 'STANDARD-CUSTOM', 					'description' => '')); 									$products['515-S-CUSTOM'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '281-2010', 			'name' => 'SP R-F 20g TW 10cm 5mm Tip', 		'description' => 'S Type')); 							$products['281-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '173-1924', 			'name' => 'SP Catheter Spirol Block', 			'description' => '19g Open End w/Stylet 24"')); 		$products['173-1924'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '281-2015', 			'name' => 'SP R-F 20g TW 15cm 5mm Tip', 		'description' => 'S Type')); 							$products['281-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-811R', 			'name' => 'Apron Radiation Rack', 				'description' => 'Wall Console Right Folding')); 		$products['520-811R'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'P0469A', 			'name' => 'Catheter Over Needle', 				'description' => 'Lifetech')); 							$products['P0469A'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-010', 			'name' => 'Tube Needle Cover 4.75"', 			'description' => '')); 									$products['B-TU-010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-011', 			'name' => 'Tube Needle Cover 6.25"', 			'description' => '')); 									$products['B-TU-011'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-WABR-CUSTOM', 	'name' => 'WRAP AROUND/BACK RELIEF-CUSTOM', 	'description' => '')); 									$products['515-WABR-CUSTOM'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-012', 			'name' => 'Tube Needle Cover 7.5"', 			'description' => '')); 									$products['B-TU-012'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-013', 			'name' => 'Tube Needle Cover 8.25"', 			'description' => '')); 									$products['B-TU-013'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-015', 			'name' => 'Tube Needle Cover 2"', 				'description' => '')); 									$products['B-TU-015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-016', 			'name' => 'Rod Stock Pebax w/ 8% BAS04', 		'description' => '15g')); 								$products['B-TU-016'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-017', 			'name' => 'Rod Stock Pebax w/ 8% BAS04', 		'description' => '18g')); 								$products['B-TU-017'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-018', 			'name' => 'Rod Stock Pebax w/ 8% BAS04', 		'description' => '14g')); 								$products['B-TU-018'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-811L', 			'name' => 'Apron Radiation Rack', 				'description' => 'Wall Console')); 						$products['520-811L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-89-P', 			'name' => 'EYEWEAR RADIATION-FIT OVER', 		'description' => 'PLANO')); 							$products['525-89-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '117-2260', 			'name' => 'SP Needle Blunt Coude', 				'description' => '22g RW x 6"')); 						$products['117-2260'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-001', 			'name' => 'Tube FEP Shrink', 					'description' => '')); 									$products['B-TU-001'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-005', 			'name' => 'Tube PET Shrink 21g', 				'description' => '')); 									$products['B-TU-005'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-006', 			'name' => 'Tube FEP Shrink 21g', 				'description' => '')); 									$products['B-TU-006'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-007', 			'name' => 'Tube Extension Set 12"', 			'description' => '')); 									$products['B-TU-007'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '193-2024', 			'name' => 'SP Spirol Short Crawford Set', 		'description' => '20g CE Stylet 24"')); 				$products['193-2024'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-008', 			'name' => 'Tube FEP w/8% BAS04 16g', 			'description' => '')); 									$products['B-TU-008'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-807M', 			'name' => 'Accessories Radiation Panties', 		'description' => 'Womens Lead Panel Medium')); 			$products['500-807M'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-58-P', 			'name' => 'Eyewear Radiation Plano', 			'description' => 'Jarrod Goggle')); 					$products['525-58-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-807L', 			'name' => 'Accessories Radiation Panties', 		'description' => 'Womens Lead Panel Large')); 			$products['500-807L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '135-1835T', 			'name' => '***DISC*** Needle Epiduarl FIC', 	'description' => 'w/18g TW x 3.5"Tuohy')); 			$products['135-1835T'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-58-S', 			'name' => 'Eyewear Radiation Single', 			'description' => 'Jarrod Goggle')); 					$products['525-58-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-807S', 			'name' => 'Accessories Radiation Panties', 		'description' => 'Womens Lead Panel Small')); 			$products['500-807S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-807R', 			'name' => 'Accessories Radiation Panties', 		'description' => 'Womens')); 							$products['500-807R'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-W33000', 		'name' => 'Anatomical Model Skeleton', 			'description' => 'Desktop')); 							$products['600-W33000'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-430', 			'name' => 'Cryo Probe Locating Pin', 			'description' => '')); 									$products['B-TU-430'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-431', 			'name' => 'Cryo Probe Inner tube 18Ga 6"', 	'description' => '')); 									$products['B-TU-431'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-432', 			'name' => 'Cryo Probe Inner Tube 16Ga 6"', 	'description' => '')); 									$products['B-TU-432'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-433', 			'name' => 'Cryo Probe Tube Inner 14Ga 6"', 	'description' => '')); 									$products['B-TU-433'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-58-B', 			'name' => 'Eyewear Radiation Bifocal', 			'description' => 'Jarrod Goggle')); 					$products['525-58-B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '155-2350', 			'name' => 'SP Catheter Epidural Brevi-XL', 		'description' => 'Pro')); 								$products['155-2350'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '4893150', 			'name' => 'Catheter Epidural Spirol 19gOE', 	'description' => '')); 									$products['4893150'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-808-L', 			'name' => 'Sleeves Radaition Large 23"', 		'description' => '')); 									$products['500-808-L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'XP41210', 			'name' => 'Introducer SmartInfuser Pain', 		'description' => 'Pump')); 								$products['XP41210'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-808-S', 			'name' => 'Sleeves Radaition Small 19"', 		'description' => '')); 									$products['500-808-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-808-M', 			'name' => 'Sleeves Radaition Medium 21"', 		'description' => '')); 									$products['500-808-M'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-421', 			'name' => 'Cryo Probe Outer Tube 18Ga 6"', 	'description' => 'Hemi')); 								$products['B-TU-421'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-422', 			'name' => 'Cryo Probe Outer Tube 16Ga 6"', 	'description' => 'Hemi')); 								$products['B-TU-422'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-424', 			'name' => 'Cryo Probe Outer Tube 14Ga 6"', 	'description' => 'Hemi')); 								$products['B-TU-424'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-809C', 			'name' => 'Accessories Radiation Gonad', 		'description' => 'Gen-X Male Shield System Child')); 	$products['500-809C'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VS-XXL', 		'name' => 'VEST/SKIRT COMBO -XXL', 				'description' => 'UNISEX')); 							$products['515-VS-XXL'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-809A', 			'name' => 'Accessories Radiation Briefs', 		'description' => 'Adult')); 							$products['500-809A'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-809B', 			'name' => 'Accessories Radiation Briefs', 		'description' => 'Boys')); 								$products['500-809B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-098', 			'name' => 'Disc Use B-MX-127', 					'description' => 'Resin K-Resin Clear')); 				$products['B-MX-098'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '10-2173', 			'name' => 'Universal Block Tray', 				'description' => 'Vassar Brothers')); 					$products['10-2173'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-97BL', 			'name' => 'MAX FIT EYEWEAR-BLACK', 				'description' => '')); 									$products['525-97BL'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-090', 			'name' => 'Resin Compound Black 7547C', 		'description' => '')); 									$products['B-MX-090'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '272-2210', 			'name' => 'SP R-F 22g TW 10cm 10mm Tip', 		'description' => 'Sharp Straight')); 					$products['272-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-093', 			'name' => 'Resin Compound Baby Blue', 			'description' => '')); 									$products['B-MX-093'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-095', 			'name' => 'Resin Compound Medium Gray', 		'description' => '7543C')); 							$products['B-MX-095'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-096', 			'name' => 'Resin Compound HDPE Blue', 			'description' => '')); 									$products['B-MX-096'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-097', 			'name' => 'Color Concentrate Green', 			'description' => 'Pellets')); 							$products['B-MX-097'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '10713', 				'name' => 'Needle Epidural Tuohy', 				'description' => '20g TW x 3.5" Wng Mrkd')); 			$products['10713'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-SDA-538-24', 	'name' => 'SURGICAL DROP AWAY', 				'description' => '')); 									$products['515-SDA-538-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '263-2210', 			'name' => 'SP R-F 22g TW 10cm 15mm Tip', 		'description' => 'Blunt Straight')); 					$products['263-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-806A', 			'name' => 'Accessories Radiation Gonad', 		'description' => 'Shield Standard Set of 3')); 			$products['500-806A'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-806L', 			'name' => 'Accessories Radiation Gonad', 		'description' => 'Shield Standard Large 7"x9"')); 	$products['500-806L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-806M', 			'name' => 'Accessories Radiation Gonad', 		'description' => 'Shield Standard Medium 6"x7"')); 	$products['500-806M'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-VR1118L', 		'name' => 'HUMAN MUSCULATURE CHART', 			'description' => '')); 									$products['600-VR1118L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-806S', 			'name' => 'Accessories Radiation Gonad', 		'description' => 'Shield Standard Small 3"x5"')); 	$products['500-806S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '502-XR2-9', 			'name' => 'Gloves Radiation Protection', 		'description' => 'XR2 size 9')); 						$products['502-XR2-9'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '502-XR2-8', 			'name' => 'Gloves Radiation Protection', 		'description' => 'XR2 size 8')); 						$products['502-XR2-8'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '502-XR2-7', 			'name' => 'Gloves Radiation Protection', 		'description' => 'XR2 size 7')); 						$products['502-XR2-7'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '272-2215', 			'name' => 'SP R-F 22g TW 15cm 10mm Tip', 		'description' => 'Sharp Straight')); 					$products['272-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-LA-798', 			'name' => 'Cryo Machine Face Plate', 			'description' => 'Overlay')); 							$products['B-LA-798'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-816H', 			'name' => 'CLOSED LOOP HANGER', 				'description' => '')); 									$products['520-816H'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '90228X', 			'name' => 'IFU Catheter', 						'description' => '')); 									$products['90228X'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB11.5', 		'name' => 'Blocker Radiation Lead .5mm', 		'description' => '11" x 14"')); 						$products['550-SB11.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '155-2343', 			'name' => 'SP Catheter Epid Brevi-XL STF', 		'description' => '')); 									$products['155-2343'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VS-PT', 			'name' => 'Apron Radiation Combo', 				'description' => 'Vest & Skirt Petite')); 				$products['515-VS-PT'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '4893176', 			'name' => 'Catheter Epidural Spirol 19gCE', 	'description' => '')); 									$products['4893176'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '155-2342', 			'name' => 'SP Catheter Epidural Brevi-XL2', 	'description' => '')); 									$products['155-2342'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '155-2340', 			'name' => 'SP Catheter Epidural Brevi-XL', 		'description' => '')); 									$products['155-2340'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'ENGINEERING', 		'name' => 'Engineering Charge', 				'description' => '')); 									$products['ENGINEERING'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '20176', 				'name' => 'Non Sterile Cath Spirol 19gOE', 		'description' => 'w/Hoop & Thread Assist')); 			$products['20176'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-510', 			'name' => 'Cryo Probe Pin Exhaust', 			'description' => '')); 									$products['B-MX-510'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'PRO-2000TE', 		'name' => 'Table Pain Management', 				'description' => 'Height Adjustable')); 				$products['PRO-2000TE'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'PRO-2000TF', 		'name' => 'Table Pain Management', 				'description' => 'Fixed Height')); 						$products['PRO-2000TF'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-553S-B', 		'name' => 'Radiation Eyewear-METALITE-', 		'description' => 'BRONZE COLOR**BIFOCAL Rx**')); 		$products['525-553S-B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '56-313', 			'name' => 'PAIN MANAGEMENT SHIELD', 			'description' => '')); 									$products['56-313'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'PRO-2000TM', 		'name' => 'Table Pain Management', 				'description' => 'Three Move')); 						$products['PRO-2000TM'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-APRON', 			'name' => 'APRON BAG', 							'description' => '')); 									$products['515-APRON'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-506', 			'name' => 'Cryo Machine Pressure', 				'description' => 'Regulator Bracket')); 				$products['B-MX-506'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '135-1825', 			'name' => 'SP Needle Blunt Access Cannula', 	'description' => 'w/18g TW x 2.5" Sharp')); 			$products['135-1825'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-507', 			'name' => 'Cryo Machine Square Pressure', 		'description' => 'Switch Housing')); 					$products['B-MX-507'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '700-S-107', 			'name' => 'Vuecath Fiberscope Accessories', 	'description' => 'Coupler Kit')); 						$products['700-S-107'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '20188', 				'name' => 'Stingray Connector 20g Integra', 	'description' => 'for IMA')); 							$products['20188'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '20187', 				'name' => 'Spirol 20g CE Integra for IMA', 		'description' => '')); 									$products['20187'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '263-2215', 			'name' => 'SP R-F 22g TW 15cm 15mm Tip', 		'description' => 'Blunt Straight')); 					$products['263-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '700-S-100', 			'name' => 'Vuecath Fiberscope Accessories', 	'description' => 'Coupler Kit')); 						$products['700-S-100'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-060', 			'name' => 'Tube PTFE tipped .064" x 6"', 		'description' => '')); 									$products['B-TU-060'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-061', 			'name' => 'Tube PTFE tipped .076" x 6"', 		'description' => '')); 									$products['B-TU-061'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '10122-106-2', 		'name' => 'OEM Catheter Conductive 24"', 		'description' => '')); 									$products['10122-106-2'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '700-S-102', 			'name' => 'Vuecath Fiberscope Accessories', 	'description' => 'Primary Coupler Kit')); 				$products['700-S-102'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-062', 			'name' => 'Tube PTFE tipped .087" x 6"', 		'description' => '')); 									$products['B-TU-062'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-063', 			'name' => 'Tube Pebax 72D .029" x 24"', 		'description' => '')); 									$products['B-TU-063'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-064', 			'name' => 'Tubing Smart Infuser .047x.026', 	'description' => 'Radiopaque')); 						$products['B-TU-064'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-103INSERTS', 	'name' => 'Gloves Radiation Inserts', 			'description' => '')); 									$products['500-103INSERTS'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-065', 			'name' => 'Tubing Smart Infuser .047x.026', 	'description' => 'Radiopaque 36.72"')); 				$products['B-TU-065'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-066', 			'name' => 'Tube .018 x.0255 Balck Stripe', 		'description' => 'Wiley')); 							$products['B-TU-066'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-067', 			'name' => 'Tube .022 x.0295 Balck Stripe', 		'description' => 'Wiley')); 							$products['B-TU-067'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'F22BMX-011', 		'name' => 'HDPE Hoop', 							'description' => '')); 									$products['F22BMX-011'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-068', 			'name' => 'Tube PET Shrink Black .070 ID', 		'description' => '6.5"')); 							$products['B-TU-068'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-069', 			'name' => 'PVC Kink Sleeve', 					'description' => '')); 									$products['B-TU-069'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '273-2210', 			'name' => 'SP R-F 22g TW 10cm 15mm Tip', 		'description' => 'Sharp Straight')); 					$products['273-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB6.5', 			'name' => 'Blocker Radiation Lead .5mm', 		'description' => '7" x 11"')); 						$products['550-SB6.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '101130', 			'name' => 'Tubing PC-3585A ID 1.53 x 0.16', 	'description' => 'Wall')); 								$products['101130'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '166-1936', 			'name' => 'SP Catheter Epidural Spirol', 		'description' => '19g Closed End')); 					$products['166-1936'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '700-S-110', 			'name' => 'Vuecath Fiberscope Accessories', 	'description' => '5X High Resolution Coupler')); 		$products['700-S-110'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '273-2215', 			'name' => 'SP R-F 22g TW 15cm 15mm Tip', 		'description' => 'Sharp Straight')); 					$products['273-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '700-S-111', 			'name' => 'Vuecath Fiberscope Accessories', 	'description' => 'Eye Piece')); 						$products['700-S-111'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VS-LG', 			'name' => 'Apron Radiation Combo', 				'description' => 'Vest & Skirt Large')); 				$products['515-VS-LG'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VO-XL', 			'name' => 'Apron Radiation Combo', 				'description' => 'Vest X-Large')); 						$products['515-VO-XL'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '700-S-117', 			'name' => 'Vuecath Fiberscope Accessories', 	'description' => '7X High Resolution Coupler')); 		$products['700-S-117'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '700-S-120', 			'name' => 'Vuecath Fiberscope Accessories', 	'description' => 'C-Mount Coupler')); 					$products['700-S-120'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-501', 			'name' => 'Cryo Machine Piston Relief', 		'description' => 'Valve')); 							$products['B-MX-501'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VS-MD', 			'name' => 'Apron Radiation Combo', 				'description' => 'Vest & Skirt Medium')); 				$products['515-VS-MD'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '555-PB56604', 		'name' => 'Radiation X-Ray Barrier Jumbo', 		'description' => '')); 									$products['555-PB56604'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '505-611NS', 			'name' => 'NEW STYLE THYROID COLLAR', 			'description' => '')); 									$products['505-611NS'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-250TR', 			'name' => 'Gloves Radiation Tri-rad', 			'description' => '')); 									$products['500-250TR'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '124-2220', 			'name' => 'SP Stellate Needle 22g TW x 2"', 	'description' => '')); 									$products['124-2220'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '20131', 				'name' => 'Connector Stingray Epidural', 		'description' => 'Catheter 19g')); 						$products['20131'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '20130', 				'name' => 'Catheter Epidural Spirol 19gOE', 	'description' => '')); 									$products['20130'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-1901', 			'name' => 'ADJUSTABLE MOBILE SHIELD', 			'description' => '')); 									$products['520-1901'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-VR1113L', 		'name' => 'HUMAN SKELETON CHART', 				'description' => '')); 									$products['600-VR1113L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-030', 			'name' => 'Rod Stock Pebax w/ 8% BAS04', 		'description' => '18g Tuohy')); 						$products['B-TU-030'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-031', 			'name' => 'Tube PET Shrink White .035 ID', 		'description' => '.0005" x 40"')); 					$products['B-TU-031'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-032', 			'name' => 'Tube PET Shrink Copper .036 ID', 	'description' => '.0005" x 37"')); 					$products['B-TU-032'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '180-2393', 			'name' => '*Disc* T Catheter Epidural', 		'description' => 'Brevi Glass')); 						$products['180-2393'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '293-ST', 			'name' => 'RF Probe Sterilization Tray', 		'description' => '')); 									$products['293-ST'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-034', 			'name' => 'Tube PET Shrink Copper .036 ID', 	'description' => '.0005" x 17"')); 					$products['B-TU-034'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-035', 			'name' => 'Tube PET Shrink Copper .036 ID', 	'description' => '.0005" x 27"')); 					$products['B-TU-035'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '294-10', 			'name' => '***DISC*** SP R-F Nitinol', 			'description' => 'Electrode 10cm')); 					$products['294-10'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '120-2040', 			'name' => 'SP Needle Quick 20g TW x 4"', 		'description' => '')); 									$products['120-2040'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-037', 			'name' => 'Tubing Introducer FEP Yellow', 		'description' => '')); 									$products['B-TU-037'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-038', 			'name' => 'Tubing Extension .084 x .042', 		'description' => 'x 6" A PVC Kink Sleeve')); 			$products['B-TU-038'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-BR-532-24-T', 	'name' => 'Apron Radiation Back Relief', 		'description' => 'Thyroid Collar 24" x 32"')); 		$products['515-BR-532-24-T'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-102-65', 		'name' => 'Gloves Radiation Attenuating', 		'description' => '6.5')); 								$products['500-102-65'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VO-SM', 			'name' => 'Apron Radiation Combo', 				'description' => 'Vest Small')); 						$products['515-VO-SM'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '294-15', 			'name' => '***DSIC*** SP R-F Nitinol', 			'description' => 'Electrode 15cm')); 					$products['294-15'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-020', 			'name' => 'Tube Pebax 72D 20g x 24"', 			'description' => '')); 									$products['B-TU-020'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-021', 			'name' => 'Tube Extension Set 6"', 			'description' => '')); 									$products['B-TU-021'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-023', 			'name' => 'Tube Perc-Tak Cover 1.875"', 		'description' => '')); 									$products['B-TU-023'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-024', 			'name' => 'Tube Extension 7.75" ID .026', 		'description' => '')); 									$products['B-TU-024'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-025', 			'name' => 'Tube Extension 7.75" ID .033', 		'description' => '')); 									$products['B-TU-025'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-026', 			'name' => 'Polyester Shrink Tube-PET', 			'description' => '')); 									$products['B-TU-026'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-027', 			'name' => 'Polyester Shrink Tube-PET', 			'description' => 'Black .041 x 24"')); 				$products['B-TU-027'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-028', 			'name' => 'Tube PET Shrink Black .041 ID', 		'description' => '6.5"')); 							$products['B-TU-028'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '265-2210', 			'name' => 'SP R-F 22g TW 10cm 3mm Tip', 		'description' => 'Blunt Coudé')); 						$products['265-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-029', 			'name' => 'Tube PET Shrink Black .036 ID', 		'description' => '6.5"')); 							$products['B-TU-029'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-102-75', 		'name' => 'Gloves Radiation Attenuating', 		'description' => '7.5')); 								$products['500-102-75'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'MD0070', 			'name' => '16g TW x 4.5" RX Coude with', 		'description' => 'Flexible Introducer')); 				$products['MD0070'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-050', 			'name' => 'Tube PET Shrink Black .036 ID', 		'description' => '2.5"')); 							$products['B-TU-050'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-051', 			'name' => 'TubE Slick Braid Polyimide 6"', 	'description' => '.018 x .0255')); 						$products['B-TU-051'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-052', 			'name' => 'Tube Extension Orange Stripe', 		'description' => '36"')); 								$products['B-TU-052'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '265-2215', 			'name' => 'SP R-F 22g TW 15cm 3mm Tip', 		'description' => 'Blunt Coudé')); 						$products['265-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-053', 			'name' => 'Tube SS 9g RW x 12"', 				'description' => '')); 									$products['B-TU-053'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-054', 			'name' => 'Tube PET Shrink Black .055 ID', 		'description' => '4.5"')); 							$products['B-TU-054'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-055', 			'name' => 'Tubing Smart Infuser .042x.022', 	'description' => 'Radiopaque')); 						$products['B-TU-055'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-056', 			'name' => 'Tubing Slick Braid Polyimide', 		'description' => '.022" ID x .0295" OD')); 			$products['B-TU-056'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-057', 			'name' => 'Tube PET Shrink Black .055 ID', 		'description' => 'x .00125 x 6.5"')); 					$products['B-TU-057'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-058', 			'name' => 'Cover Tube Wiley Spinal', 			'description' => '.265" x 5"')); 						$products['B-TU-058'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-059', 			'name' => 'Cover Tube Wiley Spinal', 			'description' => '.265" x 7.5"')); 					$products['B-TU-059'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-102-70', 		'name' => 'Gloves Radiation Attenuating', 		'description' => '7.0')); 								$products['500-102-70'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-040', 			'name' => '**Disc**Tubing Smart Infuser', 		'description' => '')); 									$products['B-TU-040'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-041', 			'name' => 'Tube Pebax 72D .032 x 24"', 		'description' => '')); 									$products['B-TU-041'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-042', 			'name' => 'Tube PET Shrink 21g 40"', 			'description' => '')); 									$products['B-TU-042'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-044', 			'name' => 'Tubing Extension Set 1"', 			'description' => 'Double Nelson')); 					$products['B-TU-044'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-045', 			'name' => 'Tubing Extension Set 11"', 			'description' => 'Double Nelson')); 					$products['B-TU-045'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-046', 			'name' => 'TubE Hytrel 7246 W/10% BiSub', 		'description' => 'Yellow')); 							$products['B-TU-046'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-047', 			'name' => 'Tube PET Shrink Black .041 ID', 		'description' => '4.5"')); 							$products['B-TU-047'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-048', 			'name' => 'Tube PET Shrink Black .036 ID', 		'description' => '4.5"')); 							$products['B-TU-048'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TU-049', 			'name' => 'Tube PET Shrink Black .041 ID', 		'description' => '2.5"')); 							$products['B-TU-049'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-S-532-18Q/T', 	'name' => 'Apron Radiation Coat Standard', 		'description' => 'Thyroid/Quick Release18"x 32"')); 	$products['515-S-532-18Q/T'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '502-XR1-7.5', 		'name' => 'Gloves Radiation Protection', 		'description' => 'XR1 size 7.5')); 						$products['502-XR1-7.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-102-80', 		'name' => 'Gloves Radiation Attenuating', 		'description' => '8.0')); 								$products['500-102-80'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-102-85', 		'name' => 'Gloves Radiation Attenuating', 		'description' => '8.5')); 								$products['500-102-85'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '135-4940', 			'name' => '***DISC*** Needle Epidural SCA', 	'description' => 'Introducer')); 						$products['135-4940'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-224', 			'name' => 'Introducer Flexible Cannula', 		'description' => 'w/17g TW x 3.5" Tuohy MetalHub')); 	$products['A-EP-224'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-110', 			'name' => 'Resin,Polycarbonate White', 			'description' => 'DOW Calibre 2061')); 					$products['B-MX-110'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-594', 			'name' => 'Cryo Probe Receiver Assy 14Ga', 		'description' => '6"')); 								$products['B-MX-594'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-223', 			'name' => 'Blunt Access Cannula', 				'description' => 'w/18g ETW x 2.5" Sharp')); 			$products['A-EP-223'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-111', 			'name' => 'Resin Thermoplastic Elastomer', 		'description' => 'Alloy Versaflex')); 					$products['B-MX-111'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-595', 			'name' => 'Cryo Probe Receiver Assy 15Ga', 		'description' => '6"')); 								$products['B-MX-595'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '195-4018', 			'name' => '*Disc* T Epidural Crawford', 		'description' => '18g Glass Mini')); 					$products['195-4018'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-222', 			'name' => 'Introducer Flexible Cannula', 		'description' => 'w/18g TW x 3.5" Tuohy')); 			$products['A-EP-222'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-112', 			'name' => 'Resin Pebax 72D', 					'description' => '')); 									$products['B-MX-112'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-596', 			'name' => 'Cryo Machine O-Ring Buna-N', 		'description' => '.239" x .03"')); 					$products['B-MX-596'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-221', 			'name' => 'Blunt Access Cannula', 				'description' => 'w/18g ETW x 3.7" Sharp')); 			$products['A-EP-221'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-113', 			'name' => 'Resin Tecoflex 80A', 				'description' => '')); 									$products['B-MX-113'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-114', 			'name' => 'Resin Compound FEP w/8% Barium', 	'description' => 'Sulfate')); 							$products['B-MX-114'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-115', 			'name' => 'Resin Compound Vanilla', 			'description' => '')); 									$products['B-MX-115'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-PA06S15', 		'name' => 'RF Probe Adapter 6" Stryker', 		'description' => '15cm')); 								$products['296-PA06S15'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-592', 			'name' => 'Cryo Probe Receiver Assy 16Ga', 		'description' => '6"')); 								$products['B-MX-592'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '501-XR499000', 		'name' => 'Gloves Radiation Attenuation', 		'description' => 'Lead Free 9.0')); 					$products['501-XR499000'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '298-10', 			'name' => 'SP R-F Nitinol Electrode 10cm', 		'description' => 'Hyperflex')); 						$products['298-10'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-106', 			'name' => 'Resin Polypropylene Natural', 		'description' => 'Homopolymer Huntsman')); 				$products['B-MX-106'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-107', 			'name' => 'Color Concentrate Blue Hytrel', 		'description' => '')); 									$products['B-MX-107'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '195-4020', 			'name' => '*Disc* T Epidural Crawford', 		'description' => '20g Glass Mini')); 					$products['195-4020'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-92W-S', 			'name' => 'Eyewear Sport Flex -WINE-', 			'description' => 'W/SIDE SHIELDS')); 					$products['525-92W-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-108', 			'name' => 'Color Concentrate Black Hytrel', 	'description' => '')); 									$products['B-MX-108'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-S-538-27', 		'name' => 'Apron Radiation Coat Standard', 		'description' => '27" x 38"')); 						$products['515-S-538-27'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-219', 			'name' => 'Needle Epidural RX Coudé', 			'description' => '18g TW x 6"')); 						$products['A-EP-219'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '195-4022', 			'name' => '*Disc* T Epidural Crawford', 		'description' => '22g Glass Mini')); 					$products['195-4022'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-218', 			'name' => 'Needle Epidural RX Coudé', 			'description' => '18g TW x 4.5"')); 					$products['A-EP-218'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-217', 			'name' => 'Needle Epidural RX Coudé', 			'description' => '15g RW x 6"')); 						$products['A-EP-217'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-S-538-24', 		'name' => 'Apron Radiation Coat Standard', 		'description' => '24" x 38"')); 						$products['515-S-538-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-216', 			'name' => 'Needle Epidural RX', 				'description' => '18g TW x 6"')); 						$products['A-EP-216'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-215', 			'name' => 'Needle Epidural RX', 				'description' => '18g TW x 4.5"')); 					$products['A-EP-215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-120', 			'name' => 'Resin Compound Kraton Royal', 		'description' => 'Blue')); 								$products['B-MX-120'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-121', 			'name' => 'Color Concentrate PED BabyBlue', 	'description' => 'Powdered')); 							$products['B-MX-121'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-122', 			'name' => 'Resin Polyurethane Polycarb', 		'description' => 'PC3595A Natural')); 					$products['B-MX-122'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '271-2015', 			'name' => 'SP R-F 20g TW 15cm 5mm Tip', 		'description' => 'Sharp Straight')); 					$products['271-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB2.5', 			'name' => 'Blocker Radiation Lead .5mm', 		'description' => '5" x 8"')); 						$products['550-SB2.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-123', 			'name' => 'Resin PVC 80A Clear', 				'description' => '')); 									$products['B-MX-123'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-124', 			'name' => 'Resin PUR/PC 20% Barium', 			'description' => 'PC3555D-B20')); 						$products['B-MX-124'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-125', 			'name' => 'Marker Band ANS Catheter', 			'description' => '')); 									$products['B-MX-125'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-230', 			'name' => 'Needle Epidural RX Coudé', 			'description' => '18g TW x 2.5"')); 					$products['A-EP-230'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-126', 			'name' => 'Resin Bionate 55D', 					'description' => '')); 									$products['B-MX-126'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-127', 			'name' => 'K-Resin Styrene Butadiene', 			'description' => 'Coploymer Clear')); 					$products['B-MX-127'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '116-2060', 			'name' => 'SP Needle Blunt Straight', 			'description' => '20g TW x 6"')); 						$products['116-2060'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '298-15', 			'name' => 'SP R-F Nitinol Electrode 15cm', 		'description' => 'Hyperflex')); 						$products['298-15'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '217-2060', 			'name' => '*DISC* Transforanimal 20g x 6"', 	'description' => 'Blunt Coude DD Tray')); 				$products['217-2060'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-PA06S10', 		'name' => 'RF Probe Adapter 6" Stryker', 		'description' => '10cm')); 								$products['296-PA06S10'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-117', 			'name' => 'Resin Lustran ABS 348', 				'description' => 'Sno-White')); 						$products['B-MX-117'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-118', 			'name' => 'Resin Compound Yellow ABS', 			'description' => '')); 									$products['B-MX-118'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-229', 			'name' => 'Needle Epidural RX 18g TW x', 		'description' => '2.5"')); 							$products['A-EP-229'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-228', 			'name' => 'Needle Epidural RX Coudé', 			'description' => '14g TW x 6"')); 						$products['A-EP-228'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-227', 			'name' => 'Needle Epidural RX', 				'description' => '14g TW x 6"')); 						$products['A-EP-227'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-203', 			'name' => 'Needle Epidural RX Coudé', 			'description' => '18g TW x 3.5"')); 					$products['A-EP-203'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-571', 			'name' => 'Cryo Probe 18Ga Defrost', 			'description' => 'Fitting')); 							$products['B-MX-571'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-202', 			'name' => 'Needle Epidural RX Coudé', 			'description' => '15g RW x 3.5"')); 					$products['A-EP-202'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-572', 			'name' => 'Cryo Probe 18Ga Inner Tube', 		'description' => 'Reciever')); 							$products['B-MX-572'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '426010', 			'name' => 'Pilling Lacrimal Probe', 			'description' => '')); 									$products['426010'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-573', 			'name' => 'Cryo Probe Housing Defrost', 		'description' => '.073 ID')); 							$products['B-MX-573'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '502-70', 			'name' => 'Gloves Radiation RR-1 7.0', 			'description' => '')); 									$products['502-70'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-200', 			'name' => 'Needle RF B Bevel Coude', 			'description' => '18g TW x 10cm 10mm Active Tip')); 	$products['A-EP-200'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-574', 			'name' => 'Cryo Probe Receiver Tip', 			'description' => '')); 									$products['B-MX-574'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-575', 			'name' => 'Cryo Probe Receiver Tip 15Ga', 		'description' => '')); 									$products['B-MX-575'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-576', 			'name' => 'Cryo Probe Receiver Tip.059 ID', 	'description' => '')); 									$products['B-MX-576'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-577', 			'name' => 'Cryo Probe Receiver Tip 17Ga', 		'description' => '')); 									$products['B-MX-577'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-578', 			'name' => 'Cryo Probe Housing Defrost', 		'description' => '.059 ID')); 							$products['B-MX-578'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '160-1536', 			'name' => '***DISC***SP Cath Epid SC-Stim', 	'description' => '')); 									$products['160-1536'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-99B-S', 			'name' => 'ULTRA LIGHT VIPER W/SIDE', 			'description' => 'SHIELDS - BLUE COLOR')); 				$products['525-99B-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '155-1838', 			'name' => '***DISC***SP Catheter Epidural', 	'description' => 'Caud-A-Kath')); 						$products['155-1838'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-570', 			'name' => 'Cryo Probe 16Ga Defrost', 			'description' => 'Fitting')); 							$products['B-MX-570'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '501-ASG-8.5', 		'name' => 'Gloves Radiation Attenuation', 		'description' => 'Lead Free 8.5')); 					$products['501-ASG-8.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '502-75', 			'name' => 'Gloves Radiation RR-1 7.5', 			'description' => '')); 									$products['502-75'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-568', 			'name' => 'Cryo Probe Nose Adaptor.052 ID', 	'description' => '')); 									$products['B-MX-568'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-214', 			'name' => 'Needle Epidural RX', 				'description' => '15g RW x 6"')); 						$products['A-EP-214'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-582', 			'name' => 'Cryo Probe Outer Tube Assy', 		'description' => '14Ga 6" Trocar with TC')); 			$products['B-MX-582'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-213', 			'name' => 'Needle Epidural RX Coudé', 			'description' => '16g TW x 3.5"')); 					$products['A-EP-213'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-212', 			'name' => 'Needle Epidural RX Coudé', 			'description' => '16g TW x 4.5"')); 					$products['A-EP-212'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-100', 			'name' => 'Color Concentrat Trans Fuschia', 	'description' => '')); 									$products['B-MX-100'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-584', 			'name' => 'Cryo Probe Outer Tube Assy', 		'description' => '16Ga 6" Trocar with TC')); 			$products['B-MX-584'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-211', 			'name' => 'Needle Epidural RX Coudé', 			'description' => '14g TW x 4"')); 						$products['A-EP-211'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-101', 			'name' => 'Resin Compound Trans Fushia', 		'description' => 'K-Resin')); 							$products['B-MX-101'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-585', 			'name' => 'Cryo Probe Outer Tube Assy', 		'description' => '18Ga 6" Trocar with TC')); 			$products['B-MX-585'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-210', 			'name' => 'Needle Epidural RX Coudé', 			'description' => '15g RW x 4.5"')); 					$products['A-EP-210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-102', 			'name' => 'Resin Markralon 2658', 				'description' => 'Polycarbonate')); 					$products['B-MX-102'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-586', 			'name' => 'Cryo Probe Outer Tube Assy', 		'description' => '14Ga 6" Hemi with TC')); 			$products['B-MX-586'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-587', 			'name' => 'Cryo Probe Outer Tube Assy', 		'description' => '16Ga 3" Hemi with TC')); 			$products['B-MX-587'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-104', 			'name' => 'Resin Polyvinyl Chloride Clear', 	'description' => '60a')); 								$products['B-MX-104'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-588', 			'name' => 'Cryo Probe Outer Tube Assy', 		'description' => '16Ga 6" Hemi with TC')); 			$products['B-MX-588'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-105', 			'name' => 'Color Concentrate Green Hytrel', 	'description' => '')); 									$products['B-MX-105'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-589', 			'name' => 'Cryo Probe Outer Tube Assy', 		'description' => '18Ga 6" Hemi with TC')); 			$products['B-MX-589'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '116-2045', 			'name' => 'SP Needle Blunt Straight', 			'description' => '20g TW x 4.5"')); 					$products['116-2045'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-62-PR', 			'name' => 'METAL SHIELD - PROGRESSIVE', 		'description' => 'AS PER Rx')); 						$products['525-62-PR'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '502-65', 			'name' => 'Gloves Radiation RR-1 6.5', 			'description' => '')); 									$products['502-65'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-209', 			'name' => 'Needle Epidural RX', 				'description' => '16g TW x 3.5"')); 					$products['A-EP-209'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-208', 			'name' => 'Needle Epidural RX', 				'description' => '16g TW x 4.5"')); 					$products['A-EP-208'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '502-60', 			'name' => 'Gloves Radiation RR-1 6.0', 			'description' => '')); 									$products['502-60'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-207', 			'name' => 'Needle Epidural RX', 				'description' => '14g TW x 4"')); 						$products['A-EP-207'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-206', 			'name' => 'Needle Epidural RX', 				'description' => '15g RW x 4.5"')); 					$products['A-EP-206'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-205', 			'name' => 'Needle Epidural RX', 				'description' => '15g RW x 3.5"')); 					$products['A-EP-205'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-204', 			'name' => 'Needle Epidural RX', 				'description' => '18g TW x 3.5"')); 					$products['A-EP-204'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '502-90', 			'name' => 'Gloves Radiation RR-1 9.0', 			'description' => '')); 									$products['502-90'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-VR1620', 		'name' => 'Anatomical Charts', 					'description' => 'Nervous System')); 					$products['600-VR1620'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-VR1621', 		'name' => 'Anatomical Charts', 					'description' => 'Spinal Nerves')); 					$products['600-VR1621'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '70154127', 			'name' => 'Connector Stingray Epidural', 		'description' => 'Catheter 21g')); 						$products['70154127'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-W40103', 		'name' => 'Anatomical Model Dust Cover', 		'description' => '')); 									$products['600-W40103'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-009', 			'name' => 'Tray Shallow', 						'description' => '')); 									$products['B-MP-009'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-008', 			'name' => 'Tray Mid Size', 						'description' => '')); 									$products['B-MP-008'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-007', 			'name' => 'Tray Mini', 							'description' => '')); 									$products['B-MP-007'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '502-80', 			'name' => 'Gloves Radiation RR-1 8.0', 			'description' => '')); 									$products['502-80'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '297-5', 				'name' => 'SP R-F Electrode 5cm', 				'description' => 'Stainless Steel')); 					$products['297-5'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-565', 			'name' => 'Cryo Probe Nose Adaptor.059 ID', 	'description' => '')); 									$products['B-MX-565'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-566', 			'name' => 'Cryo Probe Nose Adaptor.073 ID', 	'description' => '')); 									$products['B-MX-566'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-567', 			'name' => 'Cryo Probe Nose Adaptor.046 ID', 	'description' => '')); 									$products['B-MX-567'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-403', 			'name' => 'Cryo Machine Wire TC .02"', 		'description' => 'Copper')); 							$products['B-WI-403'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '105-1415', 			'name' => 'SP Needle Epidural RX Coudé', 		'description' => '15g RW x 3.5"')); 					$products['105-1415'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '105-1416', 			'name' => 'SP Needle Epidural RX Coudé', 		'description' => '16g TW x 3.5"')); 					$products['105-1416'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '135-1857', 			'name' => 'SP Needle Blunt Access Cannula', 	'description' => 'w/18g x 5.7" Sharp')); 				$products['135-1857'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '287-2010', 			'name' => 'SP R-F 20g TW 10cm 10mm Tip', 		'description' => 'S Type Coudé')); 						$products['287-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-405', 			'name' => 'Cryo Probe Wire TC 30 Ga', 			'description' => '')); 									$products['B-WI-405'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '287-2015', 			'name' => 'SP R-F 20g TW 15cm 10mm Tip', 		'description' => 'S Type Coudé')); 						$products['287-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-404', 			'name' => 'Cryo Machine Wire TC .02"', 		'description' => 'Constantan')); 						$products['B-WI-404'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '502-85', 			'name' => 'Gloves Radiation RR-1 8.5', 			'description' => '')); 									$products['502-85'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-WI-406', 			'name' => 'Cryo Probe TC Wire Type T 304', 		'description' => 'SS .04"')); 							$products['B-WI-406'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-531', 			'name' => 'Cryo Probe Spacer Probe', 			'description' => 'Bracket')); 							$products['B-MX-531'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-532', 			'name' => 'Cryo Probe Stress Relief', 			'description' => 'Insert')); 							$products['B-MX-532'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-533', 			'name' => 'Cryo Machine U-Cup 5/8" ID x', 		'description' => '7/8" OD')); 							$products['B-MX-533'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-534', 			'name' => 'Cryo Machine Spacer Temp/', 			'description' => 'Timer')); 							$products['B-MX-534'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1911-350', 			'name' => '***DISC*** SP Stylet Epidural', 		'description' => '.010 x 32 1/8"')); 					$products['1911-350'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1911-351', 			'name' => '***DISC*** SP Stylet Epidural', 		'description' => '.010 x 11 5/8"')); 					$products['1911-351'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '278-2210', 			'name' => 'SP R-F 22g TW 10cm 15mm Tip', 		'description' => 'Sharp Coudé')); 						$products['278-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '278-2215', 			'name' => 'SP R-F 22g TW 15cm 15mm Tip', 		'description' => 'Sharp Coudé')); 						$products['278-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '126-2035C', 			'name' => '***DISC** Needle Epid Crawford', 	'description' => '20g TW x 3.5"')); 					$products['126-2035C'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-97RX-S-BI', 		'name' => 'ULTRA LIGHT VIPER- W/SIDE', 			'description' => 'SHIELDS - BIFOCAL Rx')); 				$products['525-97RX-S-BI'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '190-1520', 			'name' => 'T Catheter Epidural Tun-L-Kath', 	'description' => 'Plastic Full Size')); 				$products['190-1520'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '106-1618', 			'name' => 'SP Needle Epidural RX', 				'description' => '18g TW x 6"')); 						$products['106-1618'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-525', 			'name' => 'Cryo Machine Locator Sidewrap', 		'description' => 'Long')); 								$products['B-MX-525'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '106-1616', 			'name' => 'SP Needle Epidural RX Coudé', 		'description' => '16g TW x 6"')); 						$products['106-1616'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '271-2010', 			'name' => 'SP R-F 20g TW 10cm 5mm Tip', 		'description' => 'Sharp Straight')); 					$products['271-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '290-GP', 			'name' => 'R-F™ Grounding Pad', 				'description' => '')); 									$products['290-GP'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '106-1615', 			'name' => 'SP Needle Epidural RX', 				'description' => '15g RW x 6"')); 						$products['106-1615'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'T45-196-00', 		'name' => 'Stylet Catheter Pandin', 			'description' => 'Safety-Kath 24"')); 					$products['T45-196-00'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-901', 			'name' => 'Sheeting Radiation Lead .25mm', 		'description' => 'Full 48" x 96"')); 					$products['550-901'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-902', 			'name' => 'Sheeting Radiation Lead .5mm', 		'description' => 'Full 48" x 96"')); 					$products['550-902'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-903', 			'name' => 'Sheeting Radiation Lead 1.0mm', 		'description' => 'Full 28" x 96"')); 					$products['550-903'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'W47500', 			'name' => 'Anatomical Models Spine', 			'description' => '4 Stage Degenrative Lumbar SE')); 	$products['W47500'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VO-XXL', 		'name' => 'VEST ONLY: XXL', 					'description' => '')); 									$products['515-VO-XXL'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-535', 			'name' => 'Cryo Machine Actuator Spacer', 		'description' => '')); 									$products['B-MX-535'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '135-1835', 			'name' => '***DISC*** Needle Epidural FIC', 	'description' => 'w/18g x 3.5" Crawford')); 			$products['135-1835'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '135-1837', 			'name' => 'SP Needle Blunt Access Cannula', 	'description' => 'w/18g x 3.7" Sharp')); 				$products['135-1837'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-197', 			'name' => 'Connector Lemo 14 Pin Male', 		'description' => 'Baylis')); 							$products['B-MX-197'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-198', 			'name' => 'Connector Lemo 12 Pin Male', 		'description' => 'Stryker')); 							$products['B-MX-198'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-WA-008', 			'name' => 'Wrap CSR Blue 20" x 20"', 			'description' => '')); 									$products['A-WA-008'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-199', 			'name' => 'Programable Chip EPROM Dallas', 		'description' => 'DS2505')); 							$products['B-MX-199'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-92BL', 			'name' => 'Eyewear Sport Flex Blue', 			'description' => '')); 									$products['525-92BL'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-WA-007', 			'name' => 'Wrap CSR Blue 30" x 30"', 			'description' => '762 mm x 762 mm')); 					$products['A-WA-007'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '181-2112', 			'name' => 'T Catheter Epidural Versa-Kath', 	'description' => '12" w/RX Coudé 18g x 3.5"')); 		$products['181-2112'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-WA-XLM', 		'name' => 'WRAP AROUND, XL-MALE', 				'description' => '')); 									$products['515-WA-XLM'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-041', 			'name' => 'Adapter Star Washer', 				'description' => 'Tuohy Borst')); 						$products['B-MP-041'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-190', 			'name' => 'Resin Compound HDPE Green', 			'description' => '')); 									$products['B-MX-190'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-191', 			'name' => 'RF Adapter Bend Relief', 			'description' => '.025 White')); 						$products['B-MX-191'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-192', 			'name' => 'Resistor Metal Film 619 Ohm 1%', 	'description' => '.125W')); 							$products['B-MX-192'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-193', 			'name' => 'RF Adapter Bend Relief 1B .025', 	'description' => 'Black')); 							$products['B-MX-193'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-194', 			'name' => 'Connector Lemo 8 Pin Female', 		'description' => 'Smith & Nephew')); 					$products['B-MX-194'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-195', 			'name' => 'Connector Lemo 4 Pin Male', 			'description' => 'Baylis Intermediate')); 				$products['B-MX-195'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-806A', 			'name' => 'SET OF 3-GONAD SHIELDS', 			'description' => '')); 									$products['520-806A'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-196', 			'name' => 'Porous Plug', 						'description' => '')); 									$products['B-MX-196'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-049', 			'name' => 'Stylet Molded Plastic 18g TW', 		'description' => '')); 									$products['B-MP-049'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-048', 			'name' => 'Stylet Molded Plastic 15g RW', 		'description' => '')); 									$products['B-MP-048'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-047', 			'name' => 'Stylet Molded Plastic 16g TW', 		'description' => '')); 									$products['B-MP-047'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-046', 			'name' => 'Stylet Molded SS 22g TW', 			'description' => '')); 									$products['B-MP-046'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-045', 			'name' => 'Stylet Molded SS 20g TW', 			'description' => '')); 									$products['B-MP-045'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '123-2028', 			'name' => 'SP Needle Stealth', 					'description' => '20g HW x 2.75"')); 					$products['123-2028'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '560-1001', 			'name' => 'Shield Radiation Portable', 			'description' => 'Standard')); 							$products['560-1001'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-044', 			'name' => 'Adapter Bushing 21g', 				'description' => 'Tuohy Borst')); 						$products['B-MP-044'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '560-1002', 			'name' => 'Shield Radiation Portable', 			'description' => 'Graduated')); 						$products['560-1002'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-043', 			'name' => 'Adapter Cap Tuohy Borst', 			'description' => 'Natural')); 							$products['B-MP-043'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-100S', 			'name' => 'Gloves Radiation 100 Series', 		'description' => 'Sheath Right & Left')); 				$products['500-100S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-NST-538-24', 	'name' => 'Apron Radiation New Style Tie', 		'description' => '24" x 38"')); 						$products['515-NST-538-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-100V', 			'name' => 'Gloves Radiation 100 Series', 		'description' => 'Vinyl Right & Left')); 				$products['500-100V'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-BR-538-24-T', 	'name' => 'Apron Radiation Back Relief', 		'description' => 'Thyroid Collar 24" x 38"')); 		$products['515-BR-538-24-T'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-13/1', 			'name' => 'Anatomical Model Full Skeleton', 	'description' => 'Adult Super Skeleton')); 				$products['600-13/1'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-W/BR-BELT', 		'name' => 'Apron Radiation Wrap Around', 		'description' => 'Back Relief')); 						$products['515-W/BR-BELT'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '105-1314ANS', 		'name' => 'SP Needle RX Coudé 14g TW x 4"', 	'description' => 'ANS')); 								$products['105-1314ANS'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '502-XR1-7', 			'name' => 'Gloves Radiation Protection', 		'description' => 'XR1 size 7')); 						$products['502-XR1-7'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-031', 			'name' => 'Adapter Small Bore Male LL', 		'description' => '')); 									$products['B-MP-031'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-030', 			'name' => 'Adapter Small Bore Female LL', 		'description' => '')); 									$products['B-MP-030'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '502-XR1-9', 			'name' => 'Gloves Radiation Protection', 		'description' => 'XR1 size 9')); 						$products['502-XR1-9'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '502-XR1-8', 			'name' => 'Gloves Radiation Protection', 		'description' => 'XR1 size 8')); 						$products['502-XR1-8'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-038', 			'name' => 'Adapter Cap Non-vented', 			'description' => 'Tuohy Borst')); 						$products['B-MP-038'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-037', 			'name' => 'Adapter Cap Tuohy Borst', 			'description' => '')); 									$products['B-MP-037'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-036', 			'name' => 'Adapter Body Tuohy Borst', 			'description' => '')); 									$products['B-MP-036'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-035', 			'name' => 'Needle Molded RF Cannula', 			'description' => '22g TW x 3.054"')); 					$products['B-MP-035'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '180-1520', 			'name' => '*Disc* T Catheter Epidural', 		'description' => 'Tun-L-Kath Glass')); 					$products['180-1520'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-033', 			'name' => 'Needle Stylet Plastic 15g', 			'description' => '')); 									$products['B-MP-033'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-92BU', 			'name' => 'Eyewear Sport Flex Burgundy', 		'description' => '')); 									$products['525-92BU'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '171-2124', 			'name' => 'SP Ultra-Kath 21g CE Catheter', 		'description' => 'Single Pack')); 						$products['171-2124'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-175', 			'name' => 'Connector Jack Receptacle', 			'description' => 'Stimulating Singray')); 				$products['B-MX-175'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-809P', 			'name' => 'Accessories Radiation Briefs', 		'description' => 'Pediatric')); 						$products['500-809P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-176', 			'name' => 'Resin Hytrel 7246', 					'description' => '')); 									$products['B-MX-176'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-177', 			'name' => 'Color Concentrate SBC Pellets', 		'description' => 'Yellow 108')); 						$products['B-MX-177'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-178', 			'name' => 'Color Concentrate SBC Pellets', 		'description' => 'Black')); 							$products['B-MX-178'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-179', 			'name' => 'Solderless Terminal .093', 			'description' => 'Pkg of 100')); 						$products['B-MX-179'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-REPAIR', 		'name' => 'EYEWEAR REPAIR', 					'description' => '')); 									$products['525-REPAIR'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '105-1418', 			'name' => 'SP Needle Epidural RX Coudé', 		'description' => '18g TW x 3.5"')); 					$products['105-1418'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-020', 			'name' => 'Thread Assist Guide', 				'description' => '')); 									$products['B-MP-020'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-171', 			'name' => 'Resin Compound K-Resin Baby', 		'description' => 'Blue')); 								$products['B-MX-171'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '188-2340', 			'name' => 'T Wiley Spinal', 					'description' => 'Single Set Tray')); 					$products['188-2340'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-173', 			'name' => 'Resin Compound K-Resin Gray', 		'description' => '7543')); 								$products['B-MX-173'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-174', 			'name' => 'Spring Loaded Pin', 					'description' => 'Stimulating Singray')); 				$products['B-MX-174'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-028', 			'name' => 'Stylet Molded .014 14.5" Min', 		'description' => '')); 									$products['B-MP-028'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1911-316', 			'name' => '***DISC*** SP Connector Epid', 		'description' => '19g')); 								$products['1911-316'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'P41112', 			'name' => 'Catheter SmartInfuser R/O', 			'description' => '190mm')); 							$products['P41112'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'P41111', 			'name' => 'Catheter SmartInfuser R/O', 			'description' => '190mm')); 							$products['P41111'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1911-319', 			'name' => 'SP Stingray™Connector Epidural', 	'description' => '19g')); 								$products['1911-319'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-029', 			'name' => 'Stylet Molded .010 14.5" Min', 		'description' => '')); 									$products['B-MP-029'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-187', 			'name' => 'Connector Lemo 4 Pin Female', 		'description' => 'Neurotherm')); 						$products['B-MX-187'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '560-1003', 			'name' => 'Shield Radiation Portable', 			'description' => 'Non-Graduated')); 					$products['560-1003'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-180', 			'name' => 'Plug Jack 4mm', 						'description' => 'Pkg of 10')); 						$products['B-MX-180'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1911-321', 			'name' => 'SP Stingray™Connector Epidural', 	'description' => '21g')); 								$products['1911-321'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-182', 			'name' => 'Cable RF 4 Conductor', 				'description' => '')); 									$products['B-MX-182'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-62-S', 			'name' => 'Eyewear Radiation Single', 			'description' => 'Metal Shield')); 						$products['525-62-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-183', 			'name' => '*** DISC *** Connector Mini', 		'description' => 'Thermocouple Male')); 				$products['B-MX-183'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-62-P', 			'name' => 'Eyewear Radiation Plano', 			'description' => 'Metal Shield')); 						$products['525-62-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-017', 			'name' => 'Stylet Molded .014 27" Min', 		'description' => '')); 									$products['B-MP-017'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-WA-001', 			'name' => 'Towel White 18" x 18"', 			'description' => '')); 									$products['A-WA-001'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-62-B', 			'name' => 'Eyewear Radiation Bifocal', 			'description' => 'Metal Shield')); 						$products['525-62-B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-WA-006', 			'name' => 'Drape 4"Fenes Clear 24" x 32"', 	'description' => '1" Adh Strip')); 					$products['A-WA-006'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-102', 			'name' => 'EPROM Programmed Stryker 15cm', 		'description' => '')); 									$products['B-EP-102'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-WA-004', 			'name' => 'Drape Blue 18" X 26"', 			'description' => '')); 									$products['A-WA-004'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-019', 			'name' => 'Stylet Molded .012 34" Min', 		'description' => '')); 									$products['B-MP-019'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-WA-003', 			'name' => 'Drape Fene Blue 18" x 26"', 		'description' => '2 Adh Tabs')); 						$products['A-WA-003'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-018', 			'name' => 'Stylet Molded .010 34" Min', 		'description' => '')); 									$products['B-MP-018'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-154', 			'name' => 'Resin Compound Green Vesraflex', 	'description' => '')); 									$products['B-MX-154'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-155', 			'name' => 'Resin Compound Pebax 40D Blue', 		'description' => '')); 									$products['B-MX-155'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-157', 			'name' => 'Cable Lead 1.5mm 36" Black', 		'description' => 'Stingray')); 							$products['B-MX-157'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-158', 			'name' => 'Cable Lead 2.0mm 36" Black', 		'description' => 'Stingray')); 							$products['B-MX-158'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-159', 			'name' => 'Ink NT-16 Black', 					'description' => '')); 									$products['B-MX-159'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '516-TBB-F', 			'name' => 'Apron Radiation Protection', 		'description' => 'Free with 2" Buckle')); 				$products['516-TBB-F'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-086', 			'name' => 'Stylet Molded SS 25g RW', 			'description' => '.009 x 7"')); 						$products['B-MP-086'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-085', 			'name' => 'Needle Blank Molded 22g RW', 		'description' => 'x 3"')); 							$products['B-MP-085'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-084', 			'name' => 'Needle Blank Molded 20g TW', 		'description' => 'x 4.5"')); 							$products['B-MP-084'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-082', 			'name' => 'Needle Blank Molded 22g RW', 		'description' => 'x 4.5"')); 							$products['B-MP-082'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-081', 			'name' => 'Cap Stingray Non Vented Male', 		'description' => '')); 									$products['B-MP-081'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-080', 			'name' => 'Stylet Molded .008 24" Min', 		'description' => '')); 									$products['B-MP-080'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-089', 			'name' => 'Connector Stingray Bushing', 		'description' => '20g')); 								$products['B-MP-089'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-088', 			'name' => 'Connector Stingray Bushing', 		'description' => '19g')); 								$products['B-MP-088'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-087', 			'name' => 'Stylet Molded .022 x 8.5" Grey', 	'description' => '')); 									$products['B-MP-087'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '176-2024', 			'name' => 'SP Catheter Spirol Block', 			'description' => '20g Closed End 24"')); 				$products['176-2024'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-SDO-534-24', 	'name' => 'Apron Radiation Surgical Drop', 		'description' => 'Off 24"x 34"')); 					$products['515-SDO-534-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-164', 			'name' => 'Resin Compound K-Resin Grey/', 		'description' => 'White 7541')); 						$products['B-MX-164'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '181-2542', 			'name' => 'T Catheter Epid Tun-L-XL/24', 		'description' => 'Plastic')); 							$products['181-2542'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-166', 			'name' => 'Resin Compound K-Resin Pink', 		'description' => '1895')); 								$products['B-MX-166'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FB-536-24', 		'name' => 'Apron Radiation Flex Back', 			'description' => '24" x 36"')); 						$products['515-FB-536-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-167', 			'name' => 'Resin Compound K-Resin Yellow', 		'description' => '108')); 								$products['B-MX-167'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-168', 			'name' => 'Resin Compound K-Resin Black', 		'description' => '7547')); 								$products['B-MX-168'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FB-536-22', 		'name' => 'FLEX BACK - 22" WIDTH', 			'description' => 'SLIM')); 								$products['515-FB-536-22'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '181-2540', 			'name' => 'T Catheter Epidural Tun-L-XL', 		'description' => 'Plastic')); 							$products['181-2540'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-075', 			'name' => 'Tray Cover', 						'description' => '')); 									$products['B-MP-075'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-074', 			'name' => 'Tray Prep', 							'description' => '')); 									$products['B-MP-074'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-073', 			'name' => 'Tray Lower Deck', 					'description' => '')); 									$products['B-MP-073'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-072', 			'name' => 'Needle Blank Molded 20g RW', 		'description' => 'x 6"')); 							$products['B-MP-072'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-071', 			'name' => 'Infusion Wing Yellow 20g', 			'description' => '')); 									$products['B-MP-071'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-160', 			'name' => 'Reducer Blend NT-26 Normal Dry', 	'description' => '')); 									$products['B-MX-160'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-070', 			'name' => 'Infusion Wing Black 22g', 			'description' => '')); 									$products['B-MP-070'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-161', 			'name' => 'Reducer Blend NT-26 Dryer', 			'description' => 'Retarder')); 							$products['B-MX-161'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-162', 			'name' => 'Resin Compound K-Resin Green', 		'description' => '360')); 								$products['B-MX-162'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-163', 			'name' => 'Resin Compound K-Resin Orange', 		'description' => '1235')); 								$products['B-MX-163'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-1003', 			'name' => 'NON-GRADUATED PORTABLE SHIELD', 		'description' => '')); 									$products['520-1003'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-079', 			'name' => 'Connector Stingray Bottom', 			'description' => 'Hard Plastic')); 						$products['B-MP-079'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-82-MB', 			'name' => 'WILEY X-PRO', 						'description' => 'MATTE')); 							$products['525-82-MB'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-078', 			'name' => 'Connector Stingray Top', 			'description' => 'Overmold 19g')); 						$products['B-MP-078'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-077', 			'name' => 'Connector Stingray Bottom', 			'description' => 'Overmold  19g')); 					$products['B-MP-077'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-076', 			'name' => 'Connector Stingray Top Hard', 		'description' => 'Plastic')); 							$products['B-MP-076'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '516-TBB-S', 			'name' => 'Apron Radiation Protection', 		'description' => 'Standard with 2" Buckle')); 			$products['516-TBB-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '516-TBB-L', 			'name' => 'Apron Radiation Protection', 		'description' => 'Lite with 2" Buckle')); 				$products['516-TBB-L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-53-S', 			'name' => 'Eyewear Radiation Single', 			'description' => 'Wrap')); 								$products['525-53-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-131', 			'name' => 'Resin Compound Blue Vesraflex', 		'description' => '')); 									$products['B-MX-131'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-132', 			'name' => 'Tetrahydrofuran THF', 				'description' => '')); 									$products['B-MX-132'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-133', 			'name' => 'Resin Polyurethane 95A Clear', 		'description' => '')); 									$products['B-MX-133'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-53-T', 			'name' => 'Radiation Eyewear- WRAP -', 			'description' => 'TRIFOCAL Rx')); 						$products['525-53-T'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-135', 			'name' => 'Resin Compound Blue Hytrel 72D', 	'description' => '')); 									$products['B-MX-135'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-97RX-S', 		'name' => 'ULTRA LIGHT VIPER-SINGLE', 			'description' => 'VISION Rx-SILVER')); 					$products['525-97RX-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-136', 			'name' => 'Resin Compound Green Hytrel', 		'description' => '72D')); 								$products['B-MX-136'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '125-1845T', 			'name' => '***DISC*** SP Ndl Epid Tuohy', 		'description' => '18g TW x 4.5"')); 					$products['125-1845T'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-G05', 			'name' => 'ANATOMICAL MODEL - CLASSIC', 		'description' => 'HEART W/BYPASS, 2 PART')); 			$products['600-G05'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-241', 			'name' => 'Blunt Access Cannula Assy', 			'description' => '18g TW x 5.725')); 					$products['A-EP-241'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-137', 			'name' => 'Resin Compound Black Hytrel', 		'description' => '72D')); 								$products['B-MX-137'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '191-2540', 			'name' => 'T Catheter Epidural Tun-L-XL', 		'description' => 'Double Deck Tray')); 					$products['191-2540'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-063', 			'name' => 'Molded Stylet .009', 				'description' => '')); 									$products['B-MP-063'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '107-1314', 			'name' => 'SP Needle RX-2 Coudé 14g TW', 		'description' => 'x 4" w/Obturator Stylet')); 			$products['107-1314'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-062', 			'name' => 'Needle Epidural RX Molded', 			'description' => '18g TW x 6"')); 						$products['B-MP-062'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VS-XL', 			'name' => 'Apron Radiation Combo', 				'description' => 'Vest & Skirt X-Large')); 				$products['515-VS-XL'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-061', 			'name' => 'Needle Epidural RX Molded', 			'description' => '18g TW x 4.5"')); 					$products['B-MP-061'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-060', 			'name' => 'Needle Epidural RX Molded', 			'description' => '15g RW x 6"')); 						$products['B-MP-060'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-53-P', 			'name' => 'Eyewear Radiation Plano', 			'description' => 'Wrap')); 								$products['525-53-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-53-B', 			'name' => 'Eyewear Radiation Bifocal', 			'description' => 'Wrap')); 								$products['525-53-B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-53-E', 			'name' => 'WRAP AROUND - ECONOMY', 				'description' => '')); 									$products['525-53-E'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-069', 			'name' => 'Stylet Molded .014 23.5"', 			'description' => '')); 									$products['B-MP-069'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-068', 			'name' => 'Wiley Spinal Flexible Cannula', 		'description' => 'Overmold 23g x 3.843"')); 			$products['B-MP-068'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'WORKSHOP REG', 		'name' => 'WORKSHOP REGISTRATION FEE', 			'description' => '')); 									$products['WORKSHOP REG'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-066', 			'name' => 'Introducer Flexible Cannula', 		'description' => 'Molded 16g x 5"')); 					$products['B-MP-066'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-065', 			'name' => 'Ring Finger Snap Luer Lock', 		'description' => 'Clear')); 							$products['B-MP-065'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VA-536-24', 		'name' => 'Apron Radiation Velcro', 			'description' => 'Adjustable 24" x 36"')); 			$products['515-VA-536-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-129', 			'name' => 'Resin Compound Versaflex Gray', 		'description' => '')); 									$products['B-MX-129'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '166-2036', 			'name' => 'SP Catheter Epidural Spirol', 		'description' => '20g Closed End')); 					$products['166-2036'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '70129106', 			'name' => 'IFU Catheter Spirol', 				'description' => '')); 									$products['70129106'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A58/1', 			'name' => 'Anatomical Models Spine', 			'description' => 'Spinal/Brian Stem/Open Sacrum')); 	$products['600-A58/1'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-148', 			'name' => 'Grounding Pad', 						'description' => '')); 									$products['B-MX-148'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-251', 			'name' => 'Needle Epidural RX-2 Coudé', 		'description' => '18g TW x 3.5"')); 					$products['A-EP-251'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-250', 			'name' => 'Needle Epidural RX-2 Coudé', 		'description' => '15g RW x 3.5"')); 					$products['A-EP-250'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-052', 			'name' => 'Needle Epidural RX Molded', 			'description' => '15g RW x 3.5"')); 					$products['B-MP-052'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-051', 			'name' => 'Needle Epidural RX Molded', 			'description' => '15g RW x 4.5"')); 					$products['B-MP-051'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-050', 			'name' => 'Needle Epidural RX Molded', 			'description' => '18g TW x 3.5"')); 					$products['B-MP-050'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '501-XR498500', 		'name' => 'Gloves Radiation Attenuation', 		'description' => 'Lead Free 8.5')); 					$products['501-XR498500'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-140', 			'name' => 'Resin Compound HDPE Black', 			'description' => '')); 									$products['B-MX-140'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '116-2080', 			'name' => 'SP Needle Blunt Straight', 			'description' => '20g TW x 8"')); 						$products['116-2080'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-141', 			'name' => 'Resin Compound Trans Blue', 			'description' => 'Thread Assist Guide')); 				$products['B-MX-141'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-059', 			'name' => 'Stylet Molded Plastic 14g TW', 		'description' => '')); 									$products['B-MP-059'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-058', 			'name' => 'Needle Epidural RX Molded', 			'description' => '14g TW x 4"')); 						$products['B-MP-058'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-057', 			'name' => 'Needle Blank Molded 20g TW', 		'description' => 'x 8.5"')); 							$products['B-MP-057'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-056', 			'name' => 'Needle Blank Molded 20g TW', 		'description' => 'x 6"')); 							$products['B-MP-056'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-055', 			'name' => 'Needle Blank Molded 22g RW', 		'description' => 'x 6"')); 							$products['B-MP-055'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MP-054', 			'name' => 'Needle Epidural RX Molded', 			'description' => '16g TW x 3.5"')); 					$products['B-MP-054'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A58/2', 			'name' => 'Anatomical Spine-w/Femur Heads', 	'description' => 'Spinal/Brian Stem/Open Sacrum')); 	$products['600-A58/2'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A58/5', 			'name' => 'Anatomical Models Spine', 			'description' => 'Deluxe Flexible Spine')); 			$products['600-A58/5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A58/7', 			'name' => 'W/FEMUR & PAINTED MUSCLES', 			'description' => 'Deluxe Flexible Spine')); 			$products['600-A58/7'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '166-2024', 			'name' => 'SP Catheter Epidural Spirol', 		'description' => '20g CE 24"')); 						$products['166-2024'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A58/9', 			'name' => 'Anatomical Models Spine', 			'description' => 'Didactic Spinal Column w/Femur')); 	$products['600-A58/9'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A58/8', 			'name' => 'Anatomical Models Spine', 			'description' => 'Didactic Flex Spinal Column')); 		$products['600-A58/8'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-161', 			'name' => 'Cannula B Bevel 20gTW x 4.525"', 	'description' => '')); 									$products['B-NE-161'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-160', 			'name' => 'Needle Cannula 22g RW x 4.875"', 	'description' => 'B Bevel')); 							$products['B-NE-160'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '276-2215', 			'name' => 'SP R-F 22g TW 15cm 5mm Tip', 		'description' => 'Sharp Coudé')); 						$products['276-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '107-1614', 			'name' => 'SP Needle Epid RX-2 Coudé 14g', 		'description' => 'TW x 6" w/Obturator Stylet')); 		$products['107-1614'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-070', 			'name' => 'Stingray Stimulating Cable', 		'description' => 'Sub Assembly')); 						$products['B-EP-070'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '130-2445', 			'name' => '***DISC*** Ndl Spinal Quincke', 		'description' => '24g TW x 4.5"')); 					$products['130-2445'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-071', 			'name' => 'Ext Set w/ 3" Support Cord', 		'description' => '')); 									$products['B-EP-071'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-100S/LO', 		'name' => 'Gloves Radiation 100 Series', 		'description' => 'Sheath Left')); 						$products['500-100S/LO'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-072', 			'name' => 'Ext Set w/4.75" Support Cord', 		'description' => '')); 									$products['B-EP-072'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-073', 			'name' => 'Needle Introducer B Bevel', 			'description' => '')); 									$products['B-EP-073'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-LA-007', 			'name' => 'Label Spinal', 						'description' => '')); 									$products['B-LA-007'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A60', 			'name' => 'Anatomical Models Spine', 			'description' => 'Pelvic,Sacrum & Lumbar Vertebr')); 	$products['600-A60'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-074', 			'name' => 'Ext Set w/6.75" Support Cord', 		'description' => '')); 									$products['B-EP-074'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A61', 			'name' => 'PELVIC SKELETON, FEMALE', 			'description' => '')); 									$products['600-A61'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-075', 			'name' => 'Spring Close Wound .003', 			'description' => '.026 x 34"')); 						$products['B-EP-075'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-076', 			'name' => 'Stingray Stimulating Cable', 		'description' => 'Sub Assembly 19g')); 					$products['B-EP-076'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-LA-002', 			'name' => 'Label Epidural Catheter', 			'description' => '')); 									$products['B-LA-002'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '260-2215', 			'name' => 'SP R-F 22g TW 15cm 3mm Tip', 		'description' => 'Blunt Straight')); 					$products['260-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-ESIS', 			'name' => 'Genesis Epidural-Spinal', 			'description' => 'Injection Simulator')); 				$products['600-ESIS'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '260-2210', 			'name' => 'SP R-F 22g TW 10cm 3mm Tip', 		'description' => 'Blunt Straight')); 					$products['260-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-830S', 			'name' => 'Apron Radiation Demi w/Rack', 		'description' => 'Small')); 							$products['515-830S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-99BL-RXSVS', 	'name' => 'ULTRA LIGHT VIPER-BLACK-SIDE', 		'description' => 'SHIELDS-SINGLE VISION RX')); 			$products['525-99BL-RXSVS'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '130-2435', 			'name' => '***DISC*** Ndl Spinal Quincke', 		'description' => '24g TW x 3.5"')); 					$products['130-2435'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '276-2210', 			'name' => 'SP R-F 22g TW 10cm 5mm Tip', 		'description' => 'Sharp Coudé')); 						$products['276-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-083', 			'name' => 'Needle Tuohy 17g RW x 5"', 			'description' => '')); 									$products['B-EP-083'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-084', 			'name' => 'Needle Tuohy 18g RW x 3.5"', 		'description' => '')); 									$products['B-EP-084'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '268-2015', 			'name' => 'SP R-F 20g TW 15cm 15mm Tip', 		'description' => 'Blunt Coudé')); 						$products['268-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-830M', 			'name' => 'Apron Radiation Demi w/Rack', 		'description' => 'Medium')); 							$products['515-830M'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A56', 			'name' => 'Anatomical Models Spine', 			'description' => 'Spine/Rib Cage')); 					$products['600-A56'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '268-2010', 			'name' => 'SP R-F 20g TW 10cm 15mm Tip', 		'description' => 'Blunt Coudé')); 						$products['268-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A59', 			'name' => 'LIFETIME FLEXIBLE SPINE', 			'description' => '')); 									$products['600-A59'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-830L', 			'name' => 'Apron Radiation Demi w/Rack', 		'description' => 'Large')); 							$products['515-830L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A80', 			'name' => 'Anatomical Skeleton Accessory', 		'description' => 'Shoulder Ligaments')); 				$products['600-A80'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A81', 			'name' => 'Anatomical Skeleton Accessory', 		'description' => 'Hip Ligaments')); 					$products['600-A81'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VA-532-24', 		'name' => 'Apron Radiation Velcro', 			'description' => 'Adjustable 24" x 32"')); 			$products['515-VA-532-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '191-750', 			'name' => 'DD Prep Tray', 						'description' => '')); 									$products['191-750'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-102/8.5', 		'name' => '*DISC* Use 500-102-85', 				'description' => 'Gloves Radiation Resistant 8.5')); 	$products['500-102/8.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A82', 			'name' => 'Anatomical Skeleton Accessory', 		'description' => 'Knee Ligaments')); 					$products['600-A82'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-054', 			'name' => 'Sub Assembly Catheter Spirol', 		'description' => '19g 24"')); 							$products['B-EP-054'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-055', 			'name' => 'Sub Assembly Catheter Spirol', 		'description' => '20g 14"')); 							$products['B-EP-055'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-056', 			'name' => 'Sub Assembly Catheter Spirol', 		'description' => '20g 24"')); 							$products['B-EP-056'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-057', 			'name' => 'Spring Close Wound Flat Ribbon', 	'description' => '.022 x 1.125"')); 					$products['B-EP-057'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-WAQR', 			'name' => 'WRAP AROUND/QUICK RELEASE', 			'description' => '')); 									$products['515-WAQR'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-058', 			'name' => 'Sub Assembly Cath Soft Spirol', 		'description' => '19g')); 								$products['B-EP-058'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-059', 			'name' => 'Spirol Enhanced 19g Sub Assbly', 	'description' => '')); 									$products['B-EP-059'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '20200', 				'name' => 'Thread Assist Guide', 				'description' => '')); 									$products['20200'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'LA-676', 			'name' => 'Label Drug Names for 191-750', 		'description' => '')); 									$products['LA-676'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A56/2', 			'name' => 'Anatomical Models Spine', 			'description' => 'Spine/Rib Cage/Femur Head')); 		$products['600-A56/2'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-164RG', 		'name' => 'Needle RF Chiba Straight', 			'description' => '22g TW x 10cm 5mm Active Tip')); 		$products['A-EP-164RG'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'PRINT PLATE', 		'name' => 'Print Plate', 						'description' => '')); 									$products['PRINT PLATE'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '136-1730', 			'name' => 'SP Needle Introducer 17g TW x', 		'description' => '3"')); 								$products['136-1730'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '700-C-005', 			'name' => 'Vuecath Steerable Catheter', 		'description' => '')); 									$products['700-C-005'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A73', 			'name' => 'Anatomical Models Spine', 			'description' => 'Thoracic Set')); 						$products['600-A73'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-061', 			'name' => 'Sub Assembly Catheter Spirol', 		'description' => '20g 36.5"')); 						$products['B-EP-061'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A74', 			'name' => 'Anatomical Models Spine', 			'description' => 'Full Sacrum Lumbar')); 				$products['600-A74'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-062', 			'name' => 'Sub Assembly Catheter Spirol', 		'description' => '19g')); 								$products['B-EP-062'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-063', 			'name' => 'Spring Titanium Close Wound', 		'description' => '.005"')); 							$products['B-EP-063'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A72', 			'name' => 'Anatomical Models Spine', 			'description' => 'Cervical Set')); 						$products['600-A72'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-066', 			'name' => 'Spring Close Wound .0045', 			'description' => '.032 x 32.25"')); 					$products['B-EP-066'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-067', 			'name' => 'Spring Close Wound .020 x1.38"', 	'description' => '')); 									$products['B-EP-067'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A76', 			'name' => 'Anatomical Models Spine', 			'description' => 'Lumbar Vertebrae Model')); 			$products['600-A76'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-068', 			'name' => 'Spring Close Wound Flat Ribbon', 	'description' => '.020 x 36"')); 						$products['B-EP-068'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A79', 			'name' => 'BONE STRUCTURE MODEL', 				'description' => '')); 									$products['600-A79'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-029', 			'name' => 'Spring Close Wound .0045', 			'description' => '.0295 x 32"')); 						$products['B-EP-029'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-121', 			'name' => 'Needle Cannula 18g TW x 2.375"', 	'description' => 'B Bevel')); 							$products['B-NE-121'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'VIDEO', 				'name' => 'Video Set Procedural', 				'description' => '')); 									$products['VIDEO'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-120', 			'name' => 'Needle Cannula 18g TW x 4.375"', 	'description' => 'B Bevel')); 							$products['B-NE-120'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-123', 			'name' => 'Needle Cannula 18g TW x 6.08"', 	'description' => 'B Bevel')); 							$products['B-NE-123'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '261-2010', 			'name' => 'SP R-F 20g TW 10cm 5mm Tip', 		'description' => 'Blunt Straight')); 					$products['261-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-122', 			'name' => 'Needle Cannula 18g TW x 6.375"', 	'description' => 'B Bevel')); 							$products['B-NE-122'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-125', 			'name' => 'Needle Cannula 18g TW x 7"', 		'description' => '')); 									$products['B-NE-125'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'SB11', 				'name' => '1.0mm LEAD BLOCKER', 				'description' => '11" X 14"')); 						$products['SB11'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-124', 			'name' => 'Needle Cannula 20g TW x 7"', 		'description' => '')); 									$products['B-NE-124'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-127', 			'name' => 'Needle Cannula 15g RW x 7"', 		'description' => '')); 									$products['B-NE-127'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '199-2340', 			'name' => 'T Wiley Spinal', 					'description' => 'Double Deck Tray')); 					$products['199-2340'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-126', 			'name' => 'Needle Cannula 16g TW x 7"', 		'description' => '')); 									$products['B-NE-126'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-128', 			'name' => 'Needle Cannula 14g TW x 7"', 		'description' => '')); 									$products['B-NE-128'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-W54062', 		'name' => 'TUNING FORK', 						'description' => '')); 									$products['600-W54062'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-W54063', 		'name' => 'WARTENBURG PINWHEEL', 				'description' => '')); 									$products['600-W54063'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-030', 			'name' => 'Spring Close Wound .003', 			'description' => '.024 x 34"')); 						$products['B-EP-030'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-031', 			'name' => 'Spring Close Wound .005', 			'description' => '.031 x 36"')); 						$products['B-EP-031'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-032', 			'name' => 'Spring Close Wound .006', 			'description' => '.031 x 36"')); 						$products['B-EP-032'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-033', 			'name' => 'Spring Close Wound .005', 			'description' => '.031 x 23.9"')); 					$products['B-EP-033'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-034', 			'name' => 'Spring Close Wound .006', 			'description' => '.031 x 13.9"')); 					$products['B-EP-034'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-035', 			'name' => 'Spring Close Wound .005', 			'description' => '.031 x 33.15"')); 					$products['B-EP-035'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-036', 			'name' => 'Spring Close Wound Flat Ribbon', 	'description' => '.022 x 34"')); 						$products['B-EP-036'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-038', 			'name' => 'Spring Close Wound Flat Ribbon', 	'description' => '.020 x 24"')); 						$products['B-EP-038'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-039', 			'name' => 'Spring Close Wound', 				'description' => '.026 x 36"')); 						$products['B-EP-039'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-CT-BS-L', 		'name' => 'BREAST SHIELD - LARGE', 				'description' => '')); 									$products['515-CT-BS-L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-BR-536-30', 		'name' => 'Back Relief Apron-30" Width', 		'description' => '')); 									$products['515-BR-536-30'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-130', 			'name' => 'Needle Cannula 22g TW x 3.546"', 	'description' => '')); 									$products['B-NE-130'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-131', 			'name' => 'Needle Echogenic 22g TW 4.375"', 	'description' => 'B Bevel')); 							$products['B-NE-131'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-134', 			'name' => 'Needle Echogenic 20g TW 6.375"', 	'description' => 'B Bevel')); 							$products['B-NE-134'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-133', 			'name' => 'Needle Echogenic 20g TW 4.375"', 	'description' => 'B Bevel')); 							$products['B-NE-133'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-PA72R', 			'name' => 'RF Probe Adapter 72" Radionics', 	'description' => '')); 									$products['296-PA72R'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '164-2024', 			'name' => 'SP Catheter Epidural Spirol', 		'description' => '20g CE Stylet 24"')); 				$products['164-2024'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-137', 			'name' => 'Needle Echogenic 18g TW 4.375"', 	'description' => 'B Bevel')); 							$products['B-NE-137'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '502-XR2-8.5', 		'name' => 'Gloves Radiation Protection', 		'description' => 'XR2 size 8.5')); 						$products['502-XR2-8.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-S-532-18', 		'name' => 'Apron Radiation Coat Standard', 		'description' => '18" x 32"')); 						$products['515-S-532-18'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-040', 			'name' => 'Spring Close Wound', 				'description' => '.032 x 24.25"')); 					$products['B-EP-040'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-041', 			'name' => 'Spring Close Wound', 				'description' => '.024 x 11.25"')); 					$products['B-EP-041'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-042', 			'name' => 'Spring Close Wound', 				'description' => '.024 x 21.25"')); 					$products['B-EP-042'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-043', 			'name' => 'Spring Close Wound Flat Ribbon', 	'description' => '.020 x 12"')); 						$products['B-EP-043'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-BR-536-24', 		'name' => 'Apron Radiation Back Relief', 		'description' => '24" x 36"')); 						$products['515-BR-536-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB10.5', 		'name' => 'Blocker Radiation Lead .5mm', 		'description' => '10" x 12"')); 						$products['550-SB10.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '70128409', 			'name' => 'Connector Stingray Epidural', 		'description' => 'Catheter 19g')); 						$products['70128409'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-047', 			'name' => 'Spring Close Wound .032', 			'description' => 'x 12.25"')); 						$products['B-EP-047'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '188-2260', 			'name' => 'T Wiley Spinal 22g x 6"', 			'description' => 'Single Set Tray')); 					$products['188-2260'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '510-SL-S', 			'name' => 'Sleeve Radiation Small', 			'description' => '')); 									$products['510-SL-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-141', 			'name' => 'Needle Cannula 16g TW x 6.375"', 	'description' => 'B Bevel')); 							$products['B-NE-141'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '102780', 			'name' => 'Catheter Epidural Spirol 19gCE', 	'description' => 'Styletted')); 						$products['102780'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '125-2025T', 			'name' => '***DISC*** SP Ndl Epid Tuohy', 		'description' => '20g TW x 2.5"')); 					$products['125-2025T'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-142', 			'name' => 'Needle Cannula 18g RW x 3.5"', 		'description' => '')); 									$products['B-NE-142'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '510-SL-L', 			'name' => 'Sleeve Radiation Large', 			'description' => '')); 									$products['510-SL-L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '510-SL-M', 			'name' => 'Sleeve Radiation Medium', 			'description' => '')); 									$products['510-SL-M'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '020165527', 			'name' => 'Thread Assist Guide', 				'description' => '')); 									$products['020165527'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '70128411', 			'name' => 'Catheter Epidural Spirol 19gCE', 	'description' => 'Styletted Wound in Tyvek Sleev')); 	$products['70128411'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-S-532-24', 		'name' => 'Apron Radiation Coat Standard', 		'description' => '24" x 32"')); 						$products['515-S-532-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '020165525', 			'name' => 'Catheter Epidural Spirol 19gCE', 	'description' => '')); 									$products['020165525'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '020165526', 			'name' => 'Connector Stingray Epidural', 		'description' => 'Catheter 19g')); 						$products['020165526'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-SDO-536-24', 	'name' => 'Apron Radiation Surgical Drop', 		'description' => 'Off 24"x 36"')); 					$products['515-SDO-536-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '020165524', 			'name' => 'Catheter Epidural Spirol 19gOE', 	'description' => '')); 									$products['020165524'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '4895462', 			'name' => 'Thread Assist Guide', 				'description' => '')); 									$products['4895462'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '277-2015', 			'name' => 'SP R-F 20g TW 15cm 10mm Tip', 		'description' => 'Sharp Coudé')); 						$products['277-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-68-P', 			'name' => 'Eyewear Radiation Plano', 			'description' => 'Full Field Viewing Mask')); 			$products['525-68-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '287-1810', 			'name' => 'SP R-F 18g TW 10cm 10mm Tip', 		'description' => 'S Type Coudé')); 						$products['287-1810'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-99R', 			'name' => 'Eyewear Ultralite Viper', 			'description' => 'Red')); 								$products['525-99R'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-99S', 			'name' => 'Eyewear Ultralite Viper', 			'description' => 'Silver')); 							$products['525-99S'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '287-1815', 			'name' => 'SP R-F 18g TW 15cm 10mm Tip', 		'description' => 'S Type Coudé')); 						$products['287-1815'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-154', 			'name' => 'Cannula Tuohy 17g RW x 5.525"', 	'description' => '.0525R')); 							$products['B-NE-154'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '277-2010', 			'name' => 'SP R-F 20g TW 10cm 10mm Tip', 		'description' => 'Sharp Coudé')); 						$products['277-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-153', 			'name' => 'Cannula Tuohy 18g RW x 4"', 		'description' => '.0525R')); 							$products['B-NE-153'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-156', 			'name' => 'Needle Cannula 22g RW x 2.875"', 	'description' => 'B Bevel')); 							$products['B-NE-156'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-155', 			'name' => 'Cannula Tuohy 18g RW 2.5"', 		'description' => '')); 									$products['B-NE-155'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-158', 			'name' => 'Needle Cannula 25g RW x 2.875"', 	'description' => 'B Bevel')); 							$products['B-NE-158'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-157', 			'name' => 'Needle Cannula 22g RW x 3.875"', 	'description' => 'B Bevel')); 							$products['B-NE-157'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-159', 			'name' => 'Needle Cannula 25g RW x 3.875"', 	'description' => 'B Bevel')); 							$products['B-NE-159'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-99B', 			'name' => 'Eyewear Ultralite Viper', 			'description' => 'Black')); 							$products['525-99B'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-BR-536-24-T', 	'name' => 'Apron Radiation Back Relief', 		'description' => 'Thyroid Collar 24" x 36"')); 		$products['515-BR-536-24-T'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '261-2015', 			'name' => 'SP R-F 20g TW 15cm 5mm Tip', 		'description' => 'Blunt Straight')); 					$products['261-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-300', 			'name' => 'DENTAL PATIENT APRON', 				'description' => '')); 									$products['515-300'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-BR-M', 			'name' => 'BACK RELIEF-MEDIUM, W/MEDIUM', 		'description' => 'BELT')); 								$products['515-BR-M'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-EP-028', 			'name' => 'Spring Close Wound .0045', 			'description' => '.0295 x 34"')); 						$products['B-EP-028'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '176-1924', 			'name' => 'SP Catheter Spirol Block', 			'description' => '19g Closed End 24"')); 				$products['176-1924'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-VR1121L', 		'name' => 'OSTEOPOROSIS CHART', 				'description' => '')); 									$products['600-VR1121L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-99-SV-SRX', 		'name' => 'ULTRA-LIGHT VIPER- SILVER', 			'description' => 'SINGLE VISION Rx')); 					$products['525-99-SV-SRX'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '295-15', 			'name' => '***DISC*** SP R-F Thermocouple', 	'description' => 'Electrode 15cm')); 					$products['295-15'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '270-2015', 			'name' => 'SP R-F 20g TW 15cm 3mm Tip', 		'description' => 'Sharp Straight')); 					$products['270-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '299-5', 				'name' => 'SP R-F Electrode 5cm', 				'description' => 'Disposable')); 						$products['299-5'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-813-2', 			'name' => 'RACK - PEG (2 PEG)', 				'description' => '')); 									$products['520-813-2'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-402', 			'name' => 'Cryo Probe TC Male Connector', 		'description' => '')); 									$products['B-MX-402'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '173-2024', 			'name' => 'SP Catheter Spirol Block', 			'description' => '20g Open End w/Stylet 24"')); 		$products['173-2024'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '270-2010', 			'name' => 'SP R-F 20g TW 10cm 3mm Tip', 		'description' => 'Sharp Straight')); 					$products['270-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-BR-534-24-T', 	'name' => 'Apron Radiation Back Relief', 		'description' => 'Thyroid Collar 24" x 34"')); 		$products['515-BR-534-24-T'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-59-P', 			'name' => 'Eyewear Radiation Plano', 			'description' => 'Carbon Standard')); 					$products['525-59-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-59-S', 			'name' => 'Eyewear Radiation Single', 			'description' => 'Carbon Standard')); 					$products['525-59-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-CT-008', 			'name' => 'Carton Large Tray', 					'description' => '')); 									$products['B-CT-008'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-105', 			'name' => 'Needle Cannula 22g TW x 4.375"', 	'description' => '')); 									$products['B-NE-105'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-104', 			'name' => 'Needle Cannula 22g TW x 6.375"', 	'description' => '')); 									$products['B-NE-104'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-106', 			'name' => 'Cannula Chiba 20g TW x 4.375"', 	'description' => '')); 									$products['B-NE-106'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-109', 			'name' => 'Cannula Chiba 22g TW x 6.375"', 	'description' => '')); 									$products['B-NE-109'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-CT-001', 			'name' => 'Carton White', 						'description' => '')); 									$products['B-CT-001'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-108', 			'name' => 'Cannula Chiba 20g TW x 6.375"', 	'description' => '')); 									$products['B-NE-108'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-59-B', 			'name' => 'Eyewear Radiation Bifocal', 			'description' => 'Carbon Standard')); 					$products['525-59-B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-W54082', 		'name' => 'BABINSKI HAMMER', 					'description' => '')); 									$products['600-W54082'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '101487', 			'name' => 'Tubing PC-3585A OD 1.30 x 0.20', 	'description' => 'Wall')); 								$products['101487'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-S-536-24', 		'name' => 'Apron Radiation Coat Standard', 		'description' => '24" x 36"')); 						$products['515-S-536-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-100V-DKB', 		'name' => 'LEAD GLOVES-VINYL- DARK BLUE', 		'description' => '')); 									$products['500-100V-DKB'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-58S-P', 			'name' => 'DESIGNER FRAME W/SIDE SHIELDS', 		'description' => '')); 									$products['525-58S-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-112', 			'name' => 'Needle Cannula RX 14g TW x6.5"', 	'description' => '')); 									$products['B-NE-112'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-111', 			'name' => 'Cannula Chiba 22g TW x 2.4"', 		'description' => '')); 									$products['B-NE-111'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-114', 			'name' => 'Cannula B Bevel 22gTW x 4.375"', 	'description' => '')); 									$products['B-NE-114'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '181-1838', 			'name' => '*Disc* T Catheter Epidural', 		'description' => 'Caud-A-Kath Plastic')); 				$products['181-1838'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-CL', 			'name' => 'Gloves Radiation Chamois Liner', 	'description' => 'Right & Left')); 						$products['500-CL'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-116', 			'name' => 'Cannula B Bevel 20gTW x 4.375"', 	'description' => '')); 									$products['B-NE-116'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-115', 			'name' => 'Cannula B Bevel 22gTW x 6.375"', 	'description' => '')); 									$products['B-NE-115'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-118', 			'name' => 'Cannula B Bevel 20gTW x 2.375"', 	'description' => '')); 									$products['B-NE-118'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-117', 			'name' => 'Cannula B Bevel 20gTW x 6.375"', 	'description' => '')); 									$products['B-NE-117'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-119', 			'name' => 'Cannula B Bevel 22gTW x 2.375"', 	'description' => '')); 									$products['B-NE-119'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB7.5', 			'name' => 'Blocker Radiation Lead .5mm', 		'description' => '7" x 17"')); 						$products['550-SB7.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '267-2215', 			'name' => 'SP R-F 22g TW 15cm 10mm Tip', 		'description' => 'Blunt Coudé')); 						$products['267-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '275-2010', 			'name' => 'SP R-F 20g TW 10cm 3mm Tip', 		'description' => 'Sharp Coudé')); 						$products['275-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '275-2015', 			'name' => 'SP R-F 20g TW 15cm 3mm Tip', 		'description' => 'Sharp Coudé')); 						$products['275-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '267-2210', 			'name' => 'SP R-F 22g TW 10cm 10mm Tip', 		'description' => 'Blunt Coudé')); 						$products['267-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-NST-534-24', 	'name' => 'Apron Radiation New Style Tie', 		'description' => '24" x 34"')); 						$products['515-NST-534-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-PA120B', 		'name' => '** Use 296-PGA120B **', 				'description' => 'Probe Adapter 120" Baylis')); 		$products['296-PA120B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A19', 			'name' => 'Anatomical Model Full Skeleton', 	'description' => 'Tripod Stand On Wheels')); 			$products['600-A19'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-812M', 			'name' => 'Accessories Radiation Bra', 			'description' => 'Thyroid Combo Medium 34" x 38"')); 	$products['500-812M'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-VR1124L', 		'name' => 'PHEUMATIC DISEASES - CHART', 		'description' => '')); 									$products['600-VR1124L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-812L', 			'name' => 'Accessories Radiation Bra', 			'description' => 'Thyroid Combo Large 40" x 44"')); 	$products['500-812L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-812S', 			'name' => 'Accessories Radiation Bra', 			'description' => 'Thyroid Combo Small 28" x 32"')); 	$products['500-812S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VA-532-18', 		'name' => 'Apron Radiation Velcro', 			'description' => 'Adjustable 18" x 32"')); 			$products['515-VA-532-18'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-92W', 			'name' => 'Eyewear Sport Flex -WINE-', 			'description' => '')); 									$products['525-92W'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-92S', 			'name' => 'Eyewear Sport Flex Silver', 			'description' => '')); 									$products['525-92S'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '502-XR1-6.5', 		'name' => 'Gloves Radiation Protection', 		'description' => 'XR1 size 6.5')); 						$products['502-XR1-6.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A10', 			'name' => 'STAN THE SKELETON -STANDARD', 		'description' => '')); 									$products['600-A10'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-VR1123L', 		'name' => 'ARTHRITIS CHART', 					'description' => '')); 									$products['600-VR1123L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-92B', 			'name' => 'Eyewear Sport Flex Black', 			'description' => '')); 									$products['525-92B'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'F22TAG3031', 		'name' => 'Thread Assist Guide', 				'description' => '')); 									$products['F22TAG3031'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-PGA120B', 		'name' => 'RF Probe Adapter 120" Baylis', 		'description' => '')); 									$products['296-PGA120B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '116-2535', 			'name' => 'SP Needle Blunt Straight', 			'description' => '25g RW x 3.5"')); 					$products['116-2535'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-810C', 			'name' => 'Accessories Radiation Stole', 		'description' => 'Spinal Child')); 						$products['500-810C'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '295-10', 			'name' => '***DISC*** SP R-F Thermocouple', 	'description' => 'Electrode 10cm')); 					$products['295-10'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '101-1415', 			'name' => 'Discontinued use 105-1415', 			'description' => '15g RW x 3.5" RK Coude')); 			$products['101-1415'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '116-2525', 			'name' => 'SP Needle Blunt Straight', 			'description' => '25g RW x 2.5"')); 					$products['116-2525'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-104', 			'name' => 'Needle Blunt Coudé', 				'description' => '20g TW x 4.5"')); 					$products['A-EP-104'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-472', 			'name' => 'Cryo Machine Gasket Buna', 			'description' => '')); 									$products['B-MX-472'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-473', 			'name' => 'Cryo Machine Check Valve', 			'description' => 'MCV-1')); 							$products['B-MX-473'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-102', 			'name' => 'Needle Blunt Straight', 				'description' => '20g TW x 6"')); 						$products['A-EP-102'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-474', 			'name' => 'Cryo Machine Shuttle Valve', 		'description' => 'MSV-1')); 							$products['B-MX-474'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-101', 			'name' => 'Needle Blunt Straight', 				'description' => '20g TW x 4.5"')); 					$products['A-EP-101'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-475', 			'name' => 'Cryo Machine Spring .360"x.029', 	'description' => 'x.62"')); 							$products['B-MX-475'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-476', 			'name' => 'Cryo Machine Spring .360"x.026', 	'description' => 'x.5"')); 							$products['B-MX-476'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-477', 			'name' => 'Cryo Machine Spring .48"x.063"', 	'description' => 'x .62"')); 							$products['B-MX-477'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '560-1001-48', 		'name' => 'PORTA-SHIELD', 						'description' => '24" X 48"')); 						$products['560-1001-48'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-478', 			'name' => 'Cryo Probe Spring .120"x.016"', 	'description' => 'x .5"')); 							$products['B-MX-478'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-479', 			'name' => 'Cryo Machine Ground Connector', 		'description' => '')); 									$products['B-MX-479'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '501-ASG-7.0', 		'name' => 'Gloves Radiation Attenuation', 		'description' => 'Lead Free 7.0')); 					$products['501-ASG-7.0'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '262-2215', 			'name' => 'SP R-F 22g TW 15cm 10mm Tip', 		'description' => 'Blunt Straight')); 					$products['262-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '501-ASG-7.5', 		'name' => 'Gloves Radiation Attenuation', 		'description' => 'Lead Free 7.5')); 					$products['501-ASG-7.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-470', 			'name' => 'Cryo Probe TC Relief Bracket', 		'description' => '')); 									$products['B-MX-470'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-BR-CUSTOM', 		'name' => 'BACK-RELIEF CUSTOM', 				'description' => '')); 									$products['515-BR-CUSTOM'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-SY-002', 			'name' => '*DISC* Syringe LOR Plastic', 		'description' => '10cc LL')); 							$products['A-SY-002'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '115-2225', 			'name' => '***DISC*** SP Ndl Spinal Chiba', 	'description' => '22g TW x 2.5"')); 					$products['115-2225'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-469', 			'name' => 'Cryo Machine Switch Cover', 			'description' => '')); 									$products['B-MX-469'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '266-2010', 			'name' => 'SP R-F 20g TW 10cm 5mm Tip', 		'description' => 'Blunt Coudé')); 						$products['266-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-SY-003', 			'name' => 'Syringe Plastic 6cc LL', 			'description' => '')); 									$products['A-SY-003'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-SY-004', 			'name' => 'Syringe LOR Glass 5cc MLS', 			'description' => '')); 									$products['A-SY-004'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '266-2015', 			'name' => 'SP R-F 20g TW 15cm 5mm Tip', 		'description' => 'Blunt Coudé')); 						$products['266-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-SY-008', 			'name' => 'Syringe LOR Glass 10cc MLL', 		'description' => '')); 									$products['A-SY-008'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-200H', 			'name' => 'Apron Radiation Hangers', 			'description' => '21.25" x 10"')); 					$products['520-200H'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-112', 			'name' => 'Needle Blunt Coudé', 				'description' => '22g RW x 6"')); 						$products['A-EP-112'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-111', 			'name' => 'Needle Blunt Coudé', 				'description' => '22g RW x 4.5"')); 					$products['A-EP-111'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-VR1172L', 		'name' => 'PELVIS & HIP CHART', 				'description' => '')); 									$products['600-VR1172L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-110', 			'name' => 'Needle Blunt Coudé', 				'description' => '22g RW x 3"')); 						$products['A-EP-110'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-BR-532-18-T', 	'name' => 'Apron Radiation Back Relief', 		'description' => 'Thyroid Collar 18" x 32"')); 		$products['515-BR-532-18-T'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '115-2215', 			'name' => '***DISC*** Needle Spinal Chiba', 	'description' => '22g TW x 1.5"')); 					$products['115-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '262-2210', 			'name' => 'SP R-F 22g TW 10cm 10mm Tip', 		'description' => 'Blunt Straight')); 					$products['262-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-BR-532-24', 		'name' => 'Apron Radiation Back Relief', 		'description' => '24" x 32"')); 						$products['515-BR-532-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-SY-012', 			'name' => 'Syringe Plastic 3cc LL', 			'description' => '')); 									$products['A-SY-012'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-SY-011', 			'name' => 'Syringe Plastic 3cc LS', 			'description' => '')); 									$products['A-SY-011'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-DR-002', 			'name' => 'Swab Sticks Iodophor PVP (3)', 		'description' => '')); 									$products['A-DR-002'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-SY-017', 			'name' => 'Syringe Plastic 20cc LS', 			'description' => '')); 									$products['A-SY-017'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-109', 			'name' => 'Needle Blunt Straight', 				'description' => '22g RW x 6"')); 						$products['A-EP-109'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-108', 			'name' => 'Needle Blunt Straight', 				'description' => '22g RW x 4.5"')); 					$products['A-EP-108'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-CL/LO', 			'name' => 'Gloves Radiation Chamois Liner', 	'description' => 'Left')); 								$products['500-CL/LO'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-107', 			'name' => 'Needle Blunt Straight', 				'description' => '22g RW x 3"')); 						$products['A-EP-107'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-106', 			'name' => 'Needle Blunt Coudé', 				'description' => '20g TW x 8"')); 						$products['A-EP-106'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-451', 			'name' => 'Cryo Machine Ball Valve 1/8', 		'description' => 'NPT')); 								$products['B-MX-451'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '195-3022', 			'name' => 'T Epidural Tuohy 22g Glass', 		'description' => 'Mini')); 								$products['195-3022'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '195-3020', 			'name' => '*DISC* T Epidural Tuohy 20g', 		'description' => 'Glass Mini')); 						$products['195-3020'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-VR1171L', 		'name' => 'HAND & WRIST CHART', 				'description' => '')); 									$products['600-VR1171L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-456', 			'name' => 'Cryo Machine Dibond Sheet 4mm', 		'description' => '11.25" x 11.25"')); 				$products['B-MX-456'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FW-532-24', 		'name' => 'Apron Radiation Fast Wrap', 			'description' => '24" x 32"')); 						$products['515-FW-532-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '195-3018', 			'name' => '*Disc* T Epidural Tuohy 18g', 		'description' => 'Glass Mini')); 						$products['195-3018'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-VR1170L', 		'name' => 'SHOULDER & ELBOW CHART', 			'description' => '')); 									$products['600-VR1170L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-BR-532-18', 		'name' => 'Apron Radiation Back Relief', 		'description' => '18" x 32"')); 						$products['515-BR-532-18'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB3.5', 			'name' => 'Blocker Radiation Lead .5mm', 		'description' => '5" x 12"')); 						$products['550-SB3.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-462', 			'name' => 'Cryo Machine Switch MTA 206', 		'description' => '')); 									$products['B-MX-462'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-463', 			'name' => 'Cryo Machine Sintered Filter', 		'description' => '40 Micron')); 						$products['B-MX-463'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-DPGA06B', 		'name' => 'RF Probe Adapter Ground Baylis', 	'description' => 'Disposable')); 						$products['296-DPGA06B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-464', 			'name' => 'Cryo Machine Pressure', 				'description' => 'Regulator')); 						$products['B-MX-464'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-465', 			'name' => 'Cryo Machine TC Mount', 				'description' => '')); 									$products['B-MX-465'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-466', 			'name' => 'Cryo Machine TC Female', 			'description' => 'Connector')); 						$products['B-MX-466'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FW-532-18', 		'name' => 'Apron Radiation Fast Wrap', 			'description' => '18" x 32"')); 						$products['515-FW-532-18'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'P5182', 				'name' => 'LEATHER DISPLAY CASE', 				'description' => '')); 									$products['P5182'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-467', 			'name' => 'Cryo Machine Control Knob', 			'description' => '')); 									$products['B-MX-467'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-468', 			'name' => 'Cryo Machine Battery Holder', 		'description' => '4 "D"')); 							$products['B-MX-468'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '299-10', 			'name' => 'SP R-F Electrode 10cm', 				'description' => 'Disposable')); 						$products['299-10'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '299-15', 			'name' => 'SP R-F Electrode 15cm', 				'description' => 'Disposable')); 						$products['299-15'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '115-2235', 			'name' => 'SP Needle Spinal Chiba', 			'description' => '22g TW x 3.5"')); 					$products['115-2235'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-459', 			'name' => 'Cryo Machine Valve Core 2000', 		'description' => 'PSI')); 								$products['B-MX-459'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-99R-S', 			'name' => 'ULTRA LIGHT VIPER W/SIDE', 			'description' => 'SHIELDS - RED COLOR')); 				$products['525-99R-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '164-1936T', 			'name' => 'SP Catheter Epidural Spirol', 		'description' => '19g CE w/Stylet Tuohy Borst')); 		$products['164-1936T'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '105-1518', 			'name' => 'SP Needle Epidural RX Coudé', 		'description' => '18g TW x 4.5"')); 					$products['105-1518'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '105-1516', 			'name' => 'SP Needle Epidural RX Coudé', 		'description' => '16g TW x 4.5"')); 					$products['105-1516'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-MP-001', 			'name' => 'Filter Epidural Flat', 				'description' => '')); 									$products['A-MP-001'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-97', 			'name' => 'MAX FIT EYEWEAR-SILVER', 			'description' => '')); 									$products['525-97'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '115-2260', 			'name' => 'SP Needle Spinal Chiba', 			'description' => '22g TW x 6"')); 						$products['115-2260'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-E-534-24', 		'name' => 'Apron Radiation Coat Economy', 		'description' => '24" x 34"')); 						$products['515-E-534-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-99', 			'name' => 'ULTRA-LIGHT-VIPER-', 				'description' => '')); 									$products['525-99'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-VR1176L', 		'name' => 'FOOT & ANKLE CHART', 				'description' => '')); 									$products['600-VR1176L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-PA06SN', 		'name' => 'RF Probe Adapter 6" Smith &', 		'description' => 'Nephew')); 							$products['296-PA06SN'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '501-XR498000', 		'name' => 'Gloves Radiation Attenuation', 		'description' => 'Lead Free 8.0')); 					$products['501-XR498000'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-MP-013', 			'name' => 'Snap On Wing', 						'description' => '')); 									$products['A-MP-013'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-MP-010', 			'name' => 'Stopcock 3-way LL w/Caps', 			'description' => '')); 									$products['A-MP-010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-DR-009', 			'name' => 'Iodophor Solution 3/4 oz', 			'description' => '')); 									$products['A-DR-009'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-97RX', 			'name' => 'MAX FIT BIFOCAL EYEWEAR', 			'description' => '')); 									$products['525-97RX'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-DR-006', 			'name' => 'Lidocaine 1% 5ml', 					'description' => '')); 									$products['A-DR-006'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '10669X', 			'name' => 'Needle Epidural Tuohy', 				'description' => '17g TW x 3.5" Wng Mrkd')); 			$products['10669X'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-DR-005', 			'name' => 'Sodium Chloride 10ml 0.9%', 			'description' => '')); 									$products['A-DR-005'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '286-2005', 			'name' => 'SP R-F 20g TW 5cm 5mm Tip', 			'description' => 'S Type Coudé')); 						$products['286-2005'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '286-2015', 			'name' => 'SP R-F 20g TW 15cm 5mm Tip', 		'description' => 'S Type Coudé')); 						$products['286-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB1', 			'name' => 'Blocker Radiation Lead 1.0mm', 		'description' => '4" x 10"')); 						$products['550-SB1'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB3', 			'name' => 'Blocker Radiation Lead 1.0mm', 		'description' => '5" x 12"')); 						$products['550-SB3'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB2', 			'name' => 'Blocker Radiation Lead 1.0mm', 		'description' => '5" x 8"')); 						$products['550-SB2'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '286-2010', 			'name' => 'SP R-F 20g TW 10cm 5mm Tip', 		'description' => 'S Type Coudé')); 						$products['286-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-SY-021', 			'name' => 'Syringe LOR Plastic 7cc LS', 		'description' => '')); 									$products['A-SY-021'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-SY-022', 			'name' => 'Syringe Plastic 12cc LL', 			'description' => '')); 									$products['A-SY-022'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB9', 			'name' => 'Blocker Radiation Lead 1.0mm', 		'description' => '8.5" x 17"')); 						$products['550-SB9'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB8', 			'name' => 'Blocker Radiation Lead 1.0mm', 		'description' => '8.5" x 14"')); 						$products['550-SB8'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-404', 			'name' => 'Cryo Machine Footswitch', 			'description' => 'Housing')); 							$products['B-MX-404'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-DR-011', 			'name' => 'Benzion Tincture Swabstick', 		'description' => '')); 									$products['A-DR-011'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-405', 			'name' => 'Cryo Machine Handwheel CGA 326', 	'description' => '')); 									$products['B-MX-405'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB5', 			'name' => 'Blocker Radiation Lead 1.0mm', 		'description' => '5.5" x 14"')); 						$products['550-SB5'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'PRO-1001', 			'name' => 'Table Pain Management Options', 		'description' => 'Foot Controller')); 					$products['PRO-1001'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '115-2280', 			'name' => 'SP Needle Spinal Chiba', 			'description' => '22g TW x 8"')); 						$products['115-2280'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB4', 			'name' => 'Blocker Radiation Lead 1.0mm', 		'description' => '6" x 10"')); 						$products['550-SB4'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-408', 			'name' => 'Cryo Machine Battery Pack', 			'description' => 'Mounting Bracket')); 					$products['B-MX-408'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB7', 			'name' => 'Blocker Radiation Lead 1.0mm', 		'description' => '7" x 17"')); 						$products['550-SB7'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-409', 			'name' => 'Cryo Machine Battery Cover', 		'description' => 'Plate')); 							$products['B-MX-409'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB6', 			'name' => 'Blocker Radiation Lead 1.0mm', 		'description' => '7" x 11"')); 						$products['550-SB6'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '298-5', 				'name' => 'SP R-F Nitinol Electrode 5cm', 		'description' => 'Hyperflex')); 						$products['298-5'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'PRO-1000', 			'name' => 'Table Pain Management Options', 		'description' => 'Wireless Hand Held Controller')); 	$products['PRO-1000'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-81', 			'name' => 'WILEY -HYDRO', 						'description' => '')); 									$products['525-81'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-CL/RO', 			'name' => 'Gloves Radiation Chamois Liner', 	'description' => 'Right')); 							$products['500-CL/RO'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-VR1174L', 		'name' => 'KNEE JOINT CHART', 					'description' => '')); 									$products['600-VR1174L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-MX-125', 			'name' => 'Filter Straw 5 Micron 4"', 			'description' => '')); 									$products['A-MX-125'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-MX-124', 			'name' => 'Sponge Stick Applicators', 			'description' => 'Curved Handle')); 					$products['A-MX-124'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-MP-034', 			'name' => '*DISC* Snap On Wing', 				'description' => '')); 									$products['A-MP-034'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-MP-032', 			'name' => 'Adapter Epidural 21g', 				'description' => '')); 									$products['A-MP-032'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '105-1515', 			'name' => 'SP Needle Epidural RX Coudé', 		'description' => '15g RW x 4.5"')); 					$products['105-1515'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-076', 			'name' => 'Color Concentrate Yellow 108', 		'description' => 'Powdered')); 							$products['B-MX-076'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-077', 			'name' => 'Color Concentrate Brown 1535', 		'description' => 'Powdered')); 							$products['B-MX-077'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-078', 			'name' => 'Color Concentrate Medium Gray', 		'description' => 'Powdered')); 							$products['B-MX-078'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-189', 			'name' => 'Needle RF B Bevel', 					'description' => '20g TW x 15cm 5mm Active Tip')); 		$products['A-EP-189'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-079', 			'name' => 'Color Concentrate Light Gray', 		'description' => 'Powdered')); 							$products['B-MX-079'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-188', 			'name' => 'Needle RF B Bevel', 					'description' => '20g TW x 10cm 10mm Active Tip')); 	$products['A-EP-188'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-187', 			'name' => 'Needle RF B Bevel', 					'description' => '20g TW x 10cm 5mm Active Tip')); 		$products['A-EP-187'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'P41110A', 			'name' => 'Catheter SmartInfuser R/O', 			'description' => '140mm')); 							$products['P41110A'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-186', 			'name' => 'Needle RF B Bevel', 					'description' => '22g TW x 15cm 10mm Active Tip')); 	$products['A-EP-186'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-185', 			'name' => 'Needle RF B Bevel', 					'description' => '22g TW x 15cm 5mm Active Tip')); 		$products['A-EP-185'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-184', 			'name' => 'Needle RF B Bevel', 					'description' => '22g TW x 10cm 10mm Active Tip')); 	$products['A-EP-184'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-070', 			'name' => 'Resin Compound Black', 				'description' => '')); 									$products['B-MX-070'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-071', 			'name' => 'Color Concentrate Trans Blue', 		'description' => '')); 									$products['B-MX-071'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-072', 			'name' => 'Color Concentrate Purple 528', 		'description' => 'Powdered')); 							$products['B-MX-072'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-DPIA06B', 		'name' => 'RF Probe Adapter Multi-Lession', 	'description' => 'Baylis Disposable')); 				$products['296-DPIA06B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-073', 			'name' => 'Color Concentrate Orange 1235', 		'description' => 'Powdered')); 							$products['B-MX-073'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-074', 			'name' => 'Color Concentrate Green 360', 		'description' => 'Powdered')); 							$products['B-MX-074'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-075', 			'name' => 'Color Concentrate Red 220', 			'description' => 'Powdered')); 							$products['B-MX-075'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1911-219', 			'name' => 'SP Nexus Connector Epidural', 		'description' => '19g')); 								$products['1911-219'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-S-534-24Q/T', 	'name' => 'Apron Radiation Coat Standard', 		'description' => 'Thyroid/Quick Release24"x 34"')); 	$products['515-S-534-24Q/T'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-MX30', 			'name' => 'MX 30 - PLANO', 						'description' => '')); 									$products['525-MX30'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-088', 			'name' => 'Resin Compound Pink 1895C', 			'description' => '')); 									$products['B-MX-088'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-63-S', 			'name' => 'Eyewear Radiation Single', 			'description' => 'Splash Goggle')); 					$products['525-63-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-089', 			'name' => 'Resin Compound Yellow 108C', 		'description' => '')); 									$products['B-MX-089'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-199', 			'name' => 'Needle RF B Bevel 18g TW', 			'description' => 'x 10cm 10mm Active Tip')); 			$products['A-EP-199'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-198', 			'name' => 'Needle RF B Bevel Coude', 			'description' => '20g TW x 15cm 10mm Active Tip')); 	$products['A-EP-198'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A13/1', 			'name' => 'SAM THE SUPER SKELETON', 			'description' => 'ON HANGING STAND')); 					$products['600-A13/1'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-197', 			'name' => 'Needle RF B Bevel Coude', 			'description' => '20g TW x 15cm 5mm Active Tip')); 		$products['A-EP-197'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-196', 			'name' => 'Needle RF B Bevel Coude', 			'description' => '20g TW x 10cm 10mm Active Tip')); 	$products['A-EP-196'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-195', 			'name' => 'Needle RF B Bevel Coude', 			'description' => '20g TW x 10cm 5mm Active Tip')); 		$products['A-EP-195'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-080', 			'name' => 'Color Concentrate Pink 1895', 		'description' => 'Powdered')); 							$products['B-MX-080'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-081', 			'name' => 'Color Concentrate Black', 			'description' => 'Powdered')); 							$products['B-MX-081'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-082', 			'name' => 'Resin Polypropylene Natural', 		'description' => '')); 									$products['B-MX-082'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-191', 			'name' => 'Needle RF B Bevel Coude', 			'description' => '22g TW x 10cm 5mm Active Tip')); 		$products['A-EP-191'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-083', 			'name' => 'Resin Polyethylene Low Density', 	'description' => 'LDPE')); 								$products['B-MX-083'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1911-221', 			'name' => 'SP Nexus Connector Epidural', 		'description' => '21g')); 								$products['1911-221'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-190', 			'name' => 'Needle RF B Bevel', 					'description' => '20g TW x 15cm 10mm Active Tip')); 	$products['A-EP-190'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-084', 			'name' => 'Resin Compound Green 360C', 			'description' => '')); 									$products['B-MX-084'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-085', 			'name' => 'Resin Compound Orange 1235C', 		'description' => '')); 									$products['B-MX-085'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '120-2525', 			'name' => 'SP Needle Bella-D 25g RW x 2.5', 	'description' => '"')); 								$products['120-2525'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-63-P', 			'name' => 'Eyewear Radiation Plano', 			'description' => 'Splash Goggle')); 					$products['525-63-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-086', 			'name' => 'Resin Compound Gray/White 7541', 	'description' => 'C')); 								$products['B-MX-086'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600TW-DURA', 		'name' => 'Genesis Spinal Tubing', 				'description' => 'Thin Wall')); 						$products['600TW-DURA'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-63-B', 			'name' => 'Eyewear Radiation Bifocal', 			'description' => 'Splash Goggle')); 					$products['525-63-B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-74S-S', 			'name' => 'Eyewear Radiation Ultra Light', 		'description' => 'Single Euro Shield/Side Shield')); 	$products['525-74S-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-74S-P', 			'name' => 'Eyewear Radiation Ultra Light', 		'description' => 'Plano Euro Shield/Side Shield')); 	$products['525-74S-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-054', 			'name' => 'Ink Hardener PLH', 					'description' => '')); 									$products['B-MX-054'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-055', 			'name' => 'Resin Pebax 25D', 					'description' => '')); 									$products['B-MX-055'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-056', 			'name' => 'Resin Pebax 4533 SA01 Med', 			'description' => '')); 									$products['B-MX-056'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-057', 			'name' => 'Resin Carbothane 72D', 				'description' => '')); 									$products['B-MX-057'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-058', 			'name' => 'Resin Pebax 40D', 					'description' => '')); 									$products['B-MX-058'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-165', 			'name' => 'Needle RF Chiba Straight', 			'description' => '22g TW x 10cm 10mm Active Tip')); 	$products['A-EP-165'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-059', 			'name' => 'Resin Pebax 55D', 					'description' => '')); 									$products['B-MX-059'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '120-2535', 			'name' => 'SP Needle Bella-D 25g RW x 3.5', 	'description' => '"')); 								$products['120-2535'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '272-2010', 			'name' => 'SP R-F 20g TW 10cm 10mm Tip', 		'description' => 'Sharp Straight')); 					$products['272-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-PA06S5', 		'name' => 'RF Probe Adapter 6" Stryker', 		'description' => '5cm')); 								$products['296-PA06S5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-052', 			'name' => 'Ink Yellow PLT4 #10', 				'description' => '')); 									$products['B-MX-052'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-053', 			'name' => 'Ink Thinner PLTA', 					'description' => '')); 									$products['B-MX-053'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '100959', 			'name' => '3Win DBX1 Reinforced Tubing', 		'description' => '')); 									$products['100959'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '282-2015', 			'name' => 'SP R-F 20g TW 15cm 10mm Tip', 		'description' => 'S Type')); 							$products['282-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '125-2060T', 			'name' => 'SP Needle Epidural Tuohy', 			'description' => '20g TW x 6"')); 						$products['125-2060T'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-100S/RO', 		'name' => 'Gloves Radiation 100 Series', 		'description' => 'Sheath Right')); 						$products['500-100S/RO'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-065', 			'name' => 'Resin Compound Light Gray', 			'description' => '')); 									$products['B-MX-065'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-066', 			'name' => 'Resin Polypropylene w/8%', 			'description' => 'Barium Sulfate')); 					$products['B-MX-066'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-069', 			'name' => 'Resin Santoprene Thermoplastic', 	'description' => 'Natural 55A')); 						$products['B-MX-069'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '282-2010', 			'name' => 'SP R-F 20g TW 10cm 10mm Tip', 		'description' => 'S Type')); 							$products['282-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-060', 			'name' => 'Resin Pebax 63D', 					'description' => '')); 									$products['B-MX-060'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-061', 			'name' => 'Resin Polyvinyl Chloride', 			'description' => 'PVC 82A')); 							$products['B-MX-061'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-062', 			'name' => 'Resin FEP w/8% Barium Sulfate', 		'description' => '')); 									$products['B-MX-062'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-063', 			'name' => 'Resin Pebax 40D White', 				'description' => '')); 									$products['B-MX-063'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-064', 			'name' => 'Color Concentrate Light Gray', 		'description' => 'Pellets')); 							$products['B-MX-064'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-830XL', 			'name' => 'Apron Radiation Demi w/Rack', 		'description' => 'X-Large')); 							$products['515-830XL'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '272-2015', 			'name' => 'SP R-F 20g TW 15cm 10mm Tip', 		'description' => 'Sharp Straight')); 					$products['272-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-LA-051', 			'name' => '***DISC*** Label Probe Adapter', 	'description' => 'Serial Number Smith & Nephew')); 		$products['B-LA-051'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-032', 			'name' => 'Ink Black G12', 						'description' => '')); 									$products['B-MX-032'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-LA-050', 			'name' => 'Label Probe Adapter', 				'description' => 'Serial Number Baylis')); 				$products['B-LA-050'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-034', 			'name' => 'Ink Thinner Fast Speed', 			'description' => '')); 									$products['B-MX-034'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-145', 			'name' => 'Needle RF Blunt Coude', 				'description' => '22g TW x 10cm 10mm Active Tip')); 	$products['A-EP-145'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-035', 			'name' => 'Ink Thinner Medium Speed', 			'description' => '')); 									$products['B-MX-035'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-144', 			'name' => 'Needle RF Blunt Coude', 				'description' => '22g TW x 10cm 5mm Active Tip')); 		$products['A-EP-144'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-036', 			'name' => 'Color Concentrate PE RoyalBlue', 	'description' => '')); 									$products['B-MX-036'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-037', 			'name' => 'Resin HDPE Alathon', 				'description' => '')); 									$products['B-MX-037'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-038', 			'name' => 'Labels laser Printer 5" x 3.5"', 	'description' => '')); 									$products['B-MX-038'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '125-1835T', 			'name' => 'SP Needle Epidural Tuohy', 			'description' => '18g TW x 3.5"')); 					$products['125-1835T'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-141', 			'name' => 'Needle RF Blunt Coude', 				'description' => '20g TW x 10cm 10mm Active Tip')); 	$products['A-EP-141'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-039', 			'name' => 'Ink Black Markem 2422', 				'description' => '')); 									$products['B-MX-039'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '194-2024', 			'name' => 'SP Spirol Short Epidural Set', 		'description' => '20g CE 24"')); 						$products['194-2024'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-235TR', 			'name' => 'Gloves Radiation Tri-rad', 			'description' => '')); 									$products['500-235TR'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-MP-088', 			'name' => 'Snap On Wing Spectra', 				'description' => '')); 									$products['A-MP-088'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-DPA06S15', 		'name' => 'RF Probe Adapter Stryker', 			'description' => '15cm Disposable')); 					$products['296-DPA06S15'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-809XL', 			'name' => 'Accessories Radiation Briefs', 		'description' => 'X-Large')); 							$products['500-809XL'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-DPA06S10', 		'name' => 'RF Probe Adapter Stryker', 			'description' => '10cm Disposable')); 					$products['296-DPA06S10'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-043', 			'name' => 'Labels Laser Printer 8.5"x5.5"', 	'description' => '')); 									$products['B-MX-043'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-048', 			'name' => 'Ink Black 7550', 					'description' => '')); 									$products['B-MX-048'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-049', 			'name' => 'Ink Thinner 7550', 					'description' => '')); 									$products['B-MX-049'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-VR1359', 		'name' => 'ANATOMICAL CHART-BLOOD VESSEL', 		'description' => '& NERVE PATHWAY')); 					$products['600-VR1359'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-040', 			'name' => 'Ink Thinner R', 						'description' => '')); 									$products['B-MX-040'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'F22AGO0010', 		'name' => 'Introducer Flexible Cannula', 		'description' => 'w/17g TW x 3.5" Tuohy MetalHub')); 	$products['F22AGO0010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'F22AGO0014', 		'name' => 'RX2 16g x 3.5"', 					'description' => 'w/ attachable wings')); 				$products['F22AGO0014'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-LA-054', 			'name' => '***DISC*** Label Probe Adapter', 	'description' => 'Serial Number Diros')); 				$products['B-LA-054'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'F22AGO0012', 		'name' => 'Needle Epidural RK 16gTW x3.5"', 	'description' => 'w/Wing Bulk Non Sterile')); 			$products['F22AGO0012'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-LA-053', 			'name' => '***DISC*** Label Probe Adapter', 	'description' => 'Serial Number Stryker')); 			$products['B-LA-053'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'F22AGO0013', 		'name' => 'RX Coude 16g x 3.5"', 				'description' => 'w/ attachable wings')); 				$products['F22AGO0013'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-LA-052', 			'name' => '***DSIC*** Label Probe Adapter', 	'description' => 'Serial Number Radionics')); 			$products['B-LA-052'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-126', 			'name' => 'Needle RF Blunt Coude', 				'description' => '20g TW x 15cm 10mm Active Tip')); 	$products['A-EP-126'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-494', 			'name' => 'Cryo Machine Piston Defrost', 		'description' => 'Pilot')); 							$products['B-MX-494'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-011', 			'name' => 'Retainer Packaging HDPE', 			'description' => '')); 									$products['B-MX-011'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-495', 			'name' => 'Cryo Machine Actuator Guide', 		'description' => '')); 									$products['B-MX-495'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-013', 			'name' => 'Labels Laser Printer 2" x 4"', 	'description' => '')); 									$products['B-MX-013'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-497', 			'name' => 'Cryo Probe Seal Spacer', 			'description' => '')); 									$products['B-MX-497'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '505-611NSS', 		'name' => 'Collar Radiation Thyroid', 			'description' => 'New Style Small 22.5"')); 			$products['505-611NSS'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-122', 			'name' => 'Needle RF Blunt Straight', 			'description' => '20g TW x 15cm 15mm Active Tip')); 	$products['A-EP-122'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-014', 			'name' => 'Labels Laser Printer 3 1/3"x4"', 	'description' => '')); 									$products['B-MX-014'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-498', 			'name' => 'Cryo Machine Probe Holder', 			'description' => '')); 									$products['B-MX-498'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-121', 			'name' => 'Needle RF Blunt Straight', 			'description' => '20g TW x 15cm 10mm Active Tip')); 	$products['A-EP-121'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-015', 			'name' => 'Tyvek Sleeve 3" x 2"', 			'description' => '')); 									$products['B-MX-015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-S-532-24Q/T', 	'name' => 'Apron Radiation Coat Standard', 		'description' => 'Thyroid/Quick Release24"x 32"')); 	$products['515-S-532-24Q/T'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-120', 			'name' => 'Needle RF Blunt Straight', 			'description' => '20g TW x 15cm 5mm Active Tip')); 		$products['A-EP-120'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '505-611NSL', 		'name' => 'Collar Radiation Thyroid', 			'description' => 'New Style Large 25.5"')); 			$products['505-611NSL'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-74S-B', 			'name' => 'Eyewear Radiation Ultra Light', 		'description' => 'Bifocal Euro Shield/SideShield')); 	$products['525-74S-B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-MX-492', 			'name' => 'Cryo Machine Cover Freeze', 			'description' => 'Pilot')); 							$products['B-MX-492'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '155-1520', 			'name' => 'SP Catheter Epidural Tun-L-Kat', 	'description' => '')); 									$products['155-1520'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-117', 			'name' => 'Needle Blunt 25g RW x 2.5"', 		'description' => '')); 									$products['A-EP-117'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-116', 			'name' => 'Needle Blunt Coudé', 				'description' => '25g RW x 3.5"')); 					$products['A-EP-116'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-137', 			'name' => 'Needle RF Blunt Straight', 			'description' => '22g TW x 15cm 5mm Active Tip')); 		$products['A-EP-137'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-134', 			'name' => 'Needle RF Blunt Straight', 			'description' => '22g TW x 10cm 10mm Active Tip')); 	$products['A-EP-134'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-133', 			'name' => 'Needle RF Blunt Straight', 			'description' => '22g TW x 10cm 5mm Active Tip')); 		$products['A-EP-133'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '181-1353', 			'name' => 'T Catheter Epidural REC', 			'description' => 'Plastic')); 							$products['181-1353'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-131', 			'name' => 'Needle RF Blunt Straight', 			'description' => '20g TW x 10cm 15mm Active Tip')); 	$products['A-EP-131'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-130', 			'name' => 'Needle RF Blunt Straight', 			'description' => '20g TW x 10cm 10mm Active Tip')); 	$products['A-EP-130'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-VR1334', 		'name' => 'ANATOMICAL CHART - THE HUMAN', 		'description' => 'HEART')); 							$products['600-VR1334'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '294-5', 				'name' => '***DISc*** P R-F Nitinol', 			'description' => 'Electrode 5cm')); 					$products['294-5'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FW-536-24', 		'name' => 'Apron Radiation Fast Wrap', 			'description' => '24" x 36"')); 						$products['515-FW-536-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-200L', 			'name' => 'Gloves Radiation 200 Series', 		'description' => 'Leather Right & Left')); 				$products['500-200L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-WAFB', 			'name' => 'WRAP-AROUND FLEX BACK', 				'description' => '')); 									$products['515-WAFB'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '118-2080', 			'name' => '*Disc*SP Needle Blunt Straight', 	'description' => '20g TW x 8"')); 						$products['118-2080'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '501-XR497500', 		'name' => 'Gloves Radiation Attenuation', 		'description' => 'Lead Free 7.5')); 					$products['501-XR497500'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-SO-PT', 			'name' => 'Apron Radiation Combo', 				'description' => 'Skirt Petite')); 						$products['515-SO-PT'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-102/7.5', 		'name' => '*DISC* Use 500-102-75', 				'description' => 'Gloves Radiation Resistant 7.5')); 	$products['500-102/7.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '155-2542.', 			'name' => 'Catheter Epid Tun-L-XL/24  OV', 		'description' => '')); 									$products['155-2542.'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-163RG', 		'name' => 'Needle RF Chiba Straight', 			'description' => '22g TW x 10cm 3mm Active Tip')); 		$products['A-EP-163RG'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '191-1520', 			'name' => 'T Catheter Epidural Tun-L-Kath', 	'description' => 'Double Deck Tray')); 					$products['191-1520'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '700-Y-001', 			'name' => 'Vuecath Spinal Accessory Kits', 		'description' => 'Endoscopy')); 						$products['700-Y-001'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-064', 			'name' => 'Needle Cannula 20g HV x 3.5"', 		'description' => '')); 									$products['B-NE-064'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '125-1825T', 			'name' => '***DISC*** SP Ndl Epid Tuohy', 		'description' => '18g TW x 2.5"')); 					$products['125-1825T'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-066', 			'name' => 'Needle Cannula 20g TW x 6.5"', 		'description' => '')); 									$products['B-NE-066'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-065', 			'name' => 'Needle Cannula 22g S x 3.25"', 		'description' => '')); 									$products['B-NE-065'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '118-2060', 			'name' => 'SP Needle Blunt Coude', 				'description' => '20g TW x 6"')); 						$products['118-2060'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-067', 			'name' => 'Needle Cannula 22g RW x 6.5"', 		'description' => '')); 									$products['B-NE-067'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-WA/BR5336', 		'name' => 'Apron Radiation Wrap Around', 		'description' => 'Back Relief 44" x 36"')); 			$products['515-WA/BR5336'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '179-2340', 			'name' => 'SP Wiley Spinal Flexible', 			'description' => 'Needle')); 							$products['179-2340'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '130-2545', 			'name' => 'SP Needle Spinal Quincke', 			'description' => '25g TW x 4.5"')); 					$products['130-2545'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-WA/BR5338', 		'name' => 'Apron Radiation Wrap Around', 		'description' => 'Back Relief 48" x 38"')); 			$products['515-WA/BR5338'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '264-2208', 			'name' => 'SP R-F 22g TW 8.06cm 10mm Tip', 		'description' => 'Blunt Straight')); 					$products['264-2208'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-071', 			'name' => 'Needle Cannula RX 18g TW x 4"', 	'description' => '')); 									$products['B-NE-071'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-072', 			'name' => 'Needle Cannula 20g TW x 8.5"', 		'description' => 'Blasted')); 							$products['B-NE-072'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-075', 			'name' => 'Needle Cannula RX 16g TW x 4"', 	'description' => '')); 									$products['B-NE-075'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-074', 			'name' => 'Needle Cannula RX 15g RW x 4"', 	'description' => '')); 									$products['B-NE-074'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-077', 			'name' => 'Needle Cannula RX 16g TW x 5"', 	'description' => '')); 									$products['B-NE-077'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-076', 			'name' => 'Needle Cannula RX 14g TW x4.5"', 	'description' => '')); 									$products['B-NE-076'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '502-XR2-7.5', 		'name' => 'Gloves Radiation Protection', 		'description' => 'XR2 size 7.5')); 						$products['502-XR2-7.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-43-P', 			'name' => 'SPLASH GOGGLE - PLANO', 				'description' => '')); 									$products['525-43-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1911-600', 			'name' => 'SP Double Nelson Extension Set', 	'description' => '')); 									$products['1911-600'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '130-2535', 			'name' => 'SP Needle Spinal Quincke', 			'description' => '25g TW x 3.5"')); 					$products['130-2535'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-080', 			'name' => 'Needle Cannula RX 18g TW x 5"', 	'description' => '')); 									$products['B-NE-080'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-082', 			'name' => 'Torcar Stylet 16g x 1.716"', 		'description' => '')); 									$products['B-NE-082'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-081', 			'name' => 'Needle Cannula RX 18g TW x6.5"', 	'description' => '')); 									$products['B-NE-081'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'T60-155-00', 		'name' => 'Catheter Pandin 20g x 12"', 		'description' => 'Safety-Kath')); 						$products['T60-155-00'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VAQR', 			'name' => 'VELCRO ADJUSTABLE/QUICK', 			'description' => 'RELEASE')); 							$products['515-VAQR'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-004', 			'name' => 'Needle Epidural RK 16gTW x3.5"', 	'description' => 'unprinted')); 						$products['B-NE-004'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-006', 			'name' => 'Needle Epidural RK 16gTW x4.5"', 	'description' => 'unprinted')); 						$products['B-NE-006'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '180-2540', 			'name' => '*Disc* T Catheter Epidural', 		'description' => 'Tun-L-XL Glass')); 					$products['180-2540'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '180-2542', 			'name' => '*Dusc* T Catheter Epid', 			'description' => 'Tun-L-XL/24 Glass')); 				$products['180-2542'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '100-1715', 			'name' => '***DISC** SP Needle Epid RK', 		'description' => '15g TW x 7"')); 						$products['100-1715'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '100-1716', 			'name' => '***DISC*** SP Needle Epid RK', 		'description' => '16g TW x 7"')); 						$products['100-1716'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '281-2205', 			'name' => 'SP R-F 22g TW 5cm 5mm Tip', 			'description' => 'S Type')); 							$products['281-2205'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-69-P', 			'name' => 'Eyewear Radiation Plano', 			'description' => 'Full Shield / Side Shields')); 		$products['525-69-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '192-2024', 			'name' => 'SP Spirol Standard Epidural', 		'description' => 'Set 20g CE Stylet 24"')); 			$products['192-2024'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '196-3022', 			'name' => 'T Epidural Tuohy 22g Plastic', 		'description' => 'Mini')); 								$products['196-3022'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '196-3020', 			'name' => 'T Epidural Tuohy 20g Plastic', 		'description' => 'Mini')); 								$products['196-3020'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-70S-P', 			'name' => 'Eyewear Radiation Ultra Light', 		'description' => 'Plano Astro Flex/Side Shields')); 	$products['525-70S-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-70S-S', 			'name' => 'Eyewear Radiation Ultra Light', 		'description' => 'Single Astro Flex/Side Shields')); 	$products['525-70S-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-S-536-24Q/T', 	'name' => 'Apron Radiation Coat Standard', 		'description' => 'Thyroid/Quick Release24"x 36"')); 	$products['515-S-536-24Q/T'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '196-3018', 			'name' => 'T Epidural Tuohy 18g Plastic', 		'description' => 'Mini')); 								$products['196-3018'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '181-2393', 			'name' => 'T Catheter Epidural Brevi', 			'description' => 'Plastic')); 							$products['181-2393'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB8.5', 			'name' => 'Blocker Radiation Lead .5mm', 		'description' => '8.5" x 14"')); 						$products['550-SB8.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '281-2215', 			'name' => 'SP R-F 22g TW 15cm 5mm Tip', 		'description' => 'S Type')); 							$products['281-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A20/1', 			'name' => 'CLASSIC SKULL ON CERVICAL SPIN', 	'description' => '4-PART')); 							$products['600-A20/1'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-089', 			'name' => 'Catheter Epidural Tun-L-XL/24', 		'description' => '')); 									$products['A-EP-089'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-088', 			'name' => 'Catheter Epidural Tun-L-XL', 		'description' => '')); 									$products['A-EP-088'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-087', 			'name' => 'Catheter Epidural Tun-L-Kath', 		'description' => '')); 									$products['A-EP-087'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '281-2210', 			'name' => 'SP R-F 22g TW 10cm 5mm Tip', 		'description' => 'S Type')); 							$products['281-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-400', 			'name' => 'FULL FACE PROTECTIVE MASK', 			'description' => '')); 									$products['515-400'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-085', 			'name' => 'Catheter Epidural Brevi STF', 		'description' => '')); 									$products['A-EP-085'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-084', 			'name' => 'Catheter Epidural Brevi-XL', 		'description' => '')); 									$products['A-EP-084'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-083', 			'name' => 'Catheter Epidural Brevi-Kath', 		'description' => '')); 									$products['A-EP-083'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-CASE', 			'name' => 'Genesis Mobile Storage Case', 		'description' => '')); 									$products['600-CASE'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-082', 			'name' => 'Connector Nexus 20g', 				'description' => '')); 									$products['A-EP-082'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-081', 			'name' => 'Connector Nexus 19g', 				'description' => '')); 									$products['A-EP-081'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-080', 			'name' => 'Spirol 19gOE w/ Thread Assist', 		'description' => 'Indigo Orb')); 						$products['A-EP-080'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '174-1924', 			'name' => 'SP Catheter Spirol Block', 			'description' => '19g Closed End w/Stylet 24"')); 		$products['174-1924'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-SO-SM', 			'name' => 'Apron Radiation Combo', 				'description' => 'Skirt Small')); 						$products['515-SO-SM'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-50-S-SV', 		'name' => 'STANDARD METAL-W/SIDE SHIELDS', 		'description' => '-SINGLE VISION-')); 					$products['525-50-S-SV'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-M30', 			'name' => 'SKELETAL MODEL - NORMAL FOOT', 		'description' => '')); 									$products['600-M30'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-M32', 			'name' => 'SKELETAL MODEL - HOLLOW FOOT', 		'description' => '')); 									$products['600-M32'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-098', 			'name' => 'Catheter Epidural Spirol 20gCE', 	'description' => 'Styletted 24"')); 					$products['A-EP-098'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-M31', 			'name' => 'SKELETAL MODEL -FOOT -', 			'description' => 'WIRE MOUNTED')); 						$products['600-M31'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-097', 			'name' => 'Catheter Epidural Spirol 19gCE', 	'description' => 'Styletted 24"')); 					$products['A-EP-097'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-095', 			'name' => 'Catheter Epidural Spirol 20gOE', 	'description' => 'Styletted 14"')); 					$products['A-EP-095'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FB-538-24', 		'name' => 'Apron Radiation Flex Back', 			'description' => '24" x 38"')); 						$products['515-FB-538-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-093', 			'name' => 'Catheter Epidural Tun-L-XL Pro', 	'description' => '')); 									$products['A-EP-093'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-092', 			'name' => 'Catheter Epidural Brevi-XL Pro', 	'description' => '')); 									$products['A-EP-092'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-091', 			'name' => 'Catheter Epidural Tun-L-XL', 		'description' => 'Stim Policare')); 					$products['A-EP-091'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-090', 			'name' => 'Connector Stingray Stimulating', 	'description' => '19g')); 								$products['A-EP-090'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-57S-P', 			'name' => 'Eyewear Radiation Plano', 			'description' => 'Metal Oval Shield')); 				$products['525-57S-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'XAEP-071', 			'name' => 'Policare Catheter 19g 32"', 		'description' => 'w/Sleeve Bulk Non Sterile')); 		$products['XAEP-071'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '291-C04', 			'name' => 'R-F™ Cable for Grounding Pad', 		'description' => '')); 									$products['291-C04'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-57S-B', 			'name' => 'Eyewear Radiation Bifocal', 			'description' => 'Metal Oval Shield')); 				$products['525-57S-B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '126-2235C', 			'name' => '***DISC** Needle Epid Crawford', 	'description' => '22g RW x 3.5"')); 					$products['126-2235C'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '116-2230', 			'name' => 'SP Needle Blunt Straight', 			'description' => '22g RW x 3"')); 						$products['116-2230'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '503-90', 			'name' => 'Gloves Radiation RR-2 9.0', 			'description' => '')); 									$products['503-90'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FB-CUSTOM', 		'name' => 'FLEX-BACK-CUSTOM', 					'description' => '')); 									$products['515-FB-CUSTOM'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '265-2015', 			'name' => 'SP R-F 20g TW 15cm 3mm Tip', 		'description' => 'Blunt Coudé')); 						$products['265-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '265-2010', 			'name' => 'SP R-F 20g TW 10cm 3mm Tip', 		'description' => 'Blunt Coudé')); 						$products['265-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'F22RAC1030', 		'name' => 'Catheter Epidural Spirol 19gOE', 	'description' => 'Styletted')); 						$products['F22RAC1030'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'F22RAC1031', 		'name' => 'Catheter Epidural Spirol 19gCE', 	'description' => '')); 									$products['F22RAC1031'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '282-1815', 			'name' => 'SP R-F 18g TW 15cm 10mm Tip', 		'description' => 'S Type')); 							$products['282-1815'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '287-2210', 			'name' => 'SP R-F 22g TW 10cm 10mm Tip', 		'description' => 'S Type Coudé')); 						$products['287-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '117-2080', 			'name' => 'SP Needle Blunt Coude', 				'description' => '20g TW x 8"')); 						$products['117-2080'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '282-1810', 			'name' => 'SP R-F 18g TW 10cm 10mm Tip', 		'description' => 'S Type')); 							$products['282-1810'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-57S-S', 			'name' => 'Eyewear Radiation Single', 			'description' => 'Metal Oval Shield')); 				$products['525-57S-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-70S-B', 			'name' => 'Eyewear Radiation Ultra Light', 		'description' => 'Bifocal Astro Flex/SideShields')); 	$products['525-70S-B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A795', 			'name' => 'STAGES OF PROLAPSED DISC-', 			'description' => 'DEGENERATION OF VERTEBRAE')); 		$products['600-A795'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-A794', 			'name' => 'BONELIKE VERTEBRAL COLUMN', 			'description' => '')); 									$products['600-A794'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-99BL', 			'name' => 'Eyewear Ultralite Viper', 			'description' => 'Blue')); 								$products['525-99BL'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'F22RAC1009', 		'name' => 'Connector Stingray Epidural', 		'description' => 'Catheter 19g')); 						$products['F22RAC1009'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'F22RAC1007', 		'name' => 'Policare Catheter 19g 32"', 		'description' => 'w/Sleeve Bulk Non Sterile')); 		$products['F22RAC1007'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'F22RAC1008', 		'name' => 'Catheter Epidural Tun-L-XL', 		'description' => '')); 									$products['F22RAC1008'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'F22RAC1003', 		'name' => 'Needle Introducer 17g TW x 3"', 	'description' => '')); 									$products['F22RAC1003'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'F22RAC1001', 		'name' => 'Bullet Tip Cannula Straight', 		'description' => '20g RW x 25cm Policare')); 			$products['F22RAC1001'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-822BBV', 		'name' => 'Accessories Radiation Gonad', 		'description' => 'Ovarian Belt System Set of 4')); 		$products['500-822BBV'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '263-2010', 			'name' => 'SP R-F 20g TW 10cm 15mm Tip', 		'description' => 'Blunt Straight')); 					$products['263-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-W99900', 		'name' => 'TRAUMA BAG-ORANGE', 					'description' => '')); 									$products['600-W99900'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'F22RAC1014', 		'name' => 'Brevi-XL Stim', 						'description' => '')); 									$products['F22RAC1014'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-9941-S', 		'name' => 'ULTRALITE-SPORT-SINGLE VISION', 		'description' => 'RX')); 								$products['525-9941-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'F22RAC1012', 		'name' => 'Feth-R-Kath 24" Bulk', 				'description' => '')); 									$products['F22RAC1012'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'F22RAC1010', 		'name' => 'Stinger Y Connector', 				'description' => '')); 									$products['F22RAC1010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '125-2235T', 			'name' => 'SP Needle Epidural Tuohy', 			'description' => '22g RW x 3.5"')); 					$products['125-2235T'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '290-GPC04', 			'name' => 'R-F™ Grounding Pad', 				'description' => 'w/ Attached Cable')); 				$products['290-GPC04'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '560-920', 			'name' => 'Shield Radiation Multi Fit', 		'description' => 'Spot Film Replacement Fluoro')); 		$products['560-920'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'ENHANCED 19G CE', 	'name' => 'Sample Enhanced Spirol 19g CE', 		'description' => '')); 									$products['ENHANCED 19G CE'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '191-5000', 			'name' => 'Feth-R-Kath Full Size Tray', 		'description' => '')); 									$products['191-5000'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '560-922', 			'name' => 'Shield Radiation Siemens', 			'description' => 'Spot Film Replacement Fluoro')); 		$products['560-922'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '560-921', 			'name' => 'Shield Radiation Picker', 			'description' => 'Spot Film Replacement Fluoro')); 		$products['560-921'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-SO-MD', 			'name' => 'Apron Radiation Combo', 				'description' => 'Skirt Medium')); 						$products['515-SO-MD'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-W47002', 		'name' => 'SPORTS SHOULDER', 					'description' => '')); 									$products['600-W47002'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB4.5', 			'name' => 'Blocker Radiation Lead .5mm', 		'description' => '6" x 10"')); 						$products['550-SB4.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '117-2045', 			'name' => 'SP Needle Blunt Coude', 				'description' => '20g TW x 4.5"')); 					$products['117-2045'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '263-2015', 			'name' => 'SP R-F 20g TW 15cm 15mm Tip', 		'description' => 'Blunt Straight')); 					$products['263-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-830R', 			'name' => 'Apron Radiation Hangers', 			'description' => 'Demi Rack')); 						$products['520-830R'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-56-604', 		'name' => 'Clear-Pb Mobile X-Ray Barrier', 		'description' => 'Large 60 x 30 Plastic Window')); 		$products['520-56-604'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '175-2024', 			'name' => 'SP Catheter Spirol Block', 			'description' => '20g Open End 24"')); 				$products['175-2024'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-WA/BR5332', 		'name' => 'Apron Radiation Wrap Around', 		'description' => 'Back Relief 44" x 32"')); 			$products['515-WA/BR5332'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-TSS', 			'name' => 'TABLE SCATTER SHIELD-CUSTOM', 		'description' => '')); 									$products['520-TSS'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-WA/BR5330', 		'name' => 'Apron Radiation Wrap Around', 		'description' => 'Back Relief 34" x 30"')); 			$products['515-WA/BR5330'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '273-2010', 			'name' => 'SP R-F 20g TW 10cm 15mm Tip', 		'description' => 'Sharp Straight')); 					$products['273-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-SO-LG', 			'name' => 'Apron Radiation Combo', 				'description' => 'Skirt Large')); 						$products['515-SO-LG'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-W47007', 		'name' => 'DELUXE KNEE', 						'description' => '')); 									$products['600-W47007'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '505-631QRL', 		'name' => 'QUICK RELEASE COLLAR-LARGE', 		'description' => '')); 									$products['505-631QRL'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '273-2015', 			'name' => 'SP R-F 20g TW 15cm 15mm Tip', 		'description' => 'Sharp Straight')); 					$products['273-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'P4111', 				'name' => 'Catheter SmartInfuser R/O', 			'description' => '190mm')); 							$products['P4111'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '505-631QRS', 		'name' => 'COLLAR-THYROID-QUICK RELEASE', 		'description' => '')); 									$products['505-631QRS'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '170-2124', 			'name' => 'SP Ultra-Kath Set  21g CE', 			'description' => '')); 									$products['170-2124'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '117-2060', 			'name' => 'SP Needle Blunt Coude', 				'description' => '20g TW x 6"')); 						$products['117-2060'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'XP41110A', 			'name' => 'Catheter SmartInfuser R/O', 			'description' => '')); 									$products['XP41110A'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '200-2035', 			'name' => '*Disc* Epid Tuohy 20g Plastic', 		'description' => 'Double Deck Tray')); 					$products['200-2035'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'F22CAT61', 			'name' => 'Tun-L-X/24 Stim', 					'description' => '')); 									$products['F22CAT61'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '120-2235', 			'name' => 'SP Needle Bella-D 22g RW x 3.5', 	'description' => '"')); 								$products['120-2235'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FBVO', 			'name' => 'FLEX BACK - VEST ONLY', 				'description' => '')); 									$products['515-FBVO'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '120-2245', 			'name' => 'SP Needle Bella-D 22g RW x 4.5', 	'description' => '"')); 								$products['120-2245'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FBVS', 			'name' => 'FLEX BACK - VEST/SKIRT', 			'description' => '')); 									$products['515-FBVS'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VA-538-24', 		'name' => 'Apron Radiation Velcro', 			'description' => 'Adjustable 24" x 38"')); 			$products['515-VA-538-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '671502', 			'name' => 'Catheter Epidural Spirol 19gOE', 	'description' => '')); 									$products['671502'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '96771', 				'name' => 'Catheter Epidural Spirol 19gCE', 	'description' => '')); 									$products['96771'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '96772', 				'name' => 'Connector Nexus 19g', 				'description' => '')); 									$products['96772'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '96773', 				'name' => 'Connector Nexus 20g', 				'description' => '')); 									$products['96773'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '96774', 				'name' => 'Thread Assist Guide', 				'description' => '')); 									$products['96774'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '295-5', 				'name' => '***DISC*** SP R-F Thermocouple', 	'description' => 'Electrode 5cm')); 					$products['295-5'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-VR1714L', 		'name' => 'HEADACHES CHART', 					'description' => '')); 									$products['600-VR1714L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '125-1860T', 			'name' => 'SP Needle Epidural Tuohy', 			'description' => '18g TW x 6"')); 						$products['125-1860T'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '96770', 				'name' => 'Catheter Epidural Spirol 20gCE', 	'description' => '')); 									$products['96770'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-WA-5-3-30', 		'name' => 'Apron Radiation Wrap Around', 		'description' => '34" x 30"')); 						$products['515-WA-5-3-30'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '105-1614', 			'name' => 'SP Needle RX Coudé 14g TW x 6"', 	'description' => '')); 									$products['105-1614'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '278-2010', 			'name' => 'SP R-F 20g TW 10cm 15mm Tip', 		'description' => 'Sharp Coudé')); 						$products['278-2010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'LT-102', 			'name' => 'BLUNT NEEDLE FLYER', 				'description' => '')); 									$products['LT-102'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-MX-057', 			'name' => 'Tegaderm 4" x 4.75"', 				'description' => '')); 									$products['A-MX-057'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '278-2015', 			'name' => 'SP R-F 20g TW 15cm 15mm Tip', 		'description' => 'Sharp Coudé')); 						$products['278-2015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'CDX063-A', 			'name' => 'Catheter Epidural 19g', 				'description' => 'Spring Guide')); 						$products['CDX063-A'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-NST-536-24', 	'name' => 'Apron Radiation New Style Tie', 		'description' => '24" x 36"')); 						$products['515-NST-536-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '106-1418', 			'name' => 'SP Needle Epidural RX', 				'description' => '18g TW x 3.5"')); 					$products['106-1418'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-100V/RO', 		'name' => 'Gloves Radiation 100 Series', 		'description' => 'Vinyl Right')); 						$products['500-100V/RO'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FB-534-24', 		'name' => 'Apron Radiation Flex Back', 			'description' => '24" x 34"')); 						$products['515-FB-534-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FB-534-22', 		'name' => 'Apron Radiation Flex Back', 			'description' => '')); 									$products['515-FB-534-22'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'RD002', 				'name' => 'SP Catheter Epidural SC-Stim', 		'description' => 'w/ XL Tip')); 						$products['RD002'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '51-FBVS-MF', 		'name' => 'FLEX BACK-VEST/SKIRT-MEDIUM-', 		'description' => 'FEMALE')); 							$products['51-FBVS-MF'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '106-1416', 			'name' => 'SP Needle Epidural RX', 				'description' => '16g TW x 3.5"')); 					$products['106-1416'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '106-1415', 			'name' => 'SP Needle Epidural RX', 				'description' => '15g RW x 3.5"')); 					$products['106-1415'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-101SLMIT', 		'name' => 'Gloves Radiation Lead Mittens', 		'description' => 'Leather Slit')); 						$products['500-101SLMIT'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-20/1', 			'name' => 'Anatomical Models Spine', 			'description' => 'Skull On Cervical Spinal Colmn')); 	$products['600-20/1'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '154-1912', 			'name' => 'SP Catheter Epidural E Kath', 		'description' => '12"')); 								$products['154-1912'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '160-1794', 			'name' => 'Clip No Slip', 						'description' => 'To Be Used On Old System')); 			$products['160-1794'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'LOT CHARGE', 		'name' => 'Lot Charge', 						'description' => '')); 									$products['LOT CHARGE'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '505-600L', 			'name' => 'Collar Radiation Thyroid', 			'description' => 'Standard Large 22"')); 				$products['505-600L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-FBVS-XL', 		'name' => 'FLEX-BACK VEST/SKIRT - XL', 			'description' => '')); 									$products['515-FBVS-XL'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-9941', 			'name' => 'ULTRALITE EYEWEAR SERIES', 			'description' => '')); 									$products['525-9941'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-PA06C', 			'name' => 'RF Probe Adapter 6" Cosman', 		'description' => '')); 									$products['296-PA06C'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-PA06D', 			'name' => 'RF Probe Adapter 6" Diros', 		'description' => '')); 									$products['296-PA06D'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '70153037', 			'name' => 'IFU Spirol Block', 					'description' => '')); 									$products['70153037'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '154-1924', 			'name' => 'SP Catheter Epidural E Kath', 		'description' => '24"')); 								$products['154-1924'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-PA06R', 			'name' => 'RF Probe Adapter 6" Radionics', 	'description' => '')); 									$products['296-PA06R'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '505-600S', 			'name' => 'Collar Radiation Thyroid', 			'description' => 'Standard Small 18.5"')); 			$products['505-600S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '271-2210', 			'name' => 'SP R-F 22g TW 10cm 5mm Tip', 		'description' => 'Sharp Straight')); 					$products['271-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '72520702', 			'name' => 'Connector Stingray Epidural', 		'description' => 'Catheter 19g')); 						$products['72520702'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '271-2215', 			'name' => 'SP R-F 22g TW 15cm 5mm Tip', 		'description' => 'Sharp Straight')); 					$products['271-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-W51465', 		'name' => 'TAYLOR HAMMER RED', 					'description' => '')); 									$products['600-W51465'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '116-2260', 			'name' => 'SP Needle Blunt Straight', 			'description' => '22g RW x 6"')); 						$products['116-2260'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '189-2260', 			'name' => 'T Wiley Spinal 22g x 6"', 			'description' => 'Single Set Tray')); 					$products['189-2260'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '287-2215', 			'name' => 'SP R-F 22g TW 15cm 10mm Tip', 		'description' => 'S Type Coudé')); 						$products['287-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '105-1618', 			'name' => 'SP Needle Epidural RX Coudé', 		'description' => '18g TW x 6"')); 						$products['105-1618'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '105-1615', 			'name' => 'SP Needle Epidural RX Coudé', 		'description' => '15g RW x 6"')); 						$products['105-1615'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '105-1616', 			'name' => 'SP Needle Epidural RX Coudé', 		'description' => '16g TW x 6"')); 						$products['105-1616'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-WA-5-3-36', 		'name' => 'Apron Radiation Wrap Around', 		'description' => '44" x 36"')); 						$products['515-WA-5-3-36'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-WA-5-3-38', 		'name' => 'Apron Radiation Wrap Around', 		'description' => '48" x 38"')); 						$products['515-WA-5-3-38'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-MX-013', 			'name' => 'Needle Vise Single Port', 			'description' => '')); 									$products['A-MX-013'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-WA-5-3-32', 		'name' => 'Apron Radiation Wrap Around', 		'description' => '44" x 32"')); 						$products['515-WA-5-3-32'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-MX-012', 			'name' => 'Pad Needle Stick', 					'description' => '')); 									$products['A-MX-012'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-WA-5-3-34', 		'name' => 'Apron Radiaion Safety-', 			'description' => 'Wrap-Around')); 						$products['515-WA-5-3-34'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '501-XR497000', 		'name' => 'Gloves Radiation Attenuation', 		'description' => 'Lead Free 7.0')); 					$products['501-XR497000'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-MX-007', 			'name' => 'Catheter Support Pad', 				'description' => '')); 									$products['A-MX-007'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-60-P', 			'name' => 'Eyewear Radiation Plano', 			'description' => 'Carbon Shield')); 					$products['525-60-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '721-990', 			'name' => 'CosmoTens PF-990 Transcutaneos', 	'description' => 'Electrical Nerve Stimulator')); 		$products['721-990'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '120-2225', 			'name' => 'SP Needle Bella-D 22g RW x 2.5', 	'description' => '"')); 								$products['120-2225'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '420-PBGP', 			'name' => 'Cryo PainBlocker Grounding Pad', 	'description' => '')); 									$products['420-PBGP'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '4867584', 			'name' => 'Connector Stingray Epidural', 		'description' => 'Catheter 19g')); 						$products['4867584'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-MX-003', 			'name' => 'Pad Foam Support Wiley Spinal', 		'description' => '')); 									$products['A-MX-003'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-MX-002', 			'name' => 'Gauze Sponges 4"x 4"', 			'description' => '12 ply')); 							$products['A-MX-002'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-MX-001', 			'name' => 'Gauze Sponges 3"x3"', 				'description' => '12 ply')); 							$products['A-MX-001'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '721-995', 			'name' => 'Cosmo-Tens Electorde Patch', 		'description' => '')); 									$products['721-995'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-60-S', 			'name' => 'Eyewear Radiation Single', 			'description' => 'Carbon Shield')); 					$products['525-60-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'CDX054-B', 			'name' => 'Needle Blunt Coude Custom', 			'description' => '20g TW x 4.5" Short Stylet')); 		$products['CDX054-B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-DPA120B', 		'name' => 'RF ProbeAdapter Single-Lession', 	'description' => 'Baylis Disposable')); 				$products['296-DPA120B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '162-995', 			'name' => '*Disc* Use 721-995 Cosmo-Tens', 		'description' => 'Electrode Patch')); 					$products['162-995'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '116-2245', 			'name' => 'SP Needle Blunt Straight', 			'description' => '22g RW x 4.5"')); 					$products['116-2245'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-50-S-BI', 		'name' => 'STANDARD METAL W/SIDE SHIELDS', 		'description' => 'W/BIFOCAL Rx')); 						$products['525-50-S-BI'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '162-990', 			'name' => '*Disc* Use 721-990  CosmoTens', 		'description' => 'Electrical Nerve Stimulator')); 		$products['162-990'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-60-B', 			'name' => 'Eyewear Radiation Bifocal', 			'description' => 'Carbon Shield')); 					$products['525-60-B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-402', 			'name' => 'Catheter Epidural Tun-L-XL/24', 		'description' => 'Stim Policare')); 					$products['A-EP-402'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-068', 			'name' => 'Connector Stingray Epidural', 		'description' => 'Catheter 19g')); 						$products['A-EP-068'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '261-2210', 			'name' => 'SP R-F 22g TW 10cm 5mm Tip', 		'description' => 'Blunt Straight')); 					$products['261-2210'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-065', 			'name' => 'Catheter Smart Infuser', 			'description' => 'Molded R/O 36.22"')); 				$products['A-EP-065'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TP-007', 			'name' => 'Tyvek Pouch 6"x9" Preprinted', 	'description' => '')); 									$products['B-TP-007'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TP-006', 			'name' => 'Tyvek Lid Mid Size Tray', 			'description' => '')); 									$products['B-TP-006'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-W50182', 		'name' => 'PLASTIC 360FT 8 IN. ISOM', 			'description' => 'GONIOMETER')); 						$products['600-W50182'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TP-009', 			'name' => 'Tyvek Pouch 2.5" x 22"', 			'description' => '')); 									$products['B-TP-009'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-060', 			'name' => 'Catheter Epidural E-Kath', 			'description' => '19g x 24"')); 						$products['A-EP-060'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TP-008', 			'name' => 'Tyvek Pouch 6"x12"Preprinted', 	'description' => '')); 									$products['B-TP-008'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TP-001', 			'name' => 'Tyvek Pouch 6" x 9"', 				'description' => '')); 									$products['B-TP-001'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-W11821', 		'name' => 'NEON SKELETON KEY RING', 			'description' => '')); 									$products['600-W11821'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TP-005', 			'name' => 'Tyvek Lid Mini Tray', 				'description' => '')); 									$products['B-TP-005'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TP-004', 			'name' => 'Tyvek Pouch 6" x 12"', 			'description' => '')); 									$products['B-TP-004'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB10', 			'name' => 'Blocker Radiation Lead 1.0mm', 		'description' => '10" x 12"')); 						$products['550-SB10'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '155-2550', 			'name' => 'SP Catheter Epidural Tun-L-XL', 		'description' => 'Pro')); 								$products['155-2550'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'ENHANCED 19G OE', 	'name' => 'Sample Enhanced Spirol OE', 			'description' => '')); 									$products['ENHANCED 19G OE'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '164-1936', 			'name' => 'SP Catheter Epidural Spirol', 		'description' => '19g Closed End w/Stylet')); 			$products['164-1936'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '550-SB11', 			'name' => 'Blocker Radiation Lead 1.0mm', 		'description' => '11" x 14"')); 						$products['550-SB11'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-DPA06S5', 		'name' => 'RF Probe Adapter Stryker', 			'description' => '5cm Disposable')); 					$products['296-DPA06S5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-078', 			'name' => 'Spirol 19gOE w/ Thread Assist', 		'description' => 'Indigo Orb')); 						$products['A-EP-078'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '181-2340', 			'name' => 'T Catheter Epidural Brevi-XL', 		'description' => 'Plastic')); 							$products['181-2340'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-809', 			'name' => 'Accessories Radiation Gonad', 		'description' => 'Gen-X Male Shield System Adult')); 	$products['500-809'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-077', 			'name' => 'Double Nelson Extension Set', 		'description' => '')); 									$products['A-EP-077'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '125-1735T', 			'name' => 'SP Needle Epidural Tuohy', 			'description' => '17g TW x 3.5"')); 					$products['125-1735T'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-074', 			'name' => 'Connector Stingray Epidural', 		'description' => 'Catheter 21g')); 						$products['A-EP-074'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-805', 			'name' => 'Accessories Radiation Gonad', 		'description' => 'Cup')); 								$products['500-805'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-071', 			'name' => 'Policare Catheter 19g 32"', 		'description' => '')); 									$products['A-EP-071'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-800', 			'name' => 'Accessories Radiation Diaper', 		'description' => '14" x 20"')); 						$products['500-800'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1911-100', 			'name' => '* DISC* SP Fluoro-Guide', 			'description' => '')); 									$products['1911-100'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TP-010', 			'name' => 'Header Bag 13"x 19" 4" HDR', 		'description' => '')); 									$products['B-TP-010'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-810', 			'name' => 'Accessories Radiation Stole', 		'description' => 'Spinal Adult')); 						$products['500-810'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-TP-011', 			'name' => 'Tyvek Pouch 3 5/8" x 10 5/8"', 	'description' => 'Preprinted')); 						$products['B-TP-011'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '105-1218', 			'name' => 'SP Needle Epidural RX Coudé', 		'description' => '18g TW x 2.5"')); 					$products['105-1218'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-100V/LO', 		'name' => 'Gloves Radiation 100 Series', 		'description' => 'Vinyl Left')); 						$products['500-100V/LO'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-SO-XL', 			'name' => 'Apron Radiation Combo', 				'description' => 'Skirt X-Large')); 					$products['515-SO-XL'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-SDO-532-18', 	'name' => 'Apron Radiation Surgical Drop', 		'description' => 'Off 18" x 32"')); 					$products['515-SDO-532-18'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '520-MS3072-8', 		'name' => 'MOBILE SCREEN - 30" X 72"', 		'description' => 'WINDOW-8" X 10"')); 				$products['520-MS3072-8'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-048', 			'name' => 'Catheter Epidural Feth-R-Kath', 		'description' => '19g x 24"')); 						$products['A-EP-048'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-047', 			'name' => 'Catheter Epidural Spirol 20gCE', 	'description' => 'Styletted 36.5"')); 					$products['A-EP-047'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-046', 			'name' => 'Extension Set 12"', 				'description' => 'Microbore')); 						$products['A-EP-046'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-043', 			'name' => 'Catheter Epidural Spirol 20gOE', 	'description' => 'Styletted 36.5"')); 					$products['A-EP-043'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-042', 			'name' => 'Catheter Epidural Versa-Kath', 		'description' => '12"')); 								$products['A-EP-042'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-041', 			'name' => 'Catheter Epidural Versa-Kath', 		'description' => '24"')); 								$products['A-EP-041'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '505-641CFS', 		'name' => 'THYROID COLLAR-COMFORT FIT', 		'description' => '')); 									$products['505-641CFS'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-040', 			'name' => 'Catheter Epidural Spirol 19gOE', 	'description' => 'Styletted')); 						$products['A-EP-040'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '157-1924', 			'name' => 'SP Catheter Epidural Feth-R-', 		'description' => 'Kath 24"')); 						$products['157-1924'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '600-VR1620L', 		'name' => 'NERVOUS SYSTEM CHART', 				'description' => '')); 									$products['600-VR1620L'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '505-641CFL', 		'name' => 'THYROID COLLAR-COMFORT FIT', 		'description' => '')); 									$products['505-641CFL'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-SDO-532-24', 	'name' => 'Apron Radiation Surgical Drop', 		'description' => 'Off 24"x 32"')); 					$products['515-SDO-532-24'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-300PP', 			'name' => 'PANORAMIC PONCHO', 					'description' => '')); 									$products['515-300PP'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-059', 			'name' => 'Catheter Epidural E-Kath', 			'description' => '19g x 12"')); 						$products['A-EP-059'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-102/7', 			'name' => '*DISC* Use 500-102-70', 				'description' => 'Gloves Radiation Resistant 7')); 		$products['500-102/7'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-PA06X', 			'name' => 'RF Probe Adapter Stryker', 			'description' => 'Universal')); 						$products['296-PA06X'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-102/9', 			'name' => '*DISC* Use 500-102-90', 				'description' => 'Gloves Radiation Resistant 9')); 		$products['500-102/9'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-102/8', 			'name' => '*DISC* Use 500-102-80', 				'description' => 'Gloves Radiation Resistant 8')); 		$products['500-102/8'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-053', 			'name' => 'Extension Set 6"', 					'description' => 'Microbore')); 						$products['A-EP-053'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-052', 			'name' => 'Extension Set 36"', 				'description' => 'Microbore')); 						$products['A-EP-052'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '500-225TR', 			'name' => 'Gloves Radiation Tri-rad', 			'description' => '')); 									$products['500-225TR'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '157-1912', 			'name' => 'SP Catheter Epidural Feth-R-', 		'description' => 'Kath 12"')); 						$products['157-1912'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '155-2542', 			'name' => 'SP Catheter Epid Tun-L-XL/24', 		'description' => '')); 									$products['155-2542'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '155-2540', 			'name' => 'SP Catheter Epidural Tun-L-XL', 		'description' => '')); 									$products['155-2540'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '261-2215', 			'name' => 'SP R-F 22g TW 15cm 5mm Tip', 		'description' => 'Blunt Straight')); 					$products['261-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-027', 			'name' => 'Catheter Epidural Spirol 20gOE', 	'description' => '36.5"')); 							$products['A-EP-027'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-77-S', 			'name' => 'Eyewear Radiation Ultra Light', 		'description' => 'Single Flex Light Goggle')); 			$products['525-77-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-083', 			'name' => 'Needle Cannula 20g RW x 6.5"', 		'description' => '')); 									$products['B-NE-083'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-77-P', 			'name' => 'Eyewear Radiation Ultra Light', 		'description' => 'Plano Flex Light Goggle')); 			$products['525-77-P'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-025', 			'name' => 'Catheter Epidural Spirol 19gOE', 	'description' => 'Smiths')); 							$products['A-EP-025'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-086', 			'name' => 'Needle Cannula 20g TW x 2.25"', 	'description' => '')); 									$products['B-NE-086'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-024', 			'name' => 'Lacrimal Probe', 					'description' => '')); 									$products['A-EP-024'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-085', 			'name' => 'Needle Cannula 22g RW x 2.25"', 	'description' => '')); 									$products['B-NE-085'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-023', 			'name' => 'Heart Ring Marker 14mm', 			'description' => '')); 									$products['A-EP-023'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-088', 			'name' => 'Needle Cannula 22g RW x 3.5"', 		'description' => '')); 									$products['B-NE-088'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-022', 			'name' => 'Heart Ring Marker 12mm', 			'description' => '')); 									$products['A-EP-022'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-087', 			'name' => 'Needle Cannula 22g RW x 5"', 		'description' => '')); 									$products['B-NE-087'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-021', 			'name' => 'Heart Ring Marker 10mm', 			'description' => '')); 									$products['A-EP-021'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-020', 			'name' => 'Heart Ring Marker 8mm', 				'description' => '')); 									$products['A-EP-020'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-089', 			'name' => 'Needle Cannula 20g TW x 5"', 		'description' => '')); 									$products['B-NE-089'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-77-B', 			'name' => 'Eyewear Radiation Ultra Light', 		'description' => 'Bifocal Flex Light Goggle')); 		$products['525-77-B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1414', 				'name' => 'Spirol 19g OE w/Thread Assist', 		'description' => 'Tyvek Sleeve Indigo Orb')); 			$products['1414'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1911-536', 			'name' => '***DISC***SP Extension Set 36"', 	'description' => '')); 									$products['1911-536'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-091', 			'name' => 'Needle Cannula 22g RW x 1"', 		'description' => '')); 									$products['B-NE-091'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-019', 			'name' => 'Catheter Epidural Spirol 20gCE', 	'description' => '24"')); 								$products['A-EP-019'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1416', 				'name' => 'Connector Stingray 19g', 			'description' => 'Indigo Orb')); 						$products['1416'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-092', 			'name' => 'Needle Epidural Tuohy', 				'description' => '17g TW x 3.5" Metal Hub')); 			$products['B-NE-092'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '355838', 			'name' => 'Ring Markers 14mm', 					'description' => 'Weck Closure Systems')); 				$products['355838'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-095', 			'name' => 'Needle Cannula 25g RW x 4"', 		'description' => '')); 									$products['B-NE-095'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-036', 			'name' => 'Catheter Epidural Soft Spirol', 		'description' => '19g CE Smiths')); 					$products['A-EP-036'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-097', 			'name' => 'Needle Cannula 25g RW x 8.5"', 		'description' => '')); 									$products['B-NE-097'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-096', 			'name' => 'Needle Cannula 20g RW x 12"', 		'description' => '')); 									$products['B-NE-096'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-099', 			'name' => 'Needle Cannula 20g TW x 4.375"', 	'description' => '')); 									$products['B-NE-099'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'B-NE-098', 			'name' => 'Needle Cannula 20g TW x 6.375"', 	'description' => '')); 									$products['B-NE-098'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-830', 			'name' => 'Apron Radiation Demi w/Rack', 		'description' => 'Set of 4 (S,M,L,XL)')); 				$products['515-830'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-031', 			'name' => 'Catheter Epidural Spirol 19gCE', 	'description' => '')); 									$products['A-EP-031'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '355830', 			'name' => 'Ring Markers 8mm', 					'description' => 'Weck Closure Systems')); 				$products['355830'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-030', 			'name' => 'Catheter Epidural Spirol 19gOE', 	'description' => '')); 									$products['A-EP-030'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-MX30S-B', 		'name' => 'ULTRA LIGHT-VIPER-SILVER', 			'description' => 'BIFOCAL Rx')); 						$products['525-MX30S-B'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '355834', 			'name' => 'Ring Markers 12mm', 					'description' => 'Weck Closure Systems')); 				$products['355834'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '355832', 			'name' => 'Ring Markers 10mm', 					'description' => 'Weck Closure Systems')); 				$products['355832'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-VS-S', 			'name' => 'COMBO-VEST/SKIRT-SMALL', 			'description' => '')); 									$products['515-VS-S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '123-2215', 			'name' => 'SP Needle Stealth', 					'description' => '22g RW x 1.5"')); 					$products['123-2215'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-029', 			'name' => 'Catheter Epidural Spirol 19gCE', 	'description' => 'Styletted')); 						$products['A-EP-029'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-028', 			'name' => 'Catheter Epidural Spirol 20gCE', 	'description' => '')); 									$products['A-EP-028'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-803', 			'name' => 'Apron Radiation Half Small', 		'description' => '')); 									$products['515-803'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-802', 			'name' => 'Apron Radiation Half Medium', 		'description' => '')); 									$products['515-802'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-801', 			'name' => 'Apron Radiation Half Regular', 		'description' => '')); 									$products['515-801'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '296-DPA06SN', 		'name' => 'RF Probe Adapter Smith &', 			'description' => 'Nephew Disposable')); 				$products['296-DPA06SN'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '525-MX30S', 			'name' => 'ULTRA LIGHT - VIPER - BLACK', 		'description' => '')); 									$products['525-MX30S'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '501-ASG-6.5', 		'name' => 'Gloves Radiation Attenuation', 		'description' => 'Lead Free - 6.5')); 					$products['501-ASG-6.5'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-804', 			'name' => 'Apron Radiation Half Child', 		'description' => '')); 									$products['515-804'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '501-ASG-8', 			'name' => 'Gloves Radiation Attenuation', 		'description' => 'Lead Free 8.0')); 					$products['501-ASG-8'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '1911-512', 			'name' => 'SP Extension Set 12"', 				'description' => '')); 									$products['1911-512'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '100-3516', 			'name' => 'Discontinued use 100-1416', 			'description' => '16g XTW x 3.5" RK')); 				$products['100-3516'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-813', 			'name' => 'PEG RACK', 							'description' => '')); 									$products['515-813'] = 			$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-015', 			'name' => 'Catheter Epidural Spirol 20gCE', 	'description' => 'Styletted 24"')); 					$products['A-EP-015'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => '515-BR-538-27', 		'name' => 'Apron Radiation Back Relief', 		'description' => '27" x 38"')); 						$products['515-BR-538-27'] = 	$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-008', 			'name' => 'Catheter Epidural PN Stim-Kath', 	'description' => '')); 									$products['A-EP-008'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-007', 			'name' => 'Catheter Epidural SC Stim-Kath', 	'description' => '')); 									$products['A-EP-007'] = 		$product;
		$product = Product::create(array('revision_id' => $revision_id, 'alphanumeric' => 'A-EP-006', 			'name' => 'Catheter Epidural Tun-L-XL/24', 		'description' => '')); 									$products['A-EP-006'] = 		$product;

		// Seed Bill of Materials and Components
		$bom_id = BillOfMaterials::create(array('product_id' => $products['1911-506']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-053']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['125-2045T']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['100-1416']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-088']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['100-1417']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-088']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['100-1415']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-088']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-095']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-176']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-093']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-NE-099']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-092']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-NE-098']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-091']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-090']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-096']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-099']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-049']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-098']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0.01));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['130-2245']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['260-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['260-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['268-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['276-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['268-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['276-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['267-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['267-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['275-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['122-2080']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['122-2060']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-302']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['277-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['277-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['270-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-NE-004']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-032']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['270-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-NE-007']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-032']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-NE-008']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-032']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['165-2036']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-027']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['275-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-346']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-086']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-345']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-344']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-342']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-086']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-340']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-030']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-336']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['189-2340']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-043']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-334']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-300']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-WA-008']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-010']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MX-003']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-196']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-010']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-EP-072']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-021']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['105-1314SJM']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-211']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['175-1924']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-032']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-348']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-347']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-086']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['174-2024']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-032']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['286-2205']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-309']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['286-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-317']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-024']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-030']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-071']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-316']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-142']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-315']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-049']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-314']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-049']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-335']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-EP-083']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-334']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-EP-084']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['286-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['156-2112']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-042']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-074']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-048']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-302']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-011']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-300']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-132']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['262-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['1911-498']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-127']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-190']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-126']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-190']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-125']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-049']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-124']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-050']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-122']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-011']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-121']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-028']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-011']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-120']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-047']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['106-1518']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-215']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-128']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-313']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-049']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-311']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-024']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-030']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-070']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-310']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['106-1516']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-208']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['106-1515']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-206']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['262-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-113']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-029']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-112']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-029']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-011']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-111']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-028']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-309']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-308']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['135-1735']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-224']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-307']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-119']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-029']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-011']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-118']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-048']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-303']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-024']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-021']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-030']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-070']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['181-1520']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-087']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-028']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-021']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-005']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-001']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-LA-002']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-100']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-029']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['282-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-108']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-154']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['282-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-107']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-154']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-162']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-161']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-160']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-169']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-167']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['195-1936']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-031']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-021']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-029']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-166']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-165']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-164']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-152']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-025']->getKey(), 'quantity' => 0.08));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-151']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-025']->getKey(), 'quantity' => 0.08));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-159']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-173']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-158']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-173']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-156']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-038']->getKey(), 'quantity' => 0.08));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-155']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-038']->getKey(), 'quantity' => 0.08));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-154']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-065']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-153']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-088']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['155-1353']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['121-2225']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['125-1635T']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-009']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['156-2136']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-074']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-048']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-141']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-056']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-059']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-129']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['117-2535']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-094']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-008']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-116']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-145']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-142']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-065']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-063']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['121-2235']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['156-2124']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-041']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-074']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-048']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-130']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-054']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['168-2014']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-095']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-135']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-NE-122']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-011']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-134']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-NE-121']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-133']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-058']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-129']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-051']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-132']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-065']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-063']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['105-1314']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-211']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['121-2245']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['107-1415']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['107-1416']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['107-1418']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['266-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['266-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['118-2045']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-104']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-008']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['121-2525']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['117-2230']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-110']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-008']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['125-2035T']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['155-2393']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-083']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['100-1516']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-088']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['117-2245']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-111']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-008']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['121-2535']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['281-2005']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-308']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['165-1936']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['281-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['173-1924']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-032']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['281-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['117-2260']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-112']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-008']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['193-2024']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['155-2350']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-092']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-090']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-081']->getKey(), 'quantity' => 0.05));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['272-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-093']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-121']->getKey(), 'quantity' => 0.01));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-095']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-078']->getKey(), 'quantity' => 0.05));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-096']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-037']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['263-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['272-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['155-2343']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-085']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['155-2342']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['155-2340']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-084']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['135-1825']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-223']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['263-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['273-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['166-1936']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['273-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['124-2220']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['265-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['265-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-224']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-095']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-223']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-066']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-196']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-222']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-066']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-221']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-066']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-196']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-115']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-076']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-077']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-010']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-216']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-049']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-049']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['271-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['116-2060']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-102']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-054']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-008']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-196']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-118']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-177']->getKey(), 'quantity' => 0.02));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-229']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-049']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-227']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-059']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-200']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-049']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-214']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-048']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-101']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-100']->getKey(), 'quantity' => 0.01));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['116-2045']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-101']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-054']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-008']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-196']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-209']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-047']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-208']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-047']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-207']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-059']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-206']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-048']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-205']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-048']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-204']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-049']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['105-1415']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-202']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['105-1416']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-213']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['135-1857']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-008']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['287-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['287-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['278-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['278-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['106-1618']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-216']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['106-1616']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['271-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['290-GP']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.02));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['106-1615']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-214']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['135-1837']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-221']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['181-2112']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-203']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-042']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-074']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-028']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-021']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-005']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-001']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-LA-002']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-190']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-037']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-049']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-088']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-048']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-085']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-047']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-086']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-046']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-168']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-045']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-167']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['123-2028']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-318']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['105-1314ANS']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-211']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-035']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-NE-130']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['180-1520']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-087']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-028']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-005']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-001']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-LA-002']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-004']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['171-2124']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-082']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['105-1418']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-203']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-171']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-121']->getKey(), 'quantity' => 0.01));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['188-2340']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-043']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-334']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-WA-008']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MX-003']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MX-002']->getKey(), 'quantity' => 3));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-028']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-196']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-010']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-EP-071']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-021']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-003']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-WA-006']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-173']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-078']->getKey(), 'quantity' => 0.05));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-028']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-140']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['1911-319']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-096']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-096']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['1911-321']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-017']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-140']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-019']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-096']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-018']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-096']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-154']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-097']->getKey(), 'quantity' => 0.02));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-155']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-036']->getKey(), 'quantity' => 0.01));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-086']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-171']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-085']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-084']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-082']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-080']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-096']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-087']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-095']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['176-2024']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-032']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-164']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-079']->getKey(), 'quantity' => 0.05));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['181-2542']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-089']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-028']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-088']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-021']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-005']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-001']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-LA-002']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-166']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-080']->getKey(), 'quantity' => 0.05));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-167']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-177']->getKey(), 'quantity' => 0.01));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-168']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-178']->getKey(), 'quantity' => 0.01));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['181-2540']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-088']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-028']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-021']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-005']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-001']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-LA-002']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-072']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-162']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-074']->getKey(), 'quantity' => 0.05));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-163']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-073']->getKey(), 'quantity' => 0.05));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-078']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-131']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-077']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-131']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-131']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-120']->getKey(), 'quantity' => 0.03));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-135']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-107']->getKey(), 'quantity' => 0.02));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-136']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-105']->getKey(), 'quantity' => 0.02));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-241']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-066']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-196']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-137']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-108']->getKey(), 'quantity' => 0.02));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['191-2540']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-WA-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-088']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-075']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CT-008']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-074']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-073']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-028']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-088']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-021']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-DR-002']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-WA-001']->getKey(), 'quantity' => 4));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-WA-003']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-063']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-173']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['107-1314']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-062']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-011']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-061']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-060']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-011']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-069']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-140']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-068']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-058']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-066']->getKey(), 'quantity' => 0.5));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-066']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-096']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-129']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-078']->getKey(), 'quantity' => 0.05));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['166-2036']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-028']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-251']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-161']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-250']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-160']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-052']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-051']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-050']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-140']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-178']->getKey(), 'quantity' => 0.02));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['116-2080']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-054']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-008']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-196']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-141']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-071']->getKey(), 'quantity' => 0.01));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-059']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-084']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-058']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-057']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-056']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-055']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MP-054']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-127']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['166-2024']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-019']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['276-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['107-1614']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-008']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-EP-070']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-031']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-174']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-EP-071']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-LA-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-030']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-031']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-030']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-052']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-081']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-EP-072']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-LA-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-030']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-031']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-030']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-052']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-081']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-EP-074']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-LA-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-030']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-031']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-030']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-052']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-EP-076']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-031']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-174']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['260-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['260-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['276-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-EP-083']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-154']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-EP-084']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-153']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['268-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['268-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['191-750']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-DR-009']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-WA-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-DR-006']->getKey(), 'quantity' => 2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['LA-676']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-DR-005']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-075']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CT-008']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-074']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MX-124']->getKey(), 'quantity' => 3));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-073']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-012']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MX-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MX-001']->getKey(), 'quantity' => 8));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-010']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-021']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-022']->getKey(), 'quantity' => 2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-WA-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-003']->getKey(), 'quantity' => 2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-WA-006']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-EP-054']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-058']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-EP-055']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-059']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-EP-056']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-059']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-EP-058']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-058']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-EP-059']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-058']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['136-1730']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-054']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-196']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-EP-061']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-059']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-EP-062']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-058']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['261-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['199-2340']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-300']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-WA-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-010']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-010']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-066']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-075']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CT-008']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-074']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-073']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MX-003']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MX-057']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-028']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MX-001']->getKey(), 'quantity' => 5));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-EP-072']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-DR-002']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-WA-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-003']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-WA-006']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['164-2024']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['277-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['287-1810']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['287-1815']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-313']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['277-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['261-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['176-1924']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-032']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['270-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['173-2024']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-032']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['270-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['267-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['275-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['275-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['267-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['116-2535']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-094']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-008']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['116-2525']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-008']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-117']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-102']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-011']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-101']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['262-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['266-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['266-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['262-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-109']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-011']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-108']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-107']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['115-2235']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-044']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['105-1518']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-218']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['105-1516']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-212']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['115-2260']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-033']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-035']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['286-2005']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-310']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['286-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['286-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['115-2280']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-034']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-035']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-MP-032']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-038']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-036']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-043']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-041']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['105-1515']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-210']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-189']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-188']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-187']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-186']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-185']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-184']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-070']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-178']->getKey(), 'quantity' => 0.02));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['1911-219']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-015']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-088']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-080']->getKey(), 'quantity' => 0.05));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-089']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-076']->getKey(), 'quantity' => 0.05));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-199']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-049']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-198']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-197']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-196']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-195']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-191']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['1911-221']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-190']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-084']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-074']->getKey(), 'quantity' => 0.05));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-085']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-073']->getKey(), 'quantity' => 0.05));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['120-2525']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-086']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-079']->getKey(), 'quantity' => 0.05));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-165']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['120-2535']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['272-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['282-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['125-2060T']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-061']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['B-MX-065']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-064']->getKey(), 'quantity' => 0.05));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['282-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['272-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-145']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-144']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['125-1835T']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-012']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-141']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['194-2024']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-021']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-019']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-126']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-011']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-122']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-011']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-121']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-011']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-120']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-011']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['155-1520']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-087']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-117']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-086']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-137']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-011']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-134']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-133']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['181-1353']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-028']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-021']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-005']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-001']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-LA-002']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-131']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-130']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-045']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-010']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['155-2542.']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-006']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['191-1520']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-WA-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-087']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-075']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CT-008']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-074']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-073']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-028']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-088']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-021']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-DR-002']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-WA-001']->getKey(), 'quantity' => 4));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-WA-003']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['118-2060']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-008']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['179-2340']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-300']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-EP-072']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-010']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-066']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['130-2545']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-040']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-052']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['264-2208']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-336']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['1911-600']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['130-2535']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-040']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-049']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['180-2542']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-089']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-028']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-005']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-001']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-LA-002']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-004']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['281-2205']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['192-2024']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-021']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['196-3022']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-021']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-005']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-001']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-016']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-028']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['196-3020']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-021']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-005']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-001']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-014']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-028']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['196-3018']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-021']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-005']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-001']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-028']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['181-2393']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-083']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-028']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-088']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-021']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-005']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-001']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-LA-002']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['281-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-089']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-035']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-WI-015']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-048']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-019']->getKey(), 'quantity' => 2));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-088']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-WI-015']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-048']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-032']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-019']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-087']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-WI-015']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-048']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-032']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-019']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['281-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-085']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-034']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-001']->getKey(), 'quantity' => 0.5));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-028']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-WI-015']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-048']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-084']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-034']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-001']->getKey(), 'quantity' => 0.5));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-WI-015']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-048']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-029']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-083']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-034']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-001']->getKey(), 'quantity' => 0.5));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-WI-015']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-048']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-029']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-082']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-137']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-089']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-081']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-137']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-136']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-088']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-080']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-040']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['174-1924']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-032']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-098']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-040']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-018']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-097']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-040']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-018']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-095']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-029']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-093']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-017']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-035']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-019']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-092']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-034']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-001']->getKey(), 'quantity' => 0.5));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-028']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-029']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-091']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-032']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-019']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-090']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-078']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-088']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-077']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-030']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-207']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['291-C04']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['116-2230']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-008']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-107']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['265-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['265-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['282-1815']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-315']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['287-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['117-2080']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-221']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-008']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-106']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['282-1810']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['263-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['125-2235T']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-016']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['290-GPC04']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['117-2045']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-104']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-221']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-008']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['263-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['175-2024']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-032']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-020']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['273-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['273-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['117-2060']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-221']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-008']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['120-2235']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['120-2245']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['125-1860T']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-058']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['105-1614']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-008']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['278-2010']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['278-2015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['106-1418']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-204']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['106-1416']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-209']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['106-1415']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-205']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['154-1912']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-059']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['154-1924']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-060']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['271-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['271-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['116-2260']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-109']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-008']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['189-2260']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-043']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-335']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-WA-008']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-010']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MX-003']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-196']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-010']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-EP-074']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-021']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-316']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['287-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['105-1618']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-219']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['105-1615']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-217']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['105-1616']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['120-2225']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['116-2245']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-108']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-008']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-402']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-032']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-019']->getKey(), 'quantity' => 2));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-068']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-078']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-077']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-088']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['261-2210']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-065']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-040']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-060']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-WI-015']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-155']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['155-2550']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-093']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['164-1936']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-007']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-078']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-040']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['181-2340']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-084']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-004']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-NE-028']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-088']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-012']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-SY-021']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-005']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-001']->getKey(), 'quantity' => 0.2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-LA-002']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-077']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-116']->getKey(), 'quantity' => 2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-045']->getKey(), 'quantity' => 2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-115']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-081']->getKey(), 'quantity' => 2));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-044']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['125-1735T']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-074']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-089']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-108']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-071']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-WI-015']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-155']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['105-1218']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-MP-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-230']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-003']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-048']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-WI-015']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-063']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-047']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-018']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-046']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-021']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-031']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-030']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-043']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-018']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-042']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-127']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-005']->getKey(), 'quantity' => 0.5));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-006']->getKey(), 'quantity' => 0.5));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-040']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-041']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-126']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-005']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-006']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-040']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-040']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-018']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['157-1924']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-048']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-059']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-WI-015']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-155']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-053']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-021']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-031']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-030']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-052']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-021']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-031']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-030']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-081']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['157-1912']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['155-2542']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-089']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['155-2540']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-068']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-088']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-004']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['261-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TP-011']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-013']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-038']->getKey(), 'quantity' => 0.04));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-PI-014']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-027']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-040']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-025']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-040']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-019']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-040']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-036']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-040']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-031']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-040']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-030']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-040']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['123-2215']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-304']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-029']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-040']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-018']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-028']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-040']->getKey(), 'quantity' => 0));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['1911-512']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['A-EP-046']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-014']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-BX-003']->getKey(), 'quantity' => 0.1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-015']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-015']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-039']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-040']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-018']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-008']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-001']->getKey(), 'quantity' => 0.5));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-WI-015']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-002']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-010']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-048']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-009']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-008']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-029']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-007']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-WI-015']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-002']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-010']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-048']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-009']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-008']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-018']->getKey(), 'quantity' => 1));

		$bom_id = BillOfMaterials::create(array('product_id' => $products['A-EP-006']->getKey()))->getKey();
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-TU-001']->getKey(), 'quantity' => 1));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-WI-015']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-002']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-010']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MX-048']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-009']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-CH-008']->getKey(), 'quantity' => 0));
		BillOfMaterialsComponent::create(array('bom_id' => $bom_id, 'product_id' => $products['B-MP-019']->getKey(), 'quantity' => 2));

	}
}
