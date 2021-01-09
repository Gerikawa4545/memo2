<?php

require_once __DIR__ . '/mysqli.php';
function createMemo($link, $memo){

    $sql = <<<EOT
INSERT INTO memo (
    name,
    belongs,
    feature
) VALUES (
    "{$memo['name']}",
    "{$memo['belongs']}",
    "{$memo['feature']}"
)
EOT;
    $result = mysqli_query($link, $sql);
    if (!$result) {
        error_log('Error: fail to create memo');
        error_log('Debugging Error: ' . mysqli_error($link));
    }
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $memo = [
        'name' => $_POST['name'],
        'belongs' => $_POST['belongs'],
        'feature' => $_POST['feature']
    ];

    $link = dbConnect();
    createMemo($link, $memo);
    mysqli_close($link);

}
