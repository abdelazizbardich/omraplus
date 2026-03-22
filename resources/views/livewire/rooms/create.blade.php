<form wire:submit="save" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 flex flex-col gap-2">
            <label class="input input-bordered flex items-center gap-2">{{__('index.Name_en')}}:
                <input maxlength="255" type="text" wire:model="name_en" class="grow border-none focus:shadow-none shadow-none"/>
            </label>
            @error('name_en') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            <label class="input input-bordered flex items-center gap-2">{{__('index.Name_fr')}}:
                <input maxlength="255" type="text" wire:model="name_fr" class="grow border-none focus:shadow-none shadow-none"/>
            </label>
            @error('name_fr') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            <label class="input input-bordered flex items-center gap-2">{{__('index.Name_ar')}}:
                <input maxlength="255" type="text" wire:model="name_ar" class="grow border-none focus:shadow-none shadow-none"/>
            </label>
            @error('name_ar') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
    <div class="flex justify-between">
        <button type="submit" class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('index.Add')}}</button>
    </div>
</form>