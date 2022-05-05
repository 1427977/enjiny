<?php
    require './Model/connectDB.php';
    $con = connectDB();
    $_SESSION['gameMode'] = 0;
    $_SESSION['gameType'] = 0;
    $_SESSION['gameSyllabary'] = 0;

    $_SESSION['time'] = 120;
    $_SESSION['questionTime'] = 10;
    $_SESSION['question'] = 0;
    $_SESSION['questionNum'] = 20;
    $_SESSION['points'] = 0;

    $_SESSION['TempsPregunta'] = 0;

    require './View/cover.php';