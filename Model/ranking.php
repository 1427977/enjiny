<?php
    function loadRanking($con, $idUser)
    {
        $sql = 'SELECT * FROM `localRanking` WHERE `idUser` = "'.$idUser.'" ';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        return($consulta->fetchAll());
    }

    function loadLocalRanking($con, $idUser, $gameMode, $gameType, $gameSyllabary)
    {
        $sql = 'SELECT * FROM `localRanking` WHERE `idUser` = "'.$idUser.'" AND `Gamemode` = "'.$gameMode.'" AND `Gametype` = "'.$gameType.'" AND `Syllabary` = "'.$gameSyllabary.'" ORDER BY `Score` DESC LIMIT 10';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        return($consulta->fetchAll());
    }

    function loadGlobalRanking($con, $gameMode, $gameType, $gameSyllabary)
    {
        $sql = 'SELECT * FROM `localranking` WHERE `Gamemode` = "'.$gameMode.'" AND `Gametype` = "'.$gameType.'" AND `Syllabary` = "'.$gameSyllabary.'" ORDER BY `Score` DESC LIMIT 10';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        return($consulta->fetchAll());
    }

    function checkRanking($con, $idUser, $gameMode, $gameType, $gameSyllabary)
    {
        $sql = 'SELECT COUNT(*) as nUsers FROM `localRanking` WHERE `idUser` = "'.$idUser.'" AND `Gamemode` = "'.$gameMode.'" AND `Gametype` = "'.$gameType.'" AND `Syllabary` = "'.$gameSyllabary.'" ';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        return($consulta->fetchAll());
    }

    function insertRanking($con, $idUser, $points, $time, $gameMode, $gameType, $gameSyllabary)
    {
        $sql = 'INSERT INTO `localRanking`(`idUser`, `Gamemode`, `Gametype`, `Syllabary`,`Score`, `Time`) VALUES ("'.$idUser.'", "'.$gameMode.'", "'.$gameType.'", "'.$gameSyllabary.'", "'.$points.'","'.$time.'")';
        $consulta = $con->prepare($sql);
        $consulta->execute();
    }

    function minRanking($con, $idUser, $gameMode, $gameType, $gameSyllabary)
    {
        $sql = 'SELECT MIN(`Score`) FROM `localRanking` WHERE `idUser` = "'.$idUser.'" AND `Gamemode` = "'.$gameMode.'" AND `Gametype` = "'.$gameType.'" AND `Syllabary` = "'.$gameSyllabary.'" ';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        return($consulta->fetchAll());
    }

    function maxTime($con, $idUser, $gameMode, $gameType, $gameSyllabary, $score)
    {
        $sql = 'SELECT MIN(`Time`) FROM `localRanking` WHERE `idUser` = "'.$idUser.'" AND `Gamemode` = "'.$gameMode.'" AND `Gametype` = "'.$gameType.'" AND `Syllabary` = "'.$gameSyllabary.'" AND `Score` = "'.$score.'"';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        return($consulta->fetchAll());
    }

    function deleteRanking($con, $idUser, $points, $gameMode, $gameType, $gameSyllabary, $time)
    {
        $sql = 'DELETE FROM `localRanking` WHERE `idUser` = "'.$idUser.'" AND `Score` = "'.$points.'" AND `Gamemode` = "'.$gameMode.'" AND `Gametype` = "'.$gameType.'" AND `Syllabary` = "'.$gameSyllabary.'" AND `Time` = "'.$time.'"';
        $consulta = $con->prepare($sql);
        $consulta->execute();
    }

    function findUserRanking($con, $idUser){
        $sql = 'SELECT `Username` FROM `User` WHERE `ID` = "'.$idUser.'" ';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        return($consulta->fetchAll());
    }