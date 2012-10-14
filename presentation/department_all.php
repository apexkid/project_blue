<?php

Class Departmentall
{
	private $show_id;
	private $department_id = 0;
	private $category_id = 0;
	private $last_product_id = 0;
	
	public $products_all;
	public $products_more;
	
	public function __construct()
	{
		if(isset($_GET['ShowId']))
			$this -> show_id = (int)$_GET['ShowId'];
		if(isset($_GET['DepartmentId']))
			$this -> department_id  = (int)$_GET['DepartmentId'];
		if(isset($_GET['CategoryId']))
			$this -> category_id = (int)$_GET['CategoryId'];
		if(isset($_GET['LastProductId']))
			$this -> last_product_id = (int)$_GET['LastProductId'];
		
	}
	
	public function init()
	{
		if($this -> last_product_id == 0)
		{
		$this -> products_all = Catalog::GetAllProducts($this -> show_id, $this -> department_id, $this -> category_id);
		
		for($i = 0; $i < count($this -> products_all); $i++)
		{
			$this -> products_all[$i]['link_to_image'] = Link::ToProductImage($this -> products_all[$i]['imgurl_thumb']);
			$this -> products_all[$i]['link_to_product'] = Link::ToProductPage($this -> products_all[$i]['product_id']);
			
			if( ($this->products_all[$i]['currentprice']) < ($this->products_all[$i]['lastprice']) )
			{
				$this->products_all[$i]['discount'] = ($this->products_all[$i]['lastprice']) - ($this->products_all[$i]['currentprice']);
				$this->products_all[$i]['discount_percentage'] = ($this->products_all[$i]['discount'] *100) / ($this->products_all[$i]['lastprice']);
			}
			else
			{
				$this->products_all[$i]['discount'] = 0;
				$this->products_all[$i]['discount_percentage'] = 0;
			}
		}
		}
		else
		{
			//$this -> products_more = Calalog::GetMoreProducts($this -> show_id, $this -> department_id, $this -> category_id, $this -> last_product_id);
		}
	}
}
?>