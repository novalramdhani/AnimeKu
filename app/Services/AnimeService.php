<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class AnimeService
{
    public static function fetch($url)
    {
        return Http::get("https://api.jikan.moe/v4/{$url}");
    }
}
