<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$GLOBALS['title']?></title>
        <link href="../../content/style.css" rel="stylesheet" />
        <link href="../../content/bootstrap5/bootstrap.min.css" rel="stylesheet" />
        <link href="../../content/bootstrap5/bootstrap.rtl.min.css" rel="stylesheet" />
        <link href="../../content/bootstrap5/bootstrap-grid.min.css" rel="stylesheet" />
        <link href="../../content/bootstrap5/bootstrap-grid.rtl.min.css" rel="stylesheet" />
        <link href="../../content/bootstrap5/bootstrap-reboot.min.css" rel="stylesheet" />
        
        <script src="../../scripts/jquery-3.5.1.min.js"></script>
        <script src="../../scripts/bootstrap5/bootstrap.min.js"></script>
        <script src="../../scripts/bootstrap5/bootstrap.bundle.min.js"></script>
        <script src="../../scripts/scripts.js"></script>
    </head>
    <body>
        <header class="container-top">
            <div class="layout">
                <div class="logo">
                    <p>Logo</p>
                </div>
                <nav class="top-menu">
                    <??>
                    <a href="/"><li>Главная</li></a>
                    <li>Мероприятия</li>
                    <li>Еще что-то</li>
                    <li>О нас</li>
                    <a href="/authenication"><li>Авторизация</li></a>

                </nav>
            </div>
        </header>
        <div class="layout" id="layout-body">
        <script>
            // Создание блока тела
            $('#layout-body').prepend('<div id="content">'); 
            // Динамическая загрузка страницы
            dynamicLoadContentPOST('<?=$GLOBALS['MAP']['controller']?>', '<?=$GLOBALS['MAP']['action']?>');
        </script>
             