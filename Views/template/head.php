<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$GLOBALS['title']?></title>
        <? //\Source\ViewPage::loadAllStyles()?>
        <link href="../../content/css/main.css" rel="stylesheet" />
        <link href="../../content/css/media.css" rel="stylesheet" />
        <link href="../../content/css/FontAwesome.min.css" rel="stylesheet" />
        <link href="../../content/css/bootstrap5/bootstrap.min.css" rel="stylesheet" />

        <script type="text/javascript" src="../../scripts/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../../scripts/bootstrap5/bootstrap.min.js"></script>

        <script type="text/javascript" src="../../scripts/scripts.js"></script>
        <script type="text/javascript" src="../../scripts/FontAwesome.min.js"></script>
    </head>
    <body>
    <header id="top-menu" class="snack">



    <nav class="navbar navbar-expand-lg navbar-light d-flex">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav w-100 bd-highlight justify-content-center">
                <a class="nav-link active" aria-current="page" href="/">Главная</a>
                <a class="nav-link" href="/productions">Продукция</a>
                <a class="nav-link" href="/news">Новости</a>
            </div>
            <div class="container-top-social">
                <a href="#"><i class="fab fa-odnoklassniki" aria-hidden="true"></i></a>
                <a href="#"><i class="fab fa-vk" aria-hidden="true"></i></a>
                <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
            </div>
            </div>
        </div>
    </nav>
    </header>
    <main id="layout-body">
      <?php
        if($GLOBALS['load_content'] === true)
          echo \Source\ViewPage::getDynamicJsLoadContent('#layout-body');
      ?>
