<x-app-layout :name=$name>
    <main class="flex-1 flex gap-4">
        <div class="w-2/5">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3">
                @if(isset($edit))
                    <form action="{{ route('pricing.update',$price->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('Program')}}:
                                <select name="program" class="grow border-none focus:shadow-none shadow-none" required>
                                    @foreach ($programs as $program)
                                        <option value="{{ $program->id }}" @if($program->id == old('program',$price->program_id)) selected @endif>{{ $program->flight->title }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('Room type')}}:
                                <select name="room" class="grow border-none focus:shadow-none shadow-none" required>
                                    @foreach ($rooms as $room)
                                        <option value="{{ $room->id }}" @if($room->id == old('room', $price->room_id)) selected @endif >{{ $room->name }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('Price before discount')}}({{__('dh')}}):
                                <input type="number" name="old_price" class="grow border-none focus:shadow-none shadow-none" value="{{ old('old_price',$price->old_price) }}" placeholder="" required/>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('Price after discount')}}({{__('dh')}}):
                                <input type="number" name="price" class="grow border-none focus:shadow-none shadow-none" value="{{ old('price', $price->price) }}" placeholder="" required/>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('Add')}}</button>
                    </form>
                @else
                    <form action="{{ route('pricing.save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('Program')}}:
                                <select name="program" class="grow border-none focus:shadow-none shadow-none" required>
                                    @foreach ($programs as $program)
                                        <option value="{{ $program->id }}" @if($program->id == old('program')) selected @endif>{{ $program->flight->title }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('Room type')}}:
                                <select name="room" class="grow border-none focus:shadow-none shadow-none" required>
                                    @foreach ($rooms as $room)
                                        <option value="{{ $room->id }}" @if($room->id == old('room')) selected @endif >{{ $room->name }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('Price before discount')}}({{__('dh')}}):
                                <input type="number" name="old_price" class="grow border-none focus:shadow-none shadow-none" value="{{ old('old_price') }}" placeholder="" required/>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('Price after discount')}}({{__('dh')}}):
                                <input type="number" name="price" class="grow border-none focus:shadow-none shadow-none" value="{{ old('price') }}" placeholder="" required/>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('Add')}}</button>
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
                                <th>{{__('Program')}}</th>
                                <th>{{__('Room')}}</th>
                                <th>{{__('Price before discount')}}</th>
                                <th>{{__('Price after discount')}}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                             @foreach ($prices as $price)
                                <tr>
                                    <td>{{ $price->program->flight->title }}</td>
                                    <td>{{ $price->room->name }}</td>
                                    <td>{{ $price->old_price }} {{__('dh')}}</td>
                                    <td>{{ $price->price }} {{__('dh')}}</td>
                                    <th>
                                        <a href="{{ route('pricing.edit', $price->id) }}" class="btn btn-xs btn-info edit"></a>
                                        <a href="{{ route('pricing.delete', $price->id) }}" class="btn btn-xs btn-error delete"></a>
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