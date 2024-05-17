<?php

$host   = 'localhost';
$user   = 'root';
$pass   = 'root';
$db     = 'toyota';

// $host   = 'localhost';
// $user   = 'jxoyhngo_db';
// $pass   = 'Toyota123@';
// $db     = 'jxoyhngo_db';


$con    = mysqli_connect($host, $user, $pass, $db) or die("ERROR");

    // if ($con){
    //     echo "ada koneksi ke database";
    // }
