<div class="card-deck">

    <?php include_once "base.php";
    $db = new DB('portfolio');
    $por = $db->all(['sh'=>1]);
    foreach($por as $key=>$value){
        
        ?>
    <div class="card m-1 border rounded-lg shadow col-12 col-md-6 col-lg-3 bg-dark text-white">
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