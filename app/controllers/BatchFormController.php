<?php

class BatchFormController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * @return Response
	 */
	public function index()
	{
		//$products = Product::all();
		//$products = array();
		$batches = Batch::withoutTrash()->paginate(10);
		//$products = Product::all();
		//$b = Batch::find(1)->product;
		//$batches = DB::table('batch')->get();
		return View::make ('forms/batch-history/index', array(
			'batches' => $batches,
			//'products' => $products,
		));
	}

	/**
	 * Show the form for creating a new resource.
	 * @return Response
	 */
	public function create() 
	{		
		return View::make('forms/batch-history/create', array (

		));
	}
	
	/**
	 * Show the form for creating a new resource.
	 * @return Response
	 */
	public function start() 
	{		
		return View::make('forms/batch-history/start', array (

		));
	}	
	
	/**
	 * Store a newly created resource in storage.
	 * @return Response
	 */
	public function store()
	{		
		// validate
		$rules = array(
			'final_lot_#' => 'required|unique:batch,lot',
			'catalog_#' => 'required|exists:product,alphanumeric'
		);

		//Process the validator based on the rules
		$validator = Validator::make(Input::all(), $rules);
		//Get any messages
		$messages = $validator->messages();
		//process the validator
		if ($validator->fails()) {
			return Redirect::to('forms/batch-history/start')
				->with ('flash_notice', 'Batch Form creation failed '.$messages)
				->with('flash_type', 'failure');
		} else {

			// store BatchForm
			$input = Input::all();
			$product = Product::where ('alphanumeric', $input['catalog_#'])->firstOrFail();
			$revision = Revision::firstOrCreate(array('number' => 1, 'active' => true));

			$batch = new Batch;

			$batch->product_id = $product->getKey();
			$batch->revision_id = $revision->getKey();
			$batch->lot = $input['final_lot_#'];

			$batch->save();
					
			// redirect			
			return Redirect::to('forms/batch-history')
				->with('flash_notice', 'Batch History Form Created Successfully')
				->with('flash_type', 'success');
		}		
	}
	
	/**
	 * Display the specified resource.
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$batch = Batch::where ('id', $id)->firstOrFail();
		$product = $batch->product;
		return View::make ('forms/batch-history/show', array(
			'batch' => $batch,
			'product' => $product			
		));
	}
	
	/**
	 * Show the form for editing the specified resource.
	 * @param  int  $id
	 * @param  string  $stage
	 * @return Response
	 */
	public function edit($id, $stage)
	{
		$batch = Batch::where ('id', $id)->firstOrFail();
		$product = $batch->product;
		return View::make ('forms/batch-history/'.$stage, array(
			'batch' => $batch,
			'product' => $product
		));
	}
	
	/**
	 * Display the specified resource.
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, $stage)
	{
		$batch = Batch::where('id', $id)->firstOrFail();
		$product = $batch->product;
		$input = Input::except('_token');
		
		switch ($stage) {
			case 'generate':
				var_dump($input);
				// validate
				$rules = array(
					'pouch_generated_by' 	=> 'required|exists:user,username',
					'pouch_generated_date' 	=> 'required|date',
					'pouch_generated_#' 	=> 'required|integer',					
					'carton_generated_by' 	=> 'required|exists:user,username',
					'carton_generated_date' => 'required|date',
					'carton_generated_#' 	=> 'required|integer',
				);

				//Process the validator based on the rules
				$validator = Validator::make(Input::all(), $rules);
				//Get any messages
				$messages = $validator->messages();
				//process the validator
				if ($validator->fails()) {
					return Redirect::to('forms/batch-history/'.$batch->id.'/edit/generate')
						->with ('flash_notice', 'Batch Form generation failed '.$messages)
						->with('flash_type', 'failure');
				} else {
				
					//** Create BatchPouchLabel **//	
					$batchPouchLabel = new BatchPouchLabel;
					$batchPouchLabel->save();
					// Save the BatchPouchLabel
					$batch->pouch_id = $batchPouchLabel->id;
					$batch->save();
					
					$pouchGenerator = User::where ('username', $input['pouch_generated_by'])->firstOrFail();
					$employee_pouchGenerator = $pouchGenerator->employee;
					
					//** That employee is the generator of this Pouch **//	
					$batchGenerationforPouch = new BatchGeneration;
					$batchGenerationforPouch->generated_by = $employee_pouchGenerator->id;
					$batchGenerationforPouch->date = $input['pouch_generated_date'];
					$batchGenerationforPouch->amount = $input['pouch_generated_#'];
					$batchGenerationforPouch->save();
							
					//Link it all together
					DB::table('pouchLabel_generation')->insert(array(
						array(
							'pouch_id' => $batchPouchLabel->id, 
							'generation_id' => $batchGenerationforPouch->id
						)
					));
					
					//** Create BatchCartonLabel **//	
					$batchCartonLabel = new BatchCartonLabel;
					$batchCartonLabel->save();
					// Save the BatchCartonLabel
					$batch->carton_id = $batchCartonLabel->id;
					$batch->save();
					
					$cartonGenerator = User::where ('username', $input['carton_generated_by'])->firstOrFail();
					$employee_cartonGenerator = $cartonGenerator->employee;
					
					//** That employee is the generator of this Carton **//	
					$batchGenerationforCarton = new BatchGeneration;
					$batchGenerationforCarton->generated_by = $employee_cartonGenerator->id;
					$batchGenerationforCarton->date = $input['carton_generated_date'];
					$batchGenerationforCarton->amount = $input['carton_generated_#'];
					$batchGenerationforCarton->save();
							
					//Link it all together
					DB::table('cartonLabel_generation')->insert(array(
						array(
							'carton_id' => $batchCartonLabel->id, 
							'generation_id' => $batchGenerationforCarton->id
						)
					));	

					// redirect			
					return Redirect::to('forms/batch-history')
						->with ('flash_notice', 'Batch Generations Created Successfully')
						->with('flash_type', 'success');
				} 
				break;
			case 'approve':
				var_dump($input);
				// validate
				$batchGeneration = BatchGeneration::where('id', $input['batchGeneration'])->firstOrFail();

				$rules = array(
					'approved_by' 	=> 'required|exists:user,username',
  					'approved_date' => 'required|date',
  					'approved_#' 	=> 'required|integer|max:'.$batchGeneration->amount
				);

				//Process the validator based on the rules
				$validator = Validator::make(Input::all(), $rules);
				//Get any messages
				$messages = $validator->messages();
				//process the validator
				if ($validator->fails()) {
					return Redirect::to('forms/batch-history/'.$batch->id.'/edit/approve')
						->with ('flash_notice', 'Batch Form approval failed '.$messages)
						->with('flash_type', 'failure');
				} else {
					// Get an employee for approvals
					$user = User::where('username', $input['approved_by'])->firstOrFail();
					$employee = $user->employee;
					$batchGeneration->used = $input['approved_#'];
					$batchGeneration->save();
					$batchGeneration->approve($employee->id, $input['approved_date']);

					// redirect			
					return Redirect::to('forms/batch-history/'.$batch->id.'/edit/approve')
						->with ('flash_notice', 'Approval Created Successfully')
						->with('flash_type', 'success');
				} 				
				break;
			case 'destroy':
				// validate
				$batchPouchLabel = BatchPouchLabel::where('id', $input['batchPouchLabel'])->firstOrFail();
				$rules = array(
					'destroyed_by' 	 => 'required|exists:user,username',
  					'destroyed_date' => 'required|date',
  					'destroyed_#' 	 => 'required|integer'
				);

				//Process the validator based on the rules
				$validator = Validator::make(Input::all(), $rules);
				
				//Get any messages
				$messages = $validator->messages();
				
				//process the validator
				if ($validator->fails()) {
					return Redirect::to('forms/batch-history/'.$batch->id.'/edit/approve')
						->with ('flash_notice', 'Batch Form destruction failed '.$messages)
						->with('flash_type', 'failure');
				} else {
					// Get an employee for approvals
					$user = User::where('username', $input['approved_by'])->firstOrFail();
					$employee = $user->employee;
					$destruction = new BatchDestruction;
					$destruction->destroyed_by = $employee->id;
					$destruction->date = $input['destroyed_date'];
					$destruction->amount = $input['destroyed_#'];
					$destruction->save();
					
					if(array_key_exists('batchPouchLabel', $input))
					{
						$batchPouchLabel = BatchPouchLabel::where('id', $input['batchPouchLabel'])->firstOrFail();
						$batchPouchLabel->destruction_id = $destruction->id;
						$batchPouchLabel->save();
					}
					if(array_key_exists('batchCartonLabel', $input))
					{
						$batchCartonLabel = BatchCartonLabel::where('id', $input['batchCartonLabel'])->firstOrFail();
						$batchCartonLabel->destruction_id = $destruction->id;
						$batchCartonLabel->save();
					}

					// redirect			
					return Redirect::to('forms/batch-history/'.$batch->id.'/edit/destroy')
						->with ('flash_notice', 'Destruction Created Successfully')
						->with('flash_type', 'success');
				}
				break;
			case 'machine':
				//TODO:
				break;
			case 'burst':
				//get input
				$input = Input::except('_token');
				//validate
				$rules = array(
					
				);
				//validate each avatar in turn and then either store them or fail with a message
				foreach ($input as $burstData) {
					//validate
					$validator = Validator::make($burstData, $rules);
					//Get any relevant messages
					$messages = $validator->messages();
					if ($validator->fails()) {
						//var_dump($burstData);
						//var_dump($rules);
						//die();
						var_dump($messages);
						die ('Validation failed for burst entry data');
					} else {					
						// store burstEntry
						$burstEntry = new BatchBurstEntry;
						$burstEntry->batch_id = $batch->id;
						$burstEntry->time = $burstData['burst_time'];
						$burstEntry->pressure = $burstData['burst_pressure'];
						$burstEntry->location = $burstData['burst_location'];
						if (!$burstEntry->save()) {
							die ('OK');
						}
					}
				}
				die ('OK');
				break;
			case 'inspect':
				//TODO:
				break;
			case 'sterlize':
				var_dump($input);
				// validate
				$rules = array(
					'sterilize_date' 			=> 'required|date',
					'sterilize_sterilizer' 		=> 'required|exists:user, username',
					'sterilize_workOrderNumber' => 'required|integer',
					'sterilize_quantity' 		=> 'required|integer'
					);
				// Process the validator based on the rules
				$validator = Validator::make(Input::all(), $rules);
				// Get any messages
				$messages = $validator -> messages();
				// process the validator
				if ($validator->fails())
				{
					return Redirect::to('forms/batch-history/'.$batch->id.'/edit/sterlize')
						->with ('flash_notice', 'Batch Form sterilizer failed '.$messages)
						->with('flash_type', 'failure');
				} 
				else 
				{
					// Get employee for sterilizing
					$user = User::where('username', $input['sterilize_sterilizer'])->firstOrFail();
					$employee = $user->employee;

					// redirect
					return Redirect::to('forms/batch-history/' .$batch->id. '/edit/sterlize')
						->with ('flash_notice', 'Sterilization Created Successfully')
						->with ('flash_type', 'success');
				}
				break;
			case 'release':
				//TODO
				break;
			default:
				var_dump('404, not found');
				break;
		}
		var_dump($stage.' show');
		die();
		
		return Redirect::to('forms/batch-history')
			->with ('flash_notice', 'Batch History Form Created Successfully')
			->with('flash_type', 'success');
	}

	
	/**
	 * Remove the specified resource from storage.
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		/*
		$input = Input::except('_token');
			
		$user = User::where ('id', $input['id'])->firstOrFail();	
		
		$user->delete();
		// redirect
		die ('OK');
		*/
	}	
}