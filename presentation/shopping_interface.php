<?php

Class ShoppingInterface
{
	public $mSiteUrl;
	
	public $mContentsCell = 'first_page_contents.tpl';
	public $dCell = 'departments_list.tpl';
	
	public function __construct()
	{
		$this -> mSiteUrl = Link::Build('');
	}
	
	public function init()
	{
		if (isset($_GET['ShowId']))
			$this -> mContentsCell = 'department_all.tpl';
		else if(isset($_GET['DepartmentId']))
			$this -> mContentsCell = 'department.tpl';
		else if(isset($_GET['SearchResults']))
			$this -> mContentsCell = 'search_products.tpl';
	}
}