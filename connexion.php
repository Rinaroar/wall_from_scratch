<?php

function connectToBdd() {
    $hostbdd = 'localhost';
    $bddname = 'wall';
    $unamebdd = 'root';
    $pwdbdd = 'root';

    $bdd = new PDO("mysql:host=$hostbdd;dbname=$bddname;charset=utf8",
    "$unamebdd", "$pwdbdd", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    return $bdd;
}