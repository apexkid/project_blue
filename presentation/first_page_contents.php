<?php

Class FirstPageContents
{
	public $first_page_featured;
	public $first_page_hot;
	public $first_page_new;
	
	public function __construct()
	{
	}
	
	public function init()
	{
		$this -> first_page_featured = Catalog::GetFirstPageFeaturedProducts();
		for($i = 0; $i < count($this -> first_page_featured); $i++)
		{
			$this -> first_page_featured[$i]['link_to_image'] = Link::ToProductImage($this -> first_page_featured[$i]['imgurl_thumb']);
			$this -> first_page_featured[$i]['link_to_product'] = Link::ToProductPage($this -> first_page_featured[$i]['product_id']);			
		}
		
		$this -> first_page_hot = Catalog::GetFirstPageHotProducts();
		for($i = 0; $i < count($this -> first_page_hot); $i++)
		{	$this -> first_page_hot[$i]['link_to_image'] = Link::ToProductImage($this -> first_page_hot[$i]['imgurl_thumb']);
			$this -> first_page_hot[$i]['link_to_product'] = Link::ToProductPage($this -> first_page_hot[$i]['product_id']);
		}
			
		$this -> first_page_new = Catalog::GetFirstPageNewProducts();
		for($i = 0; $i < count($this -> first_page_new); $i++)
		{
			$this -> first_page[$i]['link_to_image'] = Link::ToProductImage($this -> first_page_new[$i]['imgurl_thumb']);
			$this -> first_page_new[$i]['link_to_product'] = Link::ToProductPage($this -> first_page_new[$i]['product_id']);
		}
	}
}