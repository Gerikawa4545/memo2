<h1 class="h2 text-dark mt-4 mb-4">メモの一覧</h1>

<a href="new.php" class="btn btn-primary mb-4">メモを登録する</a>
<main>
    <?php if (count($memos) > 0) : ?>
        <?php foreach ($memos as $memo) : ?>
            <section class="card shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="card-title h4 mb-3">
                        <?php echo escape($memo['name']); ?>
                    </h2>
                    <div>
                        所属：<?php echo escape($memo['belongs']); ?>&nbsp;|&nbsp;特徴：<?php echo nl2br(escape($memo['feature']), false) ?>
                    </div>
                </div>
            </section>
        <?php endforeach; ?>
    <?php else : ?>
        <p>メモが登録されていません</p>
    <?php endif; ?>
</main>
