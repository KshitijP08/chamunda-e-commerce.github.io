<?php
require_once 'Controller/Core/Action.php';

class Product extends Action
{
	
	public function gridAction()
	{
		$adapter = new Adapter();
		$products = $adapter->fetchAll("SELECT * FROM `cart_item`");
		print_r($products);
		die();
		require_once 'View/product/grid.phtml';
	}
?>