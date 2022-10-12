<h2>Create article</h2>
<form action="<?= \core\Route::url('admin', 'store') ?>" method="post">
    <label for="title">title</label>
    <input type="text" name="title" required id="title">
    <label for="text">Text</label>

    <textarea name="text" id="text" ></textarea>
    <input type="submit" value="Create">
</form>
