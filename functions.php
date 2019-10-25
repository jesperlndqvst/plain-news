<?php

declare(strict_types=1);

/**
 * Links the post id and author id togheter and returns the author name.
 *
 * @param array $posts
 * @param array $authors
 *
 * @return string
 */

function getAuthor(array $posts, array $authors): string
{
    foreach ($authors as $author) {
        if ($posts['authorId'] === $author['id']) {
            return $author['name'];
        }
    }
}

/**
 * Converets an array of strings to integers and sorts them in order from which date comes first.
 *
 * @param array $first
 * @param array $second
 *
 * @return string
 */

function sortFunction(array $first, array $second) : int {
    return strtotime($second["date"]) - strtotime($first["date"]);
}

