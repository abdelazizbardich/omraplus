
<div class="w-full flex gap-2" wire:program-created="$refresh">
    @foreach ($programs as $program)
        <div class="">
            <input type="checkbox" name="program" id="program-{{ $program->id }}" class="hidden peer" />
            <label for="program-{{ $program->id }}" class="w-full flex flex-col gap-3 justify-center items-center bg-white rounded-lg p-3 peer-checked:bg-gradient-to-br  peer-checked:from-yellow-300  peer-checked:to-yellow-500 cursor-pointer">
                <img src="{{ Vite::asset('resources/images/programs.png') }}" alt="{{__('index.programs')}}" class="w-8 block">
                <span class="text-nowrap ">
                    {{ $program->name() }}
                </span>
            </label>
        </div>
    @endforeach
</div>