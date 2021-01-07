<?php
$dsn      = 'mysql:host=localhost;dbname=memoProjects;port=8889';
$user     = 'mori';
$password = 'gerikawa0025';

try {
    $dbh = new PDO($dsn, $user, $password);

    foreach ($dbh->query('SELECT * FROM memo') as $row) {
    }

    $dbh = null;
} catch (PDOException $e) {
    print("データベースの接続に失敗しました" . $e->getMessage());
    die();

    $sql = "INSERT INTO memo (
        name,
        belongs,
        feature
    ) VALUES ('$'
}

?>
<body>
    <h1>メモ作成</h1>
    <form action="create.php" method="post">
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
