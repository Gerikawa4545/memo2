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

//$ret = $pdo->createData('林瑠奈', '乃木坂46', '可愛すぎ');
?>
<html>
    <head>
        <meta charset="utf-8" lang="ja">
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="name"/>
            <input type="text" name="belongs"/>
            <input type="text" name="feature"/>
            <input type="submit" value="送信" />
        </form>
    </body>
</html>
