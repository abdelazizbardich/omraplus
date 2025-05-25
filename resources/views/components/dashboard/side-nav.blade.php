<div class="p-4 max-w-96 h-full dashboard-side-menu group {{getLanguageDirection()}}">
    <div class="w-full h-full flex flex-col py-4 px-3 text-gray-900 bg-white rounded-lg shadow-lg capitalize font-medium">
        <div class="flex-1 flex flex-col">
            <a href="{{ route('dashboard') }}">
                <img src="{{ Vite::asset('resources/images/logo-d.png') }}" alt="{{ __('index.Logo') }}"  class="w-4/5 mx-auto mb-5 group-[.closed]:hidden">
                <img src="{{ Vite::asset('resources/images/favicon.ico') }}" alt="{{ __('index.Logo') }}"  class="w-4/5 h-12 object-contain aspect-square mx-auto mb-5 hidden group-[.closed]:block">
            </a>
            <hr class="border-0 border-b opacity-65 mb-5">
        </div>
        <div class="overflow-y-auto h-max no-scrollbar">
            <a href="{{ route('dashboard') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed.ltr]:tooltip-right group-[.closed.rtl]:tooltip-left block" data-tip="{{__('index.Dashboard')}}">
                <img src="{{ Vite::asset('resources/images/dashboard.png') }}" alt="{{__('index.Dashboard')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('index.Dashboard')}}</span>
            </a>
            <a href="{{ route('fast-add') }}" class="bg-gradient-to-br from-yellow-300 to-yellow-500 text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed.ltr]:tooltip-right group-[.closed.rtl]:tooltip-left block" data-tip="{{__('index.Fast add')}}">
                <img src="{{ Vite::asset('resources/images/fast-add.png') }}" alt="{{__('index.Fast add')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('index.Fast add')}}</span>
            </a>
            <a href="{{ route('flights') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed.ltr]:tooltip-right group-[.closed.rtl]:tooltip-left block" data-tip="{{__('index.Hajj Flights')}}">
                <img src="{{ Vite::asset('resources/images/flights.png') }}" alt="{{__('index.Hajj Flights')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('index.Flights')}}</span>
            </a>
            <a href="{{ route('categories') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed.ltr]:tooltip-right group-[.closed.rtl]:tooltip-left block" data-tip="{{__('index.Flights Categories')}}">
                <img src="{{ Vite::asset('resources/images/categories.png') }}" alt="{{__('index.Flights Categories')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('index.Flights Categories')}}</span>
            </a>
            <a href="{{ route('programs') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed.ltr]:tooltip-right group-[.closed.rtl]:tooltip-left block" data-tip="{{__('index.Programs')}}">
                <img src="{{ Vite::asset('resources/images/programs.png') }}" alt="{{__('index.Programs')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('index.Programs')}}</span>
            </a>
            <a href="{{ route('hotels') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed.ltr]:tooltip-right group-[.closed.rtl]:tooltip-left block" data-tip="{{__('index.Hotels')}}">
                <img src="{{ Vite::asset('resources/images/hotel.png') }}" alt="{{__('index.Hotels')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('index.Hotels')}}</span>
            </a>
            <a href="{{ route('airlines') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed.ltr]:tooltip-right group-[.closed.rtl]:tooltip-left block" data-tip="{{__('index.Airlines')}}">
                <img src="{{ Vite::asset('resources/images/airline.png') }}" alt="{{__('index.Airlines')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('index.Airlines')}}</span>
            </a>
            <a href="{{ route('pricing') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed.ltr]:tooltip-right group-[.closed.rtl]:tooltip-left block" data-tip="{{__('index.Pricing')}}">
                <img src="{{ Vite::asset('resources/images/prices.png') }}" alt="{{__('index.Pricing')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('index.Pricing')}}</span>
            </a>
            <a href="{{ route('discounts') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed.ltr]:tooltip-right group-[.closed.rtl]:tooltip-left block" data-tip="{{__('index.Discounts')}}">
                <img src="{{ Vite::asset('resources/images/discount.png') }}" alt="{{__('index.Discounts')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('index.Discounts')}}</span>
            </a>
            <a href="{{ route('rooms') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed.ltr]:tooltip-right group-[.closed.rtl]:tooltip-left block" data-tip="{{__('index.Rooms')}}">
                <img src="{{ Vite::asset('resources/images/room.png') }}" alt="{{__('index.Rooms')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('index.Rooms')}}</span>
            </a>
            <a href="{{ route('users') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed.ltr]:tooltip-right group-[.closed.rtl]:tooltip-left block" data-tip="{{__('index.Users')}}">
                <img src="{{ Vite::asset('resources/images/room.png') }}" alt="{{__('index.Users')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('index.Users')}}</span>
            </a>
            <div class="divider  divider-start">{{__('index.Orders')}}</div>
            <a href="{{ route('orders') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed.ltr]:tooltip-right group-[.closed.rtl]:tooltip-left block" data-tip="{{__('index.Orders')}}">
                <img src="{{ Vite::asset('resources/images/orders.png') }}" alt="{{__('index.Orders')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('index.Orders')}}</span>
            </a>
            <div class="divider  divider-start">{{__('index.Blog')}}</div>
            <a href="{{ route('admin.blog') }}" class="text-start cursor-pointer px-2 py-3 hover:bg-gray-200 hover:text-gray-700 rounded block group-[.closed]:tooltip group-[.closed.ltr]:tooltip-right group-[.closed.rtl]:tooltip-left block" data-tip="{{__('index.Articles')}}">
                <img src="{{ Vite::asset('resources/images/articles.png') }}" alt="{{__('index.Articles')}}" class="w-8 inline-block">
                <span class="mx-2 group-[.closed]:hidden">{{__('index.Articles')}}</span>
            </a>
        </div>
        <div>
            <hr class="border-0 border-b opacity-65 mb-5">
            <div class="flex">
                <label for="logout" class="block w-4/12 h-8 flex items-center justify-center group-[.closed]:hidden">
                    <img src="{{ Vite::asset('resources/images/logout.png') }}" alt="{{ __('index.Logo') }}"  class="h-4/5 opacity-90 cursor-pointer hover:opacity-100 aspect-square">
                </label>
                <a href="{{ route('profile.show') }}" class="block w-4/12 h-8 flex items-center justify-center group-[.closed]:hidden">
                    <img src="{{ Vite::asset('resources/images/profile.png') }}" alt="{{ __('index.Logo') }}"  class="h-4/5 opacity-90 cursor-pointer hover:opacity-100 aspect-square">
                </a>
                <a href="{{ route('settings') }}" class="block w-4/12 group-[.closed]:w-full h-8 flex items-center justify-center">
                    <img src="{{ Vite::asset('resources/images/settings.png') }}" alt="{{ __('index.Logo') }}"  class="h-4/5 opacity-90 cursor-pointer hover:opacity-100 aspect-square">
                </a>
            </div>
        </div>
    </div>
</div>