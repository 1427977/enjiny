<?php
    require './Model/connectDB.php';
    $con = connectDB();

    if($_SESSION["learning"] == "Hiragana" || $_SESSION["learning"] == "Katakana"){
        require './Model/game.php';
        $userSyllabary = getUserSyllabary($con, $_SESSION["User"]);
        $syllabary = loadSyllabary($con, $_SESSION["learning"]);

        if($_SESSION["learning"] == "Hiragana"){
            $_SESSION["average"] = (calculateAvgHiragana($con, $_SESSION['User'])[0][0]/5)*100;
        }

        if($_SESSION["learning"] == "Katakana"){
            $_SESSION["average"] = (calculateAvgKatakana($con, $_SESSION['User'])[0][0]/5)*100;
        }
    }

    /*
    if($_SESSION["Kanji"]){

    }
    */

    require './View/learning.php';