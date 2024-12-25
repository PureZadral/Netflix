<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100..900&display=swap" rel="stylesheet">
    <style type="text/css">
        .geologica-bold{
        font-family: "Geologica", sans-serif;
        font-optical-sizing: auto;
        font-weight: 900;
        font-style: normal;
        font-variation-settings:
            "slnt" 0,
            "CRSV" 0,
            "SHRP" 0;
        }
        .textcolor{
            background: linear-gradient(to right, #eeaeca, #94bbe9);
            background-clip: text;
            color: transparent;
        }
    </style>
</head>
<body>

 <!--шапка-->
 <?php $film = [
    "name" => "Downtown Abbay",
    "description" => "Этот сериал, обнажающий снобизм и интриганство внутри исчезающей классовой системы Англии, рассказывает о событиях жизни семьи Кроули и её слуг",
    "year" => 2015,
    "image" => "downtownabbey.webp",
]?>
 <div class="bg-dark p-3 col-12">
        <div class="row">
            <div class="col-1">
                <img src="logo.png" alt="" class="w-100">
            </div>
            <div class="col-7 pt-2">
                <a href="" class="text-light ml-3 text-decoration-none">Главная</a>
                <a href="" class="text-light ms-3 text-decoration-none">Сериалы</a>
                <a href="" class="text-light ms-3 text-decoration-none">Фильмы</a>
                <a href="" class="text-light ms-3 text-decoration-none">Новые и популярные</a>
                <a href="" class="text-light ms-3 text-decoration-none">Мой список</a>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
    <div class="" style="background-image: url(<?php echo $film["image"]; ?>) ; height: 900px; background-size: 100% 100%; padding-top: 300px;">
        <div class="ms-5 text-light col-3">
            <h1><?php echo $film["name"]; ?></h1>
            <p><?php echo $film["description"]; ?></p>
            <p><?php echo $film["year"]; ?></p>
            <button class="btn btn-light">Смотреть</button>
            <button class="btn btn-secondary ms-1">Подробнее</button>
        </div>
    </div>
    <div class="bg-dark px-4 py-5 col-12 d-flex text-secondary geologica-bold ">
        <h1 class="my-auto textcolor" style="font-size: 280px;">1</h1>
        <img src="thum.jpg" style="height: 350px; width: 230px; margin-left: -35px;">

        <h1 class="ms-3 my-auto textcolor" style="font-size: 280px;">2</h1>
        <img src="thum.jpg" style="height: 350px; width: 230px; margin-left: -35px;">

        <h1 class="ms-3 my-auto textcolor" style="font-size: 280px;">3</h1>
        <img src="thum.jpg" style="height: 350px; width: 230px; margin-left: -35px;">

        <h1 class="ms-3 my-auto textcolor" style="font-size: 280px;">4</h1>
        <img src="thum.jpg" style="height: 350px; width: 230px; margin-left: -35px;">

        <h1 class="ms-3 my-auto textcolor" style="font-size: 280px;">5</h1>
        <img src="thum.jpg" style="height: 350px; width: 230px; margin-left: -35px;">
    </div>
</body>
</html>