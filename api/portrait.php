<?php
include_once "../base.php";
$db = new DB('contact');
// var_dump($_POST);
// var_dump($_FILES['pic']['tmp_name']);
if(!empty($_FILES['pic']['tmp_name']) && ($_FILES['pic']['type']=='image/jpeg')){
    move_uploaded_file($_FILES['pic']['tmp_name'],"../img/pic.jpg");
    $db->save(['id'=>2,'name'=>'pic.jpg']);
}

to("../backend/index.php");

?>