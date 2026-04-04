<label class="input input-bordered flex items-center gap-2 text-nowrap" x-on:program-created.window="$wire.refreshPrograms()">
    {{ __('index.Program') }}:
    <select name="{{ $name }}" class="grow border-none focus:shadow-none shadow-none" required>
        <option value="" disabled @if(!$selected) selected @endif>{{ __('index.Select program') }}</option>
        @foreach ($programs as $program)
            <option value="{{ $program->id }}" @if(old($name, $selected) == $program->id) selected @endif>
                {{ $program->flight->title }} - {{ $program->hotelMecca->name }} - {{ $program->hotelMedina->name }}
            </option>
        @endforeach
    </select>
    <span class="add" onclick="add_program.showModal()"></span>
</label>
