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

    public function index()
    {
        $upComing = collect($this->anime->fetch('seasons/upcoming')
                                ->json()['data'])->take(10);

        $recommendations = collect($this->anime->fetch('recommendations/anime')
                                ->json()['data']);

        return view('index', [
            'upComing' => $upComing,
            'recommendations' => $recommendations
        ]);
    }

    public function show($id)
    {
        $anime = collect($this->anime->fetch("anime/{$id}")->json()['data']);

        return view('show', ['anime' => $anime]);
    }
}
