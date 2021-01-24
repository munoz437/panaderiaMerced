<?php
	require 'conexion.php';
	$id = $_GET['ID'];
    $sql="update pedido set Estado=1  where ID='".$id."'";
    $resultado = $mysqli->query($sql);
    header('location:entregas.php');//redirecciona a entregas.php

?>