<?php
    require './Model/connectDB.php';
    $con = connectDB();
    /*
    require './Model/game.php';
    $syllabary2 = loadSyllabary($con, $_SESSION['gameSyllabary']);
    $syllabary = loadAllSyllabary($con);

    //print_r($syllabary);
    $check = checkUseryllabary($con, $_SESSION['User']);
    if($check[0][0] == 0){
        foreach ($syllabary as $ideogram):
            if($ideogram[5] < 2){
                saveSyllabary($con, $_SESSION['User'], $ideogram[0], 0, 1);
            }else{
                saveSyllabary($con, $_SESSION['User'], $ideogram[0], 0, 0);
            }
        endforeach;
    }
    */
    /* COMPROBACIÓ!!!!!!!!!!!!!!!!! */

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

