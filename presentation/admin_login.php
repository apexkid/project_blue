<?php
Class AdminLogin
{
	public $mUsername = '';
	public $mLoginMessage = '';
	public $mLinkToAdmin;
	public $mLinkToIndex;
	
	public function __construct()
	{
		if(isset($_POST['submit']))
		{
			if($_POST['username'] == ADMIN_USERNAME && $_POST['password'] == ADMIN_PASSWORD )
			{
				$_SESSION['admin_logged'] = true;
				header('Location: ' . Link::ToAdmin() );
				exit();
			}
			else
				$this -> mLoginMessage = 'Login Failed. Please Try Again. Thank You.';
		}
		$this -> mLinkToAdmin = Link::ToAdmin();
		$this -> mLinkToIndex = Link::ToIndex();
	}
}
?>