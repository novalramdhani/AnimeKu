<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function index()
    {
        $upComing = collect(Http::jikan()->get('seasons/upcoming')
                                ->json()['data'])
                                ->take(5)
                                ->sortByDesc('popularity');

        $recommendations = collect(Http::jikan()->get('recommendations/anime')
                                ->json()['data']);

        return view('anime.index', [
            'upComing' => $upComing,
            'recommendations' => $recommendations,
        ]);
    }

    public function show($id)
    {
        $anime = collect(Http::jikan()->get("anime/{$id}")->json()['data']);
        $characters = collect(Http::jikan()->get("anime/{$id}/characters")->json()['data']);
        $peoples = collect(Http::jikan()->get("anime/{$id}/staff")->json()['data']);

        return view('anime.show', [
            'anime' => $anime,
            'characters' => $characters,
            'peoples' => $peoples
        ]);
    }
}
