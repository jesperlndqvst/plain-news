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
 * @param array $date1
 * @param array $date2
 *
 * @return string
 */

function sortFunction(array $date1, array $date2) : int {
    return strtotime($date2["date"]) - strtotime($date1["date"]);
}


