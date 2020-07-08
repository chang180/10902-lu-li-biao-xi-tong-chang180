<?php
include_once "../base.php";
$db = new DB('autobiography');

foreach ($_POST['id'] as $key => $id) {
    // 先做刪除，刪掉的就不用再修改了
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {

        $db->del($id);
    } else {
        $row = $db->find($id);
        $row['content'] = $_POST['content'][$key];
        $row['sh'] = ($id == $_POST['sh']) ? 1 : 0;
        $db->save($row);
    }
}
// var_dump($_POST['content2']);
if (!empty($_POST['content2'])) {
    foreach ($_POST['content2'] as $key => $value) {
        $data['content'] = $value;
        $data['sh'] = 0;
        // var_dump($data);
        $db->save($data);
    }
}



setcookie("do", "autobiography", time() + 10, "/");


to("../backend/index.php");
