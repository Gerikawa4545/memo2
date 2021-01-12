<?php

function dbConnect()
{
    $host = 'localhost';
    $username = 'mori';
    $password = 'gerikawa0025';
    $dbname = 'memoProjects';

    $link = mysqli_connect($host, $username, $password, $dbname);
    if (!$link) {
        echo 'Error: データベースに接続できません' . PHP_EOL;
        echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    return $link;
}
