<?php
include_once "../base.php";
$db=new DB('contact');
$_POST['id']=1;
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
$db->save($_POST);

to("../backend/index.php#title");
?>