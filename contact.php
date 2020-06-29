<?php include_once "base.php";
$db=new DB('contact');
?>

<form>
    <div class="form-group">
        <label for="name">姓名</label>
        <input type="text" class="form-control" id="name" name="name" value="<?=$db->find(1)['name'];?>">
    </div>
    <div class="form-group">
        <label for="tel">電話</label>
        <input type="text" class="form-control" id="tel" name="tel" value="<?=$db->find(1)['tel'];?>">
    </div>
    <div class="form-group">
        <label for="addr">地址</label>
        <input type="text" class="form-control" id="addr" name="addr" value="<?=$db->find(1)['addr'];?>">
    </div>
    <div class="form-group">
        <label for="email">電子信箱</label>
        <input type="text" class="form-control" id="email" name="email" value="<?=$db->find(1)['email'];?>">
    </div>
    <div class="form-group">
        <label for="intro">簡介</label>
        <input type="text" class="form-control" id="intro" name="intro" value="<?=$db->find(1)['intro'];?>">
    </div>
</form>