<?php if (!empty($article)): ?>

    <div class="article-title">
        <?= $article[0]['title'] ?>
    </div>
    <div class="article-text">
        <?= $article[0]['text'] ?>
    </div>


<?php else: ?>

    <h2>no such article</h2>

<?php endif; ?>

