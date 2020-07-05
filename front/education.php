<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col-6">學校</th>
            <th scope="col-3">開始時間</th>
            <th scope="col-3">結束時間</th>
        </tr>
    </thead>



    <?php include_once "base.php";
    $db = new DB('education');
    $edu = $db->all(['sh' => 1], " ORDER BY `start` DESC");
    foreach ($edu as $key => $value) {

    ?>
        <tbody>
            <tr>
                <th scope="row"><?= $value['school']; ?></th>
                <td><?= $value['start']; ?></td>
                <td><?= $value['end']; ?></td>
            </tr>
        </tbody>
    <?php
    }
    ?>
    <!-- button自帶submit效果 -->
</table>