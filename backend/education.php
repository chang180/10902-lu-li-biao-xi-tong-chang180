<form action="../api/education.php" method="post">
    <?php include_once "../base.php";
    $db = new DB('education');
    $edu = $db->all("", " ORDER BY 'start' DESC");
    foreach ($edu as $key => $value) {

    ?>
        <div class="form-group">
            <label for="name">學校</label>
            <input type="text" class="form-control" name="school[]" value="<?= $value['school']; ?>">
        </div>
        <div class="form-group">
            <label for="start">開始時間</label>
            <input type="text" class="form-control" name="start[]" value="<?= $value['start']; ?>">
        </div>
        <div class="form-group">
            <label for="end">結束時間</label>
            <input type="text" class="form-control" name="end[]" value="<?= $value['end']; ?>">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="sh[]" value="<?=$value['id'];?>" <?= ($value['sh'] == 1) ? "checked" : ""; ?>>
            <label class="form-check-label" for="sh">顯示</label>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="del[]" value="<?=$value['id'];?>">
            <label class="form-check-label" for="del">刪除</label>
        </div>
        <input type="hidden" name="id[]" value="<?= $value['id']; ?>">

        <hr>
    <?php
    }
    ?>
    <button type="submit" class="btn btn-primary">修改</button>
    <button type="reset" class="btn btn-secondary">重置</button>

</form>