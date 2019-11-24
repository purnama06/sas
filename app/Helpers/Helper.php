<?php

use App\University;

function urlHasPrefix(string $prefix) {
    $url = url()->current();
    if (strpos($url, $prefix) > 0) {
        return true;
    }

    return false;
}

function listUniversities()
{
    return University::all();
}