<h2>All articles</h2>
<a  href="<?= \core\Route::url('admin', 'create') ?>">
    <button id="create-btn">
        <img class="icons" src="/img/add_icon.png" alt="create">Create article
    </button>
</a>
<table id="articles-table">
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
                    <td>
                        <div class="del-edit-btn-box">
                            <form action="<?=\core\Route::url('admin','destroy')?>" method="post">
                                <input type="hidden" name="id" value="<?=$article['id']?>">
                                <button><img class="icons" src="/img/delete_icon.png" alt="delete"></button>
                            </form>
                            <form action="<?=\core\Route::url('admin','edit')?>" method="post">
                                <input type="hidden" name="id" value="<?=$article['id']?>">
                                <button><img class="icons" src="/img/edit_icon.png" alt="edit"></button>
                            </form>
                        </div>



                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>

