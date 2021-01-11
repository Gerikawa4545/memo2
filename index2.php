<?php
class MY_PDO extends PDO
{
    static $dsn = 'mysql:host=localhost;dbname=memoProjects;port=8889';
    static $user = 'mori';
    static $password = 'gerikawa0025';

    function __construct()
    {
        parent::__construct(MY_PDO::$dsn, MY_PDO::$user, MY_PDO::$password);
    }

    public function readAll()
    {
        $response = parent::prepare('SELECT * FROM memo');
        $response->execute();
        return $response;
    }

    public function createData($name, $belongs, $feature)
    {
        $response = parent::prepare("INSERT INTO memo (
    name,
    belongs,
    feature
) VALUES (
    '$name',
    '$belongs',
    '$feature'
)");


        return $response->execute();
    }
}

$pdo = new MY_PDO();

if (isset($_POST['name']) && isset($_POST['belongs']) && isset($_POST['feature'])) {
    $name = $_POST['name'];
    $belongs = $_POST['belongs'];
    $feature = $_POST['feature'];

    $pdo->createData($name, $belongs, $feature);
}

include 'new.php';

/*?>
<html>

<head>
    <meta charset="utf-8" lang="ja">
</head>

<body>
    <h1>メモ作成</h1>
    <form action="create.php" method="POST">
        <div>
            <label for="name">名前</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="belongs">所属</label>
            <input type="text" name="belongs" id="belongs">
        </div>
        <div>
            <label for="feature">特徴</label>
            <textarea type="text" name="feature" id="feature" rows="10"></textarea>
        </div>
        <input type="submit" name="btn_submit" value="登録する">
        <form>
</body>
