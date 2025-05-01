<div class="scroll-animate relative w-full h-full mt-8 offer-card">
    @if($data->is_recommended)
        <span class="border border-emerald-500 rounded-full py-1 px-4  text-sm font-semibold absolute -top-8 start-0 block z-10">{{__('index.Best Seller')}}</span>
    @endif
    <div class="z-10 hover:shadow-md duration-300 border border-black-200 bg-white featured rounded-3xl w-full h-full mt-3 overflow-hidden relative">
        <div class="w-full relative mb-8">
            <div class="w-full h-60 bg-black-300">
                <a href="{{route('flight', $data->id)}}">
                    <img onerror="this.onerror=null;this.src='{{ Vite::asset('resources/images/not-found.webp') }}';" loading="lazy" src="{{ @$data->photos()->where('is_main',1)->first()->url }}" class="w-full h-full object-cover"  alt="umrah">
                </a>
            </div>
            <span data-id="{{ $data }}" class="quick-view cursor-pointer hover:shadow-lg duration-300 bg-white w-fit py-2 px-3 border rounded-md block text-xl text-center font-bold flex items-center justify-center flex-row absolute m-auto start-0 end-0 -bottom-6">
                <em class="fa-regular fa-eye me-3"></em>{{__('index.Quick view')}}
            </span>
        </div>
        <div class="p-3">
            <div class="flex">
                <span class="bg-black-900 w-20 h-16 me-3 rounded-md text-white block text-base text-center font-bold flex items-center justify-center flex-col leading-5">
                    <span>
                        {{ moment($data->going_date)->from($data->return_date)->getDays() }}
                    </span>
                    <span>
                        @if(moment($data->going_date)->from($data->return_date)->getDays() > 10)
                            {{__('index.day')}}
                        @else
                            {{__('index.Days')}}
                        @endif
                    </span>
                </span>
                <h1 class="font-black text-lg w-full rounded-full w-fit m-auto">{{ $data->title }}</h1>
            </div>
            <hr class="my-3 opacity-30">
            <div class="flex justify-between items-stretch mb-3 text-black-800 text-sm">
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-16 w-16 rounded-xl mb-1 overflow-hidden p-1">
                        <img loading="lazy" src="{{ Vite::asset('resources/images/hotel icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">{{__('index.Accommodation')}}</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-16 w-16 rounded-xl mb-1 overflow-hidden p-1">
                        <img loading="lazy" src="{{ Vite::asset('resources/images/flight icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">{{__('index.Aviation')}}</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-16 w-16 rounded-xl mb-1 overflow-hidden p-1">
                        <img loading="lazy" src="{{ Vite::asset('resources/images/evisa icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">{{__('index.Visa')}}</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-16 w-16 rounded-xl mb-1 overflow-hidden p-1">
                        <img loading="lazy" src="{{ Vite::asset('resources/images/transport icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">{{__('index.Mobility')}}</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-16 w-16 rounded-xl mb-1 overflow-hidden p-1">
                        <img loading="lazy" src="{{ Vite::asset('resources/images/mourchid icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">{{__('index.Framers')}}</span>
                </div>
            </div>
            <div class="">
                <div class="flex items-center justify-between w-full text-base mb-2 px-3 py-2 bg-black-50 rounded-xl">
                    <span class="font-normal text-base">{{__('index.going')}}</span>
                    <span class="dots flex-1 border-b mx-3 border-black-400 h-full"></span>
                    <span class="flex items-center">
                        <img loading="lazy" src="{{ Vite::asset('resources/images/plane.webp') }}" alt="{{__('index.Plane')}}" class="w-6 h-6 me-3">
                        <span class="font-normal text-base">{{ $data->going_date }}</span>
                    </span>
                </div>
                <div class="flex items-center justify-between w-full text-base px-3 py-2  bg-black-50 rounded-xl">
                    <span class="flex items-center">
                        <span class="font-normal text-base">{{ __('index.Return') }}</span>
                        <img loading="lazy" src="{{ Vite::asset('resources/images/plane.webp') }}" alt="{{__('index.Plane')}}" class="w-6 -scale-x-100 h-6 ms-3">
                    </span>
                    <span class="dots flex-1 border-b mx-3 border-black-400 h-full"></span>
                    <span class="font-normal text-base">{{ $data->return_date }}</span>
                </div>
            </div>
            <hr class="my-3 opacity-30">
            < class="flex justify-between items-center mb-2">
                <div class="flex flex-col justify-center">
                    <span class="font-black lining-nums"><span class="text-xl">{{ money(@$data->getLowestPrice()->price) }}</span> {{__('index.dh')}} {{__('index.For a person')}}</span>
                    <span class="text-xs text-nowrap">({{__('index.Price varies depending on the size of the collection')}})</span>
                </div>
                <a href="{{ route('flight', $data->id) }}" class="bg-yellow-500 shadow w-fit text-nowrap shadow-yellow-700 rounded-md h-full py-2 px-4 text-xl font-black group duration-300 transition-colors cursor-pointer">
                    <em class="fa-solid fa-chevron-left me-2 group-hover:me-1 group-hover:ps-1 duration-300"></em> {{__('index.Book now')}}
                </a>
            </div>
        </div>
    </div>
    @if($data->is_recommended)
    <div class="overflow-hidden -mt-6 w-full flex flex-nowrap flex-col rounded-b-3xl border-t-0 border border-black-200 text-base">
        <span for="group-discount" class="from-yellow-500 pb-3 pt-9 text-lg bg-gradient-to-r to-yellow-600 px-6 w-full flex flex-nowrap text-nowrap flex-row justify-between items-center">
            <span class="font-semibold">
                {{ __('index.Recommended Offer') }}
            </span>
            <img loading="lazy" src="{{ Vite::asset('resources/images/medal.webp') }}" class="aspect-square h-full object-contain" alt="Offer">
        </span>
    </div>
    @endif
</div>

<x-offer-details-modal :data=$data></x-offer-details-modal>