<?php
    include "../models/conexion.php";
    $email =$_POST['email'];
    $codigo =$_POST['codigo'];
    $res = $conexion->query("select * from persona 
        where email='$email' 
        and codigo='$codigo' 
        ")or die($conexion->error);
    if( mysqli_num_rows($res) > 0 ){
        echo "TODO CORRECTO";
        $conexion->query("update persona set confirmado = 'si' where email = '$email' ");
        echo 'TODO CORRECTO  ya puedes <a href="../login.php">Iniciar sesion </a>';
    }else{
        echo "codigo invalido";
    }
?>