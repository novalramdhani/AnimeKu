<nav class="border-b border-gray-800 text-white">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
        <ul class="flex flex-col md:flex-row items-center">
            <li>
                <a href="{{ route('anime.index') }}">
                    <div class="text-lg text-3xl font-semibold">
                        <h1>{{ config('app.name') }}</h1>
                    </div>
                </a>
            </li>
            <li class="md:ml-6 mt-3 md:mt-0">
                <a href="{{ route('anime.seasons') }}" class="hover:text-gray-300 transition">Seasons</a>
            </li>
            <li class="md:ml-6 mt-3 md:mt-0">
                <a href="{{ route('anime.trendings') }}" class="hover:text-gray-300 transition">Anime Trending</a>
            </li>
            <li class="md:ml-6 mt-3 md:mt-0">
                <a href="{{ route('anime.characters') }}" class="hover:text-gray-300 transition">Characters</a>
            </li>
        </ul>
        <div class="flex flex-col md:flex-row items-center">
            <livewire:search-dropdown />
            <div class="md:ml-4 mt-3 md:mt-0">
                <img src="https://stickers.wiki/static/stickers/siamesekitten2/file_798790.webp?ezimgfmt=rs:134x134/rscb1/ng:webp/ngcb1" alt="Avatar" class="rounded-full h-8 w-8">
            </div>
        </div>
    </div>
</nav>
