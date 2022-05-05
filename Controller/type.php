<?php
    require './Model/connectDB.php';
    $con = connectDB();

    if( array_key_exists( 'submit_eljp', $_POST ) )
    {
        $_SESSION['gameType'] = "EleccióJP";
    }
    if( array_key_exists( 'submit_elrm', $_POST ) )
    {
        $_SESSION['gameType'] = "EleccióRM";
    }
    if( array_key_exists( 'submit_tecjp', $_POST ) )
    {
        $_SESSION['gameType'] = "TeclatJP";
    }
    if( array_key_exists( 'submit_tecrm', $_POST ) )
    {
        $_SESSION['gameType'] = "TeclatRM";
    }

    if($_SESSION['gameType'] != "EleccióJP" && $_SESSION['gameType'] != "EleccióRM" && $_SESSION['gameType'] != "TeclatJP" && $_SESSION['gameType'] != "TeclatRM"){
        require './View/type.php';
    }else{
        header('Refresh: 1; URL=index.php?accio=game');
    }