<div>&nbsp;
    <button class="btn btn-success float-right" onclick="moreSkill()">新增</button>
</div>
<form action="../api/skill.php" method="post">
    <div id="ski">
        <?php include_once "../base.php";
        $db = new DB('skill');
        $ski = $db->all("", " ORDER BY `catalog`");
        foreach ($ski as $key => $value) {

        ?>
            <div class="border border-warning m-3">
                <div class="form-group">
                    <label for="skill">技能</label>
                    <input type="text" class="form-control" name="skill[]" value="<?= $value['skill']; ?>">
                </div>
                <div class="form-group">
                    <label for="catalog">類別</label>
                    <select class="form-control" id="catalog" name="catalog[]">
                        <option <?= ($value['catalog'] == "前端") ? "selected" : ""; ?>>前端</option>
                        <option <?= ($value['catalog'] == "後端") ? "selected" : ""; ?>>後端</option>
                        <option <?= ($value['catalog'] == "影像編輯") ? "selected" : ""; ?>>影像編輯</option>
                        <option <?= ($value['catalog'] == "其他") ? "selected" : ""; ?>>其他</option>
                    </select>
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
    <label for="skill">類別</label>
    <select multiple class="form-control" id="skill" name="catalog2[]">
      <option>前端</option>
      <option>後端</option>
      <option>影像編輯</option>
      <option>其他</option>
    </select>
            </div>
            <hr>
            `;
        $('#ski').append(row);
    }
</script>