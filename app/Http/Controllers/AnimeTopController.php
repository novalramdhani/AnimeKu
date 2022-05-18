<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class AnimeTopController extends Controller
{
    public function trendings()
    {
        $topAnime = collect(Http::jikan()->get('top/anime')
                            ->json()['data']);

        return view('anime.trendings', [
            'topAnime' => $topAnime
        ]);
    }
}
