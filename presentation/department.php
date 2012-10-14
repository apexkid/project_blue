<?php

Class Department
{
	public $mName;
	public $mDescription;
	
	public $department_featured;
	public $department_hot;
	public $department_new;
	
	
	private $mDepartmentId = 0;
	private $mCategoryId = 0;
	
	private $check;
	
	public function __construct()
	{
		if(isset($_GET['DepartmentId']))
		{
			$this -> mDepartmentId = (int)$_GET['DepartmentId'];
			$this -> check = 0;
		}
		else
			trigger_error('DepartmentId not Set');
			
		if(isset($_GET['CategoryId']))
		{
			$this -> mCategoryId = (int)$_GET['CategoryId'];
			$this -> check = 1;
		}
	}
	
	public function init()
	{
		if($this -> check == 0)
		{
			$this -> department_featured = Catalog::GetDepartmentFeaturedProducts($this -> mDepartmentId);
			for($i = 0; $i < count($this -> department_featured); $i++)
			{
				$this -> department_featured[$i]['link_to_image'] = Link::ToProductImage($this -> department_featured[$i]['imgurl_thumb']);
				$this -> department_featured[$i]['link_to_product'] = Link::ToProductPage($this -> department_featured[$i]['product_id']);
			}
			
			$this -> department_hot = Catalog::GetDepartmentHotProducts($this -> mDepartmentId);
			for($i = 0; $i < count($this -> department_hot); $i++)
			{
				$this -> department_hot[$i]['link_to_image'] = Link::ToProductImage($this -> department_hot[$i]['imgurl_thumb']);
				$this -> department_hot[$i]['link_to_product'] = Link::ToProductPage($this -> department_hot[$i]['product_id']);
			}
			
			$this -> department_new = Catalog::GetDepartmentNewProducts($this -> mDepartmentId);
			for($i = 0; $i < count($this -> department_new); $i++)
			{
				$this -> department_new[$i]['link_to_image'] = Link::ToProductImage($this -> department_new[$i]['imgurl_thumb']);
				$this -> department_new[$i]['link_to_product'] = Link::ToProductPage($this -> department_new[$i]['product_id']);
			}
		}
		if($this -> check == 1)
		{
			$this -> department_featured = Catalog::GetCategoryFeaturedProducts($this -> mCategoryId);
			for($i = 0; $i < count($this -> department_featured); $i++)
			{
				$this -> department_featured[$i]['link_to_image'] = Link::ToProductImage($this -> department_featured[$i]['imgurl_thumb']);
				$this -> department_featured[$i]['link_to_product'] = Link::ToProductPage($this -> department_featured[$i]['product_id']);
			}
			
			$this -> department_hot = Catalog::GetCategoryHotProducts($this -> mCategoryId);
			for($i = 0; $i < count($this -> department_hot); $i++)
			{
				$this -> department_hot[$i]['link_to_image'] = Link::ToProductImage($this -> department_hot[$i]['imgurl_thumb']);
				$this -> department_hot[$i]['link_to_product'] = Link::ToProductPage($this -> department_hot[$i]['product_id']);
			}
			
			$this -> department_new = Catalog::GetCategoryNewProducts($this -> mCategoryId);
			for($i = 0; $i < count($this -> department_new); $i++)
			{
				$this -> department_new[$i]['link_to_image'] = Link::ToProductImage($this -> department_new[$i]['imgurl_thumb']);
				$this -> department_new[$i]['link_to_product'] = Link::ToProductPage($this -> department_new[$i]['product_id']);
			}
			
		}
			
	}
}