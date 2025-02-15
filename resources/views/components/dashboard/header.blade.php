<div class="p-4 w-full">
    <div class="p-2 text-gray-900 bg-white rounded-lg shadow-md flex justify-between items-center">
        <label class="btn btn-circle swap swap-rotate">
            <input type="checkbox" hidden class="hidden"/>
            <svg class="swap-on fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
            </svg>
            <svg class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                <polygon points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49" />
            </svg>
        </label>
        <label for="logout" href="{{route('logout')}}" class="cursor-pointer hover:text-gray-700 flex items-center justify-center">
        <img src="{{ Vite::asset('resources/images/logout.png') }}" alt="{{ __('Logo') }}"  class="me-3 h-6 opacity-90 cursor-pointer hover:opacity-100 aspect-square">
        </label>
        <form action="{{route('logout')}}" class="hidden" method="post">
            @csrf
            <button id="logout"></button>
        </form>
    </div>
</div>