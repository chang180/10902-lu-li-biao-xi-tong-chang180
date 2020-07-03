<button class="btn btn-success float-right" onclick="moreAut()">新增</button>
<form action="../api/autobiography.php" method="post">
    <div id="aut">
        <?php include_once "../base.php";
        $db = new DB('autobiography');
        $aut = $db->all();
        foreach ($aut as $key => $value) {

        ?>
            <div class="form-group">
                <label for="content">自傳</label>
                <textarea class="form-control" id="content" rows="3" name="content[]"><?= $value['content']; ?></textarea>
            </div>
            <div class="form-group form-check">
                <input type="radio" class="form-check-input" name="sh" value="<?= $value['id']; ?>" <?= ($value['sh'] == 1) ? "checked" : ""; ?>>
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
<script>
    moreAut = () => {
        let row = `
        <div class="form-group">
                <label for="content">自傳</label>
                <textarea class="form-control" id="content" rows="3" name="content2[]"></textarea>
            </div>
            </div>
            <hr>
            `;
        $('#aut').append(row);
    }
</script>