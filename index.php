<?php

$action = "";
if(isset($_GET['accio'])) {$action=$_GET['accio'];}

session_start();

$question = 0;
$questionTime = 10;
$questionNum = 20;
$time = 120;
$points = 0;
$gameSyllabary = 0;
$gameType = 0;
$gameMode = 0;
$game = 0;

switch($action) {
    case 'syllabary':
        include __DIR__.'/resourceSyllabary.php';
        break;

    case 'mode':
        include __DIR__.'/resourceMode.php';
        break;

    case 'type':
        include __DIR__.'/resourceType.php';
        break;

    case 'custom':
        include __DIR__.'/resourceCustom.php';
        break;

    case 'game':
        include __DIR__.'/resourceGame.php';
        break;

    case 'ranking':
        include __DIR__.'/resourceRanking.php';
        break;

    case 'register':
        include __DIR__.'/resourceRegister.php';
        break;

    case 'login':
        include __DIR__.'/resourceLogin.php';
        break;

    default:
        include __DIR__. '/resourceCover.php';
        break;
}