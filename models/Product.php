<?php
class Product 
{
	private $product_id;
	private $product_name;
	private $product_price;
	private static $array_product;

	/**
	 * add new product to product list
	 * @param $product_id
	 * @param $product_name
	 * @param $product_price
	 */
	public function addProduct($product_id, $product_name, $product_price)
 	{
 		$product = new Product();
 		$product->product_id    = $product_id;
 		$product->product_name  = $product_name;
 		$product->product_price = $product_price;
 		self::$array_product[$product_id] = $product;
 	}

    /**
	 * get list product
	 * @return array
	 */
 	public function getListProduct()
 	{
 		return self::$array_product;
 	}

	/**
	 * get product id
	 * @return array
	 */
 	public function getProductId()
 	{
 		return $this->product_id;
 	}

 	/**
	 * get product price
	 * @return array
	 */
 	public function getProductPrice()
 	{
 		return $this->product_price;
 	}

 	/**
	 * get product name
	 * @return array
	 */
 	public function getProductName()
 	{
 		return $this->product_name;
 	}
}

?>