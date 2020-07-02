<button class="btn btn-success float-right" onclick="moreJob()">新增</button>
<form action="../api/jobcondition.php" method="post">
    <div id="job">
        <?php include_once "../base.php";
        $db = new DB('jobcondition');
        $job = $db->all("");
        foreach ($job as $key => $value) {

        ?>
            <div class="form-group">
                <label for="jobtitle">希望職務</label>
                <input type="text" class="form-control" name="jobtitle[]" value="<?= $value['jobtitle']; ?>">
            </div>
            <div class="form-group">
                <label for="salary">期望待遇</label>
                <input type="text" class="form-control" name="salary[]" value="<?= $value['salary']; ?>">
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
    moreJob = () => {
        let row = `
            <div class="form-group">
            <label for="name">希望職務</label>
            <input type="text" class="form-control" name="jobtitle2[]">
            </div>
            <div class="form-group">
            <label for="salary">期望待遇</label>
            <input type="text" class="form-control" name="salary2[]">
            </div>
            <hr>
            `;
        $('#job').append(row);
    }
</script>