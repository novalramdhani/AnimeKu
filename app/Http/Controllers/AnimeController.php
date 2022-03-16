<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AnimeService;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function __construct(public AnimeService $anime)
    {
        $this->anime = $anime;
    }

    public function anime()
    {
        dd(collect($this->anime->fetch('anime')
                    ->json()));
    }

    public function index()
    {
        $upComing = collect($this->anime->fetch('seasons/upcoming')
                                ->json()['data'])
                                ->take(5)
                                ->sortByDesc('popularity');

        $recommendations = collect($this->anime->fetch('recommendations/anime')
                                ->json()['data']);

        return view('anime.index', [
            'upComing' => $upComing,
            'recommendations' => $recommendations
        ]);
    }

    public function show($id)
    {
        $anime = collect($this->anime->fetch("anime/{$id}")->json()['data']);
        $characters = collect($this->anime->fetch("anime/{$id}/characters")->json()['data']);
        $peoples = collect($this->anime->fetch("anime/{$id}/staff")->json()['data']);

        return view('anime.show', [
            'anime' => $anime,
            'characters' => $characters,
            'peoples' => $peoples
        ]);
    }
}
