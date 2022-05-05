<?php
    if($_POST == NULL)
    {
        require_once('./View/register.php');
    }else{
        require './Model/connectDB.php';
        $con = connectDB();

        $nom = $_POST["Nom"];
        $correu = $_POST["Correu"];
        $Naixement = $_POST["Naixement"];
        $contrasenya = $_POST["Contrasenya"];
        $contrasenyaHash =  password_hash($contrasenya, PASSWORD_DEFAULT);
        $error = 0;

        if(!filter_var($correu, FILTER_VALIDATE_EMAIL)) {
            $error = 1;
        }else{
            require_once ('./Model/user.php');
            $valid = validateMail($con,$correu);
            if ($valid > 0 && $valid != NULL) {
                $error = 1;
            }
        }

        if($error == 0){
            require_once ('./Model/user.php');
            insertUser($con,$nom,$contrasenyaHash,$correu,$Naixement);
            $_SESSION['errMsg'] = "Registre completat";


            /* guardar sillabari*/
            require './Model/game.php';
            $syllabary2 = loadSyllabary($con, $_SESSION['gameSyllabary']);
            $syllabary = loadAllSyllabary($con);

            //print_r($syllabary);
            $check = checkUseryllabary($con, $_SESSION['User']);
            if($check[0][0] == 0){
                foreach ($syllabary as $ideogram):
                    if($ideogram[5] < 2){
                        saveSyllabary($con, $_SESSION['User'], $ideogram[0], 0, 1);
                    }else{
                        saveSyllabary($con, $_SESSION['User'], $ideogram[0], 0, 0);
                    }
                endforeach;
            }

            header('Refresh: 1; URL=index.php');
        }else{
            if($error == 1) {
                $_SESSION['errMsg'] = "El correu no és vàlid o està en ús.";
            }
            require_once('./View/register.php');
        }

    }