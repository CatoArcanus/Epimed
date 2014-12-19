<?php

/**
 * The View Controller shows various information to the User
 *
 * @category   MVC
 * @package    Controllers
 * @subpackage Views
 * @author 	   Tyler Reed  	(Original Author) 	<tylernathanreed@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.0 (12/11/2014)
 */

//* View Controller Class *//
class BillOfMaterialsController extends BaseController
{
	/**
	 * Display a listing of the resource.
	 * @return Response
	 */
	public function index()
	{
		$billOfMaterials = BillOfMaterials::paginate(20);
		return View::make ('billOfMaterials/index', array(
			'billOfMaterials' => $billOfMaterials
		));
	}
	/**
	 * Displays the Bill of Materials for the specified Product
	 *
	 * @param string $alphanumeric The (Natural) ID of the Product
	 *
	 * @return void
	 */
	public function show($alphanumeric)
	{
		return View::make('billOfMaterials/show', array('alphanumeric' => $alphanumeric));
	}
}