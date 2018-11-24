<?php
//session_start();
//print_r($_SESSION);
//$tasks = [
//    'create project',
//    'test project',
//
//];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<?php require 'partials/nav.php'?>
<div class="container">
    <div class="row">
        <div class="col-sm" id="load_button_container">
            <button type="button" class="btn btn-primary" id="load_button">Загрузить</button>
            <button type="button" class="btn btn-primary" id="load_sport">Только спорт</button>
        </div>
    </div>
</div>
<h1>Цены</h1>
</body>
<script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
</html>