<?php 
session_start();
include "conexiondb.php";

 $productos_totales="";
 $precio_total=0;
foreach($_SESSION["cart"] as $c){
 $merchandising=$con->query("select * from merchandising where id='".$c['product_id']."' and nombre='".$c['product_name']."'");
 $cartas = $con->query("select * from cartas where id='".$c['product_id']."' and nombre='".$c['product_name']."'");
 $cr = $cartas->fetch_object();
 $m = $merchandising->fetch_object();
 if(!is_null($cr)){
    $productos_totales= $productos_totales.$cr->nombre.", ";
    $precio_total = $precio_total+$cr->precio*$c['q'];
 }elseif(!is_null($m))
 $productos_totales= $productos_totales.$m->nombre;
 $precio_total = $precio_total+$m->precio*$c['q'];
}
$_SESSION["pedido"]=array("productos_totales"=>$productos_totales,"precio_total"=>$precio_total);
$usuarioquery=$con->query("select * from usuarios where nombre='".$_SESSION["user"]["nombre"]."' and contraseña='".$_SESSION["user"]["contraseña"]."'");
$u=$usuarioquery->fetch_object();
$usuario=$u->nombre;
$direccion=$u->direccion;
$date = new DateTime();
$result = $date->format('Y-m-d H:i:s');
$pedido=$_SESSION["pedido"];
$precio_total=$pedido["precio_total"];
$productos_totales=$pedido["productos_totales"];
$q1 = $con->query("insert into pedido(usuario,productos,preciototal,direccion,fecha) values ('$usuario','$productos_totales','$precio_total','$direccion','$result')");
unset($_SESSION["cart"]);


print "<script>alert('Venta procesada exitosamente');window.location='../php/home.php';</script>";
?>