<form action="../api/education.php" method="post">
    <div id="edu">
        <?php include_once "../base.php";
        $db = new DB('education');
        $edu = $db->all("", " ORDER BY `start` DESC");
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
                <input type="checkbox" class="form-check-input" name="sh[]" value="<?= $value['id']; ?>" <?= ($value['sh'] == 1) ? "checked" : ""; ?>>
                <label class="form-check-label" for="sh">顯示</label>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name="del[]" value="<?= $value['id']; ?>">
                <label class="form-check-label" for="del">刪除</label>
            </div>
            <input type="hidden" name="id[]" value="<?= $value['id']; ?>">
            <hr>
        <?php
        }
        ?>
    </div>
    <button type="submit" class="btn btn-primary">確認資料</button>
    <button type="reset" class="btn btn-secondary">重置</button>
    <!-- button自帶submit效果 -->
</form>
        <button class="btn btn-success float-right" onclick="moreEdu()">新增</button>
<script>
    moreEdu = () => {
        let row = `
            <div class="form-group">
            <label for="name">學校</label>
            <input type="text" class="form-control" name="school2[]">
            </div>
            <div class="form-group">
            <label for="start">開始時間</label>
            <input type="text" class="form-control" name="start2[]">
            </div>
            <div class="form-group">
            <label for="end">結束時間</label>
            <input type="text" class="form-control" name="end2[]">
            </div>
            <hr>
            `;
        $('#edu').append(row);
    }
</script>