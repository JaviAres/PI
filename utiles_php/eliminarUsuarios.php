<?php
/*
* Eliminar un producto del carrito
*/
include "conexiondb.php";
session_start();
$id=$_GET["id"];
$d=$con->query("DELETE FROM usuarios WHERE id='".$id."'");
echo("<script>alert('Usuario eliminado correctamente')</script>");
print "<script>window.location='../php/panelAdmin.php';</script>";
?>

