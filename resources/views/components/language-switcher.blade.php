<!-- If lang -->

@switch(app()->getLocale())
@case('ar') 
<a href="{{ route('lang','fr') }}" class="inline-flex items-center rounded-md bg-blue-950 px-2 py-1 text-xs font-medium text-white">{{__('index.FR')}}</a>
@break
@case('fr') 
<a href="{{ route('lang', 'ar') }}" class="inline-flex items-center rounded-md bg-blue-950 px-2 py-1 text-xs font-medium text-white">{{__('index.AR')}}</a>
@break
@case('en') 
<a href="{{ route('lang', 'ar') }}" class="inline-flex items-center rounded-md bg-blue-950 px-2 py-1 text-xs font-medium text-white">{{__('index.AR')}}</a>
@break
@default
@endswitch