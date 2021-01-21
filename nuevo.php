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
		//echo 'REGISTRO AGREGADO';
		
		} else {
		echo 'ERROR AL AGREGAR REGISTRO';
	}
	
	//echo "<br/><a href='pedidos.php' class='btn btn-primary'>Regresar</a>";
	
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuevo</title>
  <!-- boostrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>



  <style>
    body {
      background: #DC2424;
      /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #4A569D, #DC2424);
      /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #4A569D, #DC2424);
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


    }

    

   
  </style>

</head>

<body>
  <!-- menu -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    
    Panaderia la Merced</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="pedidos.php">
          <i class='bx bx-home-alt'></i>
          Inicio
         
        </a>
        
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="contacto.php">
          <i class='bx bxs-contact'></i>
          Contacto
         
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class='bx bx-menu' ></i>
          Menú
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="pedidos.html">
            <i class='bx bx-home-alt'></i>
            Inicio
          </a>
         
          <a class="dropdown-item" href="contacto.php">
            <i class='bx bxs-contact'></i>
            Contacto
          </a>

        </div>
      </li>
    </ul>
  </div>
</nav>
	<br>
  <!-- formulario -->
  <div class="container-fluid">

    <div class="row justify-content-center ">


      <form id="pedido" name="pedido" action="nuevo.php" method="POST" class="form-group col-md-6 bg-white">
        
          <h2 class="text-center">Reporte</h2>
        
        <div class="form-group">
         
         </div>
      
        <div class="row">
          <div class="form-group col-md-6">
            <label >Nombres Del Cliente</label>
			<?php echo "<input class='form-control text-light bg-dark'  type='text' readonly value='".$nombre."'>"; ?>
        
          </div>

          <div class="form-group col-md-6">
            <label >Apellidos Del Cliente</label>
            <?php echo "<input class='form-control text-light bg-dark'  type='text' readonly value='".$apellido."'>"; ?>
          </div>
        </div>

        <div class="form-group">
          <label >Fecha y Hora de Pedido</label>
          
		  <?php echo "<input class='form-control text-light bg-dark'  type='text' readonly value='".$fecha_pedido."'>"; ?>
       
        </div>
        <div class="form-group">
          <label >Fecha y Hora de Entrega</label>
          <?php echo "<input class='form-control text-light bg-dark'  type='text' readonly value='".$fecha_entrega."'>"; ?>
        </div>
        <div class="form-group">
          <label >Tipo de Pastel</label>
          <?php echo "<input class='form-control text-light bg-dark'  type='text' readonly value='".$tipo_pastel."'>"; ?>
        </div>  
        


        

        <div class="form-group">
          <label >Personalizado</label>
		  <?php echo "<input class='form-control text-light bg-dark'  type='text' readonly value='".$personalizar."'>"; ?>
      
      
        </div>

        
         
           <!--  <button type="submit" class="btn btn-success btn-block ">
              <i class='bx bxs-send bx-sm'></i>
            </button> -->
			<br>
			<br>
          

    
        
        



      </form>
    </div>




  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>