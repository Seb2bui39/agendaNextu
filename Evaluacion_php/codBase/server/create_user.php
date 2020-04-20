<?php
require 'conector.php';

$con = new ConectorBD();

if ($con->initConexion('agenda_db')=='OK'){
  $user1['email']="'nati123@gmail.com'";
  $user1['nombre']="'Natalia Llano'";
  $user1['password']="'".password_hash('12345',PASSWORD_DEFAULT)."'";
  $user1['fec_nacimiento']="'1982/06/25'";

    if ($con->insertData('usuarios', $user1)) {
      echo "Se han registrado los datos correctamente";
    }else echo "Se ha producido un error en la actualización";

    $user2['email']="'sebas123@gmail.com'";
    $user2['nombre']="'Sebastian Builes'";
    $user2['password']="'".password_hash('12345',PASSWORD_DEFAULT)."'";
    $user2['fec_nacimiento']="'1995/10/02'";

    if ($con->insertData('usuarios', $user2)) {
      echo "Se han registrado los datos correctamente";
    }else echo "Se ha producido un error en la actualización";

    $user3['email']="'nora123@gmail.com'";
    $user3['nombre']="'Nora Vasquez'";
    $user3['password']="'".password_hash('12345',PASSWORD_DEFAULT)."'";
    $user3['fec_nacimiento']="'2000/07/10'";

    if ($con->insertData('usuarios', $user3)) {
      echo "Se han registrado los datos correctamente";
    }else echo "Se ha producido un error en la actualización";


    $con->cerrarConexion();
}else {
    echo "Se presentó un error en la conexión";
}












 ?>
