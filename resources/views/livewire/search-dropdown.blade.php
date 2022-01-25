<div class="relative mt-3 md:mt-0">
    <input wire:model.debounce.500ms="search" type="text" class="bg-gray-800 rounded-full x-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search Anime...">
    <div class="absolute top-0">
        <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/></svg>
    </div>
    @if (strlen($search) >= 2)
        <div class="absolute bg-gray-800 text-sm rounded w-64 mt-4">
            <ul>
                @forelse ($searchResults as $item)
                    <li class="border-b border-gray-700"><a href="{{ route('anime.show', $item['mal_id']) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                        <img src="{{ $item['images']['jpg']['image_url'] }}" alt="{{ $item['title'] }}" class="w-8">
                        <span class="ml-4">{{ $item['title'] }}</span>
                    </a></li>
                    @empty
                    <div class="px-3 py-3">No result for {{ $search }}</div>
                @endforelse
            </ul>
        </div>
    @endif
</div>
