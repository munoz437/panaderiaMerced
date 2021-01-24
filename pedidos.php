<?php
	
	require 'conexion.php';
	
	$sql = "SELECT * from pastel;";
  $resultado = $mysqli->query($sql);
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pedidos</title>
  <!-- boostrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>



  <style>
    body {
      background: #000000;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #434343, #000000);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #434343, #000000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

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

  <!-- formulario -->
  

  <div class="container mt-6 col-md-6">
              <div class="card border-secondary bg-dark">
                <!-- <div class="card-header"> -->
                  <h2 class="text-white text-center">Pedidos</h2>
                <!-- </div> -->
                <div class="card body bg-dark ">
                  <form action="">


                  <div class="row">
          <div class="form-group col-md-6">
            <label class="text-white">Nombres Del Cliente</label>
            <input class="form-control text-dark bg-dark" id="nombre" name="nombre" type="text" placeholder="Nombres" required>
          </div>

          <div class="form-group col-md-6">
            <label class="text-white">Apellidos Del Cliente</label>
            <input class="form-control text-light bg-dark" id="apellido" name="apellido" type="text" placeholder="Apellidos" required>
          </div>
        </div>

        <div class="form-group">
          <label class="text-white">Fecha y Hora de Pedido</label>
          
         <!-- <input class="form-control text-light bg-dark" id="fecha_pedido" type="datetime-local" name="fecha_pedido" id="fecha_pedido"  required> -->
        <?php
        date_default_timezone_set("America/Guatemala");
        echo "<input class='form-control text-light bg-dark' id='fecha_pedido' type='text' name='fecha_pedido' id='fecha_pedido' readonly value='".date("Y-m-d G:i:s")."'>"; ?>
         
        </div>
        <div class="form-group">
          <label class="text-white">Fecha y Hora de Entrega</label>
          <input class="form-control text-light bg-dark" id="fecha_entrega" type="datetime-local" name="fecha_entrega" id="fecha_entrega" required>
        </div>
        <div class="form-group">
          <label class="text-white">Tipo de Pastel</label>
          <select class="form-control text-light bg-dark" id="tipo_pastel" name="tipo_pastel" aria-placeholder="Tipo Pastel" required>
            <option></option>
            <?php while($fila = $resultado->fetch_assoc()) { ?>  
              <option value="<?php echo $fila['ID']; ?>"><?php echo $fila['Nombre']; ?></option>
            <?php } ?>
          </select>
        </div>  
        


        

        <div class="form-group">
          <label class="text-white">Personalizado</label>
          <textarea class="form-control text-light bg-dark" name="personalizar" id="personalizar" cols="30" rows="5" required>
  
          </textarea>
        </div>

        <div class="row">
          <div class="form-group col-md-6">
            <button type="submit" class="btn btn-success btn-block ">
              <i class='bx bxs-send bx-sm'></i>
            </button>
          </div>

          <div class="form-group col-md-6">
            <button type="reset" class="btn btn-danger btn-block ">
              
            <i class='bx bxs-x-square bx-sm'></i>
            </button>
          </div>


                  
                  </form>
                </div>
              </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>