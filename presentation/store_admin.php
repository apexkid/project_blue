<?php

Class StoreAdmin
{
	public $mSiteUrl;
	public $mMenuCell = 'blank.tpl';
	public $mContentCell = 'blank.tpl';
	public $mBlock = 'blank.tpl';
	
	public function __construct()
	{
		$this -> mSiteUrl = Link::Build('', 'https');
		
		if(USE_SSL == true && getenv('HTTPS') != 'on')
		{
			header('Location: https://' . getenv('SERVER_NAME') . getenv('REQUEST_URI'));
			exit();
		}
	}
	
	public function init()
	{
		if( ( !isset($_SESSION['admin_logged']) ) || $_SESSION['admin_logged'] != true )
			$this -> mContentCell = 'admin_login.tpl';
		else
		{
			$this -> mContentCell = 'admin_menu.tpl';
			
			if(isset($_GET['Page']) && ($_GET['Page'] == 'Logout') )
			{
				unset($_SESSION['admin_logged']);
				header('Location: '. Link::ToAdmin());
				exit();
			}
			if(isset($_GET['Page']) && ($_GET['Page'] == 'Departments') )
			{
				$this -> mBlock = 'admin_departments.tpl';
			}
		}
	}		
}
?>