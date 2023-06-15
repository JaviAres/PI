<?php
session_start();
include "conexiondb.php";
if(!empty($_POST)){
    $nombre=$_POST["nombre"];
    $tipo=$_POST["tipo"];
    $tcg=$_POST["tcg"];
    $descripcion=$_POST["descripcion"];
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

    $q=$con->query("insert into merchandising(nombre,tipo,tcg,descripcion,precio,imagen) values('$nombre','$tipo','$tcg','$descripcion','$precio','$path')");
    echo ("<script>alert('Merchandising Añadido')</script>") ;
    print "<script>window.location='../php/adminAñadirMerch.php';</script>";
}

?>