<div class="relative w-full h-full mt-8">
    <span class="bg-black-900 rounded-full py-1 px-10 text-white text-lg font-semibold absolute -top-8 start-0 block z-10">{{__('Best Seller')}}</span>
    <div class="border bg-white border-slate-600 rounded-3xl w-full h-full mt-3 overflow-hidden relative">
        <div class="w-full relative mb-8">
            <img src="{{ Vite::asset('resources/images/umrah.jpg') }}" class="w-full h-80" alt="umrah">
            <span class="cursor-pointer hover:shadow-lg duration-300 bg-white w-fit py-2 px-3 border rounded-md block text-xl text-center font-bold flex items-center justify-center flex-row absolute m-auto start-0 end-0 -bottom-6">
                <em class="fa-regular fa-eye me-3"></em>{{__('Quick view')}}
            </span>
        </div>
        <div class="p-3">
            <div class="flex">
                <span class="bg-black-900 w-20 h-16 me-3 rounded-md text-white block text-base text-center font-bold flex items-center justify-center flex-col leading-5"><span>7</span><span>{{__('Days')}}</span></span>
                <h1 class="font-black text-lg w-full rounded-full w-fit m-auto">عمرة شعبان - من 19 فبراير إلى 06 مارس - عبر الخطوط السعودية</h1>
            </div>
            <hr class="my-3 opacity-30">
            <p class="text-sm mb-3 line-clamp-3">
                {{__('Lorem ipsum')}} {{__('Lorem ipsum')}}
            </p>
            <span class="font-black text-lg w-full rounded-full w-fit m-auto mb-2 block">{{ __('Upcoming flights') }}</span>
            <div class="mb-4">
                <div class="flex items-end justify-between w-full text-sm mb-2">
                    <span class="flex items-end">
                        <img src="{{ Vite::asset('resources/images/plane-taking.svg') }}" alt="{{__('Plane Taking Off')}}" class="w-8 h-8 me-1 -mb-1">
                        <span class="font-black">12 نوفمبر</span>
                    </span>
                    <span class="dots flex-1 border-b-2 mb-1 mx-3 border-dotted border-blue-1000 h-full"></span>
                    <span class="font-normal opacity-60">{{__('with')}} الخطوط الملكية المغربية</span>
                </div>
                <div class="flex items-end justify-between w-full text-sm mb-2">
                <span class="flex items-end">
                    <img src="{{ Vite::asset('resources/images/plane-taking.svg') }}" alt="{{__('Plane Taking Off')}}" class="w-8 h-8 me-1 -mb-1">
                    <span class="font-black">13 نوفمبر</span>
                </span>
                    <span class="dots flex-1 border-b-2 mb-1 mx-3 border-dotted border-blue-1000 h-full"></span>
                    <span class="font-normal opacity-60">{{__('with')}} الخطوط الملكية المغربية</span>
                </div>
                <div class="flex items-end justify-between w-full text-sm mb-2">
                <span class="flex items-end">
                    <img src="{{ Vite::asset('resources/images/plane-taking.svg') }}" alt="{{__('Plane Taking Off')}}" class="w-8 h-8 me-1 -mb-1">
                    <span class="font-black">14 نوفمبر</span>
                </span>
                    <span class="dots flex-1 border-b-2 mb-1 mx-3 border-dotted border-blue-1000 h-full"></span>
                    <span class="font-normal opacity-60">{{__('with')}} الخطوط الملكية المغربية</span>
                </div>
            </div>
            <hr class="my-3 opacity-30">
            <div class="flex flex-col mb-3">
                <span class="font-black lining-nums"><span class="text-2xl">14.000,00</span> {{__('dh')}} {{__('For a person')}}</span>
                <span class="text-md">({{__('Price varies depending on the size of the collection')}})</span>
            </div>
            <div class="flex justify-between gap-2">
                <a href="#" class="text-base flex font-black justify-center bg-gradient-to-l from-emerald-500 to-emerald-600 items-center btn bg-emerald-550 flex-1 hover:shadow-lg">
                    <em class="fa-brands fa-whatsapp text-2xl me-2"></em> {{__('The Fast booking')}}
                </a>
                <a href="#" class="group text-base flex font-black justify-center items-center btn bg-gradient-to-l from-yellow-500 to-yellow-600 flex-1 hover:shadow-lg hover:">
                    <em class="fa-solid fa-chevron-left me-2 group-hover:me-1 duration-300"></em> {{__('Book now')}}
                </a>
            </div>
        </div>
    </div>
</div>