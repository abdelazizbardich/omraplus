<div class="bg-white w-screen h-screen">
    <div class="flex h-full">
        <div class="w-3/5 relative flex items-center justify-center">
            <img src="{{  Vite::asset('resources/images/mission-1.jpg')}}" alt="" class="w-full h-full object-cover opacity-15 absolute start-0 top-0">
            <div class="w-11/12 mx-auto">
                <h1 class="drop-shadow-md text-4xl leading-relaxed mb-5 font-bold">{{ __('hero header title') }} <br> {{ __('hero header title 2') }}</h1>
                <p class="text-xl leading-relaxed">{{ __('hero header description') }}</p>
            </div>
        </div>
        <div class="w-2/5 bg-blue-950 h-full flex flex-col items-center justify-center">
            <div>
                {{ $logo }}
            </div>
        
            <div class="sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
