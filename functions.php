<?php

declare(strict_types=1);

require __DIR__.'/data.php';

function getAuthor(array $posts, array $authors): string
{
    foreach ($authors as $author) {
        if ($posts['authorId'] === $author['id']) {
            return $author['name'];
        }
    }
}
