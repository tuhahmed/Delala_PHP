<?php 
session_start();
$_SESSION["user_id"] = "";
$_SESSION["IsValid"]=  false;
session_destroy();
header("Location: dashboard.php");
?>