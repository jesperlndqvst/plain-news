<?php

declare(strict_types=1);

function getAuthor(array $posts, array $authors): string
{
    foreach ($authors as $author) {
        if ($posts['authorId'] === $author['id']) {
            return $author['name'];
        }
    }
}

function sortFunction(array $date1, array $date2) : int {
    return strtotime($date2["date"]) - strtotime($date1["date"]);
}

usort($posts, "sortFunction");
