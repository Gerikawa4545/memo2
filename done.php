<?php

require_once __DIR__ . '/mysqli.php';

function listMemos($link)
{
    $memos = [];
    $sql = 'SELECT name, belongs, feature, FROM memo;';
    $results = mysqli_query($link, $sql);

    while ($memo = mysqli_fetch_assoc($results)) {
        $memos[] = $memo;
    }

    mysqli_free_result($results);

    return $memos;
}

$link = dbConnect();
$memos = listMemos($link);

$title = 'メモの一覧';
$content = __DIR__ . '/done2.php';
include __DIR__ . '/layout.php';
