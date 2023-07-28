<?php
session_start();
if(!isset($_SESSION["usuario_id"])){
        header("location:index.php?op=PROHIBIDO");
        exit();
}
?>