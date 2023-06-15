<?php
session_start();
include "conexiondb.php";
if(!empty($_POST)){
    $nombre=$_POST["nombre"];
    $expansion=$_POST["expansion"];
    $rareza=$_POST["rareza"];
    $tcg=$_POST["tcg"];
    $texto=$_POST["texto"];
    $precio=$_POST["precio"];

    copy($_FILES['imagen']['tmp_name'], $_FILES['imagen']['name']);
    $nom = $_FILES['imagen']['name'];
    $path = "../images/" . basename($_FILES['imagen']['name']);

    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $path)) {

        echo "El archivo " . basename($_FILES['imagen']['name']) . " ha sido subido";
    } else {
        echo "El archivo no se ha subido correctamente";
        die;
    }

    $q=$con->query("insert into cartas(nombre,expansion,rareza,tcg,texto,precio,imagen) values('$nombre','$expansion','$rareza','$tcg','$texto','$precio','$path')");
    echo ("<script>alert('Carta Añadida')</script>") ;
    print "<script>window.location='../php/adminAñadirCarta.php';</script>";
}

?>