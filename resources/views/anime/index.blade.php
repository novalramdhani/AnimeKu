<x-app-layout title="Ani Cast - Anime Shows">
    <div class="container px-4 pt-16">
        <div class="upcoming-anime">
            <h1 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Up Coming Anime</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($upComing as $anime)
                    <div class="mt-8">
                        <a href="{{ route('anime.show', $anime['mal_id']) }}"><img src="{{ $anime['images']['jpg']['image_url'] }}" class="hover:opacity-75 transition case-in-out duration-150 h-80 w-80" alt="Poster"></a>
                        <div class="mt-2">
                            <a href="{{ route('anime.show', $anime['mal_id']) }}" class="text-lg mt-2 text-white hover:text-gray-300">{{ $anime['title'] }}</a>
                            <div class="flex items-center text-gray-300 text-sm mt-1">
                                <span>
                                    <svg class="fill-current text-yellow-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                                </span>
                                <span class="ml-1">{{ isset($anime['year']) ? $anime['year'] : 'Unknown' }}</span>
                                <span class="mx-2">|</span>
                                <span>{{ $anime['status'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="recommendations-anime py-24">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Recommendations Anime</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($recommendations as $recommendation)
                    <div class="mt-8">
                        <a href="{{ route('anime.show', $recommendation['entry'][0]['mal_id']) }}">
                            <img src="{{ $recommendation['entry'][0]['images']['jpg']['image_url'] }}" alt="example" class="hover:opacity-75 transition case-in-out duration-150 h-80 w-80">
                        </a>
                        <div class="mt-2">
                            <a href="{{ route('anime.show', $recommendation['entry'][0]['mal_id']) }}" class="text-lg mt-2 text-white hover:text-gray-300">{{ $recommendation['entry'][0]['title'] }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
