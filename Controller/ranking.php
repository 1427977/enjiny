<?php

    require './Model/connectDB.php';
    $con = connectDB();

    require './Model/ranking.php';
    $localRanking = loadLocalRanking($con, $_SESSION['User'], $_SESSION['gameMode'], $_SESSION['gameType'], $_SESSION['gameSyllabary']);
    //$numRanking = checkRanking($con, $_SESSION['User'], $_SESSION['gameMode'], $_SESSION['gameType'], $_SESSION['gameSyllabary']);

    // LOCAL RANKING CALCULATION
    $localRankingPoints = array();
    foreach ($localRanking as $localPosition) {
        $localRankingPoints[] = $localPosition[3];
    }
    $localRankingSize = sizeof($localRankingPoints);

    // GLOBAL RANKING CALCULATION
    $globalRanking = loadGlobalRanking($con, $_SESSION['gameMode'], $_SESSION['gameType'], $_SESSION['gameSyllabary']);
    $userName = array();
    foreach ($globalRanking as $globalPosition) {
        $userName[] = findUserRanking($con,$globalPosition[0])[0][0];
    }
    $GlobalRankingSize = sizeof($userName);

    require './View/ranking.php';