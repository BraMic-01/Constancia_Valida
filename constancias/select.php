<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento Válido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

<!--Inicio menú-->

<nav class="navbar navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="logo.png" alt="" width="150" height="90">
      </a>
    </div>
  </nav>

<!--Fin menú-->

<h1> <b>CONSTANCIA VÁLIDA</b> </h1>

    <div class= "cuerpo">

<?php
if(isset($_POST['Seleccionar']));
  include("conexion.php");
  $folio = $_POST['folio'];  
  $resultados = mysqli_query($conexion, "SELECT * FROM  constancias WHERE folio = '$folio'");
    while($consulta = mysqli_fetch_array($resultados))
    {
      echo "<b>Nombre: </b>".$consulta['nombre'];
      echo '<br>';
      echo "<b>Folio: </b>".$consulta['folio'];
      echo '<br>';
      echo "<b>Constancia: </b>".$consulta['tipo_certificacion'];
      echo '<br>';
      echo "<b>Fecha de constancia: </b>".$consulta['fecha_certificacion'];
      echo '<br>';
      echo "<b>Vigencia: </b>".$consulta['vigencia'];
      echo '<br>';
    }
?>
    </div>

<!--Footer-->
<div class= "footer">
    <img src="council.png" class="footer" alt="..." height="200" width="350">
</div>

<!--Fin del footer-->

</body>
</html>
