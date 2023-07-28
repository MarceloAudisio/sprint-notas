<?php
$link=@mysqli_connect("localhost","root","") or die("con");
@mysqli_select_db($link, "app") or die("db");
?>