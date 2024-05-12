<?php

$host   = 'localhost';
$user   = 'root';
$pass   = 'root';
$db     = 'toyota';

// $host   = 'localhost';
// $user   = 'youthpre_db';
// $pass   = 'Mantap332211';
// $db     = 'youthpre_db';


$con    = mysqli_connect($host, $user, $pass, $db) or die("ERROR");

    // if ($con){
    //     echo "ada koneksi ke database";
    // }
