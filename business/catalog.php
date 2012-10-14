<?php

Class Catalog
{
	public static function GetDepartments()
	{
		$sql = 'CALL catalog_get_departments_list_level1()';
		return DatabaseHandler::GetAll($sql);
	}
	
	public static function GetCategories()
	{
		$sql = 'CALL catalog_get_department_list_level2()';
		return DatabaseHandler::GetAll($sql);
	}
	
	public static function GetDepartmentDetails($departmentId)
	{
		$sql = 'CALL catalog_get_department_details(:department_id)'; // prepare query
		$params = array(':department_id' => $departmentId); //mapping into prepare 
		return DatabaseHandler::GetRow($sql, $params);
	}
	
	public static function GetCategoriesInDepartment($departmentId)
	{
		$sql = 'CALL catalog_get_categories_list(:department_id)';
		$params = array(':department_id' => $departmentId);
		return DatabaseHandler::GetAll($sql, $params);
	}
	
	public static function GetCategoryDetail($categoryId)
	{
		$sql = 'CALL catalog_get_category_details(:category_id)';
		$params = array(':category_id' => $categoryId);
		return DatabaseHandler::GetRow($sql, $params);
	}
	private static function HowManyPages($countsql, $countSqlParams)
	{
		//hashing the query.
		$queryHashCode = md5($countSql. var_export($countSqlParams, true));
		
		if(isset($_SESSION['last_count_hash']) && isset($_SESSION['how_many_pages']) && $_SESSION['last_count_hast'] == $queryHashCode)
		{
			$how_many_pages = $_SESSION['how_many_pages'];
		}
		else
		{
			$item_count = DatabaseHandler::GetOne($countSql, $countSqlparams);
			$how_many_pages = ceil($item_count / PRODUCTS_PER_PAGE);
			
			$_SESSION['last_count_hash'] = $queryHashCode;
			$_SESSION['how_many_pages'] = $how_many_pages;
		}
		
		return $how_many_pages;
	}
	
	public static function GetProductsInCategory($categoryId, $pageNo, &$rHowManyPages)
	{
		$sql = 'CALL catalog_count_products_in_category(:category_id)';
		$params = array(':category_id'  => $categoryId);
		
		$rHowManyPages = Catalog::HowManyPages($sql, $params);
		$start_item = ($pages - 1) * PRODUCT_PER_PAGE;
		
		$sql = 'CALL catalog_get_products_in_category(:category_id, :short_product_description_length, :products_per_page, :start_item)';
		$params = array(':category_id' => $categoryId , ':short_product_description_length' => SHORT_PRODUCT_DESCRIPTION_LENGTH,
		':products_per_page' => PRODUCTS_PER_PAGE, 'start_item' => $start_item);
		
		return DatabaseHandler::GetAll($sql, $params);
	}
	
	public static function GetDepartmentFeaturedProducts($departmentId)
	{
		$sql = 'CALL catalog_get_department_featured_products(:department_id)';
		$params = array(':department_id' => $departmentId);
		
		return DatabaseHandler::GetAll($sql, $params);
	}
	
	public static function GetCategoryFeaturedProducts($categoryId)
	{
		$sql = 'CALL catalog_get_category_featured_products(:category_id)';
		$params = array(':category_id' => $categoryId);
		
		return DatabaseHandler::GetAll($sql, $params);
	}
	
	public static function GetDepartmentHotProducts($departmentId)
	{
		$sql = 'CALL catalog_get_department_hot_products(:department_id)';
		$params = array(':department_id' => $departmentId);
		
		return DatabaseHandler::GetAll($sql, $params);
	}
	
	public static function GetCategoryHotProducts($categoryId)
	{
		$sql = 'CALL catalog_get_category_hot_products(:category_id)';
		$params = array(':category_id' => $categoryId);
		
		return DatabaseHandler::GetAll($sql, $params);
	}
	
	public static function GetDepartmentNewProducts($departmentId)
	{
		$sql = 'CALL catalog_get_department_new_products(:department_id)';
		$params = array(':department_id' => $departmentId);
		
		return DatabaseHandler::GetAll($sql, $params);
	}
	
	public static function GetCategoryNewProducts($categoryId)
	{
		$sql = 'CALL catalog_get_category_new_products(:category_id)';
		$params = array(':category_id' => $categoryId);
		
		return DatabaseHandler::GetAll($sql, $params);
	}
	
	public static function GetFirstPageFeaturedProducts()
	{
		$sql = 'CALL catalog_get_firstpage_featured_products()';
		return DatabaseHandler::GetAll($sql);
	}
	
	public static function GetFirstPageHotProducts()
	{
		$sql = 'CALL catalog_get_firstpage_hot_products()';
		return DatabaseHandler::GetAll($sql);
	}
	
	public static function GetFirstPageNewProducts()
	{
		$sql = 'CALL catalog_get_firstpage_new_products()';
		return DatabaseHandler::GetAll($sql);
	}

	public static function GetProductDetails($productId)
	{
		$sql = 'Call catalog_get_product_details(:product_id)';
		$params = array(':product_id' => $productId);
		
		return DatabaseHandler::GetAll($sql, $params);
	}
	
	public static function GetProductProperty($productId)
	{
		$sql = 'CALL catalog_get_product_properties(:product_id)';
		$params = array(':product_id' => $productId);
		
		return DatabaseHandler::GetAll($sql, $params);
	}
	public static function GetPropertyName($propertyId)
	{
		$sql = 'CALL catalog_get_property_name(:property_id)';
		$params = array(':property_id' => $propertyId);
		
		return DatabaseHandler::GetAll($sql, $params);
	}
	
	public static function GetAllProducts($showId, $departmentId, $categoryId)
	{
		if($showId == 1)
			$sql = 'CALL catalog_get_all_featured_products(:department_id, :category_id)';
		else if($showId == 2)
			$sql = 'CALL catalog_get_all_hot_products(:department_id, :category_id)';
		else if ($showId == 3)
			$sql = 'CALL catalog_get_all_new_products(:department_id, :category_id)';
		
		$params = array(':department_id' => $departmentId , ':category_id' => $categoryId);
		
		return DatabaseHandler::GetAll($sql, $params);
	} 
	
	public static function SearchProducts($searchString, $allWords, $sCategory = 0)
	{
		$search_string = '';
		$search_result = array('accepted_words' => array(), 'ignored_words' => array(), 'products' => array());
		if(empty($search_result))
			return $search_result;
		
		$delimiters = '.,;';
		$word = strtok($searchString, $delimiters);
		
		while($word)
		{
			if(strlen($word) < 4)
				$search_result['ignored_words'][] = $word;
			else
				$search_result['accepted_words'][] = $word;
			$word = strtok($delimiters);
		}
		
		if(count($search_result['accepted_words']) == 0)
			return $search_result;
		
		if(strcmp($allWords, "on") == 0)
			$search_string = implode(" +", $search_result['accepted_words']);
		else
			$search_string = implode(" ", $search_result['accepted_words']);
		
		if($sCategory == 0)
		{
			$sql = 'CALL catalog_search_product_first(:search_string, :all_words)';
			$params = array(':search_string' => $search_string, ':all_words' => $allWords);
		}
		else
		{
			$sql = 'CALL catalog_search_product_second(:search_string, :all_words, :selected_category)';
			$params = array(':search_string' => $search_string, ':all_words' => $allWords, ':selected_category' => $sCategory);
		}
		$search_result['products'] = DatabaseHandler::GetAll($sql, $params);
		return $search_result;
	}
		
}

?>