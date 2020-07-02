<?php
include_once "../base.php";
$db = new DB('skill');

foreach ($_POST['id'] as $key => $id) {
    // 先做刪除，刪掉的就不用再修改了
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {

        $db->del($id);
    } else {
        $row = $db->find($id);
        $row['skill'] = $_POST['skill'][$key];
        $row['catalog'] = $_POST['catalog'][$key];
        $db->save($row);
    }
}
// var_dump($_POST['skill2']);
if (!empty($_POST['skill2'])) {
    foreach ($_POST['skill2'] as $key => $value) {
        $data['skill'] = $value;
        $data['catalog'] = $_POST['catalog2'][$key];
        // var_dump($data);
        $db->save($data);
    }
}



setcookie("do", "skill", time() + 10, "/");


to("../backend/index.php");
