<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="style.css" />
</head>
<style>
    .title{
        font-size: 40px;
        text-align: center;
    }
    .main{

    }
    .block{
        display: flex;
        justify-content: space-between;
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 5%;
    }
    .block__zapise p{
     padding-left: 90px ;
    }
    .block a{
        text-decoration: none;
        color: black;
    }
    .blocks {
        text-align: ;
    }
    .block__zapise h4{
        text-align: left;
        font-size: 25px ;
        margin: 90px 10px 10px 90px;
    }
    </style>
<body>
<div class="main">
    <div class="blocks">
        <div class="block">
               <a class="title" href ="#" >Главная </a>
                <a class="title" href ="lichnosti.php" >Таблица личности </a>
                 <a class="title" href ="pasport.php" >Таблица паспорта </a>
        </div>
            <div class="block__zapise">
                <h4>Последние 5 записей из таблиц:</h4>
                <?php
                include "limit.php"
                ?>
            </div>

    </div>
</div>






</body>
</html>
