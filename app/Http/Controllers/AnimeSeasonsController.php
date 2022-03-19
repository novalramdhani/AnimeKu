<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AnimeService;

class AnimeSeasonsController extends Controller
{
    public function seasons()
    {
        $upComingList = collect(AnimeService::fetch('seasons/upcoming')
                                ->json()['data'])
                                ->sortByDesc('popularity');

        $nowList = collect(AnimeService::fetch('seasons/now')
                                ->json()['data'])
                                ->sortByDesc('popularity');

        return view('anime.seasons', [
            'upComingList' => $upComingList,
            'nowList' => $nowList
        ]);
    }
}
