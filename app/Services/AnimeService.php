<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class AnimeService
{
    public function fetch($url)
    {
        return Http::get("https://api.jikan.moe/v4/{$url}");
    }
}
