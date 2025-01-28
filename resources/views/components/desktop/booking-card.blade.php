@if($size == 'small')
<div class="w-full">
    <div class="rounded-t-xl text-sm px-3 py-2 pb-5 w-full from-yellow-600  bg-gradient-to-l to-yellow-500">
        <div class="flex items-center">
            <span class="pe-3 text-center font-semibold inline-block">البرنامج الإقتصادي</span>
            <span class="border-e h-3 border-black-700"></span>
            <span class="px-3 text-center font-normal inline-block">8 مقاعد</span>
            <span class="border-e h-3 border-black-700"></span>
            <span class="px-3 text-center font-normal inline-block">بدون وجبات</span>
            <span class="border-e h-3 border-black-700"></span>
            <span class="ps-3 font-normal inline-block">700 متر عن الحرم</span>
            @if($booking->featured)
            <span class="flex-1 w-full flex justify-end ps-3 font-normal inline-block">
                <img src="{{ Vite::asset('resources/images/medal.webp') }}" class="aspect-square h-full object-contain" alt="Offer">
            </span>
            @endif
        </div>
    </div>
    <div class="-mt-3 relative">
        <div class="relative z-10 flex items-stretch justify-between w-full text-lg px-3 py-4 bg-white border border-black-200 rounded-xl shadow-md">
            <div class="h-full">
                <div class="flex w-full gap-x-3 mb-2">
                    <div class="flex flex-1 gap-3 px-3">
                        <img src="{{ Vite::asset('resources/images/mekka-hotel.webp') }}" class="aspect-square h-12" alt="Offer">
                        <div class="flex-1">
                            <span class="block text-xs mb-1 text-nowrap">الفندق في <span class="font-bold">مكة المكرمة</span>:</span>
                            <span class="block px-2 py-1 text-sm font-black bg-emerald-300 rounded-xl w-fit mb-1">أبراج التيسير</span>
                            <a href="#" class="hover:underline text-nowrap block text-xs w-fit">مشاهدة صور الفندق</a>
                        </div>
                    </div>
                    <div class="flex flex-1 gap-3 px-3">
                        <img src="{{ Vite::asset('resources/images/media-hotel.webp') }}" class="aspect-square h-12" alt="Offer">
                        <div class="flex-1">
                            <span class="block text-xs mb-1 text-nowrap">الفندق في <span class="font-bold">المدينة المنورة</span>:</span>
                            <span class="block px-2 py-1 text-sm font-black bg-emerald-300 rounded-xl w-fit mb-1">المنطقة المكزية</span>
                            <a href="#" class="hover:underline text-nowrap block text-xs w-fit">مشاهدة صور الفندق</a>
                        </div>
                    </div>
                </div>
                <hr class="my-3 opacity-30">
                <div class="flex justify-between items-center gap-3">
                    <!-- <span class="underline w-fit underline-offset-3 text-nowrap">اختر نوع الغرفة:</span> -->
                    <div class="h-auto w-full">
                        <input hidden class="peer" type="radio" name="room_type" id="room-2">
                        <label for="room-2" class="peer-checked:bg-black-1000 border-black-300 peer-checked:text-white btn btn-outline w-full px-2 py-1 h-auto text-wrap text-xs text-nowrap font-bold">غرفة ثنائية</label>
                    </div>
                    <div class="h-auto w-full">
                        <input hidden class="peer" type="radio" name="room_type" id="room-3">
                        <label for="room-3" class="peer-checked:bg-black-1000 border-black-300 peer-checked:text-white btn btn-outline w-full px-2 py-1 h-auto text-wrap text-xs text-nowrap font-bold">غرفة ثلاثية</label>
                    </div>
                    <div class="h-auto w-full">
                        <input hidden class="peer" type="radio" name="room_type" id="room-4">
                        <label for="room-4" class="peer-checked:bg-black-1000 border-black-300 peer-checked:text-white btn btn-outline w-full px-2 py-1 h-auto text-wrap text-xs text-nowrap font-bold">غرفة رباعية</label>
                    </div>
                    <div class="h-auto w-full">
                        <input hidden class="peer" type="radio" name="room_type" id="room-5">
                        <label for="room-5" class="peer-checked:bg-black-1000 border-black-300 peer-checked:text-white btn btn-outline w-full px-2 py-1 h-auto text-wrap text-xs text-nowrap font-bold">غرفة خماسية</label>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-between items-start border-s border-black-200 ms-6 ps-6">
                <div class="w-full mb-3">
                    <span class="block opacity-45 text-xs font-bold line-through line-clamp-2 lining-nums">17.000,00 {{__('dh')}}</span>
                    <span class="text-xs block font-black lining-nums"><span class="text-3xl">14.000,00</span> {{__('dh')}} {{__('For a person')}}</span>
                    <span class="text-xs font-base block">({{__('Price varies depending on the size of the collection')}})</span>
                </div>
                <a href="{{ route('checkout', $booking->id) }}" class="py-3 text-center border-0 rounded-xl w-full from-yellow-600  bg-gradient-to-l to-yellow-500 shadow hover:shadow-md duration-300 text-nowrap shadow-yellow-700 hover:shadow-yellow-600 px-4 text-sm font-bein-black group duration-300 transition-colors cursor-pointer">
                    <em class="text-xs fa-solid fa-chevron-left me-2 group-hover:me-1 group-hover:ps-1 duration-300"></em> {{__('Booook now')}}
                </a>
            </div>
        </div>
        <input type="checkbox" class="peer" id="group-discount" hidden class="hidden">
        <div class="overflow-hidden pt-5 -mt-32 w-fit flex flex-nowrap flex-col rounded-b-xl border border-black-200 text-base peer-checked:-mt-4 peer-checked:pt-3">
            <div class="p-3 pt-6 gap-y-3 bg-white">
                <div class="flex items-center justify-between w-full text-xs">
                    <span class="flex items-center flex-1">
                        <span class="text-xs text-nowrap">شخصين - 3 أشخاص</span>
                    </span>    
                    <span class="dots max-w-12 flex-1 border-b-2 mx-6 border-dotted border-blue-1000 h-full text-nowrap"></span>
                    <span class="text-sm font-bold text-nowrap">13.000,0 {{__('dh')}}</span>
                </div>
                <div class="flex items-center justify-between w-full text-xs">
                    <span class="flex items-center flex-1">
                        <span class="text-xs text-nowrap">3 أشخاص - 5 أشخاص</span>
                    </span>    
                    <span class="dots max-w-12 flex-1 border-b-2 mx-6 border-dotted border-blue-1000 h-full text-nowrap"></span>
                    <span class="text-sm font-bold text-nowrap">12.000,0 {{__('dh')}}</span>
                </div>
                <div class="flex items-center justify-between w-full text-xs">
                    <span class="flex items-center flex-1">
                        <span class="text-xs text-nowrap">5 أشخاص - 8 أشخاص</span>
                    </span>    
                    <span class="dots max-w-12 flex-1 border-b-2 mx-6 border-dotted border-blue-1000 h-full text-nowrap"></span>
                    <span class="text-sm font-bold text-nowrap">11.000,0 {{__('dh')}}</span>
                </div>
            </div>
            <div class="divider m-0 p-0 h-auto"></div>
            <label for="group-discount" class="from-yellow-400  bg-gradient-to-l to-yellow-300 px-6 w-full pt-1 flex flex-nowrap text-nowrap flex-row justify-between items-center">
                <span class="font-semibold text-xs">
                    تخفيضات متاحة للمجموعات
                </span>
                <span class="w-full duration-300 text-nowrap  py-2 px-4 text-xs font-black group cursor-pointer">
                    <em class="fa-solid fa-chevron-left me-2 group-hover:me-1 group-hover:ps-1 duration-300"></em> {{__('push here')}}
                </span>
            </label>
        </div>
    </div>
</div>
@else
    <div class="w-full">
        <div class="flex rounded-t-xl px-6 py-3 pb-5 w-full from-yellow-600  bg-gradient-to-l to-yellow-500">
            <span class="pe-3 text-center font-semibold inline-block">البرنامج الإقتصادي</span>
            <span class="border-e border-black-700"></span>
            <span class="px-3 text-center font-normal inline-block">8 مقاعد</span>
            <span class="border-e border-black-700"></span>
            <span class="px-3 text-center font-normal inline-block">بدون وجبات</span>
            <span class="border-e border-black-700"></span>
            <span class="ps-3 font-normal inline-block">700 متر عن الحرم</span>
            @if($booking->featured)
            <span class="flex-1 w-full flex justify-end ps-3 font-normal inline-block">
                <img src="{{ Vite::asset('resources/images/medal.webp') }}" class="aspect-square h-full object-contain" alt="Offer">
            </span>
            @endif
        </div>
        <div class="-mt-3 relative">
            <div class="relative z-10 flex items-stretch justify-between w-full text-lg px-6 py-4 bg-white border border-black-200 rounded-xl shadow-md">
                <div class="flex-1 h-full">
                    <div class="flex w-full gap-x-3 mb-2">
                        <div class="flex flex-1 gap-3 px-3">
                            <img src="{{ Vite::asset('resources/images/mekka-hotel.webp') }}" class="aspect-square h-20" alt="Offer">
                            <div class="flex-1">
                                <span class="block text-sm mb-1 text-nowrap">الفندق في <span class="font-bold">مكة المكرمة</span>:</span>
                                <span class="block px-3 py-2 text-xl font-black bg-emerald-300 rounded-xl w-fit mb-1">أبراج التيسير</span>
                                <a href="#" class="hover:underline text-nowrap block text-xs w-fit">مشاهدة صور الفندق</a>
                            </div>
                        </div>
                        <div class="flex flex-1 gap-3 px-3">
                            <img src="{{ Vite::asset('resources/images/media-hotel.webp') }}" class="aspect-square h-20" alt="Offer">
                            <div class="flex-1">
                                <span class="block text-sm mb-1 text-nowrap">الفندق في <span class="font-bold">المدينة المنورة</span>:</span>
                                <span class="block px-3 py-2 text-xl font-black bg-emerald-300 rounded-xl w-fit mb-1">المنطقة المكزية</span>
                                <a href="#" class="hover:underline text-nowrap block text-xs w-fit">مشاهدة صور الفندق</a>
                            </div>
                        </div>
                    </div>
                    <hr class="my-3 opacity-30">
                    <div class="flex justify-between items-center gap-3">
                        <span class="underline w-fit underline-offset-3 text-nowrap">اختر نوع الغرفة:</span>
                        <div class="h-auto w-full">
                            <input hidden class="peer" type="radio" name="room_type" id="room-2">
                            <label for="room-2" class="peer-checked:bg-black-1000 border-black-300 peer-checked:text-white btn btn-outline w-full px-3 py-1 text-wrap text-base text-nowrap font-bold">غرفة ثنائية</label>
                        </div>
                        <div class="h-auto w-full">
                            <input hidden class="peer" type="radio" name="room_type" id="room-3">
                            <label for="room-3" class="peer-checked:bg-black-1000 border-black-300 peer-checked:text-white btn btn-outline w-full px-3 py-1 text-wrap text-base text-nowrap font-bold">غرفة ثلاثية</label>
                        </div>
                        <div class="h-auto w-full">
                            <input hidden class="peer" type="radio" name="room_type" id="room-4">
                            <label for="room-4" class="peer-checked:bg-black-1000 border-black-300 peer-checked:text-white btn btn-outline w-full px-3 py-1 text-wrap text-base text-nowrap font-bold">غرفة رباعية</label>
                        </div>
                        <div class="h-auto w-full">
                            <input hidden class="peer" type="radio" name="room_type" id="room-5">
                            <label for="room-5" class="peer-checked:bg-black-1000 border-black-300 peer-checked:text-white btn btn-outline w-full px-3 py-1 text-wrap text-base text-nowrap font-bold">غرفة خماسية</label>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-between items-start border-s border-black-200 ms-6 ps-6">
                    <div class="w-full mb-6">
                        <span class="block opacity-45 text-base font-bold line-through line-clamp-2 lining-nums">17.000,00 {{__('dh')}}</span>
                        <span class="text-xl block font-black lining-nums"><span class="text-3xl">14.000,00</span> {{__('dh')}} {{__('For a person')}}</span>
                        <span class="text-sm font-base block">({{__('Price varies depending on the size of the collection')}})</span>
                    </div>
                    <a href="{{ route('checkout', $booking->id) }}" class="btn border-0 rounded-xl w-full from-yellow-600  bg-gradient-to-l to-yellow-500 shadow hover:shadow-md duration-300 text-nowrap shadow-yellow-700 hover:shadow-yellow-600 px-4 text-xl font-bein-black group duration-300 transition-colors cursor-pointer">
                        <em class="text-base fa-solid fa-chevron-left me-2 group-hover:me-1 group-hover:ps-1 duration-300"></em> {{__('Booook now')}}
                    </a>
                </div>
            </div>
            <input type="checkbox" class="peer" id="group-discount" hidden class="hidden">
            <div class="overflow-hidden pt-5 -mt-36 w-fit flex flex-nowrap flex-col rounded-b-xl border border-black-200 text-base peer-checked:-mt-4 peer-checked:pt-3">
                <div class="p-3 pt-6 gap-y-3">
                    <div class="flex items-center justify-between w-full text-sm">
                        <span class="flex items-center flex-1">
                            <span class="text-base text-nowrap">شخصين - 3 أشخاص</span>
                        </span>    
                        <span class="dots max-w-12 flex-1 border-b-2 mx-6 border-dotted border-blue-1000 h-full text-nowrap"></span>
                        <span class="text-lg font-bold text-nowrap">13.000,0 {{__('dh')}}</span>
                    </div>
                    <div class="flex items-center justify-between w-full text-sm">
                        <span class="flex items-center flex-1">
                            <span class="text-base text-nowrap">3 أشخاص - 5 أشخاص</span>
                        </span>    
                        <span class="dots max-w-12 flex-1 border-b-2 mx-6 border-dotted border-blue-1000 h-full text-nowrap"></span>
                        <span class="text-lg font-bold text-nowrap">12.000,0 {{__('dh')}}</span>
                    </div>
                    <div class="flex items-center justify-between w-full text-sm">
                        <span class="flex items-center flex-1">
                            <span class="text-base text-nowrap">5 أشخاص - 8 أشخاص</span>
                        </span>    
                        <span class="dots max-w-12 flex-1 border-b-2 mx-6 border-dotted border-blue-1000 h-full text-nowrap"></span>
                        <span class="text-lg font-bold text-nowrap">11.000,0 {{__('dh')}}</span>
                    </div>
                </div>
                <div class="divider m-0 p-0 h-auto"></div>
                <label for="group-discount" class="from-yellow-400  bg-gradient-to-l to-yellow-300 px-6 w-full flex flex-nowrap text-nowrap flex-row justify-between items-center">
                    <span class="font-semibold">
                        تخفيضات متاحة للمجموعات
                    </span>
                    <span class="w-full duration-300 text-nowrap  py-2 px-4 text-xl font-black group cursor-pointer">
                        <em class="fa-solid fa-chevron-left me-2 group-hover:me-1 group-hover:ps-1 duration-300"></em> {{__('push here')}}
                    </span>
                </label>
            </div>
        </div>
    </div>
@endif