<?php

function actionLangages($twig,$db){
    $langage = new Langage($db);
    $json = json_encode($liste = $langage->select());
    echo $json;
}

function actionDev($twig,$db){
    $dev = new Developpeur($db);
    $json = json_encode($liste = $dev->selectByEmail($_SESSION['login']));
    echo $json;
}
