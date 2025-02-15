<div class="p-4 w-96 h-full">
    <div class="w-full h-full py-4 px-2 text-gray-900 bg-white rounded-lg shadow-lg capitalize font-medium">
        <a href="{{ route('dashboard') }}">
            <img src="{{ Vite::asset('resources/images/logo-d.png') }}" alt="{{ __('Logo') }}"  class="w-4/5 mx-auto mb-5">
        </a>
        <hr class="border-0 border-b opacity-65 mb-5">
        <span class="cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block">
            <i class="w-8 fa-solid fa-table-columns p-2 bg-gray-200 rounded-full"></i>
            <span class="mx-2">{{__('Dashboard')}}</span>
        </span>
        <span class="cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block">
            <img src="{{ Vite::asset('resources/images/flights.png') }}" alt="{{__('Hajj Flights')}}" class="w-8 inline-block">
            <span class="mx-2">{{__('Hajj Flights')}}</span>
        </span>
        <span class="cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block">
            <img src="{{ Vite::asset('resources/images/programs.png') }}" alt="{{__('Programs')}}" class="w-8 inline-block">
            <span class="mx-2">{{__('Programs')}}</span>
        </span>
        <span class="cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block">
            <img src="{{ Vite::asset('resources/images/hotel.png') }}" alt="{{__('Hotels')}}" class="w-8 inline-block">
            <span class="mx-2">{{__('Hotels')}}</span>
        </span>
        <span class="cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block">
            <img src="{{ Vite::asset('resources/images/airline.png') }}" alt="{{__('Airlines')}}" class="w-8 inline-block">
            <span class="mx-2">{{__('Airlines')}}</span>
        </span>
        <span class="cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block">
            <img src="{{ Vite::asset('resources/images/prices.png') }}" alt="{{__('Pricing')}}" class="w-8 inline-block">
            <span class="mx-2">{{__('Pricing')}}</span>
        </span>
        <span class="cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block">
            <img src="{{ Vite::asset('resources/images/discount.png') }}" alt="{{__('Discounts')}}" class="w-8 inline-block">
            <span class="mx-2">{{__('Discounts')}}</span>
        </span>
    </div>
</div>