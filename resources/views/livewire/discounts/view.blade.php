
<div class="w-full flex gap-2" wire:discount-created="$refresh">
    @foreach ($discounts as $discount)
        <div class="">
            <input type="checkbox" name="discount" id="discount-{{ $discount->id }}" class="hidden peer" />
            <label for="discount-{{ $discount->id }}" class="w-full flex flex-col gap-3 justify-center items-center bg-white border shadow rounded-lg p-3 peer-checked:bg-gradient-to-br  peer-checked:from-yellow-300  peer-checked:to-yellow-500 cursor-pointer">
                <!-- <img src="{{ Vite::asset('resources/images/discount.png') }}" alt="{{__('index.discounts')}}" class="w-8 block"> -->
                <span class="text-nowrap ">
                    {{ $discount->name }}
                </span>
            </label>
        </div>
    @endforeach
</div>