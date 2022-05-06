<?php
        require './Model/connectDB.php';
        $con = connectDB();

        if(isset($_SESSION['gameSyllabary'])){
            $_SESSION['gameSyllabary'] = "0";
        }

        if( array_key_exists( 'submit_hiragana', $_POST ) )
        {
            $_SESSION['gameSyllabary'] = "Hiragana";
        }
        if( array_key_exists( 'submit_katakana', $_POST ) )
        {
            $_SESSION['gameSyllabary'] = "Katakana";
        }
        if( array_key_exists( 'submit_kanji', $_POST ) )
        {
            $_SESSION['gameSyllabary'] = "Kanji";
        }

        if($_SESSION['gameSyllabary'] != "Hiragana" && $_SESSION['gameSyllabary'] != "Katakana" && $_SESSION['gameSyllabary'] != "Kanji"){
            require './View/syllabary.php';
        }else{
            header('Refresh: 1; URL=index.php?accio=mode');
        }

