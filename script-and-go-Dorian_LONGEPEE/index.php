<?php
require_once __DIR__ . '/src/Counter.php';

$name = "Dorian Longépée"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
            crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    <title>Test Web Developer - <?php echo $name ?> </title>
</head>
<body>
<main class="content center">
    <img alt="Logo Script&amp;Go"
         class="logo"
         src="./assets/img/logo-script-and-go.png"
         width="300">

    <a class="btn"
       href="https://www.scripandgo.com">Visitez notre site</a>

    <span class="view-counter">
        <?php
            $counter = new Counter();
            $counter->getViews();
        ?> 
    </span>
</main>
</body>
</html>