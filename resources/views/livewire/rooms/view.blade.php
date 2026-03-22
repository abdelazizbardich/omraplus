
<div class="w-full flex gap-2" wire:room-created="$refresh">
    @foreach ($rooms as $room)
        <div class="">
            <input type="checkbox" name="room" id="room-{{ $room->id }}" class="hidden peer" />
            <label for="room-{{ $room->id }}" class="w-full flex flex-col gap-3 justify-center items-center bg-white rounded-lg p-3 peer-checked:bg-gradient-to-br  peer-checked:from-yellow-300  peer-checked:to-yellow-500 cursor-pointer">
                <img src="{{ Vite::asset('resources/images/room.png') }}" alt="{{__('index.Rooms')}}" class="w-8 block">
                <span class="text-nowrap ">
                    {{ $room->name }}
                </span>
            </label>
        </div>
    @endforeach
</div>