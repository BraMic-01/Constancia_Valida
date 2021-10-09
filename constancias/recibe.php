<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento Válido</title>
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

<h1> <b>CERTIFICADO VÁLIDO</b> </h1>

    <div class= "cuerpo">
<?php
include 'conexion.php';
$nombre = $_POST["nombreC"];
$folio = $_POST["folioC"];
$certificacion = $_POST["certificacionC"];
$fcertificacion = $_POST["fcertificacionC"];
$fecha = $_POST["fechaC"];

$insertar = "INSERT into constancias (nombre, folio, tipo_certificacion, fecha_certificacion, vigencia)values('$nombre', '$folio', '$certificacion', '$fcertificacion', '$fecha')";
$resultado = mysqli_query($conexion, $insertar)
  or die("Error al guardar los registros");
  mysqli_close($conexion);

echo "<b>Nombre: </b>" . $nombre . "<br/>";
echo "<b>Folio: </b>" . $folio . "<br/>";
echo "<b>Certificacion: </b>" . $certificacion . "<br/>";
echo "<b>Fecha de certificación: </b>" . $fcertificacion . "<br/>";
echo "<b>Fecha de vencimiento: </b>" . $fecha . "<br/>";
?>
    </div>

<!--Footer-->
<div class= "footer">
    <img src="council.png" class="footer" alt="..." height="300" width="500">
</div>
<!--Fin del footer-->
</body>
</html>