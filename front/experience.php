<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col-2">公司</th>
            <th scope="col-2">職稱</th>
            <th scope="col-4">職務描述</th>
            <th scope="col-2">開始時間</th>
            <th scope="col-2">結束時間</th>
        </tr>
    </thead>

    <?php include_once "base.php";
    $db = new DB('experience');
    $edu = $db->all(['sh' => 1], " ORDER BY `start` DESC");
    foreach ($edu as $key => $value) {

    ?>
        <tbody>
            <tr>
                <th scope="row"><?= $value['company']; ?></th>
                <td><?= $value['jobtitle']; ?></td>
                <td><?= $value['description']; ?></td>
                <td><?= $value['start']; ?></td>
                <td><?= $value['end']; ?></td>
            </tr>
        </tbody>
    <?php
    }
    ?>
</table>