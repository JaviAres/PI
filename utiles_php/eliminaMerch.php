<?php
session_start();
include "conexiondb.php";
if(!empty($_POST)){
    $nombre = $_POST['nombre'];

    $query = "DELETE FROM merchandising WHERE nombre='".$nombre."'";

    $q = $con->query($query);

    echo ("<script>alert('Borrado con exito')</script>");
    print "<script>window.location='../php/panelAdmin.php';</script>";
}

?>