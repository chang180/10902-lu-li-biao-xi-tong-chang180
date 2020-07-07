<?php
include_once "../base.php";
$db = new DB('portfolio');

foreach ($_POST['id'] as $key => $id) {
    // 先做刪除，刪掉的就不用再修改了
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {

        $db->del($id);
    } else {
        $row = $db->find($id);
        $row['title'] = $_POST['title'][$key];
        $row['intro'] = $_POST['intro'][$key];
        $row['img'] = $_POST['img'][$key];
        $row['url'] = $_POST['url'][$key];
        $row['sh'] = (!empty($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
        $db->save($row);
    }
}
// var_dump($_FILES);
// echo "<hr>";
// var_dump($_FILES['img2']);

if (!empty($_POST['title2'])) {
    foreach ($_POST['title2'] as $key => $value) {
        $data['title'] = $value;
        $data['intro'] = $_POST['intro2'][$key];
        $data['img'] = $_FILES['img2']['name'][$key];
    move_uploaded_file($_FILES['img2']['tmp_name'][$key],"../img/".$data['img']);
        $data['url'] = $_POST['url2'][$key];
        $data['sh'] = 1;
        // var_dump($data);
        $db->save($data);
    }
}



setcookie("do", "portfolio", time() + 10, "/");


to("../backend/index.php");

?>