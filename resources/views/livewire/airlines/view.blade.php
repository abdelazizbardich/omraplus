
<div class="w-full flex gap-2" wire:airline-created="$refresh">
    @foreach ($airlines as $airline)
        <div class="">
            <input type="checkbox" name="airline" id="airline-{{ $airline->id }}" class="hidden peer" />
            <label for="airline-{{ $airline->id }}" class="w-full flex flex-col gap-3 justify-center items-center bg-white border shadow rounded-lg p-3 peer-checked:bg-gradient-to-br  peer-checked:from-yellow-300  peer-checked:to-yellow-500 cursor-pointer">
                <!-- <img src="{{ Vite::asset('resources/images/airline.png') }}" alt="{{__('index.airlines')}}" class="w-8 block"> -->
                <span class="text-nowrap ">
                    {{ $airline->name }}
                </span>
            </label>
        </div>
    @endforeach
</div>