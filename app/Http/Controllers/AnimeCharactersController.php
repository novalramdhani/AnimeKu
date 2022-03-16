<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AnimeService;

class AnimeCharactersController extends Controller
{
    public $page;

    public function __construct(public AnimeService $anime)
    {
        $this->anime = $anime;
    }

    public function characters($page = 1)
    {
        abort_if($page > 2337, 204);

        $characters = collect($this->anime->fetch("characters?page=$page")
                    ->json()['data']);

        return view('anime.characters', [
            'characters' => $characters,
            'previous' => $this->previous(),
            'next' => $this->next()
        ]);
    }

    public function previous()
    {
        return $this->page > 1 ? $this->page - 1 : null;
    }

    public function next()
    {
        return $this->page < 2337 ? $this->page + 1 : null;
    }
}
