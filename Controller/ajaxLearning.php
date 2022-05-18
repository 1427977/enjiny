
<?php

    $con = new PDO(
        'mysql:host=127.0.0.1; dbname=enjiny;port=3306; charset:utf8mb4',
        'root',
        ''
    );

    if(isset($_POST["idUser"]) && isset($_POST["idSyllabary"])){

        $sql = 'SELECT `Selected` FROM `learning` WHERE `idUser` = ' .$_POST["idUser"] .' AND `idIdeogram` = "'.$_POST["idSyllabary"].'"';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        $selected = $consulta->fetchAll();

        if($selected[0][0] == 1) {
            $sql = 'UPDATE `learning` SET `Selected` = 0 WHERE idIdeogram = ' . $_POST["idSyllabary"] . ' AND idUser = ' . $_POST["idUser"] . ' ';
            $consulta = $con->prepare($sql);
            $consulta->execute();
        }
        if($selected[0][0] == 0) {
            $sql = 'UPDATE `learning` SET `Selected` = 1 WHERE idIdeogram = ' . $_POST["idSyllabary"] . ' AND idUser = ' . $_POST["idUser"] . ' ';
            $consulta = $con->prepare($sql);
            $consulta->execute();
        }
    }

    if(isset($_POST["subtype"])){
        ///// ALL
        if($_POST["subtype"] == "All" && $_POST["type"] == "Hiragana") {
            if($_POST["checked"] == 1) {
                $sql = 'UPDATE `learning` SET `Selected` = 0 WHERE idIdeogram <= 107 AND idUser = ' . $_POST["idUser"] . ' ';
                $consulta = $con->prepare($sql);
                $consulta->execute();
            }
            if($_POST["checked"] == 0) {
                $sql = 'UPDATE `learning` SET `Selected` = 1 WHERE idIdeogram <= 107 AND idUser = ' . $_POST["idUser"] . ' ';
                $consulta = $con->prepare($sql);
                $consulta->execute();
            }
        }
        ///// GOJUON
        if($_POST["subtype"] == "Gojuon" && $_POST["type"] == "Hiragana") {
            if($_POST["checked"] == 1) {
                $sql = 'UPDATE `learning` SET `Selected` = 0 WHERE idIdeogram <= 46 AND idUser = ' . $_POST["idUser"] . ' ';
                $consulta = $con->prepare($sql);
                $consulta->execute();
            }
            if($_POST["checked"] == 0) {
                $sql = 'UPDATE `learning` SET `Selected` = 1 WHERE idIdeogram <= 46 AND idUser = ' . $_POST["idUser"] . ' ';
                $consulta = $con->prepare($sql);
                $consulta->execute();
            }
        }
        ///// GOJUON (Han)dakouten
        if($_POST["subtype"] == "GojuonHan" && $_POST["type"] == "Hiragana") {
            if($_POST["checked"] == 1) {
                $sql = 'UPDATE `learning` SET `Selected` = 0 WHERE idIdeogram <= 71 AND idIdeogram >= 47 AND idUser = ' . $_POST["idUser"] . ' ';
                $consulta = $con->prepare($sql);
                $consulta->execute();
            }
            if($_POST["checked"] == 0) {
                $sql = 'UPDATE `learning` SET `Selected` = 1 WHERE idIdeogram <= 71 AND idIdeogram >= 47 AND idUser = ' . $_POST["idUser"] . ' ';
                $consulta = $con->prepare($sql);
                $consulta->execute();
            }
        }
        ///// YOON
        if($_POST["subtype"] == "Yoon" && $_POST["type"] == "Hiragana") {
            if($_POST["checked"] == 1) {
                $sql = 'UPDATE `learning` SET `Selected` = 0 WHERE idIdeogram <= 92 AND idIdeogram >= 72 AND idUser = ' . $_POST["idUser"] . ' ';
                $consulta = $con->prepare($sql);
                $consulta->execute();
            }
            if($_POST["checked"] == 0) {
                $sql = 'UPDATE `learning` SET `Selected` = 1 WHERE idIdeogram <= 92 AND idIdeogram >= 72 AND idUser = ' . $_POST["idUser"] . ' ';
                $consulta = $con->prepare($sql);
                $consulta->execute();
            }
        }
        ///// YOON (Han)dakouten
        if($_POST["subtype"] == "YoonHan" && $_POST["type"] == "Hiragana") {
            if($_POST["checked"] == 1) {
                $sql = 'UPDATE `learning` SET `Selected` = 0 WHERE idIdeogram <= 107 AND idIdeogram >= 93 AND idUser = ' . $_POST["idUser"] . ' ';
                $consulta = $con->prepare($sql);
                $consulta->execute();
            }
            if($_POST["checked"] == 0) {
                $sql = 'UPDATE `learning` SET `Selected` = 1 WHERE idIdeogram <= 107 AND idIdeogram >= 93 AND idUser = ' . $_POST["idUser"] . ' ';
                $consulta = $con->prepare($sql);
                $consulta->execute();
            }
        }
    }
