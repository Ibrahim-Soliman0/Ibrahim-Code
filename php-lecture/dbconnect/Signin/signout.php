<?php
session_start();
$_SESSION['u'] = "";
header("Location:signin.php");
exit;
?>