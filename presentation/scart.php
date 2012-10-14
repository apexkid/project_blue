<?php

Class Scart
{
	public $mCartProducts;
	public $mCartSavedProducts;
	public $mTotalAmount;
	public $mIsCartNowEmpty;
	public $mIsCartLaterEmpty;
	
	private $mItemId;
	private $mCartAction;
	
	public function __construct()
	{
		if(isset($_GET['CartAction']))
			$this -> mCartAction = (int)$_GET['CartAction'];
		//else
		//	trigger_error('CartAction not set', E_USER_ERROR);
		
		if($this -> mCartAction == ADD_PRODUCT || $this -> mCartAction == REMOVE_PRODUCT || $this -> mCartAction == SAVE_PRODUCT_FOR_LATER || $this -> mCartAction == MOVE_PRODUCT_TO_CART)
		{
			if(isset($_GET['ItemId']))
				$this -> mItemId = $_GET['ItemId'];
			//else
				//trigger_error('Item Id should be set for such request', E_USER_ERROR);
		}
		
		$this -> mUpdateCartTarget = Link::ToCart(UPDATE_PRODUCT_QUANTITY);
	}
	
	public function init()
	{
		switch($this -> mCartAction)
		{
			case ADD_PRODUCT: 
				ShoppingCart::AddProduct($this -> mItemId);
				header('Location: ' . Link::ToCart());
				break;
			
			case REMOVE_PRODUCT:
				ShoppingCart::RemoveProduct($this -> mItemId);
				header('Location: ' . Link::ToCart());
				break;
			
			case UPDATE_PRODUCT_QUANTITY:
				for($i = 0; $i < count($_POST['itemId']); $i++)
					ShoppingCart::Update($_POST['itemId'][$i], $_POST['quantity'][$i]);
				header('Location: ' . Link::ToCart());
				break;
				
			case SAVE_PRODUCT_FOR_LATER:
				ShoppingCart::SaveProductForLater($this -> mItemId);
				header('Location: ' . Link::ToCart());
				break;
			
			case MOVE_PRODUCT_TO_CART:
				ShoppingCart::MoveProductToCart($this -> mItemId);
				header('Location: ' . Link::ToCart());
				break;
			
			default:
				break;
		}
		
		$this -> mTotalAmount = ShoppingCart::GetTotalAmount();
		$this -> mCartProducts = ShoppingCart::GetCartProducts(GET_CART_PRODUCTS);
		$this -> mCartSavedProducts = ShoppingCart::GetCartProducts(GET_CART_SAVED_PRODUCTS);
		
		if(count($this -> mCartProducts) == 0)
			$this -> mIsCartNowEmpty = 1;
		if(count($this -> mCartSavedProducts) == 0)
			$this -> mIsCartLaterEmpty = 1;
		
		for($i = 0; $i < count($this -> mCartProducts); $i++)
		{
			$this -> mCartProducts[$i]['save'] = Link::ToCart(SAVE_PRODUCT_FOR_LATER, $this -> mCartProducts[$i]['item_id']);
			$this -> mCartProducts[$i]['remove'] = Link::ToCart(REMOVE_PRODUCT, $this -> mCartProducts[$i]['item_id']);
		}
		for($i = 0; $i < count($this -> mCartSavedProducts); $i++)
		{
			$this -> mCartSavedProducts[$i]['move'] = Link::ToCart(MOVE_PRODUCT_TO_CART, $this -> mCartSavedProducts[$i]['item_id']);
			$this -> mCartSavedProducts[$i]['remove'] = Link::ToCart(REMOVE_PRODUCT, $this -> mCartSavedProducts[$i]['item_id']);
		}
	}
}
?>