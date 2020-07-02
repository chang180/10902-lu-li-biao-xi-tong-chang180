<?php
include_once "../base.php";
$db = new DB('experience');

foreach ($_POST['id'] as $key => $id) {
    // 先做刪除，刪掉的就不用再修改了
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {

        $db->del($id);
    } else {
        $row = $db->find($id);
        $row['company'] = $_POST['company'][$key];
        $row['jobtitle'] = $_POST['jobtitle'][$key];
        $row['description'] = $_POST['description'][$key];
        $row['start'] = $_POST['start'][$key];
        $row['end'] = $_POST['end'][$key];
        $row['sh'] = (!empty($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
        $db->save($row);
    }
}
// var_dump($_POST['company2']);
if (!empty($_POST['company2'])) {
    foreach ($_POST['company2'] as $key => $value) {
        $data['company'] = $value;
        $data['jobtitle'] = $_POST['jobtitle2'][$key];
        $data['description'] = $_POST['description2'][$key];
        $data['start'] = $_POST['start2'][$key];
        $data['end'] = $_POST['end2'][$key];
        $data['sh'] = 1;
        // var_dump($data);
        $db->save($data);
    }
}



setcookie("do", "experience", time() + 10, "/");


to("../backend/index.php");
