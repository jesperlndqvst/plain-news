<?php

require __DIR__ . '/functions.php';

// Connects to database
$pdo = new PDO('sqlite:./database/data.db');

// Prepares and executes SQL statements
$usersStmt = $pdo->prepare("SELECT * FROM users");
$postsStmt = $pdo->prepare("SELECT * FROM posts");
$usersStmt->execute();
$postsStmt->execute();

// Get the reults as an array with column names as array keys
$users = $usersStmt->fetchAll(PDO::FETCH_ASSOC);
$posts = $postsStmt->fetchAll(PDO::FETCH_ASSOC);

// Sorts the articles by date
usort($posts, "sortFunction");


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
                            <p><?= getUser($post, $users) ?></p>
                            <p><?= $post['date'] ?></p>
                        </div>
                        <div class="likes">
                            <p><i class="fas fa-heart"></i> <?= $post['likes'] ?></p>
                        </div>
                    </div>
                </div>
            </article>

        <?php endforeach; ?>

    </div>

</body>

</html>
