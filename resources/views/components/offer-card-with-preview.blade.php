<div class="relative w-full h-full mt-8">
    <span class="bg-black-900 rounded-full py-1 px-10 text-white text-lg font-semibold absolute -top-8 start-0 block z-10">{{__('Best Seller')}}</span>
    <div class="border border-slate-600 bg-white rounded-3xl w-full h-full mt-3 overflow-hidden relative">
        <div class="w-full relative mb-8">
            <div class="w-full h-60 bg-black-300">
                <img src="{{ Vite::asset('resources/images/umrah2.jpg') }}" class="w-full h-full object-cover"  alt="umrah">
            </div>
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
            <div class="flex justify-between items-stretch mb-2">
                <div class="flex flex-col items-center">
                    <div class="from-yellow-200 to-yellow-300 bg-gradient-to-l h-16 w-16 rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/hotel icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">الإقامة</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="from-yellow-200 to-yellow-300 bg-gradient-to-l h-16 w-16 rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/flight icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">الطيران</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="from-yellow-200 to-yellow-300 bg-gradient-to-l h-16 w-16 rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/evisa icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">التأشيرة</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="from-yellow-200 to-yellow-300 bg-gradient-to-l h-16 w-16 rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/transport icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">التنقل</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="from-yellow-200 to-yellow-300 bg-gradient-to-l h-16 w-16 rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/mourchid icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">المؤطرين</span>
                </div>
            </div>
            <span class="font-black text-lg w-full rounded-full w-fit m-auto underline-offset-8 underline mb-3 block">{{ __('Upcoming flights') }}</span>
            <div class="mb-3">
                <div class="flex items-end justify-between w-full text-sm mb-2">
                    <span class="font-normal">12 نوفمبر</span>
                    <span class="dots flex-1 border-b-2 mb-1 mx-3 border-dotted border-blue-1000 h-full"></span>
                    <span class="font-normal">{{__('with')}} الخطوط الملكية المغربية</span>
                </div>
                <div class="flex items-end justify-between w-full text-sm mb-2">
                    <span class="font-normal">13 نوفمبر</span>
                    <span class="dots flex-1 border-b-2 mb-1 mx-3 border-dotted border-blue-1000 h-full"></span>
                    <span class="font-normal">{{__('with')}} الخطوط الملكية المغربية</span>
                </div>
                <div class="flex items-end justify-between w-full text-sm mb-2">
                    <span class="font-normal">14 نوفمبر</span>
                    <span class="dots flex-1 border-b-2 mb-1 mx-3 border-dotted border-blue-1000 h-full"></span>
                    <span class="font-normal">{{__('with')}} الخطوط الملكية المغربية</span>
                </div>
            </div>
            <div class="flex justify-between items-center mb-2">
                <div class="flex flex-col">
                    <span class="text-xl font-black lining-nums">14.000,00 {{__('dh')}} {{__('For a person')}}</span>
                    <span class="text-xs text-nowrap">({{__('Price varies depending on the size of the collection')}})</span>
                </div>
                <div class="bg-yellow-500 shadow w-fit text-nowrap shadow-yellow-700 rounded-md h-full py-2 px-4 text-xl font-black group duration-300 transition-colors cursor-pointer">
                    <em class="fa-solid fa-chevron-left me-2 group-hover:me-1 group-hover:ps-1 duration-300"></em> {{__('Book now')}}
                </div>
            </div>
        </div>
    </div>
</div>