<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?= $title ?></title>
        <meta name="Keywords" content="" />
        <meta name="Description" content="" />
        <link href="/assets/default/default.css" rel="stylesheet" type="text/css" />
        <link href="/assets/js/jquery.snippet.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="/assets/js/jquery-1.6.2.min.js"></script>
        <script type="text/javascript" src="/assets/js/jquery.snippet.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("pre#php").snippet("php", {style: "matlab", transparent: false, showNum: false});
            });
        </script>
    </head>
    <body>
        <div id="header">
            <div>
                <h1>Bonfire</h1>
                <h2>Faster CodeIgniter Development</h2>
            </div>
        </div>
        <div id="content">
            <div id="colOne">
                <h1>Bonfire</h1>
                <p style="font-size: 110%; font-weight: bold">Быстрая CodeIgniter разработка</p>
                <div class="bg1"><br />
                    <a href="<?= site_url() ?>" style="font-size: 120%">
                        Добро пожаловать в Bonfire
                    </a>
                </div>
                <h3>Основная информация</h3>
                <div class="bg1">
                    <ul>
                        <li class="first"><a href="<?= site_url('docs/basic_info/requirements') ?>">Системные требования</a></li>
                        <li><a href="<?= site_url('docs/basic_info/license') ?>">Лицензионное соглашение</a></li>
                        <li><a href="<?= site_url('docs/basic_info/changelog') ?>">Список изменений</a></li>
                        <li><a href="<?= site_url('docs/basic_info/credits') ?>">Пожертвования</a></li>
                    </ul>
                </div>
                <h3>Установка</h3>
                <div class="bg1">
                    <ul>
                        <li class="first"><a href="<?= site_url('docs/installation/instaling') ?>">Свежая установка</a></li>
                        <li><a href="<?= site_url('docs/installation/instaling') ?>">Устранение неисправностей</a></li>
                    </ul>
                </div>
            </div>
            <div id="colTwo">
                <?= $content ?>
            </div>
        </div>
        <div id="footer">
            <p>Copyright (c) 2006 Sitename.com. All Rights Reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
        </div>
    </body>
</html>
