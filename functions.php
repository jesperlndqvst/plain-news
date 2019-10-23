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



function orderByDate(array $posts): array
{

    foreach ($posts as $post) {
        $dateStrings[] = $post['date'];
    }

    function compareDates(string $date1, string $date2): int
    {
        if (strtotime($date1) < strtotime($date2))
            return 1;
        else if (strtotime($date1) > strtotime($date2))
            return -1;
        else
            return 0;
    }

    usort($dateStrings, "compareDates");

    return $dateStrings;
}
