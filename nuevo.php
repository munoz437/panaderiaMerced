<?php
	
	require 'conexion.php';

	// $id = $mysqli->real_escape_string($_POST['id']);
	$nombre = $mysqli->real_escape_string($_POST['nombre']);
    $apellido = $mysqli->real_escape_string($_POST['apellido']);
    $fecha_pedido = $mysqli->real_escape_string($_POST['fecha_pedido']);
    $fecha_entrega = $mysqli->real_escape_string($_POST['fecha_entrega']);
    $tipo_pastel = $mysqli->real_escape_string($_POST['tipo_pastel']);
    $personalizar = $mysqli->real_escape_string($_POST['personalizar']);
	
	$sql = "INSERT INTO pedido (nombre, apellido, Fecha_Pedido, Fecha_Entrega, Tipo_Pastel, Personalizar) VALUES 
	('$nombre', '$apellido', '$fecha_pedido', '$fecha_entrega', '$tipo_pastel', '$personalizar')";
	$resultado = $mysqli->query($sql);
	
	if($resultado>0){
		echo 'REGISTRO AGREGADO';
		
		} else {
		echo 'ERROR AL AGREGAR REGISTRO';
	}
	
	echo "<br/><a href='pedidos.php' class='btn btn-primary'>Regresar</a>";
	
?>

