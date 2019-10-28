<?php

declare(strict_types=1);

/**
 * Converts the format of a date string
 *
 * @return string
 */

 function formatDate(string $date) : string {
    $dateCreate = date_create($date);
    return date_format($dateCreate, 'l jS F Y');
 }
