<?php
require "protect.php";
require "conexion.php";
if(isset($_POST["nota"])){
    $nota=trim($_POST["nota"]);

    if(strlen($nota)>0){
        $usuario_id=$_SESSION["usuario_id"];

        $sql="INSERT INTO notas(texto,usuario_id) VALUES('$nota',$usuario_id)";
        mysqli_query($link,$sql);
    }
}
header("location:principal.php");
?>