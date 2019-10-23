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

function sortFunction(array $a, array $b) : int {
    return strtotime($b["date"]) - strtotime($a["date"]);
}
usort($posts, "sortFunction");

