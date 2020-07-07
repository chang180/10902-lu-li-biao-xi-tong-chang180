<?php
var_dump($_FILES);
// var_dump($_FILES['pic']['tmp_img']);
// if(!empty($_FILES['img']['tmp_img'])){
//     move_uploaded_file($_FILES['img']['tmp_img'],"../img/".$_FILES['img']['img']);
// }

// header("location:../backend/index.php");

include_once "../base.php";

$id=$_POST['id'];
$db=new DB('portfolio');

// var_dump($db);

if(!empty($_FILES['img']['tmp_name'])){
    $data=$db->find($id);
    // var_dump($_FILES);
    $data['img']=$_FILES['img']['name'];
    $data['id']=$_POST['id'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$data['img']);
    $db->save($data);
}

setcookie("do", "portfolio", time() + 10, "/");

to("../backend/index.php");

?>