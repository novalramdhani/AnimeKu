<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AnimeService;

class AnimeSeasonsController extends Controller
{
    public function __construct(public AnimeService $anime)
    {
        $this->anime = $anime;
    }

    public function seasons()
    {
        $upComingList = collect($this->anime->fetch('seasons/upcoming')
                                ->json()['data'])
                                ->sortByDesc('popularity');

        $nowList = collect($this->anime->fetch('seasons/now')
                                ->json()['data'])
                                ->sortByDesc('popularity');

        return view('anime.seasons', [
            'upComingList' => $upComingList,
            'nowList' => $nowList
        ]);
    }
}
