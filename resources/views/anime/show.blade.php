<x-app-layout title="Ani Cast - Detail Anime {{ $anime['title'] }}">
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{ $anime['images']['jpg']['image_url'] }}" alt="example" class="w-64 lg:w-96" style="width: 24rem">
            </div>
            <div class="md:ml-24 mt-3">
                <h2 class="text-4xl font-semibold">{{ $anime['title'] }}</h2>
                <h2 class="text-2xl mt-3 font-semibold">{{ $anime['title_japanese'] }}</h2>
                <h2 class="text-1xl mt-3 text-gray-300 font-semibold">{{ $anime['title_english'] }}</h2>
                <div class="flex items-center text-gray-400 text-sm mt-5">
                    <span><svg class="fill-current text-yellow-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                    </span>
                    <span class="ml-1">{{ isset($anime['score']) ? $anime['score'] . '%' : 'Unknown' }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ $anime['season'] }} {{ $anime['year'] }}</span>
                    <span class="mx-2">|</span>
                    <span>
                        @forelse ($anime['genres'] as $genre)
                            {{ $genre['name'] . ', ' }}
                        @empty
                            Unknown
                        @endforelse
                    </span>
                </div>

                <div class="mt-3">
                    <div class="flex text-sm text-gray-300 font-semibold mt-4">
                        <div class="mr-8">
                            <div>Type: {{ $anime['type'] }}</div>
                            <div class="mt-2">Source: {{ $anime['source'] }}</div>
                            <div class="mt-2">Status: {{ $anime['status'] }}</div>
                            <div class="mt-2">Episodes: {{ isset($anime['episodes']) ? $anime['episodes'] : 'Unknown' }}</div>
                            <div class="mt-2">Duration: {{ $anime['duration'] }}</div>
                            <div class="mt-2">Rating: {{ $anime['rating'] }}</div>
                            <div class="mt-2">Rank: {{ $anime['rank'] }}</div>
                            <div class="mt-2">Popularity: {{ $anime['popularity'] }}</div>
                            <div class="mt-2">Members: {{ $anime['members'] }}</div>
                            <div class="mt-2">Producer:
                                @foreach ($anime['producers'] as $producer)
                                    {{ $producer['name'] . ', ' }}
                                @endforeach
                            </div>
                            <div class="mt-2">Studio:
                                @forelse ($anime['studios'] as $studio)
                                    {{ $studio['name'] . ', ' }}
                                @empty
                                    Unknown
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>

                <p class="text-gray-300 mt-5">
                    {{ $anime['synopsis'] }}
                </p>

                <div class="mt-10">
                    <button class="flex inline-flex items-center bg-yellow-500 text-white rounded font-semibold px-5 py-4 hover:bg-gray-600 transition ease-in-out duration-150">
                        <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>

                {{-- <div x-data="{isOpen: false}">
                    @if (count($getMovie['videos']['results']) > 0)
                        <div class="mt-12">
                            <button @click="isOpen = true" class="flex inline-flex items-center bg-purple-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-purple-600 transition ease-in-out duration-150">
                                <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                                <span class="ml-2">Play Trailer</span>
                            </button>
                        </div>
                     @endif
                    <div class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto" style="background-color: rgba(0,0,0,.5);" x-show.transition.opacity="isOpen">
                        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                            <div class="bg-gray-900 rounded">
                                <div class="flex justify-end pr-4 pt-2">
                                    <button @click="isOpen = false" class="text-3xl loading-none hover:text-gray-300">&times;</button>
                                </div>
                                <div class="modal-body px-8 py-8">
                                    <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%;">
                                        <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full" src="https://youtube.com/embed/{{ $getMovie['videos']['results'][0]['key'] }}" style="border:0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="characters border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Characters</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @forelse ($characters as $character)
                    <div class="mt-8">
                        <a href="">
                            <img src="{{ $character['character']['images']['jpg']['image_url'] }}" alt="actor" class="hover:opacity-75 transition ease-in-out w-80 h-80 duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="" class="text-lg mt-2 hover:text-gray:300">{{ $character['character']['name'] }}</a>
                            <div class="text-sm text-gray-400">
                                {{ $character['role'] }}
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-lg font-semibold">No characters yet.</div>
                @endforelse
            </div>
        </div>
    </div>

    <div class="peoples-staff border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Staff</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @forelse ($peoples as $staff)
                    <div class="mt-8">
                        <a href="">
                            <img src="{{ $staff['person']['images']['jpg']['image_url'] }}" alt="actor" class="hover:opacity-75 transition ease-in-out duration-150 w-80 h-80">
                        </a>
                        <div class="mt-2">
                            <a href="" class="text-lg mt-2 hover:text-gray:300">{{ $staff['person']['name'] }}</a>
                            <div class="text-sm text-gray-400">
                                @foreach ($staff['positions'] as $position)
                                    {{ $position }}
                                @endforeach
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-lg mt-5 font-semibold">No characters yet.</div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
