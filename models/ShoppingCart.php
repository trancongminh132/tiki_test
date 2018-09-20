<?php
class ShoppingCart 
{
	private static $product_list;

	/**
	 * add new product to product list
	 * @param $product_id
	 * @param $product_name
	 * @param $product_price
	 */
	public function updateCart($user_id, $product_id, $quantity)
 	{
 		if (!empty((self::$product_list[$user_id][$product_id]))) {
 			self::$product_list[$user_id][$product_id] += $quantity;
 		} else {
 			self::$product_list[$user_id][$product_id] = $quantity;
 		}
 		return self::$product_list[$user_id];
 	}
}

?>