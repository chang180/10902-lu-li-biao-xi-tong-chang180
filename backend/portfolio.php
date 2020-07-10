<form action="../api/portfolio.php" method="post" enctype="multipart/form-data">
    <div id="por">
        <?php include_once "../base.php";
        $db = new DB('portfolio');
        $por = $db->all("");
        foreach ($por as $key => $value) {

        ?>
            <div class="border border-warning">
                <div class="form-group">
                    <label for="title">作品名稱</label>
                    <input type="text" class="form-control" name="title[]" value="<?= $value['title']; ?>">
                </div>
                <div class="form-group">
                    <label for="intro">簡介</label>
                    <input type="text" class="form-control" name="intro[]" value="<?= $value['intro']; ?>">
                </div>

                <div class="form-group">
                    <img class="col-6 portimg" src="../img/<?= $value['img']; ?>">

                    <!-- <input id="portrait1" class="btn btn-outline-danger" type="button" value="更換圖片" onclick="location.href='../modal/portrait.php?id=<?= $value['id']; ?>'"> -->

                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-primary" onclick="showmodal(<?= $value['id'] ?>)">
                        更換圖片
                    </button> -->


                    <button type="button" class="btn btn-primary portfo" data-toggle="modal" data-target="#portrait" onclick="editPortrait(<?= $value['id']; ?>,'<?= $value['img']; ?>')">
                        更新圖片
                    </button>

                    <input type="hidden" class="form-control-file" id="img" name="img[]" value="<?= $value['img']; ?>">
                </div>

                <div class="form-group">
                    <label for="url">連結網址</label>
                    <input type="text" class="form-control" name="url[]" value="<?= $value['url']; ?>">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="sh[]" value="<?= $value['id']; ?>" <?= ($value['sh'] == 1) ? "checked" : ""; ?>>
                    <label class="form-check-label" for="sh">顯示</label>
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
</form>
<button class="btn btn-success float-right" onclick="morePor()">新增</button>

<!-- Modal -->
<div class="modal fade" id="portrait" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <form action="../api/update.php" method='post' enctype="multipart/form-data">
                    <h5 class="modal-title" id="exampleModalLongTitle">更新圖片</h5>
                    <div class="modal-body">
                        <!-- 圖片預覽 -->
                        <img class="w-100" id="portim" src="#">
                        <input type="file" name="img" id="imgInp">
                        <input type="hidden" name="id" id="hiddenid">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">更新</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    morePor = () => {
        let row = `
        <div class="form-group">
                <label for="title">作品名稱</label>
                <input type="text" class="form-control" name="title2[]">
            </div>
            <div class="form-group">
                <label for="intro">簡介</label>
                <input type="text" class="form-control" name="intro2[]">
            </div>
            <div class="form-group">
                <label for="img">圖片</label>
                <input type="file" class="form-control" name="img2[]">
            </div>
            <div class="form-group">
                <label for="url2">連結網址</label>
                <input type="text" class="form-control" name="url2[]">
            </div>
            <hr>
            `;
        $('#por').append(row);
    }

    function editPortrait(id, img) {
        $("#hiddenid").val(id);
        $("#portim").attr('src', `../img/${img}`);
    }

    $("#imgInp").change(function() {
        // console.log("hello");
        //當檔案改變後，做一些事 
        readURL(this); // this代表<input id="imgInp">
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#portim").attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>