<?php
// Business tier class for the shopping cart

Class ShoppingCart
{
	// Stores the visitor's Cart ID
	private static $_mCartId;
	
	private function __construct()
	{
	}

	/* This will be called by GetCartId to ensure we have the
	visitor's cart ID in the visitor's session in case
	$_mCartID has no value set */
	public static function SetCartId()
	{
		// If the cart ID hasn't already been set ...
		if (self::$_mCartId == '')
		{
			if(isset ($_SESSION['cart_id']) )
				self::$_mCartId = $_SESSION['cart_id'];
			
			// If not, check whether the cart ID was saved as a cookie
			elseif(isset ($_COOKIE['cart_id']) && ( self::IsValidId($_COOKIE['cart_id']) ) )
			{
				// Save the cart ID from the cookie
				self::$_mCartId = $_COOKIE['cart_id'];
				$_SESSION['cart_id'] = self::$_mCartId;
				setcookie('cart_id', self::$_mCartId, time() + CART_EXPIRE_TIME);
			}
			else
			{
				self::$_mCartId = md5(uniqid(rand(), true));
				$_SESSION['cart_id'] = self::$_mCartId;
				setcookie('cart_id', self::$_mCartId, time() + CART_EXPIRE_TIME);
			}
		}
	}

	// Returns the current visitor's card id
	public static function GetCartId()
	{
		// Ensure we have a cart id for the current visitor
		if (!isset (self::$_mCartId))
		self::SetCartId();
		return self::$_mCartId;
	}
	
	//Check if the CartId is still valid.
	public static function IsValidId($cartId)
	{
		$sql = 'CALL shopping_cart_validate_cart_id(:cart_id)';
		$params = array (':cart_id' => $cartId);
		$x = DatabaseHandler::Execute($sql, $params);
		if($x > 0)
			return 1;
		else
			return 0;
	}
	
	// Adds product to the shopping cart
	public static function AddProduct($productId)
	{
		$sql = 'CALL shopping_cart_add_product(:product_id, :cart_id)';
		$params = array (':cart_id' => self::GetCartId(), ':product_id' => $productId);
		DatabaseHandler::Execute($sql, $params);
	}

	// Updates the shopping cart with new product quantities
	public static function Update($itemId, $quantity)
	{
		$sql = 'CALL shopping_cart_update(:item_id, :quantity)';
		$params = array (':item_id' => $itemId, ':quantity' => $quantity);
		DatabaseHandler::Execute($sql, $params);
	}

	// Removes product from shopping cart
	public static function RemoveProduct($itemId)
	{
		$sql = 'CALL shopping_cart_remove_product(:item_id)';
		$params = array (':item_id' => $itemId);
		DatabaseHandler::Execute($sql, $params);
	}
	
	// Gets shopping cart products
	public static function GetCartProducts($cartProductsType)
	{
		$sql = '';
		// If retrieving "active" shopping cart products ...
		if ($cartProductsType == GET_CART_PRODUCTS)
			$sql = 'CALL shopping_cart_get_products(:cart_id)';
		
		// If retrieving products saved for later ...
		elseif ($cartProductsType == GET_CART_SAVED_PRODUCTS)
			$sql = 'CALL shopping_cart_get_saved_products(:cart_id)';
		else
			trigger_error($cartProductsType. ' value unknown', E_USER_ERROR);

		$params = array (':cart_id' => self::GetCartId());
		return DatabaseHandler::GetAll($sql, $params);
	}
	
	/* Gets total amount of shopping cart products before tax and/or
	shipping charges (not including the ones that are being
	saved for later) */
	public static function GetTotalAmount()
	{
		$sql = 'CALL shopping_cart_get_total_amount(:cart_id)';
		$params = array (':cart_id' => self::GetCartId());
		return DatabaseHandler::GetOne($sql, $params);
	}
	
	// Save product to the Save for Later list
	public static function SaveProductForLater($itemId)
	{
		$sql = 'CALL shopping_cart_save_product_for_later(:item_id)';
		$params = array (':item_id' => $itemId);
		DatabaseHandler::Execute($sql, $params);
	}
	
	// Get product from the Save for Later list back to the cart
	public static function MoveProductToCart($itemId)
	{
		$sql = 'CALL shopping_cart_move_product_to_cart(:item_id)';
		$params = array (':item_id' => $itemId);
		DatabaseHandler::Execute($sql, $params);
	}
	
}
?>