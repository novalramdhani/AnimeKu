<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Services\AnimeService;

class SearchDropdown extends Component
{
    public $search = '';

    public function render(AnimeService $anime)
    {
        $searchResults = [];

        if (Str::length($this->search) >= 2) {
            $searchResults = $anime->fetch("anime?q={$this->search}")->json()['data'];
        }

        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(7)
        ]);
    }
}
