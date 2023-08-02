<?php
require "protect.php";
require "conexion.php";
if(isset($_GET["id"])){
    $nota_id=intval($_GET["id"]);
    $usuario_id=$_SESSION["usuario_id"];
    $sql="UPDATE notas SET estado= NOT estado WHERE usuario_id=$usuario_id and nota_id=$nota_id";
    mysqli_query($link,$sql);
}
header("location:principal.php");
?>