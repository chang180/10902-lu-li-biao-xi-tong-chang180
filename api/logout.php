<?php
session_start();
unset($_SESSION['login']);
setcookie("do", "", time() + 10, "/");

header("location:../index.php");


?>