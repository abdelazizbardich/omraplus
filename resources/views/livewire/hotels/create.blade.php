<dialog id="add_hotel" class="modal modal-bottom sm:modal-middle" wire:ignore x-data x-init="
    window.addEventListener('hotel-created', () => {
        document.getElementById('add_hotel').close();
    });
">
    <div class="modal-box">
        <h3 class="text-lg font-bold mb-4">{{ __('index.Add hotel') }}</h3>
        <form wire:submit="save" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 flex flex-col gap-2">
                <label class="input input-bordered flex items-center gap-2">{{__('index.Name_en')}}:
                    <input type="text" wire:model="name_en" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                </label>
                <label class="input input-bordered flex items-center gap-2">{{__('index.Name_fr')}}:
                    <input type="text" wire:model="name_fr" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                </label>
                <label class="input input-bordered flex items-center gap-2">{{__('index.Name_ar')}}:
                    <input type="text" wire:model="name_ar" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                </label>
            </div>
            <div class="mb-3 flex flex-col gap-2">
                <label class="input input-bordered flex items-center gap-2">{{__('index.Address_en')}}:
                    <input type="text" wire:model="address_en" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                </label>
                <label class="input input-bordered flex items-center gap-2">{{__('index.Address_fr')}}:
                    <input type="text" wire:model="address_fr" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                </label>
                <label class="input input-bordered flex items-center gap-2">{{__('index.Address_ar')}}:
                    <input type="text" wire:model="address_ar" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                </label>
            </div>
            <div class="mb-3">
                <label class="text-nowrap input input-bordered flex items-center gap-2">
                    {{__('index.City')}}:
                    <select wire:model="city" class="grow border-none focus:shadow-none shadow-none">
                        <option value="macca">{{__('index.Mecca')}}</option>
                        <option value="medina">{{__('index.Medina')}}</option>
                    </select>
                </label>
            </div>
            <div class="mb-3">
                <label class="input input-bordered flex items-center gap-2 text-nowrap">
                    {{__('index.Distance from macca')}} ({{__('index.meter')}}):
                    <input type="number" wire:model="distance" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                </label>
            </div>
            <div class="mb-3 flex gap-3">
                <label class="w-full input input-bordered flex items-center gap-2">
                    {{__('index.Primary photo')}}
                    <input type="file" wire:model="primary_photo" class="grow w-full max-w-xs" />
                </label>
            </div>
            <div class="mb-3">
                <label class="input input-bordered flex items-center gap-2">
                    {{__('index.Hotel photos')}}
                    <input type="file" wire:model="hotel_photos" class="grow w-full max-w-xs" multiple />
                </label>
            </div>
            <div class="flex justify-between">
                <button type="submit" class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">
                    <span wire:loading class="loading loading-spinner loading-xs me-1 inline-block"></span>{{__('index.Add')}}
                </button>
            </div>
        </form>
    </div>
</dialog>