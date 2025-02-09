<?php 
  $conexion = new mysqli('localhost','root','','amparaArtesBol');
  if($conexion-> connect_error) die('No se pudo conectar al servidor');
?>