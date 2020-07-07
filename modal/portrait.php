<div class="form-group">
    <!-- Modal -->
    <div class="modal fade" id="portrait" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <form action="../api/update.php" method='post' enctype="multipart/form-data">
                        <h5 class="modal-title" id="exampleModalLongTitle">更新圖片</h5>
                        <input type="file" name="img">
                        <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">更新</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
