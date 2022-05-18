<?php
    require './Model/connectDB.php';
    $con = connectDB();

    require './Model/user.php';
    $information = getUser($con, $_SESSION["User"]);

    require './View/profile.php';