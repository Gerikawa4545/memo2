<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>メモログ登録</title>
</head>

<body>
    <h1>メモログ</h1>
    <form action="create.php" method="POST">
        <?php if (count($errors)) : ?>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <div>
            <label for="title">名前</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="author">所属</label>
            <input type="text" name="author" id="author">
        </div>
        <div>
            <label for="feature">特徴</label>
            <textarea type="text" name="feature" id="feature" rows="10"></textarea>
        </div>

        <button type="submit">登録する</button>
    </form>
</body>

</html>
