<x-app-layout :name=$name>
    <main class="flex-1 flex gap-4">
        <div class="w-2/5">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3 @if(isset($edit)) border border-blue-950 @endif">
                @if(isset($edit))
                    <form action="{{ route('hotels.update', $hotel->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('Name')}}:
                                <input type="text" name="name" value="{{ $hotel->name }}" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('Address')}}:
                                <input type="text" name="address" value="{{ $hotel->address }}" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="text-nowrap input input-bordered flex items-center gap-2">
                                {{__('City')}}:
                                <select name="city" class="grow border-none focus:shadow-none shadow-none">
                                    <option value="macca" @if($hotel->city === 'macca') selected @endif>{{__('Mecca')}}</option>
                                    <option value="medina" @if($hotel->city === 'medina') selected @endif>{{__('Medina')}}</option>
                                </select>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2 text-nowrap">
                                {{__('Distance from macca')}} ({{__('meter')}}):
                                <input type="number" name="distance" value="{{ $hotel->distance }}" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                            </label>
                        </div>
                        <div class="mb-3 flex gap-3">
                            <img src="{{ $hotel->mainPhoto->url }}" alt="" class="h-12 aspect-square rounded-md object-cover">
                            <label class="w-full input input-bordered flex items-center gap-2">
                                {{__('Primary photo')}}
                                <input type="file" name="primary_photo" class="grow w-full max-w-xs" />
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('Hotel photos')}}
                                <input type="file" name="hotel_photos[]" class="grow w-full max-w-xs" multiple />
                            </label>
                            <div class="flex mt-1 gap-1">
                                @foreach ($hotel->photos as $photo)
                                <img src="{{ $photo->url }}" alt="" class="h-12 aspect-square rounded-md object-cover">
                                @endforeach
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <button type="submit" class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('Add')}}</button>
                            <a href="{{ route('hotels') }}" type="submit" class="btn btn-wide">{{__('Cansel')}}</a>
                        </div>
                    </form>
                @else
                    <form action="{{ route('hotels.save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('Name')}}:
                                <input type="text" name="name" class="grow border-none focus:shadow-none shadow-none"
                                    placeholder="" />
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('Address')}}:
                                <input type="text" name="address" class="grow border-none focus:shadow-none shadow-none"
                                    placeholder="" />
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="text-nowrap input input-bordered flex items-center gap-2">
                                {{__('City')}}:
                                <select name="city" class="grow border-none focus:shadow-none shadow-none">
                                    <option value="{{__('macca')}}">{{__('Mecca')}}</option>
                                    <option value="{{__('medina')}}">{{__('Medina')}}</option>
                                </select>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2 text-nowrap">
                                {{__('Distance from macca')}} ({{__('meter')}}):
                                <input type="number" name="distance" class="grow border-none focus:shadow-none shadow-none"
                                    placeholder="" />
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('Primary photo')}}
                                <input type="file" name="primary_photo" class="grow w-full max-w-xs" />
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('Hotel photos')}}
                                <input type="file" name="hotel_photos[]" class="grow w-full max-w-xs" multiple />
                            </label>
                        </div>
                        <button type="submit"
                            class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('Add')}}</button>
                    </form>
                @endif
            </div>
        </div>
        <div class="w-3/5">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3">
                <div class="overflow-x-auto">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Address')}}</th>
                                <th>{{__('Distance from macca')}}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            @foreach ($hotels as $hotel)
                                <tr>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <div class="avatar">
                                                <div class="mask mask-squircle h-12 w-12">
                                                    <img src="{{ $hotel->mainPhoto->url }}"
                                                        alt="Avatar Tailwind CSS Component" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-bold">{{ $hotel->name }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        {{ $hotel->address }}
                                    </td>
                                    <td>{{ $hotel->distance }} {{ __('meter') }}</td>
                                    <th>
                                        <a href="{{ route('hotels.edit', $hotel->id) }}"
                                            class="btn btn-xs btn-info edit"></a>
                                        <a href="{{ route('hotels.delete', $hotel->id) }}"
                                            class="btn btn-xs btn-error delete"></a>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>