<div class="p-4 max-w-96 h-full dashboard-side-menu group">
    <div class="w-full h-full flex flex-col py-4 px-3 text-gray-900 bg-white rounded-lg shadow-lg capitalize font-medium">
        <div class="flex-1 flex flex-col">
            <a href="{{ route('dashboard') }}">
                <img src="{{ Vite::asset('resources/images/logo-d.png') }}" alt="{{ __('Logo') }}"  class="w-4/5 mx-auto mb-5 group-[.closed]:hidden">
                <img src="{{ Vite::asset('resources/images/favicon.ico') }}" alt="{{ __('Logo') }}"  class="w-4/5 h-12 object-contain aspect-square mx-auto mb-5 hidden group-[.closed]:block">
            </a>
            <hr class="border-0 border-b opacity-65 mb-5">
            <a href="{{ route('dashboard') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed]:tooltip-right block" data-tip="{{__('Hajj Flights')}}">
                <img src="{{ Vite::asset('resources/images/dashboard.png') }}" alt="{{__('Hajj Flights')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('Dashboard')}}</span>
            </a>
            <a href="{{ route('flights') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed]:tooltip-right block" data-tip="{{__('Hajj Flights')}}">
                <img src="{{ Vite::asset('resources/images/flights.png') }}" alt="{{__('Hajj Flights')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('Flights')}}</span>
            </a>
            <a href="{{ route('categories') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed]:tooltip-right block" data-tip="{{__('Flights Categories')}}">
                <img src="{{ Vite::asset('resources/images/categories.png') }}" alt="{{__('Flights Categories')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('Flights Categories')}}</span>
            </a>
            <a href="{{ route('programs') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed]:tooltip-right block" data-tip="{{__('Programs')}}">
                <img src="{{ Vite::asset('resources/images/programs.png') }}" alt="{{__('Programs')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('Programs')}}</span>
            </a>
            <a href="{{ route('hotels') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed]:tooltip-right block" data-tip="{{__('Hotels')}}">
                <img src="{{ Vite::asset('resources/images/hotel.png') }}" alt="{{__('Hotels')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('Hotels')}}</span>
            </a>
            <a href="{{ route('airlines') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed]:tooltip-right block" data-tip="{{__('Airlines')}}">
                <img src="{{ Vite::asset('resources/images/airline.png') }}" alt="{{__('Airlines')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('Airlines')}}</span>
            </a>
            <a href="{{ route('pricing') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed]:tooltip-right block" data-tip="{{__('Pricing')}}">
                <img src="{{ Vite::asset('resources/images/prices.png') }}" alt="{{__('Pricing')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('Pricing')}}</span>
            </a>
            <a href="{{ route('discounts') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed]:tooltip-right block" data-tip="{{__('Discounts')}}">
                <img src="{{ Vite::asset('resources/images/discount.png') }}" alt="{{__('Discounts')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('Discounts')}}</span>
            </a>
            <a href="{{ route('rooms') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed]:tooltip-right block" data-tip="{{__('Rooms')}}">
                <img src="{{ Vite::asset('resources/images/room.png') }}" alt="{{__('Rooms')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('Rooms')}}</span>
            </a>
        </div>
        <div class="">
            <hr class="border-0 border-b opacity-65 mb-5">
            <div class="flex">
                <label for="logout" class="block w-4/12 h-8 flex items-center justify-center group-[.closed]:hidden">
                    <img src="{{ Vite::asset('resources/images/logout.png') }}" alt="{{ __('Logo') }}"  class="h-4/5 opacity-90 cursor-pointer hover:opacity-100 aspect-square">
                </label>
                <a href="{{ route('profile') }}" class="block w-4/12 h-8 flex items-center justify-center group-[.closed]:hidden">
                    <img src="{{ Vite::asset('resources/images/profile.png') }}" alt="{{ __('Logo') }}"  class="h-4/5 opacity-90 cursor-pointer hover:opacity-100 aspect-square">
                </a>
                <a href="{{ route('settings') }}" class="block w-4/12 group-[.closed]:w-full h-8 flex items-center justify-center">
                    <img src="{{ Vite::asset('resources/images/settings.png') }}" alt="{{ __('Logo') }}"  class="h-4/5 opacity-90 cursor-pointer hover:opacity-100 aspect-square">
                </a>
            </div>
        </div>
    </div>
</div>