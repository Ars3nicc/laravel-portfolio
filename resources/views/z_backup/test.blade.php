@foreach(json_decode($language)->languages as $lang)
        <div class="flex justify-center">
            <div class="img-container relative">
                <img src="{{ asset($lang->image) }}" alt="{{ $lang->title }}" class="w-10">
                <!-- <span class="tooltiptext absolute bottom-full left-1/3 transform -translate-x-1/2 opacity-0 transition-opacity duration-300 ease-in-out bg-gray-700 text-white text-xs px-4 py-1 rounded">{{ $lang->title }}</span> -->
            </div>
        </div>
        @endforeach
