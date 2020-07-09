<?php include_once "../base.php";
$db = new DB('contact');
?>

<form action="../api/portrait.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <img src="../img/<?= $db->find(2)['name']; ?>" class="img-thumbnail w-25 mx-auto d-block">
        <input type="file" name="pic" class="btn btn-warning mx-auto d-block m-1">
        <button type="submit" class="btn btn-primary mx-auto d-block">更新照片(jpg)</button>
    </div>
</form>
<form action="../api/contact.php" method="post">
    <div class="form-group">
        <label for="name">姓名</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $db->find(1)['name']; ?>">
    </div>
    <div class="form-group">
        <label for="tel">電話</label>
        <input type="text" class="form-control" id="tel" name="tel" value="<?= $db->find(1)['tel']; ?>">
    </div>
    <div class="form-group">
        <label for="addr">地址</label>
        <input type="text" class="form-control" id="addr" name="addr" value="<?= $db->find(1)['addr']; ?>">
    </div>
    <div class="form-group">
        <label for="email">電子信箱</label>
        <input type="text" class="form-control" id="email" name="email" value="<?= $db->find(1)['email']; ?>">
    </div>
    <div class="form-group">
        <label for="intro">簡介</label>
        <input type="text" class="form-control" id="intro" name="intro" value="<?= $db->find(1)['intro']; ?>">
    </div>
    <button type="submit" class="btn btn-primary">修改</button>
    <button type="reset" class="btn btn-secondary">重置</button>
</form>