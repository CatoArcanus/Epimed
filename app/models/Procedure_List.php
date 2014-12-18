<?php

class Procedure_List extends Eloquent
{
	//* Table Information *//
	/**
	* The Database Table used by the Model.
	*
	* @var string
	*/

	protected $table = 'procedure_list';

	/**
	* The Primary Key of the Table
	*
	* @var array
	*/
	protected $primaryKey = 'form';
	protected $primaryKey = 'procedure';

	/** "One to One" Relationships **/
	/**
	 * Returns the Procedure linked to the Procedure_List
	 *
	 * @return procedure
	 */
	public function procedure()
	{
		return $this -> hasOne('procedure', 'id', 'procedure');
	}

	/** "belongsTo" Relationships **/
	/**
	* Returns the Procedure Form linked to the Procedure_List
	*
	* @return procedure_form
	*/
	{
		return $this -> belongsTo('procedure_form', 'form', 'id');
	}
}