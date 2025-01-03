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
            <hr class="my-3">
            <p class="text-sm mb-3 line-clamp-3">
                {{__('Lorem ipsum')}} {{__('Lorem ipsum')}}
            </p>
            <span class="font-black text-lg w-full rounded-full w-fit m-auto mb-2 block">{{ __('Upcoming flights') }}</span>
            <div class="mb-3">
                <div class="flex items-end border-b border-black-400 justify-between w-full text-sm mb-2 pb-1">
                <span class="flex items-center">
                    <img src="{{ Vite::asset('resources/images/plane-taking.svg') }}" alt="{{__('Plane Taking Off')}}" class="w-8 h-8 me-1">
                    <span class="font-black text-base text-emerald-550">12 نوفمبر</span>
                </span>    
                    <!-- <span class="dots flex-1 border-b-2 mb-1 mx-3 border-dotted border-blue-1000 h-full"></span> -->
                    <span class="text-base text-black-400">{{__('with')}} الخطوط الملكية المغربية</span>
                </div>
                <div class="flex items-end border-b border-black-200 justify-between w-full text-sm mb-2 pb-1">
                    <span class="flex items-center">
                        <img src="{{ Vite::asset('resources/images/plane-taking.svg') }}" alt="{{__('Plane Taking Off')}}" class="w-8 h-8 me-1">
                        <span class="font-black text-base text-emerald-550">13 نوفمبر</span>
                    </span>    
                    <!-- <span class="dots flex-1 border-b-2 mb-1 mx-3 border-dotted border-blue-1000 h-full"></span> -->
                    <span class="text-base text-black-400">{{__('with')}} الخطوط الملكية المغربية</span>
                </div>
                <div class="flex items-end border-b border-black-200 justify-between w-full text-sm mb-2 pb-1">
                    <span class="flex items-center">
                        <img src="{{ Vite::asset('resources/images/plane-taking.svg') }}" alt="{{__('Plane Taking Off')}}" class="w-8 h-8 me-1">
                        <span class="font-black text-base text-emerald-550">14 نوفمبر</span>
                    </span>    
                    <!-- <span class="dots flex-1 border-b-2 mb-1 mx-3 border-dotted border-blue-1000 h-full"></span> -->
                    <span class="text-base text-black-400">{{__('with')}} الخطوط الملكية المغربية</span>
                </div>
            </div>
            <div class="flex flex-col mb-3">
                <span class="text-2xl font-black lining-nums">14.000,00 {{__('dh')}} {{__('For a person')}}</span>
                <span class="text-xl font-black">({{__('Price varies depending on the size of the collection')}})</span>
            </div>
            <div class="rounded-full bg-black-900 flex justify-between items-stretch w-full ms-1 shadow">
                <div class="hover:shadow bg-emerald-550 text-white rounded-full px-4 p-1 -ms-1 flex items-center hover:bg-emerald-600 hover:shadow-lg cursor-pointer duration-300 transition-colors">
                    <em class="fa-brands fa-whatsapp text-3xl me-3"></em> {{__('The Fast booking')}}
                </div>
                <div class=" text-white rounded-full h-full py-2 px-5 text-xl group duration-300 transition-colors cursor-pointer">
                    <em class="fa-solid fa-chevron-left me-2 group-hover:me-1 duration-300"></em> {{__('Book now')}}
                </div>
            </div>
        </div>
    </div>
</div>