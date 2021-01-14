<?php

$memo = [
    'name' => '',
    'belongs' => '',
    'feature' => ''
];
$errors = [];

$title = 'メモの作成';
$content = __DIR__ . "/views/new.php";
include __DIR__ . '/views/layout.php';
