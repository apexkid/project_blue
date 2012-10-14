<?php

Class SearchProducts
{
	public $mSearchString;
	public $mSelectedCategory;
	public $mSeachDescription;
	public $search_result;
	public $mProducts;

	
	public function __construct()
	{
		if(isset($_GET['SearchResults']))
		{
			$this -> mSearchString = trim(str_replace('-', ' ', $_GET['SearchResults']));
			$this -> mSelectedCategory = $_GET['sCategory'];
		}
	}
	
	public function init()
	{
		if(isset($this -> mSearchString))
		{
			$search_result = Catalog::SearchProducts($this -> mSearchString, "off", $this -> mSelectedCategory);
				
			//also write for on state.
			
			$this -> mProducts = $search_result['products'];
			
			$this -> mSearchDescription = '<h2> Items found </h2>';
			if(empty($search_result['products']))
				$this -> mSearchDescription = '<h2> No Product Found. </h2>';
			else
			{
				for($i = 0; $i < count($this -> mProducts); $i++)
				{
					$this -> mProducts[$i]['link_to_image'] = Link::ToProductImage($this -> mProducts[$i]['imgurl_thumb']);
					$this -> mProducts[$i]['link_to_product'] = Link::ToProductPage($this -> mProducts[$i]['product_id']);
			
					if( ($this->mProducts[$i]['currentprice']) < ($this->mProducts[$i]['lastprice']) )
					{
						$this->mProducts[$i]['discount'] = ($this->mProducts[$i]['lastprice']) - ($this->mProducts[$i]['currentprice']);
						$this->mProducts[$i]['discount_percentage'] = ($this->mProducts[$i]['discount'] *100) / ($this->mProducts[$i]['lastprice']);
					}
					else
					{
						$this->mProducts[$i]['discount'] = 0;
						$this->mProducts[$i]['discount_percentage'] = 0;
					}
				}
			}
			if(empty($search_result['accepted_words']))
				$this -> mSearchDescription = '<h2> No valid search string. Write something else </h2>';
			
			
				
		}
	}
}
?>