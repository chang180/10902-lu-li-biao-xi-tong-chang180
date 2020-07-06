<?php include_once "base.php";
    $db = new DB('portfolio');
    $por = $db->all(['sh'=>1]);
foreach($por as $key=>$value){

    ?>
<div class="col-12 col-md-6">
    <div class="card" style="width: 18rem;">
        <img src="img/<?=$value['img'];?>" class="card-img-top img-thumbnail">
        <div class="card-body mx-auto">
            <h5 class="card-title"><?=$value['title'];?></h5>
            <p class="card-text"><?=$value['intro'];?></p>
            <a href="<?=$value['url'];?>" class="btn btn-primary">作品連結</a>
        </div>
    </div>
</div>
<?php
}
?>