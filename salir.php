<?php
require "protect.php";
session_destroy();
header("location:index.php");
?>