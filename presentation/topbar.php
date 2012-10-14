<?php

Class Topbar
{
	public $search_string = '';
	public $mLinkToSearch;
	public $homeLink = '/project_blue';
	public $mCategories;
	public $selected_category;
	
	private $search_string_copy = '';
	
	
	public function __construct()
	{
		$this -> mLinkToSearch = Link::ToSearch();
		$this -> mCategories = Catalog::GetCategories();
		if(isset($_GET['Search']))
		{
			$this -> search_string = trim($_POST['search_string']);
			$this -> selected_category = $_POST['category'];
			
			$this -> search_string_copy = str_replace(' ', '-', $this -> search_string);
			
			ob_clean();
			header('HTTP/1.1 302 Found');
			header('Location: ' .Link::ToSearchResults($this -> search_string_copy, $this -> selected_category));
			flush();
			ob_flush();
			ob_end_clean();
			//exit(); 
		}
		/*else if(isset($_GET['SearchResults']))
		{
			$this -> search_string = trim( str_replace('-', ' ', $_GET['SearchString']));
		}*/
		
		
	}	
}


?>