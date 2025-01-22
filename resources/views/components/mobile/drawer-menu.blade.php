<div class="drawer z-50">
    <input id="drawer-toggle" type="checkbox" class="drawer-toggle" />
    <div class="drawer-side">
        <div class="bg-blue-950 w-full h-full py-6 relative">
            <div class="start-3 end-3 top-3 flex justify-between items-center absolute">
                <a href="{{ route('home') }}">
                    <img src="{{ Vite::asset('resources/images/logo.webp') }}" alt="{{ __('Logo') }}" class="h-10">
                </a>
                <label for="drawer-toggle" class="p-3">
                    <em class="fa fa-close text-white"></em>
                </label>
            </div>
            <div class="flex flex-col items-center justify-center w-full h-full">
                <ul class="w-full">
                    <li class="hover:bg-blue-1000"><a href="{{ route('home') }}" class=" w-full px-8 h-16 flex items-center justify-center text-white text-2xl"><em class="fa fa-home text-3xl" title="{{__('Home')}}"></em></a></li>
                    <li class="hover:bg-blue-1000"><a href="{{ route('home') }}" class=" w-full px-4 h-16 flex items-center justify-center text-white text-2xl">{{__('Omra packs')}}</a></li>
                    <li class="hover:bg-blue-1000"><a href="{{ route('home') }}" class=" w-full px-4 h-16 flex items-center justify-center text-white text-2xl">{{__('Ramadan omra')}}</a></li>
                    <li class="hover:bg-blue-1000"><a href="{{ route('home') }}" class=" w-full px-4 h-16 flex items-center justify-center text-white text-2xl">{{__('Personalizd omra')}}</a></li>
                    <li class="hover:bg-blue-1000"><a href="{{ route('home') }}" class=" w-full px-4 h-16 flex items-center justify-center text-white text-2xl">{{__('Hadj 2025')}}</a></li>
                    <li class="hover:bg-blue-1000"><a href="{{ route('home') }}" class=" w-full px-4 h-16 flex items-center justify-center text-white text-2xl">{{__('Request e-visa')}}</a></li>
                    <li class="hover:bg-blue-1000"><a href="{{ route('contact-us') }}" class=" w-full px-4 h-16 flex items-center justify-center text-white text-2xl">{{__('Contact us')}}</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>