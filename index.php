<?php

    include('php/connect.php');
    include('php/function.php');

    $ref = $_GET['']; //получение ссылки
    $ref_r = explode("/", $ref); //Разделение ссылки
    $type = $_SERVER['REQUEST_METHOD']; //Метод
    $res = [];

    if($type == 'GET'){
        if($ref[0] == ''){
            echo('aa');
        };
    };

?>


<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/index.css">
    <title>ProService</title>
</head>
<body>
    
    <script src="js/main.js"></script>
</body>
</html> -->