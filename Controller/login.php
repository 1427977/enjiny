<?php
    if($_POST == NULL)
    {
        require_once('./View/login.php');
    }
    else
    {
        require './Model/connectDB.php';
        $con = connectDB();

        $correu = $_POST["Correu"];
        $contrasenya = $_POST["Contrasenya"];
        $contrasenyaHash =0;

        require_once ('./Model/user.php');
        $numCorreos = numMail($con, $correu);


        if ($numCorreos != null){
            $contrasenyaBD = getPass($con, $correu);
            $hash = $contrasenyaBD[0][0];
            $contrasenyaHash =  password_verify ($contrasenya , $hash);
        }

        if($contrasenyaHash){
            $idUsuari = getId($con, $correu);
            $_SESSION['User'] = $idUsuari[0]['ID'];
            header('Refresh: 1; URL=index.php');
        }
        else
        {
            $_SESSION['errMsg'] = "El correo o contraseña no son válidos";
            require_once('./View/login.php');
        }
    }