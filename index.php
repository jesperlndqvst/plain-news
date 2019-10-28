<?php

require __DIR__ . '/functions.php';

// Connects to database
$databaseFile = __DIR__ .'/database/data.db';
$pdo = new PDO("sqlite:$databaseFile");

// Makes a query and converts it to an array
$postsQuery = $pdo->query('SELECT * FROM posts LEFT JOIN users ON posts.authorId = users.id ORDER BY date DESC');
$posts = $postsQuery->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4d50ed984c.js" crossorigin="anonymous"></script>
    <title>Plain News</title>
</head>

<body>

    <div class="container">

        <nav class="nav-bar">Plain News <i class="far fa-newspaper"></i></nav>

        <?php foreach ($posts as $post) : ?>

            <article class="article">
                <div class="article-img">
                    <img src="/img/<?= $post['image'] ?>" alt="article-image" loading="lazy">
                </div>
                <div class="article-text">
                    <h2 class="article-heading"><?= $post['title'] ?></h2>
                    <p><?= $post['content'] ?></p>
                    <div class="article-info">
                        <div class="written-by">
                            <p><?= $post['name'] ?></p>
                            <p><?= $post['date'] ?></p>
                        </div>
                        <div class="likes">
                            <p><i class="fas fa-heart"></i> <?= getRandomNumber() ?></p>
                        </div>
                    </div>
                </div>
            </article>

        <?php endforeach; ?>

    </div>

</body>

</html>
