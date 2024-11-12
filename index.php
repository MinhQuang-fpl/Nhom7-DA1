<?php


require_once "commons/functions.php";
require_once "commons/env.php";
require_once "controllers/homecontrollers.php";
$ctl = $_GET['home'] ?? '';
switch ($ctl) {
    case '':
    
        break;
//ket noi
   
    default:

        echo "404 file not found";




}