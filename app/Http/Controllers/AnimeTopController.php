<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AnimeService;

class AnimeTopController extends Controller
{
    public function __construct(public AnimeService $anime)
    {
        $this->anime = $anime;
    }

    public function tops()
    {
        $topAnime = collect($this->anime->fetch('top/anime')
                            ->json()['data']);

        return view('anime.top', [
            'topAnime' => $topAnime
        ]);
    }
}
