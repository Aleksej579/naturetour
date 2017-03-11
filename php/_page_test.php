<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Naturetour | spend holidays with nature</title>
    <meta name="keywords" content="Africa Holidays, Americas Holidays, Antarctica Holidays, Asia Holidays, Australasia Holidays, Europe Holidays">
    <meta name="description" content="A selection of worldwide bird watching, wild flower and natural history holidays (including wildlife tours, treks and cruises), all led by expert naturalist guides">
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <link href="/css/main.css" type="text/css" rel="stylesheet">
    <link href="/css/bootstrap.css" type="text/css" rel="stylesheet">
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
</head>
<body>
<?php require_once "header.php"; ?>
<div style=" width:100%; height:1px; clear:both;"></div>
<?php require_once "nav.php"; ?>
<p class="link_home"><a href="/index.php"><small>Home</small></a></p>
<main>
    <article>
        <?php
        echo 'Region - ', $_GET['region'];
        echo "<br>";
        echo 'Category - ', $_GET['category'];
        echo "<br>";
        echo 'Date - ', $_GET['date'];
        echo "<br>";
        echo 'Price - ', $_GET['price'];
        ?>
    </article>
    <?php require_once "aside.php"; ?>
    <div style=" width:100%; height:1px; clear:both;"></div>
</main>
<?php require_once "pre_footer.php"; ?>
<?php require_once "footer.php"; ?>
</body>
</html>



