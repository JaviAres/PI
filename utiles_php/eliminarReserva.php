<?php
/*
* Eliminar un producto del carrito
*/
include "conexiondb.php";
session_start();
$id=$_GET["id"];
$d=$con->query("UPDATE `salas` SET `nombre`='',`reservado`='0' WHERE id='".$id."'");
echo("<script>alert('Reserva eliminada y sala abierta.')</script>");
print "<script>window.location='../php/adminVerReservas.php';</script>";
?>

