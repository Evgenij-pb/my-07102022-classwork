<h2>
    All articles
</h2>

<?php if (!empty($articles)): ?>
<?php foreach ($articles as $article): ?>

<div class="article-conteiner">
    <div class="article-title">
        <?= $article['title'] ?>
    </div>
    <div class="article-text">
        <?= mb_strimwidth($article['text'],0,250,"...") ?>
    </div>
    <div class="article-footer">
            <a href="<?=\core\Route::url('index','article').'/'.$article['id']?>">
                <button >Открыть</button>
            </a>
    </div>
</div>
    <?php endforeach; ?>
<?php endif; ?>

