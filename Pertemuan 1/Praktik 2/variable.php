<?php

    /* 
        Variable Sistem 
        Variable built in PHP (variable yang sudahada di php)

    */
    echo $_SERVER["DOCUMENT_ROOT"];
    echo '<br>';

    /*
        Variable User
        Variable yang di buat oleh user
    */
    $name = 'Nico';
    $age = 18;
    $weight = 50.5;


    echo "Nama saya adalah $name";

    /*
        Variable konstan
        Variable yang tidak bisa diubah nilainya
        1. Menggunakan define | define('fruit', "Apel");
        2. Menggunakan const  | const fruit = "Apel";
    */
    echo '<br><br>';

    define("SITE_NAME", "Elena");
    echo SITE_NAME;
?>