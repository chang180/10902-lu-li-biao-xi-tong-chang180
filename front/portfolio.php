<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">

    <?php include_once "base.php";
    $db = new DB('portfolio');
    $por = $db->all(['sh'=>1]);
    foreach($por as $key=>$value){
        
        ?>
            <div class="card border rounded-lg shadow bg-dark text-white col mb-4">
                <img src="img/<?=$value['img'];?>" class="card-img-top portimg img-thumbnail mt-2">
                <div class="card-body mx-auto">
                    <h5 class="card-title text-info"><?=$value['title'];?></h5>
                    <p class="card-text"><?=$value['intro'];?></p>
                </div>
                <div class="card-footer text-center bg-dark mb-2">
                    <a href="<?=$value['url'];?>" target="_new" class="btn btn-danger">作品連結</a>
                </div>
            </div>
<?php
}
?>
</div>