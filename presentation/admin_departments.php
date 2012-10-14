<?php
Class AdminDepartments
{
	public $mDepartmentCount;
	public $mDepartments;
	public $mEditItem;
	public $mLinkToDeparmentAdmin;
	public $current_departments;
	
	private $mAction;
	private $mActionDepartmentId;
	
	public function __construct()
	{
		$this -> mLinkToDepartmentAdmin = Link::ToDepartmentAdmin();
		
	}
	
	public function init()
	{
		$this -> current_departments = Catalog::GetDepartments();
		
		if(isset($_POST['add_department']))
		{
			$dept_name = $_POST['department_name'];
			$dept_parent = $_POST['department_parent'];
		}
	} 
}
?>