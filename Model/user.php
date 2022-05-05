<?php
    function insertUser($con,$nom,$contrasenya,$correu,$naixement)
    {
        $sql = "INSERT INTO `user`(`ID`, `Username`, `Email`, `Password`, `BirthDate`)
                VALUES (NULL, :nom, :correu, :contrasenya, :naixement) ";

        $stmt = $con->prepare($sql);
        $stmt->bindParam(":nom", $nom, PDO::PARAM_STR);
        $stmt->bindParam(":correu", $correu, PDO::PARAM_STR);
        $stmt->bindParam(":contrasenya", $contrasenya, PDO::PARAM_STR);
        $stmt->bindParam(":naixement", $naixement, PDO::PARAM_STR);
        $stmt->execute();
    }

    function validateMail($con, $correu){

        $sql = 'SELECT COUNT(*) as nCorreus FROM `user` WHERE Email = "'.$correu.'" GROUP BY Username';

        $consult = $con->prepare($sql);
        $consult->execute();
        $valid = $consult->fetchAll();
        return $valid;
    }

    function numMail($con, $correu)
    {
        $sql = 'SELECT COUNT(*) as nUsers FROM `user` WHERE Email = "'.$correu.'" GROUP BY Username';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        return( $consulta->fetchAll());
    }

    function getPass($con, $correu)
    {
        $sql = 'SELECT `Password` FROM `user` WHERE `Email` = "'.$correu.'" ';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        return($consulta->fetchAll());
    }

    function getId($con, $correu)
    {
        $sql = 'SELECT `ID` FROM `user` WHERE `Email` = "'.$correu.'" ';
        $consulta = $con->prepare($sql);
        $consulta->execute();
        return($consulta->fetchAll());
    }