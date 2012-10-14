<?php

Class Productpage
{
	public $product_data;
	public $product_property;
	public $product_value;
	private $product_id;
	private $temp;
	
	public function __construct()
	{
		if(isset($_GET['ProductId']))
		{
			$this -> product_id = (int)$_GET['ProductId'];
		}
		else
			trigger_error('Product Id not Set');
	}
	
	public function init()
	{
		$this -> product_data = Catalog::GetProductDetails($this -> product_id);
		$this -> product_property = Catalog::GetProductProperty($this -> product_id);
		
		if($this -> product_data[0]['isactive'])
		{
			$this -> product_data[0]['link_to_smallimage'] = Link::ToProductImage($this -> product_data[0]['imgurl_small'], 2);
			$this -> product_data[0]['link_to_largeimage'] = Link::ToProductImage($this -> product_data[0]['imgurl_full'], 3);
			$this -> product_data[0]['link_to_add_product'] = Link::ToCart(ADD_PRODUCT, $this -> product_id);
		
			if( ($this->product_data[0]['currentprice']) < ($this->product_data[0]['lastprice']) )
			{
				$this->product_data[0]['discount'] = ($this->product_data[0]['lastprice']) - ($this->product_data[0]['currentprice']);
				$this->product_data[0]['discount_percentage'] = ($this->product_data[0]['discount'] *100) / ($this->product_data[0]['lastprice']);
			}
			else
			{
				$this->product_data[0]['discount'] = 0;
				$this->product_data[0]['discount_percentage'] = 0;
			}
			
			for($i = 0; $i < count($this -> product_property); $i++)
			{
				$temp = Catalog::GetPropertyName($this -> product_property[$i]['property_id']);
				$this -> product_property[$i]['property_name'] = $temp[0]['property_name'];
			}
		}
	}
}
?>