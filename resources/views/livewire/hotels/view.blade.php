
<div class="w-full flex gap-2 flex-wrap">
    @foreach ($hotels as $hotel)
        <div class="">
            <input type="checkbox" name="hotel" id="hotel-{{ $hotel->id }}" class="hidden peer" />
            <label for="hotel-{{ $hotel->id }}" class="w-full flex flex-col gap-3 justify-center items-center bg-white border shadow rounded-lg p-3 peer-checked:bg-gradient-to-br  peer-checked:from-yellow-300  peer-checked:to-yellow-500 cursor-pointer">
                <img onerror="this.onerror=null;this.src='{{ Vite::asset('resources/images/not-found.webp') }}';" src="{{ @$hotel->mainPhoto->url }}" alt="" class="h-12 aspect-square rounded-md object-cover">
                <span class="text-nowrap ">
                    {{ $hotel->name }}
                </span>
            </label>
        </div>
    @endforeach
</div>