<dialog id="add_airline" class="modal modal-bottom sm:modal-middle" wire:ignore x-data x-init="
    window.addEventListener('airline-created', () => {
        document.getElementById('add_airline').close();
    });
">
    <div class="modal-box">
        <h3 class="text-lg font-bold mb-4">{{ __('index.Add airline') }}</h3>

        <form wire:submit.prevent="save">
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
            <button type="submit" class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000"><span wire:loading class="loading loading-spinner loading-xs me-1 inline-block"></span>{{__('index.Add')}}</button>
        </form>
    </div>
</dialog>