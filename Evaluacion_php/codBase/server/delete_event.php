<?php

require 'conector.php';

$conexion=new ConectorBD();
$response['conexion']=$conexion->initConexion('agenda_db');
if ($response['conexion']!='OK') {
  $response['msg']= "Error en la conexion con la base de datos";
}
else {
  $tablas='evento';
  $condicion='id="'.$_POST['id'].'"';
  if ($conexion->eliminarRegistro($tablas, $condicion)) {
    $response['msg']="OK";
  }
  else {
      $response['msg']="No se ha eliminado el registro";
  }
}

$conexion->cerrarConexion();
echo json_encode($response);

 ?>
