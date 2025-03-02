<x-app-layout :name=$name>
    <main class="flex-1 flex gap-12 flex-col">
        <div class="collapse collapse-plus border-base-300 bg-base-200 border">
            <input id="collapse-toggler" type="checkbox" hidden class="hidden" @if(isset($edit)) checked @endif />
            <label for="collapse-toggler"
                class="collapse-title text-xl font-medium shadow bg-white">{{ __('New pricing') }}</label>
            <div class="collapse-content bg-white rounded-xl rounded-t-none shadow-lg overflow-hidden">
                <div class="w-12/12">
                    <div class="bg-white mt-6">
                        @if(isset($edit))
                            <form action="{{ route('pricing.update', $price->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="input input-bordered flex items-center gap-2">
                                        {{__('Program')}}:
                                        <select name="program" class="grow border-none focus:shadow-none shadow-none"
                                            required>
                                            @foreach ($programs as $program)
                                                <option value="{{ $program->id }}" @if($program->id == old('program',$price->id)) selected @endif>{{ $program->flight->title }}- {{ $program->hotelMecca->name }} -
                                                    {{ $program->hotelMedina->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>
                                <div class="flex gap-3 w-full overflow-x-auto mb-3">
                                    @foreach ($rooms as $key => $room)
                                        <div class="border rounded-xl p-3 flex flex-col w-2/6">
                                            <div class="mb-3">
                                                <label class="input input-bordered flex items-center gap-2">
                                                    {{__('Room type')}}:
                                                    <input type="text" name="room[]" value="{{ $room->id }}" class="hidden" hidden>
                                                    <input type="text" value="{{ $room->name }}" class="w-auto border-none focus:shadow-none shadow-none" disabled>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="input input-bordered flex items-center gap-2">
                                                    <span
                                                        class="text-nowrap">{{__('Price before discount')}}({{__('dh')}}):</span>
                                                    <input type="number" name="old_price[]" class="w-auto grow border-none focus:shadow-none shadow-none" value="{{ old('old_price',@$price->prices->where('room_id', $room->id)->first()->old_price) }}" placeholder=""/>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="input input-bordered flex items-center gap-2">
                                                    <span
                                                        class="text-nowrap">{{__('Price after discount')}}({{__('dh')}}):</span>
                                                    <input type="number" name="price[]" class="w-auto grow border-none focus:shadow-none shadow-none" value="{{ old('price',@$price->prices->where('room_id', $room->id)->first()->price) }}" placeholder=""/>
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="flex justify-start gap-3">
                                    <button type="submit" class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('Edit')}}</button>
                                    <a href="{{ route('pricing') }}" type="submit" class="btn btn-wide">{{__('Cansel')}}</a>
                                </div>
                            </form>
                        @else
                            <form action="{{ route('pricing.save') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="input input-bordered flex items-center gap-2">
                                        {{__('Program')}}:
                                        <select name="program" class="grow border-none focus:shadow-none shadow-none"
                                            required>
                                            @foreach ($programs as $program)
                                                <option value="{{ $program->id }}" @if($program->id == old('program')) selected
                                                @endif>{{ $program->flight->title }}- {{ $program->hotelMecca->name }} -
                                                    {{ $program->hotelMedina->name }}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>
                                <div class="flex gap-3 w-full overflow-x-auto mb-3">
                                    @foreach ($rooms as $room)
                                        <div class="border rounded-xl p-3 flex flex-col w-2/6">
                                            <div class="mb-3">
                                                <label class="input input-bordered flex items-center gap-2">
                                                    {{__('Room type')}}:
                                                    <input type="text" name="room[]" value="{{ $room->id }}" class="hidden"
                                                        hidden>
                                                    <input type="text" value="{{ $room->name }}"
                                                        class="w-auto border-none focus:shadow-none shadow-none" disabled>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="input input-bordered flex items-center gap-2">
                                                    <span
                                                        class="text-nowrap">{{__('Price before discount')}}({{__('dh')}}):</span>
                                                    <input type="number" name="old_price[]"
                                                        class="w-auto grow border-none focus:shadow-none shadow-none"
                                                        value="{{ old('old_price') }}" placeholder="" />
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="input input-bordered flex items-center gap-2">
                                                    <span
                                                        class="text-nowrap">{{__('Price after discount')}}({{__('dh')}}):</span>
                                                    <input type="number" name="price[]"
                                                        class="w-auto grow border-none focus:shadow-none shadow-none"
                                                        value="{{ old('price') }}" placeholder="" />
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button type="submit"
                                    class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('Add')}}</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="w-12/12">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3">
                <div class="overflow-x-auto">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>{{__('Program')}}</th>
                                @foreach ($rooms as $room)
                                    <th>{{ $room->name }}</th>
                                @endforeach
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            @foreach ($prices as $price)
                                @if(count($price->prices))
                                    <tr>
                                        <td class="text-wrap max-w-80">{{ $price->flight->title }} - {{ $price->hotelMecca->name }} - {{ $price->hotelMedina->name }}</td>
                                            @forEach($rooms as $room)
                                                @php
                                                    $room = $price->prices->where('room_id', $room->id)->first();
                                                @endphp
                                                <td>
                                                    @if($room)
                                                        <span class="block opacity-45 text-sm font-bold line-through line-clamp-2 lining-nums">{{ @$room->old_price }} {{ __('dh') }}</span>
                                                        <span class="block text-base font-bold line-clamp-2 lining-nums">{{ @$room->price }} {{ __('dh') }}</span>
                                                    @else
                                                    ---
                                                    @endif
                                                </td>
                                            @endforeach
                                        <th>
                                            <a href="{{ route('pricing.edit', $price->id) }}" class="btn btn-xs btn-info edit"></a>
                                            <a href="{{ route('pricing.delete', $price->id) }}" class="btn btn-xs btn-error delete"></a>
                                        </th>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>