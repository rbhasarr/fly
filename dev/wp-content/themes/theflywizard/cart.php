<?php
require_once('../../../wp-config.php');
global $woocommerce;
$quantity=$_POST['quantity'];
$id=$_POST['id'];
$woocommerce->cart->add_to_cart($id,$quantity );
// if($quantity > 1 && $quantity <= 20)
// {
	// $string = WC_Cart::add_to_cart( $id, $quantity);
	 // $woocommerce->cart->add_to_cart($id,$quantity );
	// echo $quantity;
	// echo $id;
// }elseif($quantity>=21 && $quantity<= 50)
// {
	// $woocommerce->cart->add_to_cart($id,$quantity );
	// echo $quantity;
	// echo $id=60;
// }elseif($quantity>=51 && $quantity<=100)
// {
	// $woocommerce->cart->add_to_cart($id,$quantity );
	// echo $quantity;
	// echo $id=61;
// }elseif($quantity>=101 && $quantity<=200)
// {
	// $woocommerce->cart->add_to_cart($id,$quantity );
	// echo $quantity;
	// echo $id=62;
// }elseif($quantity>=201 && $quantity<=500)
// {
	// $woocommerce->cart->add_to_cart($id,$quantity );
	// echo $quantity;
	// echo $id=63;
// }

?>