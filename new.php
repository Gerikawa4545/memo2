<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>メモログ登録</title>
</head>

<body>
    <h1>メモ作成</h1>
    <form action="create.php" method="POST">
        <?php if (count($errors)) : ?>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <div>
            <label for="name">名前</label>
            <input type="text" name="name" id="name" 　value="<?php echo $memo['name'] ?>">
        </div>
        <div>
            <label for="belongs">所属</label>
            <input type="text" name="belongs" id="belongs" value="<?php echo $memo['belongs'] ?>">
        </div>
        <div>
            <label for="feature">特徴</label>
            <textarea type="text" name="feature" id="feature" rows="10"><?php echo $memo['feature'] ?></textarea>
        </div>

        <button type="submit">登録する</button>
    </form>
</body>

</html>
