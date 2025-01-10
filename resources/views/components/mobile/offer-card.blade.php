<div class="relative w-full h-full mt-8">
    <span class="border border-emerald-500 rounded-full py-1 px-4  text-xs font-semibold absolute -top-8 start-0 block z-10">{{__('Best Seller')}}</span>
    <div class="hover:shadow-md duration-300 border border-black-200 bg-white rounded-3xl w-full h-full mt-3 overflow-hidden relative">
        <div class="w-full relative mb-8">
            <div class="w-full bg-black-300">
                <img src="{{ Vite::asset('resources/images/umrah2.jpg') }}" class="w-full aspect-video object-cover"  alt="umrah">
            </div>
            <span class="cursor-pointer hover:shadow-lg duration-300 bg-white w-fit py-2 px-3 border rounded-md block text-xs text-center font-bold flex items-center justify-center flex-row absolute m-auto start-0 end-0 -bottom-6">
                <em class="fa-regular fa-eye me-3"></em>{{__('Quick view')}}
            </span>
        </div>
        <div class="p-3">
            <div class="flex">
                <span class="bg-black-900 w-12 h-10 me-3 rounded-md text-white block text-xs text-center font-bold flex items-center justify-center flex-col leading-tight"><span>7</span><span>{{__('Days')}}</span></span>
                <h1 class="font-black text-sm w-full rounded-full w-fit m-auto">عمرة شعبان - من 19 فبراير إلى 06 مارس - عبر الخطوط السعودية</h1>
            </div>
            <hr class="my-3 opacity-30">
            <div class="flex justify-between items-stretch mb-3 text-black-800 text-xs">
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-12 w-12 rounded-full mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/hotel icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60 text-xs">الإقامة</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-12 w-12 rounded-full mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/flight icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60 text-xs">الطيران</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-12 w-12 rounded-full mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/evisa icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60 text-xs">التأشيرة</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-12 w-12 rounded-full mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/transport icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60 text-xs">التنقل</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-12 w-12 rounded-full mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/mourchid icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60 text-xs">المؤطرين</span>
                </div>
            </div>
            <hr class="my-3 opacity-30">
            <div class="flex flex-col justify-between items-center gap-2">
                <div class="flex flex-col w-full">
                    <span class="text-xs block opacity-45 text-base font-bold line-through line-clamp-2 lining-nums">17.000,00 {{__('dh')}}</span>
                    <span class="text-base block font-black lining-nums"><span class="text-2xl">14.000,00</span> {{__('dh')}} {{__('For a person')}}</span>
                    <span class="text-sm font-base block">({{__('Price varies depending on the size of the collection')}})</span>
                </div>
                <div class="flex justify-between gap-2 rounded-3xl bg-black-950 w-full">
                    <a href="#" class="text-white text-base rounded-3xl py-2 px-4 flex font-black justify-center bg-gradient-to-l from-emerald-500 to-emerald-600 items-center bg-emerald-550 w-fit hover:shadow-lg">
                        <em class="fa-brands fa-whatsapp text-base me-2"></em> {{__('The Fast booking')}}
                    </a>
                    <a href="#" class="group text-white text-sm w-fit flex font-black justify-center items-center me-3 hover:shadow-lg hover:">
                        <em class="fa-solid fa-chevron-left me-2 group-hover:me-1 duration-300"></em> {{__('Book now')}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>