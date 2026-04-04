<label class="input input-bordered flex items-center gap-2 text-nowrap" x-on:hotel-created.window="$wire.refreshHotels()">
    {{__('index.Hotel in macca')}}:
    <select name="hotel_macca" class="grow border-none focus:shadow-none shadow-none">
        <option value="0" disabled selected>{{__('index.Select hotel')}}</option>
        @foreach ($hotels as $hotel)
            <option value="{{ $hotel->id }}" @if(old($name, $selected) === $hotel->id) selected @endif>{{ $hotel->name }}</option>
        @endforeach
    </select>
    <span class="add" onclick="add_hotel.showModal()"></span>
</label>