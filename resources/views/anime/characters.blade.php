<x-app-layout title="Ani Cast - Anime Characters">
    <div class="container px-4 pt-16">
        <div class="characters-anime">
            <h1 class="uppercase tracking-wider text-purple-600 text-lg font-semibold">Characters Anime</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($characters as $character)
                    <div class="characters mt-8">
                        <a href="{{ route('anime.show', $character['mal_id']) }}"><img src="{{ $character['images']['jpg']['image_url'] }}" class="hover:opacity-75 transition case-in-out duration-150 h-80 w-80" alt="Poster"></a>
                        <div class="mt-2">
                            <a href="{{ route('anime.show', $character['mal_id']) }}" class="text-lg mt-2 text-white hover:text-gray-300">{{ $character['name'] }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
