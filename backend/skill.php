<button class="btn btn-success float-right" onclick="moreSkill()">新增</button>
<form action="../api/skill.php" method="post">
    <div id="ski">
        <?php include_once "../base.php";
        $db = new DB('skill');
        $job = $db->all(""," ORDER BY `catalog`");
        foreach ($job as $key => $value) {

        ?>
        <div class="border m-3">
            <div class="form-group">
                <label for="skill">技能</label>
                <input type="text" class="form-control" name="skill[]" value="<?= $value['skill']; ?>">
            </div>
            <div class="form-group">
                <label for="catalog">類別</label>
                <input type="text" class="form-control" name="catalog[]" value="<?= $value['catalog']; ?>">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name="del[]" value="<?= $value['id']; ?>">
                <label class="form-check-label" for="del">刪除</label>
            </div>
            <input type="hidden" name="id[]" value="<?= $value['id']; ?>">
        </div>

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
    moreSkill = () => {
        let row = `
            <div class="form-group">
            <label for="skill2">技能</label>
            <input type="text" class="form-control" name="skill2[]">
            </div>
            <div class="form-group">
            <label for="catalog">類別</label>
            <input type="text" class="form-control" name="catalog2[]">
            </div>
            <hr>
            `;
        $('#ski').append(row);
    }
</script>