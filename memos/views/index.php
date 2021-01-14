<?php
?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<title>メモの一覧ページ</title>
</head>

<body>
<h1>メモの一覧</h1>
</body>
</html>

<a href="new.php">メモを登録する</a>
    <main>
        <?php foreach ($memos as $memo) : ?>
            <section>
                <h2>
                    <?php echo $memo['name']; ?>
                </h2>
                <div>
                    所属：<?php echo $memo['belongs']; ?>&nbsp;|&nbsp;特徴：<?php echo $memo['feature']; ?>
                </div>
            </section>
        <?php endforeach; ?>
    </main>
