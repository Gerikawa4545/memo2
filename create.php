<?php

var_dump($_SERVER['REQUEST_METHOD']);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $memo = [
        'name' => $_POST['name'],
        'belongs' => $_POST['belongs'],
        'feature' => $_POST['feature']
    ];
    var_export($memo);

}
