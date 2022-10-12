<h2>All articles</h2>
<a href="<?= \core\Route::url('admin', 'create') ?>">create article</a>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        <?php if (!empty($articles)): ?>
            <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?= $article['id'] ?></td>
                    <td><?= $article['title'] ?></td>
                    <td><!--SDSD--></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>

