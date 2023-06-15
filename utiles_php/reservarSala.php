<?php
session_start();
include "conexiondb.php";
$id=$_POST["id_sala"];
$updateq="UPDATE `salas` SET `nombre`='".$_SESSION["user"]["nombre"]."',`reservado`='1' WHERE id='".$id."'";
$con->query($updateq);
echo ("<script>alert('Reservado Correctamente.')</script>");
print "<script>window.location='../php/reservas.php';</script>";
?>