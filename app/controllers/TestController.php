<?php

/**
 * The Test Controller runs various queries or tests to help debug this application.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Batch
 * @author 	   Tyler Reed  	(Original Author) 	<tylernathanreed@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.0 (12/4/2014)
 */

//* Test Controller Class *//
class TestController extends BaseController
{
	/**
	 * Runs the Test.
	 *
	 * @return void
	 */
	public function test($alphanumeric)
	{
		return View::make('Test/Test', array('alphanumeric' => $alphanumeric));
	}
}