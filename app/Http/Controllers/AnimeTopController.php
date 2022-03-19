<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AnimeService;

class AnimeTopController extends Controller
{
    public function trendings()
    {
        $topAnime = collect(AnimeService::fetch('top/anime')
                            ->json()['data']);

        return view('anime.trendings', [
            'topAnime' => $topAnime
        ]);
    }
}
