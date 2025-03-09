<x-app-layout :name=$name>
    <main class="flex-1 flex gap-4">
        <div class="w-2/5">
            <div class="bg-white rounded-xl shadow-lg px-3 py-3 @if (isset($edit)) border border-blue-950 @endif">
                @if (isset($edit))
                    <form action="{{ route('rooms.update', $room->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('Name')}}:
                                <input maxlength="255" type="text" name="name" value="{{ $room->name }}"
                                    class="grow border-none focus:shadow-none shadow-none" placeholder="" />
                            </label>
                        </div>
                        <div class="flex justify-between">
                            <button type="submit"
                                class="btn btn-wide btn-primary bg-blue-950 border-none hover:bg-blue-1000">{{__('Edit')}}</button>
                            <a href="{{ route('rooms') }}" type="submit" class="btn btn-wide">{{__('Cansel')}}</a>
                        </div>
                    </form>
                @else
                    <form action="{{ route('rooms.save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="input input-bordered flex items-center gap-2">
                                {{__('Name')}}:
                                <input maxlength="255" type="text" name="name"
                                    class="grow border-none focus:shadow-none shadow-none" placeholder="" />
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
                <div class="overflow-x-auto datatable">
                    <input type="text" class="search input" placeholder="{{__('Search')}}...">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th class="sortable">{{__('Name')}}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            @foreach ($rooms as $room)
                                <tr>
                                    <td>
                                        {{ $room->name }}
                                    </td>
                                    <th>
                                        <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-xs btn-info edit"></a>
                                        <a href="{{ route('rooms.delete', $room->id) }}"
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