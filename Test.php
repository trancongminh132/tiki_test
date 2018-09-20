<?php
include_once 'models/Product.php';
include_once 'models/User.php';
include_once 'models/ShoppingCart.php';

class Test 
{
	/**
	 * test total price in card equal value test or not
	 * @param $product_list
	 * @param $cart_detail
	 * @param $correct_value
	 * @return bool
	 */
	public function testTotalPriceInCart($product_list, $cart_detail, $correct_value)
    {
    	if (empty($cart_detail) || empty($product_list)) {
    		return false;
    	}
    	
    	$total_price = 0;
        foreach ($cart_detail as $product_id => $quantity) {
			$total_price += $product_list[$product_id]->getProductPrice() * $quantity;
        }
        return $total_price == $correct_value;
    }

}

$product = new Product();
$product->addProduct(1, 'Apple', 4.95);
$product->addProduct(2, 'Orange', 3.99);
$product_list = $product->getListProduct();

$test = new Test;

$user_1 = new User(1, 'John Doe', 'john.doe@example.com');
$shopping_cart_1 = new ShoppingCart();
$cart_detail = $shopping_cart_1->updateCart($user_1->getUID(), $product_id = 1, $quantity = 2);
$cart_detail = $shopping_cart_1->updateCart($user_1->getUID(), $product_id = 2, $quantity = 1);

$result = $test->testTotalPriceInCart($product_list, $cart_detail, $correct_value = 13.89);
if ($result) {
	echo "Test case 1 is OK.\n";
} else {
	echo "Test case 1 is Failed.\n";
} 


$user_2 = new User(2, 'John Doe', 'john.doe@example.com');
$shopping_cart_2 = new ShoppingCart();
$cart_detail = $shopping_cart_2->updateCart($user_2->getUID(), $product_id = 1, $quantity = 3);
$cart_detail = $shopping_cart_2->updateCart($user_2->getUID(), $product_id = 1, $quantity = -1);

$result = $test->testTotalPriceInCart($product_list, $cart_detail, $correct_value = 9.9);
if ($result) {
	echo "Test case 2 is OK.\n";
} else {
	echo "Test case 2 is Failed.\n";
} 

?>