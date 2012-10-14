<?php

Class Link
{
	public static function Build($link, $type = 'http')
	{
		$base = ( ($type == 'http' || USE_SSL =='no')? 'http://' : 'https://') . getenv('SERVER_NAME');
		
		if(defined('HTTP_SERVER_PORT') && HTTP_SERVER_PORT != 80 && strpos($base, 'https') == false )
			$base = $base . ':' .HTTP_SERVER_PORT;
			
		$link = $base . VIRTUAL_LOCATION . $link;
		return $link;
		//return htmlspecialchars($link, ENT_QUOTES);
	}
	
	public static function ToDepartment($departmentId)
	{
		$link = 'index.php?DepartmentId=' . $departmentId;
		return self::Build($link);
	}
	
	public static function ToCategory($department_parentId, $departmentId)
	{
		$link = 'index.php?DepartmentId=' . $department_parentId . '&CategoryId=' . $departmentId;
		return self::Build($link);
	}
	
	public static function ToProductImage($img_name, $size = 1)
	{
		if($size == 1)
		$link = 'images/products/thumbnails/' . $img_name;
		else if($size == 2)
		$link = 'images/products/smallimage/'. $img_name;
		else if($size == 3)
		$link = 'images/products/largeimage/'. $img_name;
		return self::Build($link);
	}
	
	public static function ToProductPage($productId)
	{
		$link = 'index.php?ProductId='. $productId;
		return self::Build($link);
	}
	
	public static function ToSearch()
	{
		$link = 'index.php?Search';
		return self::Build($link);
	}
	
	public static function ToSearchResults($searchString, $sCategory)
	{
		/*$link = 'search-results/find-';
		if(empty($searchString))
			$link = '/';
		else
			$link = $link . $searchString .'/';
		//CleanUrlText */ //this code is used to generate clean urls.. fuck u
		//$link = 'index.php?SearchResults=' . $searchString . '&sCategory=' . $sCategory;
		$link = 'index.php?' . http_build_query( array('SearchResults' => $searchString, 'sCategory' => $sCategory) );
		return self::Build($link);
	}
	
	public static function AddProduct($productId)
	{
		$link = 'index.php?AddProduct=' . $productId;
		return self::Build($link);
	}
	
	public static function ToCart($action = 0, $productId = null)
	{
		$link = '';
		
		switch($action)
		{
			case ADD_PRODUCT : 
				$link = 'index.php?CartAction=' . $action . '&ItemId=' . $productId;
				break;
			case REMOVE_PRODUCT :
				$link = 'index.php?CartAction=' . $action . '&ItemId=' . $productId;
				break;
			case UPDATE_PRODUCT_QUANTITY :
				$link = 'index.php?CartAction=' . $action . '&ItemId=' . $productId;
				break;
			case SAVE_PRODUCT_FOR_LATER :
				$link = 'index.php?CartAction=' . $action . '&ItemId=' . $productId;
				break;
			case MOVE_PRODUCT_TO_CART :
				$link = 'index.php?CartAction=' . $action . '&ItemId=' . $productId;
				break;
			default : $link = 'index.php?CartAction=0';
		}
		return self::Build($link);
	}
	
	public static function ToAdmin($params ='')
	{
		$link = 'admin.php';
		if($params != '')
			$link = $link . '?' . $params;
		return self::Build($link);
	}
	
	public static function ToLogout()
	{
		$link = 'admin.php?Page=Logout';
		return self::Build($link);
	}
	
	public static function ToIndex()
	{
		$link = 'index.php';
		return self::Build($link);
	}
	
	public static function ToDepartmentAdmin()
	{
		$link = 'admin.php?Page=Departments';
		return self::Build($link);
	}
	
	public static function ToProductAdmin()
	{
		$link = 'admin.php?Page=Products';
		return self::Build($link);
	}
	
	public static function ToBrandAdmin()
	{
		$link = 'admin.php?Page=Brands';
		return self::Build($link);
	}
	
	public static function ToCartAdmin()
	{
		$link = 'admin.php?Page=Carts';
		return self::Build($link);
	}
	
			
}
?>