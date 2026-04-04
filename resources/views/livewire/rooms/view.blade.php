
<div class="w-full flex gap-2 flex-wrap">
    @foreach ($rooms as $room)
        <div class="relative">
            <input type="checkbox" name="room" id="room-{{ $room->id }}" class="hidden peer" />
            <label for="room-{{ $room->id }}" class="w-full flex flex-col gap-3 justify-center items-center border shadow rounded-lg p-3 peer-checked:bg-gradient-to-br  peer-checked:from-yellow-300  peer-checked:to-yellow-500 cursor-pointer">
                <span class="text-nowrap ">
                    {{ $room->name }}
                </span>
            </label>
        </div>
    @endforeach
    <span wire:loading class="loading loading-spinner loading-xs me-1 inline-block"></span>
</div>