<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class AnimeSeasonsController extends Controller
{
    public function seasons()
    {
        $upComingList = collect(Http::jika()->get('seasons/upcoming')
                                ->json()['data'])
                                ->sortByDesc('popularity');

        $nowList = collect(Http::jikan()->get('seasons/now')
                                ->json()['data'])
                                ->sortByDesc('popularity');

        return view('anime.seasons', [
            'upComingList' => $upComingList,
            'nowList' => $nowList
        ]);
    }
}
