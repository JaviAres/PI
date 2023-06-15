<?php
session_start();
if(!empty($_POST)){
	if(isset($_POST["product_id"]) && isset($_POST["q"])&& isset($_POST["product_name"])){
		// si es el primer producto simplemente lo agregamos
		if(empty($_SESSION["cart"])){
			$_SESSION["cart"]=array( array("product_id"=>$_POST["product_id"],"q"=> $_POST["q"],"product_name"=>$_POST["product_name"]));
		}else{
			// apartie del segundo producto:
			$cart = $_SESSION["cart"];
			$repeated = false;
			// recorremos el carrito en busqueda de producto repetido
			foreach ($cart as $c) {
				// si el producto esta repetido rompemos el ciclo
				if($c["product_id"]==$_POST["product_id"] && $c["product_name"]==$_POST["product_name"]){
					$repeated=true;
					break;
				}
			}
			// si el producto es repetido no hacemos nada, simplemente redirigimos
			if($repeated){
				print "<script>alert('Error: Producto Repetido!');</script>";
			}else{
				// si el producto no esta repetido entonces lo agregamos a la variable cart y despues asignamos la variable cart a la variable de sesion
				array_push($cart, array("product_id"=>$_POST["product_id"],"q"=> $_POST["q"],"product_name"=>$_POST["product_name"]));
				$_SESSION["cart"] = $cart;	
				
			}
		}
		echo ("<script> alert('Producto agregado al carrito exitosamente.')</script>");
		print "<script>window.location='../php/home.php';</script>";
	}else{
        echo" no ha entrado manin";
}
    
}
?>
