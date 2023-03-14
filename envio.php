<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$fecha= $_POST['Fecha'];
$area= $_POST['area'];
$turno= $_POST['turno'];
$dias= $_POST['dias'];
$pago= $_POST['pago'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registro completo</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Estilos CSS/Estilos.css">
    </head>
    <body>
    <header>
      <table class="bordes">
        <tr>
          <td><h1 class="tituloPrincipal">Registro completo</h1></td>
        </tr>
      </table>
    </header>
    <br>
    <table class="bordes">
         <tr><td><h2 class="subTitulos">Nombre: <?php echo "$nombre $apellidos" ?></h2></td></tr>
         <tr><td><h2 class="subTitulos">Dirección: <?php echo "$direccion" ?> </h2></td></tr>
         <tr><td><h2 class="subTitulos">Telefono <?php echo "$telefono" ?> </h2></td></tr>
         <tr><td><h2 class="subTitulos">Correo: <?php echo "$correo" ?> </h2></td></tr>    
         <tr><td><h2 class="subTitulos">Fecha de nacimiento: <?php echo "$fecha" ?> </h2></td></tr>
         <tr><td><h2 class="subTitulos">Área:  <?php echo "$area" ?> </h2></td></tr>
         <tr><td><h2 class="subTitulos">Turno: <?php echo "$turno" ?></h2></td></tr>
         <tr><td><h2 class="subTitulos">Dias: <?php foreach ($dias as $dia) { echo $dia . " "; } ?></h2></td></tr>
         <tr><td><h2 class="subTitulos">Método de pago: <?php echo "$pago" ?></h2></td></tr>
         <tr><td><h2 class="subTitulos"><a href="index.html"> Regresar </a></h2></td></tr>
    </table>
    </body>
</html>
