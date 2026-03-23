
<div class="w-full flex gap-2" wire:flight-created="$refresh">
    @foreach ($flights as $flight)
        <div class="w-52">
            <input type="checkbox" name="flight" id="flight-{{ $flight->id }}" class="hidden peer" />
            <label for="flight-{{ $flight->id }}" class="w-full flex flex-col gap-3 justify-center items-center bg-white border shadow rounded-lg p-3 peer-checked:bg-gradient-to-br  peer-checked:from-yellow-300  peer-checked:to-yellow-500 cursor-pointer">
                <!-- <img src="{{ Vite::asset('resources/images/flights.png') }}" alt="{{__('index.flights')}}" class="w-8 block"> -->
                <span class="text-wrap ">
                    {{ $flight->title }}
                </span>
            </label>
        </div>
    @endforeach
</div>