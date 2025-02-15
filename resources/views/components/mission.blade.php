<div class="w-full">
    <div class="mb-16 w-full">
        <span class="text-blue-950 text-lg block w-full font-semibold mb-6">{{__('About us')}}</span>
        <h2 class="text-4xl font-bold mb-6">{{__('mission title')}}</h2>
        <p class="text-base mb-4 w-6/12">{{__('about.omraplus')}}</p>
        <p class="text-base mb-4 w-6/12">{{__('about.experience')}}</p>
        <p class="text-base mb-4 w-6/12">{{__('about.mission')}}</p>
    </div>
    <div class="flex items-start flex-row justify-center w-full gap-12">
        <div class="w-7/12">
            <div class="mb-8">
                <span class="text-xl block w-full font-semibold mb-6">{{__('why.omraplus')}}</span>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center">
                    <div class="">
                        <li class="text-lg list-disc block w-full font-semibold mb-6">{{__('why.various_packages')}}</li>
                        <p class="text-base mb-4 text-justify">{{ __('why.various_packages.description') }}</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="">
                        <li class="text-lg list-disc block w-full font-semibold mb-6">{{__('why.hotel_reservations')}}</li>
                        <p class="text-base mb-4 text-justify">{{ __('why.hotel_reservations.description') }}</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="">
                        <li class="text-lg list-disc block w-full font-semibold mb-6">{{__('why.transport_services')}}</li>
                        <p class="text-base mb-4 text-justify">{{ __('why.transport_services.description') }}</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="">
                        <li class="text-lg list-disc block w-full font-semibold mb-6">{{__('why.religious_guidance')}}</li>
                        <p class="text-base mb-4 text-justify">{{ __('why.religious_guidance.description') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-5/12 -mt-20">
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