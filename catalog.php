<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:title" content="Каталог · интербиос" />
    <meta property="og:image" content="https://i.imgur.com/36WKbex.jpg" />
    <meta name="keywords" content="каталог цветов, цветы Торжок, доставка цветов, купить цветы"/>
    <meta name="description" content="Большой выбор цветов в магазине-оранжерее Интербиос! Доступные цены, доставка по Торжку, широкий ассортимент свежих букетов и не только!" />
    <link rel="shortcut icon" href="https://interbios.ru/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap&subset=cyrillic"
          rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
    <title>Широкий выбор букетов, цветочных корзин, композиций, рассады и подарков - Интербиос</title>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(59239207, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/59239207" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>
<?php
    $page = 'catalog';
require('includes/header.php')
?>
<main>
    <div class="container">
        <div class="catalog">
            <h1 class=" catalog__page-title page-title">Каталог</h1>
            <div class="catalog__text-p text-p">
                В нашем каталоге вы можете ознакомиться с широким ассортиментом всегда красивых и свежих цветов!
            </div>
            <div class="catalog__body">
                <a href="catalog/buketi.php" class="catalog__item catalog__item_bouquets">Букеты</a>
                <a href="catalog/compozicii.php" class="catalog__item catalog__item_compositions">Цветочные композиции</a>
                <a href="catalog/swadebnie.php" class="catalog__item catalog__item_wedding">Свадебные букеты</a>
                <a href="catalog/gorshechnie.php" class="catalog__item catalog__item_pots">Горшечные цветы</a>
                <a href="catalog/sadiogorod.php" class="catalog__item catalog__item_garden">Для сада и огорода</a>
                <a href="catalog/shariiigrushki.php" class="catalog__item catalog__item_balloons">Воздушные шары и мягкие игрушки</a>
                <a href="catalog/suveniri.php" class="catalog__item catalog__item_souvenirs">Сувенирная продукция</a>
                <a href="catalog/ritualnaya.php" class="catalog__item catalog__item_funeral">Ритуальные товары</a>
                <div class="catalog__spacer"></div>
            </div>
        </div>
    </div>
</main>
<?php
require('includes/footer.php')
?>
</body>
</html>