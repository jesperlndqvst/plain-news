<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Plain News</title>
</head>

<body>

    <article>

        <?php foreach ($posts as $post) : ?>

            <h1><?= $post['title'] ?></h1>
            <p><?= $post['content'] ?></p>
            <p><?= $post['author'] ?></p>
            <p><?= $post['date'] ?></p>

        <?php endforeach; ?>

    </article>

</body>

</html>
