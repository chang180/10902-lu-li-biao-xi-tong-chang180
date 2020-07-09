<?php include_once "../base.php";
// if(empty($_SESSION['login'])) to("../index.php");
// $do=$_COOKIE['do'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>履歷表後台管理</title>


</head>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
<style>
    * {
        font-family: 'Noto Sans TC', sans-serif;
    }

    .body {
        min-height: 60vh;
        background: #eee;
    }

    .portimg {
        height: 20vh;
        object-fit: cover;
    }
</style>

<body>
    <header class="row">
        <h1 class="col-6">履歷表管理後台</h1>
        <form class="col-6" action="../api/logout.php">
            <input type="submit" class="btn btn-outline-primary float-right" value="登出">
        </form>
    </header>
    <div class="container m-auto">
        <div class="row border">
            <div class="nav flex-column nav-pills col-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="btn btn-outline-success m-1 nav-link <?= (@$_COOKIE['do'] == 'title' || !isset($_COOKIE['do'])) ? "active" : ""; ?>" id="title-tab" data-toggle="pill" href="#title" role="tab">個人資料</a>
                <a class="btn btn-outline-success m-1 nav-link <?= (@$_COOKIE['do'] == 'education') ? "active" : ""; ?>" id="education-tab" data-toggle="pill" href="#education" role="tab">學歷</a>
                <a class="btn btn-outline-success m-1 nav-link <?= (@$_COOKIE['do'] == 'experience') ? "active" : ""; ?>" id="experience-tab" data-toggle="pill" href="#experience" role="tab">經歷</a>
                <a class="btn btn-outline-success m-1 nav-link <?= (@$_COOKIE['do'] == 'jobcondition') ? "active" : ""; ?>" id="jobcondition-tab" data-toggle="pill" href="#jobcondition" role="tab">希望職務條件</a>
                <a class="btn btn-outline-success m-1 nav-link <?= (@$_COOKIE['do'] == 'skill') ? "active" : ""; ?>" id="skill-tab" data-toggle="pill" href="#skill" role="tab">技能</a>
                <a class="btn btn-outline-success m-1 nav-link <?= (@$_COOKIE['do'] == 'autobiography') ? "active" : ""; ?>" id=" autobiography-tab" data-toggle="pill" href="#autobiography" role="tab">自傳</a>
                <a class="btn btn-outline-success m-1 nav-link <?= (@$_COOKIE['do'] == 'portfolio') ? "active" : ""; ?>" id="portfolio-tab" data-toggle="pill" href="#portfolio" role="tab">作品集</a>
                <!-- <a class="btn btn-outline-success m-1 nav-link" id="seventh-tab" data-toggle="pill" href="#seventh" role="tab">Settings</a>
                <a class="btn btn-outline-success m-1 nav-link" id="eighth-tab" data-toggle="pill" href="#eighth" role="tab">Settings</a> -->
            </div>
            <div class="tab-content col-9" id="v-pills-tabContent">
                <div class="tab-pane fade <?= (@$_COOKIE['do'] == 'title' || !isset($_COOKIE['do'])) ? "show active" : ""; ?>" id="title" role="tabpanel">

                    <?php include "contact.php"; ?>

                </div>
                <div class="tab-pane fade <?= (@$_COOKIE['do'] == 'education') ? "show active" : ""; ?>" id="education" role="tabpanel">
                    <?php include "education.php"; ?>

                </div>
                <div class="tab-pane fade <?= (@$_COOKIE['do'] == 'experience') ? "show active" : ""; ?>" id="experience" role="tabpanel">
                    <?php include "experience.php"; ?>

                </div>
                <div class="tab-pane fade <?= (@$_COOKIE['do'] == 'jobcondition') ? "show active" : ""; ?>" id="jobcondition" role="tabpanel">
                    <?php include "jobcondition.php"; ?>

                </div>
                <div class="tab-pane fade <?= (@$_COOKIE['do'] == 'skill') ? "show active" : ""; ?>" id="skill" role="tabpanel">
                    <?php include "skill.php"; ?>

                </div>
                <div class="tab-pane fade  <?= (@$_COOKIE['do'] == 'autobiography') ? "show active" : ""; ?>" id="autobiography" role="tabpanel">
                    <?php include "autobiography.php"; ?>
                </div>
                <div class="tab-pane fade <?= (@$_COOKIE['do'] == 'portfolio') ? "show active" : ""; ?>" id="portfolio" role="tabpanel">
                    <?php include "portfolio.php"; ?>
                    <!-- <a href="http://220.128.133.15/s1090215/">連結</a> -->
                </div>
                <!-- <div class="tab-pane fade" id="seventh" role="tabpanel">預留兩欄</div>
                <div class="tab-pane fade" id="eighth" role="tabpanel">用不著再刪就好</div> -->
            </div>
        </div>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
    <script src="../js/jquery-3.4.1.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>