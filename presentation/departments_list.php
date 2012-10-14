<?php

Class DepartmentsList
{
	public $mSelectedDepartment = 0;
	public $mDepartments;
	
	public $mSelectedCategory = 0;
	public $mCategories;
	
	//If department exists in query string.. then storing it in the variable
	public function __construct()
	{
		if(isset ($_GET['DepartmentId']))
			$this -> mSelectedDepartment = (int)$_GET['DepartmentId'];
			
		if(isset ($_GET['CategoryId']))
			$this -> mSelectedCategory = (int)$_GET['CategoryId'];
	}
	
	public function init()
	{
		$this -> mDepartments = Catalog::GetDepartments(); //Getting list of departments from db via class catalog
		
		$this -> mCategories = Catalog::GetCategories();
		
		//Creating links for each department.
		for($i = 0; $i < count($this -> mDepartments); $i++)
		{
			$this -> mDepartments[$i]['link_to_department'] = Link::ToDepartment($this -> mDepartments[$i]['department_id']);
		}
		
		for($i = 0; $i < count($this -> mCategories); $i++)
		{
			$this -> mCategories[$i]['link_to_category'] = Link::ToCategory($this-> mCategories[$i]['department_parent_id'], $this -> mCategories[$i]['department_id']);
		}
	}
}

?>