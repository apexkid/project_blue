<?php

Class Base
{
	public $mCell = 'shopping_interface.tpl';
	public $searchCell = 'topbar.tpl';
	public $cartCell = 'scart.tpl';
	public function __construct()
	{
		$this -> mSiteUrl = Link::Build('');
	}
	
	public function init()
	{
		if(isset($_GET['ProductId']))
			$this -> mCell = 'productpage.tpl';
		
		/*if(isset($_GET['CartAction']))
			$this -> mCell = 'scart.tpl'; */
	}
}
?>