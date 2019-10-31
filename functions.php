<?php

declare(strict_types=1);

/**
 * Converts date strings to a new format.
 *
 * @param string $date
 *
 * @return string
 */

 function formatDate(string $date) : string {
    $dateCreate = date_create($date);
    return date_format($dateCreate, 'l jS F Y');
 }
