<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col-12">自傳</th>
        </tr>
    </thead>

    <?php include_once "base.php";
    $db = new DB('autobiography');
    $con = $db->all(['sh' => 1]);
    foreach ($con as $key => $value) {

    ?>
        <tbody>
            <tr>
                <th scope="row"><?=nl2br($value['content']);?></th>
            </tr>
        </tbody>
    <?php
    }
    ?>
</table>