<x-app-layout :name=$name>
    <main class="flex-1 flex gap-4">
        <div class="w-2/5">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3">
                <form action="{{ route('programs.save') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="input input-bordered flex items-center gap-2 text-nowrap">
                            {{__('index.Flight')}}:
                            <select name="flight" class="grow border-none focus:shadow-none shadow-none">
                                @foreach ($flights as $flight)
                                    <option value="{{ $flight->id }}">{{ $flight->title }}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="input input-bordered flex items-center gap-2 text-nowrap">
                            {{__('index.Hotel in macca')}}:
                            <select name="hotel_macca" class="grow border-none focus:shadow-none shadow-none">
                                @foreach ($maccaHotels as $maccaHotel)
                                    <option value="{{ $maccaHotel->id }}">{{ $maccaHotel->name }}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="input input-bordered flex items-center gap-2">
                            {{__('index.Hotel in medina')}}:
                            <select name="hotel_medina" class="grow border-none focus:shadow-none shadow-none">
                                @foreach ($medinaHotels as $medinaHotel)
                                    <option value="{{ $medinaHotel->id }}">{{ $medinaHotel->name }}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="input input-bordered flex items-center gap-2">
                            {{__('index.Seats count')}}:
                            <input type="number" name="seats_count" class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                        </label>
                    </div>
                    <div class="mb-3 flex gap-6">
                        <div class="form-control">
                            <label class="label cursor-pointer flex-row-reverse w-fit gap-3">
                                <span class="label-text">{{__('index.Economic')}}</span>
                                <input type="checkbox" class="checkbox" name="is_economic" />
                            </label>
                        </div>
                        <div class="form-control">
                            <label class="label cursor-pointer flex-row-reverse w-fit gap-3">
                                <span class="label-text">{{__('index.Meals included')}}</span>
                                <input type="checkbox" class="checkbox" name="have_meals" />
                            </label>
                        </div>
                        <div class="form-control">
                            <label class="label cursor-pointer flex-row-reverse w-fit gap-3">
                                <span class="label-text">{{__('index.Recomanded')}}</span>
                                <input type="checkbox" class="checkbox" name="is_recommended" />
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('index.Add')}}</button>
                </form>
            </div>
        </div>
        <div class="w-3/5">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3">
                <div class="overflow-x-auto datatable">
                    <input type="text" class="search input" placeholder="{{__('index.Search')}}...">
                    <table class="table ">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>{{__('index.Program')}}</th>
                                <th>{{__('index.Seats count')}}</th>
                                <th>{{__('index.Economic')}}</th>
                                <th>{{__('index.Meals included')}}</th>
                                <th>{{__('index.Recomanded')}}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                             @foreach ($programs as $program)
                                <tr>
                                    <td>
                                        <span class="block text-nowrap">
                                            <span class="font-bold">{{__('index.Mecca')}}</span>: {{ $program->hotelMecca->name }}
                                        </span>
                                        <span class="block text-nowrap">
                                            <span class="font-bold">{{__('index.Medina')}}</span>: {{ $program->hotelMedina->name }}
                                        </span>
                                        <span class="text-xs">
                                            ({{ $program->flight->title }})
                                        </span>
                                    </td>
                                    <td>{{ $program->seat_count }}</td>
                                    <td>
                                        @if($flight->is_economic)
                                            <em
                                                class="fa fa-check rounded-full p-1 bg-emerald-700 text-white aspect-square"></em>
                                        @else
                                            <em class="fa fa-check rounded-full p-1 bg-red-800 text-white aspect-square"></em>
                                        @endif
                                    </td>
                                    <td>
                                        @if($flight->have_meals)
                                            <em
                                                class="fa fa-check rounded-full p-1 bg-emerald-700 text-white aspect-square"></em>
                                        @else
                                            <em class="fa fa-check rounded-full p-1 bg-red-800 text-white aspect-square"></em>
                                        @endif
                                    </td>
                                    <td>
                                        @if($flight->is_recommended)
                                            <em
                                                class="fa fa-check rounded-full p-1 bg-emerald-700 text-white aspect-square"></em>
                                        @else
                                            <em class="fa fa-check rounded-full p-1 bg-red-800 text-white aspect-square"></em>
                                        @endif
                                    </td>
                                    <th>
                                        <!-- <a href="{{ route('programs.edit', $program->id) }}" class="btn btn-xs btn-info edit"></a> -->
                                        <a href="{{ route('programs.delete', $program->id) }}" class="btn btn-xs btn-error delete"></a>
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