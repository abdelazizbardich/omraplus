
  <select
    name="{{ $name }}" id="HeadlineAct" class="w-full rounded-lg border-gray-50 py-3 "
  >
  <option>{{$label}}</option>
  @foreach ($options as $option)
    <option value="{{$option}}">{{$option}}</option>
  @endforeach 
  </select>