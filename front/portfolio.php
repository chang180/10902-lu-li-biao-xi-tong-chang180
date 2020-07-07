<?php include_once "base.php";
    $db = new DB('portfolio');
    $por = $db->all(['sh'=>1]);
foreach($por as $key=>$value){

    ?>
<div class="col-12 col-md-6 col-lg-3">
    <div class="card m-1 border rounded-lg shadow">
        <img src="img/<?=$value['img'];?>" class="card-img-top portimg img-thumbnail">
        <div class="card-body mx-auto">
            <h5 class="card-title"><?=$value['title'];?></h5>
            <p class="card-text"><?=$value['intro'];?></p>
            <a href="<?=$value['url'];?>" target="_new" class="btn btn-primary">作品連結</a>
        </div>
    </div>
</div>
<?php
}
?>