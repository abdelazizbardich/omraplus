<!-- If lang -->
<div class="flex gap-1 flex-row">
    @switch(app()->getLocale())
    @case('ar') 
        <a href="{{ Request::url().'?lang=fr'}}" class="inline-flex items-center rounded-md bg-blue-950 px-2 py-1 text-xs font-medium text-white">{{__('index.FR')}}</a>
        <a href="{{ Request::url().'?lang=en'}}" class="inline-flex items-center rounded-md bg-blue-950 px-2 py-1 text-xs font-medium text-white">{{__('index.EN')}}</a>
    @break
    @case('fr') 
        <a href="{{ Request::url().'?lang=ar'}}" class="inline-flex items-center rounded-md bg-blue-950 px-2 py-1 text-xs font-medium text-white">{{__('index.AR')}}</a>
        <a href="{{ Request::url().'?lang=en'}}" class="inline-flex items-center rounded-md bg-blue-950 px-2 py-1 text-xs font-medium text-white">{{__('index.EN')}}</a>
    @break
    @case('en') 
        <a href="{{ Request::url().'?lang=fr'}}" class="inline-flex items-center rounded-md bg-blue-950 px-2 py-1 text-xs font-medium text-white">{{__('index.FR')}}</a>
        <a href="{{ Request::url().'?lang=ar'}}" class="inline-flex items-center rounded-md bg-blue-950 px-2 py-1 text-xs font-medium text-white">{{__('index.AR')}}</a>
    @break
    @default
    @endswitch
</div>