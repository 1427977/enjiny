<?php

    require './Model/connectDB.php';
    $con = connectDB();

    require './Model/ranking.php';


        $localRankingClas = loadLocalRanking($con, $_SESSION['User'], "Classic", "EleccioJP", $_SESSION["viewRanking"]);
        $localRankingClas2 = loadLocalRanking($con, $_SESSION['User'], "Classic", "EleccioRM", $_SESSION["viewRanking"]);
        $localRankingClas3 = loadLocalRanking($con, $_SESSION['User'], "Classic", "TeclatJP", $_SESSION["viewRanking"]);
        $localRankingClas4 = loadLocalRanking($con, $_SESSION['User'], "Classic", "TeclatRM", $_SESSION["viewRanking"]);
        $globalRankingClas = loadGlobalRanking($con, "Classic", "EleccioJP", $_SESSION["viewRanking"]);
        $globalRankingClas2 = loadGlobalRanking($con, "Classic", "EleccioRM", $_SESSION["viewRanking"]);
        $globalRankingClas3 = loadGlobalRanking($con, "Classic", "TeclatJP", $_SESSION["viewRanking"]);
        $globalRankingClas4 = loadGlobalRanking($con, "Classic", "TeclatRM", $_SESSION["viewRanking"]);

        $localRankingTemps = loadLocalRanking($con, $_SESSION['User'], "Temps", "EleccioJP", $_SESSION["viewRanking"]);
        $localRankingTemps2 = loadLocalRanking($con, $_SESSION['User'], "Temps", "EleccioRM", $_SESSION["viewRanking"]);
        $localRankingTemps3 = loadLocalRanking($con, $_SESSION['User'], "Temps", "TeclatJP", $_SESSION["viewRanking"]);
        $localRankingTemps4 = loadLocalRanking($con, $_SESSION['User'], "Temps", "TeclatRM", $_SESSION["viewRanking"]);
        $globalRankingTemps = loadGlobalRanking($con, "Temps", "EleccioJP", $_SESSION["viewRanking"]);
        $globalRankingTemps2 = loadGlobalRanking($con, "Temps", "EleccioRM", $_SESSION["viewRanking"]);
        $globalRankingTemps3 = loadGlobalRanking($con, "Temps", "TeclatJP", $_SESSION["viewRanking"]);
        $globalRankingTemps4 = loadGlobalRanking($con, "Temps", "TeclatRM", $_SESSION["viewRanking"]);

        $localRankingPunts = loadLocalRanking($con, $_SESSION['User'], "Punts", "EleccioJP", $_SESSION["viewRanking"]);
        $localRankingPunts2 = loadLocalRanking($con, $_SESSION['User'], "Punts", "EleccioRM", $_SESSION["viewRanking"]);
        $localRankingPunts3 = loadLocalRanking($con, $_SESSION['User'], "Punts", "TeclatJP", $_SESSION["viewRanking"]);
        $localRankingPunts4 = loadLocalRanking($con, $_SESSION['User'], "Punts", "TeclatRM", $_SESSION["viewRanking"]);
        $globalRankingPunt = loadGlobalRanking($con, "Punts", "EleccioJP", $_SESSION["viewRanking"]);
        $globalRankingPunts2 = loadGlobalRanking($con, "Punts", "EleccioRM", $_SESSION["viewRanking"]);
        $globalRankingPunts3 = loadGlobalRanking($con, "Punts", "TeclatJP", $_SESSION["viewRanking"]);
        $globalRankingPunts4 = loadGlobalRanking($con, "Punts", "TeclatRM", $_SESSION["viewRanking"]);

        $localRankingPerso = loadLocalRanking($con, $_SESSION['User'], "Personalitzat", "EleccioJP", $_SESSION["viewRanking"]);
        $localRankingPerso2 = loadLocalRanking($con, $_SESSION['User'], "Personalitzat", "EleccioRM", $_SESSION["viewRanking"]);
        $localRankingPerso3 = loadLocalRanking($con, $_SESSION['User'], "Personalitzat", "TeclatJP", $_SESSION["viewRanking"]);
        $localRankingPerso4 = loadLocalRanking($con, $_SESSION['User'], "Personalitzat", "TeclatRM", $_SESSION["viewRanking"]);
        $globalRankingPerso = loadGlobalRanking($con, "Personalitzat", "EleccioJP", $_SESSION["viewRanking"]);
        $globalRankingPerso2 = loadGlobalRanking($con, "Personalitzat", "EleccioRM", $_SESSION["viewRanking"]);
        $globalRankingPerso3 = loadGlobalRanking($con, "Personalitzat", "TeclatJP", $_SESSION["viewRanking"]);
        $globalRankingPerso4 = loadGlobalRanking($con, "Personalitzat", "TeclatRM", $_SESSION["viewRanking"]);


    /*

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
    */
    require './View/profileRanking.php';