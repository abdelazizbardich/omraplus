<div class="@if($centred === true)md:w-8/12 @else w-full @endif m-auto @if($centred === true) md:px-10 @endif flex flex-col items-center">
    <h2 class="font-black text-xl md:text-3xl w-full @if($centred === true) px-10 @endif py-3 rounded-full w-fit m-auto @if($centred === true) text-center @endif">{{$title}}</h2>
    @if($subtitle)<p class="font-medium text-sm md:text-xl py-3 @if($centred === true) px-4 @endif mx-0 w-fit m-auto @if($centred === true) text-center @endif leading-relaxed">{{$subtitle}}</p>@endif
</div>