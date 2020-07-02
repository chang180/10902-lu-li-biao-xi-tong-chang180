<?php
include_once "../base.php";
$db = new DB('jobcondition');

foreach ($_POST['id'] as $key => $id) {
    // 先做刪除，刪掉的就不用再修改了
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {

        $db->del($id);
    } else {
        $row = $db->find($id);
        $row['jobtitle'] = $_POST['jobtitle'][$key];
        $row['salary'] = $_POST['salary'][$key];
        $db->save($row);
    }
}
// var_dump($_POST['jobtitle2']);
if (!empty($_POST['jobtitle2'])) {
    foreach ($_POST['jobtitle2'] as $key => $value) {
        $data['jobtitle'] = $value;
        $data['salary'] = $_POST['salary2'][$key];
        // var_dump($data);
        $db->save($data);
    }
}



setcookie("do", "jobcondition", time() + 10, "/");


to("../backend/index.php");
