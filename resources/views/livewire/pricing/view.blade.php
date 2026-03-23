
<div class="w-full flex gap-2" wire:pricing-created="$refresh">
    @foreach ($pricings as $pricing)
        <div class="">
            <input type="checkbox" name="pricing" id="pricing-{{ $pricing->id }}" class="hidden peer" />
            <label for="pricing-{{ $pricing->id }}" class="w-full flex flex-col gap-3 justify-center items-center bg-white border shadow rounded-lg p-3 peer-checked:bg-gradient-to-br  peer-checked:from-yellow-300  peer-checked:to-yellow-500 cursor-pointer">
                <!-- <img src="{{ Vite::asset('resources/images/prices.png') }}" alt="{{__('index.pricings')}}" class="w-8 block"> -->
                <span class="text-nowrap ">
                    {{ $pricing->price . ' ' . __('index.dh') . ' ' . __('index.for') . ' ' . $pricing->program->name() }}
                </span>
            </label>
        </div>
    @endforeach
</div>