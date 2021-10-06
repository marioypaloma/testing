<?php
$servidor="127.0.0.1";
$usuario="root";
$clave="";
$baseDeDatos="formulario";

//aqui abres la conexión
$enlace=mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);

if ($enlace->connect_error) {
    echo "error en la conexion con el servidor";
}else{
    echo "conexion exitosa";
}



  $nombre=$_POST["nombre"];
  $apellido= $_POST["apellido"];
  $estado=$_POST["estado"];
  $rut=$_POST["rut"];
  $fecha=$_POST["fecha"];
  $correo=$_POST["correo"];
  $telefono=$_POST["telefono"];
  $direccion=$_POST["direccion"];
  $correo=$_POST["correo"];
  $comentario=$_POST["comentario"];

  $insertarDatos="INSERT INTO datos VALUES('$nombre', '$apellido','$estado','$rut','$fecha','$correo','$telefono','$direccion','$correo','$comentario')";
/*
Esto es un comentario de bloque
  $ejecutarInsertar=mysqli_query($enlace,$insertarDatos);
  if (!ejecutarInsertar) {
  echo "Error en la linea sql";
  }
*/

  if ($enlace->query($insertarDatos) === TRUE) {
  echo " se ha insertado una nueva fila";
} else {
  echo " Error en los datos";
}





?>