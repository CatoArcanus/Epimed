<?php

///////////////////
//* Description *//
///////////////////
/**
 * This Controller handles all Actions associated with the Product Build Form
 *
 * @category   MVC
 * @package    Controllers
 * @subpackage Product Build Form
 * @author     Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.0 (12/18/2014)
 */

//* Product Build Form Controller *//
class ProductBuildFormController extends BaseController
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pbfs = ProductBuildForm::paginate(10);

		return View::make('forms/product-build-form/index', array('pbfs' => $pbfs));
	}

	/**
	 * Show the form for creating a new resource.
	 * @return Response
	 */
	public function create() 
	{		
		return 'Not Yet Implemented';
	}
	
	/**
	 * Show the form for creating a new resource.
	 * @return Response
	 */
	public function start() 
	{		
		return View::make('forms/product-build-form/start');
	}	
	
	/**
	 * Store a newly created resource in storage.
	 * @return Response
	 */
	public function store()
	{		
		// Validate
		$rules = array(
			'catalog_#' => 'required|exists:product,alphanumeric',
			'quantity' 	=> 'required|integer|min:1'
		);

		// Process the Validator based on the rules
		$validator = Validator::make(Input::all(), $rules);

		// Get any messages
		$messages = $validator->messages();

		// Process the validator
		if($validator->fails())
		{
			return Redirect::to('forms/product-build-form/start')
				->with('flash_notice', 'Product Build Form creation failed: ' . $messages)
				->with('flash_type', 'failure');
		}
		else
		{
			// Store Product Build Form
			$input = Input::all();

			$product = Product::where('alphanumeric', $input['catalog_#'])->firstOrFail();
			$bom = $product->billOfMaterialsWhereCreated;
			$revision = Revision::firstOrCreate(array('number' => 1, 'active' => true));

			$pbf = ProductBuildForm::create(array(
				'revision_id' 	=> $revision->getKey(),
				'bom_id'	  	=> $bom->getKey(),
				'quantity'		=> $input['quantity']
			));
					
			// Redirect		
			return Redirect::to('forms/product-build-form')
				->with('flash_notice', 'Product Build Form Created Successfully')
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
		$pbf = ProductBuildForm::where('id', '=', $id)->first();

		if(is_null($pbf))
			return Redirect::to('forms/product-build-form')
				->with('flash_notice', 'Could not find the specified Product Build Form')
				->with('flash_type', 'failure');

		return View::make('forms/product-build-form/show', array('pbf' => $pbf));
	}
	
	/**
	 * Show the form for editing the specified resource.
	 * @param  int  $id
	 * @param  string  $stage
	 * @return Response
	 */
	public function edit($id, $stage)
	{
		return 'Not Yet Implemented';
	}
	
	/**
	 * Display the specified resource.
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, $stage)
	{
		return 'Not Yet Implemented';
	}

	
	/**
	 * Remove the specified resource from storage.
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		return 'Not Yet Implemented';
	}	
}