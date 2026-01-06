<?php

require_once 'app/Config.php';
require_once 'app/View.php';

?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="<?= Config::LOGO_FAVICON ?>">
    <title><?= Config::PAGE_TITLE ?></title>
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-KxQ4YV5C0RzyVxR+5xvI3+H6u3snD3mYx8y2hBv9S5TrJozvV3yWOBKh5GzvJzCw5Jb4Z1mS0m7KcA6rYbzwYg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Header -->
    <header class="bg-primary py-5 mb-4">
        <div class="container">
            <a href="?pg=home">
                <img src="<?= Config::LOGO_CLIENTE ?>" width="150px">
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <?php
    $contentParam = isset($_GET['pg']) ? $_GET['pg'] : '';
    View::get($contentParam);
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>