<?php
    require './Model/connectDB.php';
    $con = connectDB();
    require './Model/game.php';

    if(isset($_SESSION['gameMode'])){
        $_SESSION['gameMode'] = "0";
    }

    if($_SESSION["gameSyllabary"] == "Hiragana"){
        $_SESSION["average"] = (calculateAvgHiragana($con, $_SESSION['User'])[0][0]/5)*100;
    }

    if($_SESSION["gameSyllabary"] == "Katakana"){
        $_SESSION["average"] = (calculateAvgKatakana($con, $_SESSION['User'])[0][0]/5)*100;
    }

   /* if($_SESSION["gameSyllabary"] == "Kanji"){

    }
*/
    /* Comprobació */
    if( array_key_exists( 'submit_classic', $_POST ) )
    {
        $_SESSION['gameMode'] = "Classic";
    }
    if( array_key_exists( 'submit_temps', $_POST ) )
    {
        $_SESSION['gameMode'] = "Temps";
    }
    if( array_key_exists( 'submit_punts', $_POST ) )
    {
        $_SESSION['gameMode'] = "Punts";
    }
    if( array_key_exists( 'submit_personalitza', $_POST ) )
    {
        $_SESSION['gameMode'] = "Personalitzat";
    }

    if($_SESSION['gameMode'] != "Classic" && $_SESSION['gameMode'] != "Temps" && $_SESSION['gameMode'] != "Punts" && $_SESSION['gameMode'] != "Personalitzat"){
        require './View/mode.php';
    }else{
        if($_SESSION['gameMode'] == "Personalitzat"){
            header('Refresh: 1; URL=index.php?accio=custom');
        }else {
            header('Refresh: 1; URL=index.php?accio=type');
        }
    }

