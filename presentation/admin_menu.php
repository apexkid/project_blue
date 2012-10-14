<?php

Class AdminMenu
{
	public $mLinkToStoreFront = '';
	public $mLinkToStoreAdmin = '';
	public $mLinkToLogout = '';
	public $mLinkToDepartment = '';
	public $mLinkToProduct = '';
	public $mLinkToBrand = '';
	public $mLinkToCart = '';
	
	public $major_nav = 'blank.tpl';
	public $mContentCell = 'blank.tpl';
	
	public function __construct()
	{
		$this -> mLinkToStoreFront = Link::ToIndex();
		$this -> mLinkToStoreAdmin = Link::ToAdmin();
		$this -> mLinkToLogout = Link::ToLogout();
		$this -> mLinkToDepartment = Link::ToDepartmentAdmin();
		$this -> mLinkToProduct = Link::ToProductAdmin();
		$this -> mLinkToBrand = Link::ToBrandAdmin();
		$this -> mLinkToCart = Link::ToCartAdmin();
		
	}
}
?>