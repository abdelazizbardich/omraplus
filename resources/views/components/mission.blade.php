<div class="w-full">
    <div class="mb-16 w-full">
        <span class="text-blue-950 text-lg block w-full font-semibold mb-6">{{__('About us')}}</span>
        <h2 class="text-4xl font-bold mb-6">{{__('mission title')}}</h2>
        <p class="text-base mb-4 w-6/12">{{__('mission description')}}</p>
    </div>
    <div class="flex items-start flex-row justify-center w-full gap-12">
        <div class="w-6/12">
            <div class="mb-16">
                <span class="text-xl block w-full font-semibold mb-6">{{__('Our mission')}}</span>
                <p class="text-base mb-4">{{ __('mission description') }} {{ __('mission description') }}</p>
                <p class="text-base mb-4">{{ __('mission description') }} {{ __('mission description') }}</p>
            </div>
            <div class="mb-16">
                <span class="text-xl block w-full font-semibold mb-6">{{__('The numbers')}}</span>
                <hr class="w-16 border border-black-100 opacity-65 w-full mb-6">
                <div class="grid w-fit">
                    <div class="grid grid-cols-2 gap-y-8 gap-x-16">
                        <div class="flex items center justify-center flex-col">
                            <span class="text-6xl font-bold">$150M</span>
                            <span class="text-lg font-medium ml-2 opacity-65">{{__('Raised')}}</span>
                        </div>
                        <div class="flex items center justify-center flex-col">
                            <span class="text-6xl font-bold">30k</span>
                            <span class="text-lg font-medium ml-2 opacity-65">{{__('Companies')}}</span>
                        </div>
                        <div class="flex items center justify-center flex-col">
                            <span class="text-6xl font-bold">1.5M</span>
                            <span class="text-lg font-medium ml-2 opacity-65">{{__('Deals Closed')}}</span>
                        </div>
                        <div class="flex items center justify-center flex-col">
                            <span class="text-6xl font-bold">200M</span>
                            <span class="text-lg font-medium ml-2 opacity-65">{{__('Deals Generated')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-6/12 -mt-20">
            <div class="grid grid-cols-2 grid-rows-2 gap-12">
                <div class="flex items-center justify-center -translate-y-28">
                    <img src="{{ Vite::asset('resources/images/mission-1.jpg') }}" alt="mission-1" class="w-full h-full object-cover rounded-xl shadow-2xl aspect-square object-cover">
                </div>
                <div class="flex items-center justify-center">
                    <img src="{{ Vite::asset('resources/images/mission-2.jpg') }}" alt="mission-2" class="w-full h-full object-cover rounded-xl shadow-2xl aspect-square object-cover">
                </div>
                <div class="flex items-center justify-center -translate-y-28">
                    <img src="{{ Vite::asset('resources/images/mission-3.jpg') }}" alt="mission-3" class="w-full h-full object-cover rounded-xl shadow-2xl aspect-square object-cover">
                </div>
                <div class="flex items-center justify-center">
                    <img src="{{ Vite::asset('resources/images/mission-4.jpg') }}" alt="mission-4" class="w-full h-full object-cover rounded-xl shadow-2xl aspect-square object-cover">
                </div>
            </div>
        </div>
    </div>
</div>