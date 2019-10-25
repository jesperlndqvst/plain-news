<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';
usort($posts, "sortFunction");




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

    <div class="container">

        <nav>Plain News</nav>

        <?php foreach ($posts as $post) : ?>

            <article>

                <div class="text">

                    <h2><?= $post['title'] ?></h2>
                    <p><?= file_get_contents($post['content']) ?></p>
                    <p><?= getAuthor($post, $authors) ?></p>
                    <p><?= $post['date'] ?></p>
                    <div class="likes">
                        <p>Likes: <?= $post['likes'] ?></p>
                        <img src="./img/like.svg" class="like-img" alt="like" loading="lazy">
                    </div>
                </div>
                <div class="article-img">
                    <img src="/img/<?= $post['image'] ?>" alt="article-image" loading="lazy">
                </div>

            </article>

        <?php endforeach; ?>

    </div>

</body>

</html>
