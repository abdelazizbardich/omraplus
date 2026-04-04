<dialog id="add_program" class="modal modal-bottom sm:modal-middle" wire:ignore x-data x-init="
    window.addEventListener('program-created', () => {
        document.getElementById('add_program').close();
    });
">
    <div class="modal-box">
        <h3 class="text-lg font-bold mb-4">{{ __('index.Add program') }}</h3>
        <form wire:submit="save" method="post">
            @csrf
            <div class="mb-3">
                <label class="input input-bordered flex items-center gap-2 @error('flight_id') input-error @enderror">
                    {{ __('index.Flight') }}:
                    <select wire:model="flight_id" class="grow border-none focus:shadow-none shadow-none">
                        <option value="" disabled selected>{{ __('index.Select flight') }}</option>
                        @foreach ($flights as $flight)
                            <option value="{{ $flight->id }}">{{ $flight->title }}</option>
                        @endforeach
                    </select>
                </label>
                @error('flight_id') <span class="text-error text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label class="input input-bordered flex items-center gap-2 @error('hotel_id_mecca') input-error @enderror">
                    {{ __('index.Hotel in macca') }}:
                    <select wire:model="hotel_id_mecca" class="grow border-none focus:shadow-none shadow-none">
                        <option value="" disabled selected>{{ __('index.Select hotel') }}</option>
                        @foreach ($hotels_mecca as $hotel)
                            <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                        @endforeach
                    </select>
                </label>
                @error('hotel_id_mecca') <span class="text-error text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label class="input input-bordered flex items-center gap-2 @error('hotel_id_medina') input-error @enderror">
                    {{ __('index.Hotel in medina') }}:
                    <select wire:model="hotel_id_medina" class="grow border-none focus:shadow-none shadow-none">
                        <option value="" disabled selected>{{ __('index.Select hotel') }}</option>
                        @foreach ($hotels_medina as $hotel)
                            <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                        @endforeach
                    </select>
                </label>
                @error('hotel_id_medina') <span class="text-error text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label class="input input-bordered flex items-center gap-2 @error('seat_count') input-error @enderror">
                    {{ __('index.Seats count') }}:
                    <input type="number" wire:model="seat_count" class="grow border-none focus:shadow-none shadow-none" placeholder="" min="1" />
                </label>
                @error('seat_count') <span class="text-error text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3 flex gap-6">
                <label class="label cursor-pointer gap-2">
                    <input type="checkbox" class="checkbox" wire:model="is_economic" />
                    <span class="label-text">{{ __('index.Economic') }}</span>
                </label>
                <label class="label cursor-pointer gap-2">
                    <input type="checkbox" class="checkbox" wire:model="have_meals" />
                    <span class="label-text">{{ __('index.Meals included') }}</span>
                </label>
                <label class="label cursor-pointer gap-2">
                    <input type="checkbox" class="checkbox" wire:model="is_recommended" />
                    <span class="label-text">{{ __('index.Recommended Offer') }}</span>
                </label>
            </div>
            <div class="flex justify-between">
                <button type="submit" class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">
                    <span wire:loading class="loading loading-spinner loading-xs me-1 inline-block"></span>{{ __('index.Add') }}
                </button>
            </div>
        </form>
    </div>
</dialog>
