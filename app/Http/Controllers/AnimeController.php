<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AnimeService;

class AnimeController extends Controller
{
    public function index()
    {
        $upComing = collect(AnimeService::fetch('seasons/upcoming')
                                ->json()['data'])
                                ->take(5)
                                ->sortByDesc('popularity');

        $recommendations = collect(AnimeService::fetch('recommendations/anime')
                                ->json()['data']);

        return view('anime.index', [
            'upComing' => $upComing,
            'recommendations' => $recommendations,
        ]);
    }

    public function show($id)
    {
        $anime = collect(AnimeService::fetch("anime/{$id}")->json()['data']);
        $characters = collect(AnimeService::fetch("anime/{$id}/characters")->json()['data']);
        $peoples = collect(AnimeService::fetch("anime/{$id}/staff")->json()['data']);

        return view('anime.show', [
            'anime' => $anime,
            'characters' => $characters,
            'peoples' => $peoples
        ]);
    }
}
