<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col-6">技能</th>
            <th scope="col-6">類別</th>
        </tr>
    </thead>

    <?php include_once "base.php";
    $db = new DB('skill');
    $edu = $db->all("", " ORDER BY `catalog`");
    foreach ($edu as $key => $value) {

    ?>
        <tbody>
            <tr>
                <th scope="row"><?= $value['skill']; ?></th>
                <td><?= $value['catalog']; ?></td>
            </tr>
        </tbody>
    <?php
    }
    ?>
</table>