<?php

///////////////////
//* Description *//
///////////////////
/**
 * The Traceable Interface is used as a workaround to give Constants
 * to Traits.
 *
 * @category   MVC
 * @package    Models
 * @subpackage Traits
 * @author 	   Tyler Reed (Original Author) <tylernathanreed@gmail.com>
 * @copyright  2014 Epimed International
 * @version    1.0 (12/19/2014)
 */

//* Namespaces *//
namespace Traits;

//* Traceable Interface *//
interface TraceableInterface
{
	///////////////////////
	//* Trait Constants *//
	///////////////////////
	/**
	 * The Name of the "created by" Column.
	 *
	 * @var string
	 */
	const CREATED_BY = 'created_by';

	/**
	 * The Name of the "updated by" Column
	 *
	 * @var string
	 */
	const UPDATED_BY = 'updated_by';

	/**
	 * The Name of the "deleted by" Column
	 *
	 * @var string
	 */
	const DELETED_BY = 'deleted_by';

	/**
	 * The Name of the "current id" Column
	 *
	 * @var string
	 */
	const CURRENT_ID = 'current_id';
}