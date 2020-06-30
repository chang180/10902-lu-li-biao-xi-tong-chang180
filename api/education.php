<?php
include_once "../base.php";
$db=new DB('education');
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();

foreach($_POST['id'] as $key => $id){
    // 先做刪除，刪掉的就不用再修改了
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){

        $db->del($id);

    }else {
        $row=$db->find($id);
        $row['school']=$_POST['school'][$key];
        $row['start']=$_POST['start'][$key];
        $row['end']=$_POST['end'][$key];
        $row['sh']=(!empty($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
        $db->save($row);
    }
}

to("../backend/index.php?do=education");
?>