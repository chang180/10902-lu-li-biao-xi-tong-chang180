<button class="btn btn-success float-right" onclick="moreExp()">新增</button>
<form action="../api/experience.php" method="post">
    <div id="exp">
        <?php include_once "../base.php";
        $db = new DB('experience');
        $exp = $db->all("", " ORDER BY `start` DESC");
        foreach ($exp as $key => $value) {

        ?>
            <div class="form-group">
                <label for="company">公司</label>
                <input type="text" class="form-control" name="company[]" value="<?= $value['company']; ?>">
            </div>
            <div class="form-group">
                <label for="jobtitle">職稱</label>
                <input type="text" class="form-control" name="jobtitle[]" value="<?= $value['jobtitle']; ?>">
            </div>
            <div class="form-group">
                <label for="description">職務描述</label>
                <input type="text" class="form-control" name="description[]" value="<?= $value['description']; ?>">
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
</form>
<script>
    moreExp = () => {
        let row = `
        <div class="form-group">
                <label for="company">公司</label>
                <input type="text" class="form-control" name="company2[]">
            </div>
            <div class="form-group">
                <label for="jobtitle">職稱</label>
                <input type="text" class="form-control" name="jobtitle2[]">
            </div>
            <div class="form-group">
                <label for="description">職務描述</label>
                <input type="text" class="form-control" name="description2[]">
            </div>
            <div class="form-group">
                <label for="start2">開始時間</label>
                <input type="text" class="form-control" name="start2[]">
            </div>
            <div class="form-group">
                <label for="end2">結束時間</label>
                <input type="text" class="form-control" name="end2[]">
            </div>
            <hr>
            `;
        $('#exp').append(row);
    }
</script>