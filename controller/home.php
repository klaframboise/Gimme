<?php
    include_once("model/mySQL_connection.php");
    include_once("model/getRdmWords.php");

    $rdmWords = getRdmWords(); //returns JSON
    //echo $rdmWords;

    include_once("view/home.php");
