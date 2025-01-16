<div class="relative w-full h-full mt-8">
<span class="border border-emerald-500 rounded-full py-1 px-4  text-sm font-semibold absolute -top-8 start-0 block z-10">{{__('Best Seller')}}</span>
    <div class="z-10 hover:shadow-md duration-300 border border-black-200 bg-white featured rounded-3xl w-full h-full mt-3 overflow-hidden relative">
        <div class="w-full relative mb-2">
            <div class="w-full bg-black-300">
                <img src="{{ Vite::asset('resources/images/umrah2.jpg') }}" class="w-full h-full object-cover aspect-video"  alt="umrah">
            </div>
        </div>
        <div class="p-3">
            <div class="flex">
                <span class="bg-black-900 w-16 h-12 me-3 rounded-md text-white block text-xs text-center font-bold flex items-center justify-center flex-col leading-5"><span>7</span><span>{{__('Days')}}</span></span>
                <h1 class="font-black text-sm w-full rounded-full w-fit m-auto">عمرة شعبان - من 19 فبراير إلى 06 مارس - عبر الخطوط السعودية</h1>
            </div>
            <hr class="my-3 opacity-30">
            <div class="flex justify-between items-stretch mb-3 text-black-800 text-sm">
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-10 w-10 rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/hotel icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">الإقامة</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-10 w-10 rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/flight icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">الطيران</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-10 w-10 rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/evisa icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">التأشيرة</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-10 w-10 rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/transport icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">التنقل</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-10 w-10 rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/mourchid icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">المؤطرين</span>
                </div>
            </div>
            <div class="">
                <div class="flex items-center justify-between w-full text-sm mb-2 px-3 py-2 bg-black-50 rounded-xl">
                    <span class="font-normal text-sm">الذهاب</span>
                    <span class="dots flex-1 border-b mx-3 border-black-400 h-full"></span>
                    <span class="flex items-center">
                        <img src="{{ Vite::asset('resources/images/plane.webp') }}" alt="{{__('Plane')}}" class="w-4 me-3">
                        <span class="font-normal text-sm">19 فبراير 2024</span>
                    </span>
                </div>
                <div class="flex items-center justify-between w-full text-sm px-3 py-2  bg-black-50 rounded-xl">
                    <span class="flex items-center">
                        <span class="font-normal text-sm">العودة</span>
                        <img src="{{ Vite::asset('resources/images/plane.webp') }}" alt="{{__('Plane')}}" class="w-4 -scale-x-100 ms-3">
                    </span>
                    <span class="dots flex-1 border-b mx-3 border-black-400 h-full"></span>
                    <span class="font-normal text-sm">19 مارس 2024</span>
                </div>
            </div>
            <hr class="my-3 opacity-30">
            <div class="flex flex-col gap-3 justify-between items-center mb-2">
                <div class="flex flex-col">
                    <span class=" font-black lining-nums text-sm"><span class="text-xl">14.000,00</span> {{__('dh')}} {{__('For a person')}}</span>
                    <span class="text-xs text-nowrap">({{__('Price varies depending on the size of the collection')}})</span>
                </div>
                <div class="w-full text-center bg-yellow-500 shadow w-fit text-nowrap shadow-yellow-700 rounded-md h-full py-2 px-4 text-xl font-black group duration-300 transition-colors cursor-pointer">
                    <em class="fa-solid fa-chevron-left me-2 group-hover:me-1 group-hover:ps-1 duration-300"></em> {{__('Book now')}}
                </div>
            </div>
        </div>
    </div>
    @if($featured)
    <div class="overflow-hidden -mt-6 w-full flex flex-nowrap flex-col rounded-b-3xl border-t-0 border border-black-200 text-base">
        <span for="group-discount" class="from-yellow-500 pb-3 pt-9 text-lg bg-gradient-to-r to-yellow-600 px-6 w-full flex flex-nowrap text-nowrap flex-row justify-between items-center">
            <span class="font-semibold">
                العرض الموصي به
            </span>
            <img src="{{ Vite::asset('resources/images/medal.webp') }}" class="aspect-square h-full object-contain" alt="Offer">
        </span>
    </div>
    @endif
</div>