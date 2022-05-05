<?php
    function loadSyllabary($con, $gameType)
    {
        $sql = 'SELECT * FROM `syllabary` WHERE `Type` = "'.$gameType.'" ';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        return($consulta->fetchAll());
    }

    function loadAllSyllabary($con)
    {
        $sql = 'SELECT * FROM `syllabary` ';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        return($consulta->fetchAll());
    }

    function checkUseryllabary($con, $idUser)
    {
        $sql = 'SELECT COUNT(*) as nUsers FROM `learning` WHERE `idUser` = "'.$idUser.'" ';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        return($consulta->fetchAll());
    }

    function getUserSyllabary($con, $idUser)
    {
        $sql = 'SELECT * FROM `learning` WHERE `idUser` = "'.$idUser.'" ';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        return($consulta->fetchAll());
    }

    function saveSyllabary($con, $idUser, $idIdeogram, $level, $selected)
    {
        $sql = 'INSERT INTO `learning`(`idUser`, `idIdeogram`, `Level`, `Selected`) VALUES ("'.$idUser.'", "'.$idIdeogram.'","'.$level.'","'.$selected.'")';
        $consulta = $con->prepare($sql);
        $consulta->execute();
    }

    function updateLevel($con, $idUser, $level, $idIdeogram)
    {
        $sql = 'UPDATE `learning` SET `Level` = "'.$level.'" WHERE idIdeogram = "'.$idIdeogram.'" AND idUser = "'.$idUser.'"';
        $consulta = $con->prepare($sql);
        $consulta->execute();
    }

    function calculateAvgHiragana($con, $idUser)
    {
        $sql = 'SELECT AVG(`Level`) FROM `learning` WHERE `idUser` = "'.$idUser.'" AND `idIdeogram` < 108';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        return($consulta->fetchAll());
    }

    function calculateAvgKatakana($con, $idUser)
    {
        $sql = 'SELECT AVG(`Level`) FROM `learning` WHERE `idUser` = "'.$idUser.'" AND `idIdeogram` > 107';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        return($consulta->fetchAll());
    }

    function isSelected($con, $idUser, $idSyllabary)
    {
        $sql = 'SELECT `Selected` FROM `learning` WHERE `idUser` = "'.$idUser.'" AND `idIdeogram` = "'.$idSyllabary.'"';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        return($consulta->fetchAll());
    }

    function searchScore($con, $idUser, $idSyllabary)
    {
        $sql = 'SELECT `Level` FROM `learning` WHERE `idUser` = "'.$idUser.'" AND `idIdeogram` = "'.$idSyllabary.'"';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        return($consulta->fetchAll());
    }

    function checkSelected($con, $idUser, $idSyllabary)
    {
        $sql = 'SELECT COUNT(`Selected`) FROM `learning` WHERE `idUser` = "'.$idUser.'" AND `idIdeogram` <= "'.$idSyllabary.'" AND `Selected` = 1';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        return($consulta->fetchAll());
    }