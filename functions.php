<?php

declare(strict_types=1);

/**
 * Links the post id and user id togheter and returns the user name.
 *
 * @param array $posts
 * @param array $users
 *
 * @return string
 */

function getUser(array $posts, array $users)
{
    foreach ($users as $user) {
        if ($posts['authorId'] === $user['id']) {
            return $user['name'];
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

