<?php
/*
# See AUTHORS for a list of contributors
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU Affero General Public License as
# published by the Free Software Foundation; either version 3 of the
# License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
# General Public License for more details.
#
# You should have received a copy of the GNU Affero General
# Public License along with this program.  If not, see
# <http://www.gnu.org/licenses/>.
*/
include_once('../config/conexion.php');
$select = "SELECT nombre, logo, usuario FROM usuarios WHERE usuario = '$_SESSION[login]'; ";

$select = mysqli_query($cnx, $select);
while($selectRTA = mysqli_fetch_assoc($select) ){
  $imagenUsuario = '../upload/logos/'.$selectRTA['logo'];
  $nombreUsuario = $selectRTA['nombre'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reportes - <?php echo $nombreUsuario; ?></title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
  </head>

  <body>

<header class="container clearfix admin">

	 <p class="col-sm-3">
    	<img src="<?php echo '../'.$dirImgs.'/posicionamiento-web-2.png'; ?>"  class="logoPuntoRojo" alt="Punto Rojo" />
  	</p>
  	<nav class="clearfix col-sm-9 text-right">
		<ul class="list-inline">
    	<li><a class="font-bold" href="index.php">Carga de Reportes</a></li>
      <li><a href="admin.mostrarDatosCliente.php">Mostrar Reportes</a></li>
			<li><a class="font-bold" href="admin.addUser.php">Alta a Clientes</a></li>
			<li><a href="admin.addAdmin.php">Agregar Administradores</a></li>
			<!--<li><a href="admin.actualizar.php">Modificar Datos</a></li>-->
      <li><a href="admin.sugerenciasMostrar.php">Mostrar Sugerencias</a></li>
      <li class="cerrar font-bold"><a href="../include/registro.login.php?kill">Salir</a></li>
		</ul>
	</nav>

</header>