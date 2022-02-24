<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AnimeService;

class AnimeCharactersController extends Controller
{
    public function __construct(public AnimeService $anime)
    {
        $this->anime = $anime;
    }

    public function characters()
    {
        $characters = collect($this->anime->fetch('characters')
                    ->json()['data']);

        return view('anime.characters', [
            'characters' => $characters
        ]);
    }
}
