<label class="text-nowrap input input-bordered flex items-center gap-2"
x-on:airline-created.window="$wire.refreshAirlines()"
>
    {{__('index.Aireline')}}:
    <select name="aireline" class="flex-grow border-none focus:shadow-none shadow-none">
        @foreach ($airelines as $aireline)
            <option value="{{ $aireline->id }}"
                @if(old('aireline', $selected) == $aireline->id) selected @endif>{{ $aireline->name }}</option>
        @endforeach
    </select>
    <span class="add" onclick="add_airline.showModal()"></span>
</label>