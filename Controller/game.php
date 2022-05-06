<?php
    require './Model/connectDB.php';
    $con = connectDB();

    require './Model/game.php';
    $syllabary = loadSyllabary($con, $_SESSION['gameSyllabary']);
    $userSyllabary = getUserSyllabary($con, $_SESSION['User']);
    $correcte = 2;

    /* COMPROVAR RESPOSTA*/
    if($_SESSION['gameType'] == "TeclatJP"){
        if (array_key_exists('teclat', $_POST)) {
            if ($_POST["submit_hidden"] == strtoupper($_POST["teclat"])) {
                $correcte = 1;
            }else{
                $correcte = 0;
            }
        }
    }
    if($_SESSION['gameType'] == "TeclatRM"){
        if (array_key_exists('teclat', $_POST)) {
            if ($_POST["submit_hidden"] == $_POST["teclat"]) {
                $correcte = 1;
            }else{
                $correcte = 0;
            }
        }
    }
    if($_SESSION['gameType'] == "EleccióJP" || $_SESSION['gameType'] == "EleccióRM") {
        if (array_key_exists('submit_button1', $_POST)) {
            if ($_POST["submit_hidden"] == $_POST["submit_button1"]) {
                $correcte = 1;
            }else{
                $correcte = 0;
            }
        }
        if (array_key_exists('submit_button2', $_POST)) {
            if ($_POST["submit_hidden"] == $_POST["submit_button2"]) {
                $correcte = 1;
            }else{
                $correcte = 0;
            }
        }
        if (array_key_exists('submit_button3', $_POST)) {
            if ($_POST["submit_hidden"] == $_POST["submit_button3"]) {
                $correcte = 1;
            }else{
                $correcte = 0;
            }
        }
        if (array_key_exists('submit_button4', $_POST)) {
            if ($_POST["submit_hidden"] == $_POST["submit_button4"]) {
                $correcte = 1;
            }else{
                $correcte = 0;
            }
        }
        if (array_key_exists('submit_button5', $_POST)) {
            if ($_POST["submit_hidden"] == $_POST["submit_button5"]) {
                $correcte = 1;
            }else{
                $correcte = 0;
            }
        }
        if (array_key_exists('submit_button6', $_POST)) {
            if ($_POST["submit_hidden"] == $_POST["submit_button6"]) {
                $correcte = 1;
            }else{
                $correcte = 0;
            }
        }
        if (array_key_exists('submit_button7', $_POST)) {
            if ($_POST["submit_hidden"] == $_POST["submit_button7"]) {
                $correcte = 1;
            }else{
                $correcte = 0;
            }
        }
        if (array_key_exists('submit_button8', $_POST)) {
            if ($_POST["submit_hidden"] == $_POST["submit_button8"]) {
                $correcte = 1;
            }else{
                $correcte = 0;
            }
        }
    }

    /* CALCULAR PUNTUACIÓ*/
    if($correcte == 1){
        $_SESSION['points'] += $userSyllabary[$_POST["submit_random"]]["Level"]*5+5;
        $_SESSION['points'] = intval($_SESSION['points']);
        $level = $userSyllabary[$_POST["submit_random"]]["Level"] + 0.1;
        if($level < 5) {
            $position = $_POST["submit_random"] + 1;
            updateLevel($con, $_SESSION['User'], $level, $position);
        }else{
            $position = $_POST["submit_random"] + 1;
            updateLevel($con, $_SESSION['User'], 5, $position);
        }
    }
    if($correcte == 0){
        $_SESSION['points'] -= 10;
        $level = $userSyllabary[$_POST["submit_random"]]["Level"] - 0.2;
        if($level > 0) {
            $position = $_POST["submit_random"] + 1;
            updateLevel($con, $_SESSION['User'], $level, $position);
        }else{
            $position = $_POST["submit_random"] + 1;
            updateLevel($con, $_SESSION['User'], 0, $position);
        }
    }

    /* SORTIR */
    //if($_SESSION['question'] == $_SESSION['questionNum']){
    if($_SESSION['question'] == 3){
        $endTime = time();
        $_SESSION['gameTime'] = $endTime - $_SESSION["starTime"];

        /*Guardar Ranking*/
        require './Model/ranking.php';
        $rankingUser = loadRanking($con, $_SESSION['User']);
        $numRanking = checkRanking($con, $_SESSION['User'], $_SESSION['gameMode'], $_SESSION['gameType'], $_SESSION['gameSyllabary']);
        if($numRanking[0][0] >= 10){
            $minRanking = minRanking($con, $_SESSION['User'], $_SESSION['gameMode'], $_SESSION['gameType'], $_SESSION['gameSyllabary']);
            if($_SESSION['points'] >= $minRanking[0][0]){
                $time = maxTime($con, $_SESSION['User'], $_SESSION['gameMode'], $_SESSION['gameType'], $_SESSION['gameSyllabary'], $minRanking[0][0]);
                deleteRanking($con, $_SESSION['User'], $minRanking[0][0], $_SESSION['gameMode'], $_SESSION['gameType'], $_SESSION['gameSyllabary'], $time[0][0]);
                insertRanking($con, $_SESSION['User'], $_SESSION['points'], $_SESSION['gameTime'], $_SESSION['gameMode'], $_SESSION['gameType'], $_SESSION['gameSyllabary']);
            }
        }else{
            insertRanking($con, $_SESSION['User'], $_SESSION['points'], $_SESSION['gameTime'], $_SESSION['gameMode'], $_SESSION['gameType'], $_SESSION['gameSyllabary']);
        }
        header ('Refresh: 1; URL=index.php?accio=ranking');
    }else{
        /* ESCOLLIR NOU CARACTER*/
        if($correcte != 2 || $_SESSION['question'] == 0){

            $_SESSION['question'] ++;

            //Calcular mitjana sil·labari
            if($_SESSION["gameSyllabary"] == "Hiragana"){
                $average = calculateAvgHiragana($con, $_SESSION['User']);
            }
            if($_SESSION["gameSyllabary"] == "Katakana"){
                $average = calculateAvgKatakana($con, $_SESSION['User']);
            }

            $numSelected = checkSelected($con, $_SESSION['User'], 5);
            if($average[0][0] < 0.15){ //Level 0
                $_SESSION["randomNumber1"] = rand(0,4);
                $sel1 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber1"] + 1);
                $score = searchScore($con, $_SESSION['User'], $_SESSION["randomNumber1"] + 1);
                $pos = 0;
                while($sel1[0]["Selected"] == 1 && $score[0] != 5 && $pos < 5){
                    $_SESSION["randomNumber1"] = rand(0,4);
                    $sel1 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber1"] + 1);
                    $score = searchScore($con, $_SESSION['User'], $_SESSION["randomNumber1"] + 1);
                    $pos += 1;
                }
                $_SESSION["randomNumber2"] = rand(0,10);
                $sel2 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                while($_SESSION["randomNumber1"] == $_SESSION["randomNumber2"] && $sel2[0]["Selected"] == 1){
                    $_SESSION["randomNumber2"] = rand(0,10);
                    $sel2 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                }
                $_SESSION["randomNumber3"] = rand(0,15);
                $sel3 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                while($_SESSION["randomNumber3"] == $_SESSION["randomNumber1"] && $_SESSION["randomNumber3"] == $_SESSION["randomNumber2"] && $sel3[0]["Selected"] == 1){
                    $_SESSION["randomNumber3"] = rand(0,15);
                    $sel3 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                }
                $_SESSION["randomNumber4"] = rand(5,15);
                $sel4 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                while($_SESSION["randomNumber4"] == $_SESSION["randomNumber1"] && $_SESSION["randomNumber4"] == $_SESSION["randomNumber2"] && $_SESSION["randomNumber4"] == $_SESSION["randomNumber3"] && $sel4[0]["Selected"] == 1){
                    $_SESSION["randomNumber4"] = rand(5,15);
                    $sel4 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                }
            }

            $numSelected = checkSelected($con, $_SESSION['User'], 46);
            if($average[0][0] < 0.8 && $average[0][0] >= 0.15){ //Level 0.5
                $_SESSION["randomNumber1"] = rand(0,25);
                $sel1 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber1"] + 1);
                $score = searchScore($con, $_SESSION['User'], $_SESSION["randomNumber1"] + 1);
                $pos = 0;
                while($sel1[0]["Selected"] == 1 && $score[0] != 5 && $pos < 5){
                    $_SESSION["randomNumber1"] = rand(0,25);
                    $sel1 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                    $score = searchScore($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                    $pos += 1;
                }
                $_SESSION["randomNumber2"] = rand(0,25);
                $sel2 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                while($_SESSION["randomNumber1"] == $_SESSION["randomNumber2"] && $sel2[0]["Selected"] == 1){
                    $_SESSION["randomNumber2"] = rand(0,25);
                    $sel2 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                }
                $_SESSION["randomNumber3"] = rand(0,25);
                $sel3 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                while($_SESSION["randomNumber3"] == $_SESSION["randomNumber1"] && $_SESSION["randomNumber3"] == $_SESSION["randomNumber2"] && $sel3[0]["Selected"] == 1){
                    $_SESSION["randomNumber3"] = rand(0,25);
                    $sel3 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                }
                $_SESSION["randomNumber4"] = rand(0,25);
                $sel4 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                while($_SESSION["randomNumber4"] == $_SESSION["randomNumber1"] && $_SESSION["randomNumber4"] == $_SESSION["randomNumber2"] && $_SESSION["randomNumber4"] == $_SESSION["randomNumber3"] && $sel4[0]["Selected"] == 1){
                    $_SESSION["randomNumber4"] = rand(0,25);
                    $sel4 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                }
            }

            if($average[0][0] < 5 && $average[0][0] >= 0.8){ //Level 1
                //UPDATE `learning` SET `Level`= 0 WHERE `idIdeogram` > 5;
                $_SESSION["randomNumber1"] = rand(0,45);
                $sel1 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber1"] + 1);
                $score = searchScore($con, $_SESSION['User'], $_SESSION["randomNumber1"] + 1);
                $pos = 0;
                while($sel1[0]["Selected"] == 1 && $score[0] != 5 && $pos < 5){
                    $_SESSION["randomNumber1"] = rand(0,45);
                    $sel1 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber1"] + 1);
                    $score = searchScore($con, $_SESSION['User'], $_SESSION["randomNumber1"] + 1);
                    $pos += 1;
                }
                $_SESSION["randomNumber2"] = rand(0,45);
                $sel2 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                while($_SESSION["randomNumber1"] == $_SESSION["randomNumber2"] && $sel2[0]["Selected"] == 1){
                    $_SESSION["randomNumber2"] = rand(0,45);
                    $sel2 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                }
                $_SESSION["randomNumber3"] = rand(0,45);
                $sel3 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                while($_SESSION["randomNumber3"] == $_SESSION["randomNumber1"] && $_SESSION["randomNumber3"] == $_SESSION["randomNumber2"] && $sel3[0]["Selected"] == 1){
                    $_SESSION["randomNumber3"] = rand(0,45);
                    $sel3 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                }
                $_SESSION["randomNumber4"] = rand(0,45);
                $sel4 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                while($_SESSION["randomNumber4"] == $_SESSION["randomNumber1"] && $_SESSION["randomNumber4"] == $_SESSION["randomNumber2"] && $_SESSION["randomNumber4"] == $_SESSION["randomNumber3"] && $sel4[0]["Selected"] == 1){
                    $_SESSION["randomNumber4"] = rand(0,45);
                    $sel4 = isSelected($con, $_SESSION['User'], $_SESSION["randomNumber2"] + 1);
                }
            }
            /// 0.18 ((0-5))
            /// 1.7 ((0-45))
            $numSelected = checkSelected($con, $_SESSION['User'], 71);
            /// 2.6 ((0-70))
            $numSelected = checkSelected($con, $_SESSION['User'], 91);
            /// 3.4 ((0-91))
            $numSelected = checkSelected($con, $_SESSION['User'], 106);
            /// 4.0 ((0-106))
            /* $_SESSION["randomNumber1"] = rand(0,106); */
        }

        if($_SESSION['question'] == 1){
            $_SESSION["starTime"] = time();
        }

        require './View/game.php';
    }