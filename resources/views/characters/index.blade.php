<x-app-layout title="Ani Cast - Anime Characters">
    <div class="container px-4 pt-16">
        <div class="characters-anime">
            <h1 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Characters Anime</h1>
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
@push('scripts')
<script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
<script>
    let elem = document.querySelector('.grid');
    let infScroll = new InfiniteScroll( elem, {
    // options
    path: `/characters?page=@{{#}}`,
    append: '.characters',
    // history: false,
    });
</script>
@endpush
</x-app-layout>
