<h2>Edit article</h2>
<form class="create-edit-form" action="<?= \core\Route::url('admin', 'modify') ?>" method="post">
    <?php if (!empty($article)): ?>

    <label for="title">Title:</label>
    <input type="text" name="title" required id="title" value="<?= $article[0]['title'] ?>">

    <label for="text">Text:</label>
    <textarea name="text" id="text" rows="15"><?= $article[0]['text'] ?></textarea>

    <input type="hidden" name="id" value="<?=$article[0]['id']?>">

    <div>
        <input class="submit" type="submit" value="Save">
    </div>

    <?php endif; ?>
</form>
