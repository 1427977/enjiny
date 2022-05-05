<?php
function connectDB()
{
    $con = new PDO(
        'mysql:host=127.0.0.1; dbname=enjiny;port=3306; charset:utf8mb4',
        'root',
        ''
    );
    return ($con);
}

function hiragana($con){
    $sql = 'SELECT * FROM `syllabary`' ;

    $stmt = $con->prepare($sql);
    $stmt->execute();
    $Hiragana = $stmt->fetchAll();



    return ($Hiragana);
}