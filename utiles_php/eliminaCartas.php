<?php
session_start();
include "conexiondb.php";
if(!empty($_POST)){
    $nombre = $_POST['nombre'];
    $expansion= $_POST['expansion'];
    $rareza = $_POST['rareza'];

    $query = "DELETE FROM cartas";
    $conditions = array();

    if(! empty($nombre)) {
      $conditions[] = "nombre='$nombre'";
    }
    if(! empty($expansion)) {
      $conditions[] = "expansion='$expansion'";
    }
    if(! empty($rareza)) {
      $conditions[] = "rareza='$rareza'";
    }
    $sql = $query;
    if (count($conditions) > 0) {
      $sql .= " WHERE " . implode(' AND ', $conditions);
    }

    $q = $con->query($sql);

    echo ("<script>alert('Borrado con exito')</script>");
    print "<script>window.location='../php/panelAdmin.php';</script>";
}

?>