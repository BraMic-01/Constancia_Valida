<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos los datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body style="background-color: #E1E8EB;">
    <!--Inicio del munú-->

 <nav class="navbar navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="logo.png" alt="" width="150" height="90">
      </a>
    </div>
  </nav>

  <!--Fin del menú-->
  
  <div class="boton" style="text-align: center; margin-top: 50px;">
      <form action="select.php" method="POST">
          <input type="text" name= "folio" placeholder="Busque mediante el folio" />
          <input type="submit" value="Buscar">
        </form>
  </div>
    
    <div class="tabla" style="margin-left: 300px; margin-top: 50px; text-align: center;">
        <?php
        include 'conexion.php';
        $mostrar = "SELECT * from constancias";
        $resultado = mysqli_query($conexion, $mostrar)
          or die("Error al mostrar los registros");
        
          echo '<table border="1">';
            echo '<tr>';
            echo '<th id="nombre">Nombre</th>';
            echo '<th name="folio">Folio</th>';
            echo '<th id="tipoc">Tipo de Constancia</th>';
            echo '<th id="fechae">Fecha de Expedicion</th>';
            echo '<th id="vigencia">Vigencia</th>';
            echo '</tr>';
        
            while ($row = $resultado->fetch_array()) {
              echo '<tr>';
              echo '<td>'.$row['nombre'];
              echo '<td>'.$row['folio'];
              echo '<td>'.$row['tipo_certificacion'];
              echo '<td>'.$row['fecha_certificacion'];
              echo '<td>'.$row['vigencia'];
            }
              mysqli_close($conexion);
              echo '</table>';
        
        ?>
        
        
    </div>
</body>
</html>




