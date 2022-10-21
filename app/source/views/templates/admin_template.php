<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style_admin.css">
    <title>Article store</title>
</head>
<body>
<header>
    <h1><a href="<?=\core\Route::url('admin','index')?>">Dashboard</a></h1>
</header>
<main>
    <?php include_once \core\View::VIEWS_DIR.'/pages/'.$page.'_page.php'?>
</main>
</body>
</html>
