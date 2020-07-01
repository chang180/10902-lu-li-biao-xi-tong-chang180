<?php
include_once "../base.php";
$db = new DB('education');
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();

foreach ($_POST['id'] as $key => $id) {
    // 先做刪除，刪掉的就不用再修改了
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {

        $db->del($id);
    } else {
        $row = $db->find($id);
        $row['school'] = $_POST['school'][$key];
        $row['start'] = $_POST['start'][$key];
        $row['end'] = $_POST['end'][$key];
        $row['sh'] = (!empty($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
        $db->save($row);
    }
}
// var_dump($_POST['school2']);
if (!empty($_POST['school2'])) {
    foreach ($_POST['school2'] as $key => $value) {
        $data['school'] = $value;
        $data['start'] = $_POST['start2'][$key];
        $data['end'] = $_POST['end2'][$key];
        $data['sh'] = 1;
        // var_dump($data);
        $db->save($data);
    }
}



setcookie("do", "education", time() + 10, "/");


to("../backend/index.php");
// to("../backend/index.php?do=education");
