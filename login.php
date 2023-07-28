<?php
session_start();
if(isset($_POST["usuario"]) and isset($_POST["password"])) {
    $usuario=strtolower(trim($_POST["usuario"]));
    $password=$_POST["password"];
    
    require "conexion.php";
    $sql="SELECT * FROM usuarios WHERE usuario= '$usuario' AND password='$password' LIMIT 1";
    $rec=mysqli_query($link,$sql);
    if(@mysqli_num_rows($rec)){
        $u=mysqli_fetch_array($rec);
        $_SESSION["usuario_id"]=$u["usuario_id"];
        $_SESSION["usuario"]=$u["usuario"];
        header("location:principal.php");
    }else{
        header("location:index.php?op=ERROR");
    } 
    exit();       
    }
header("location:index.php");  
?>