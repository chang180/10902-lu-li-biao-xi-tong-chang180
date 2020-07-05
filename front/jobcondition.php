<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col-6">希望職務</th>
            <th scope="col-6">期望待遇</th>
        </tr>
    </thead>

    <?php include_once "base.php";
    $db = new DB('jobcondition');
    $job = $db->all("");
    foreach ($job as $key => $value) {

    ?>
        <tbody>
            <tr>
                <th scope="row"><?= $value['jobtitle']; ?></th>
                <td><?= $value['salary']; ?></td>
            </tr>
        </tbody>
    <?php
    }
    ?>
</table>