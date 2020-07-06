<button class="btn btn-success float-right" onclick="morePor()">新增</button>
<form action="../api/portfolio.php" method="post" enctype="multipart/form-data">
    <table class="table" id="por">
        <thead class="thead-dark">
            <tr>
                <th scope="col-2">作品名稱</th>
                <th scope="col-4">簡介</th>
                <th scope="col-2">檔案名稱</th>
                <th scope="col-2">連結網址</th>
                <th scope="col-1">顯示</th>
                <th scope="col-1">刪除</th>
            </tr>
        </thead>
    
    
    
        <?php include_once "../base.php";
        $db = new DB('portfolio');
        $por = $db->all();
        foreach ($por as $key => $value) {
    
        ?>
            <tbody>
                <tr>
                    <th scope="row"><?= $value['title']; ?></th>
                    <td><?= $value['intro']; ?></td>
                    <td><?= $value['img']; ?></td>
                    <td><?= $value['url']; ?></td>
                    <td><?= $value['sh']; ?></td>
                    <td></td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>

</form>

<script>
    morePor = () => {
        let row = `
            
        
            `;
        $('#por').append(row);
    }
</script>