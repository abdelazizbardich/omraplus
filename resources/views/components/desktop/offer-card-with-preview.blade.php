<div class="relative w-full h-full mt-8">
    <span class="border border-emerald-500 rounded-full py-1 px-4  text-sm font-semibold absolute -top-8 start-0 block z-10">{{__('Best Seller')}}</span>
    <div class="hover:shadow-md duration-300 border border-black-200 bg-white rounded-3xl w-full h-full mt-3 overflow-hidden relative">
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
            <hr class="my-3 opacity-30">
            <div class="flex justify-between items-stretch mb-3 text-black-800 text-sm">
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-16 w-16 rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/hotel icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">الإقامة</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-16 w-16 rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/flight icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">الطيران</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-16 w-16 rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/evisa icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">التأشيرة</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-16 w-16 rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/transport icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">التنقل</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 h-16 w-16 rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/mourchid icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-60">المؤطرين</span>
                </div>
            </div>
            <hr class="my-3 opacity-30">
            <div class="flex justify-between items-center mb-2">
                <div class="flex flex-col">
                    <span class="font-black lining-nums"><span class="text-xl">14.000,00</span> {{__('dh')}} {{__('For a person')}}</span>
                    <span class="text-xs text-nowrap">({{__('Price varies depending on the size of the collection')}})</span>
                </div>
                <div class="bg-yellow-500 shadow w-fit text-nowrap shadow-yellow-700 rounded-md h-full py-2 px-4 text-xl font-black group duration-300 transition-colors cursor-pointer">
                    <em class="fa-solid fa-chevron-left me-2 group-hover:me-1 group-hover:ps-1 duration-300"></em> {{__('Book now')}}
                </div>
            </div>
        </div>
    </div>
</div>