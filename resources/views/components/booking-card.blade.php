<div class="w-full packages">
    <div class="flex rounded-t-xl px-6 py-3 pb-5 w-full from-yellow-600  bg-gradient-to-l to-yellow-500">
        @if ($booking->is_economic)
            <span class="pe-3 text-center font-semibold inline-block">{{__('Economy Program')}}</span>
            <span class="border-e border-black-700"></span>
        @endif
        <span class="px-3 text-center font-normal inline-block"><span class="font-block">{{ $booking->seat_count }}</span> {{__('Seats')}}</span>
        <span class="border-e border-black-700"></span>
        <span class="px-3 text-center font-normal inline-block">{{($booking->have_meals)?__('No Meals'):__('Meals included')}}</span>
        <span class="border-e border-black-700"></span>
        <span class="ps-3 font-normal inline-block">{{ $booking->hotelMecca->distance }} {{__('Meters from the Haram')}}</span>
        @if($booking->is_recommended)
            <span class="flex-1 w-full flex justify-end ps-3 font-normal inline-block">
                <img src="{{ Vite::asset('resources/images/medal.webp') }}" class="aspect-square h-full object-contain" alt="{{__('recommended')}}">
            </span>
        @endif
    </div>
    <div class="-mt-3 relative">
        <div class="relative z-10 flex items-stretch justify-between w-full text-lg px-6 py-4 bg-white border border-black-200 rounded-xl shadow-md">
            <div class="flex-1 h-full">
                <div class="flex w-full gap-x-3 mb-2">
                    <div class="flex flex-1 gap-3 px-3">
                        <img src="{{ Vite::asset('resources/images/mekka-hotel.webp') }}" class="aspect-square h-20" alt="{{__('Hotel in')}} {{__('Mecca')}}">
                        <div class="flex-1">
                            <span class="block text-sm mb-1 text-nowrap">{{__('Hotel in')}} <span class="font-bold">{{ __('Mecca') }}</span>:</span>
                            <span class="block px-3 py-2 text-xl font-black bg-emerald-300 rounded-xl w-fit mb-1">{{ $booking->hotelMecca->name }}</span>
                            <a data-photos="" class="show-photos hover:underline text-nowrap block text-xs w-fit">{{__('View hotel photos')}}</a>
                        </div>
                    </div>
                    <div class="flex flex-1 gap-3 px-3">
                        <img src="{{ Vite::asset('resources/images/media-hotel.webp') }}" class="aspect-square h-20" alt="{{__('Hotel in')}} {{ __('Medina')}}">
                        <div class="flex-1">
                            <span class="block text-sm mb-1 text-nowrap">{{__('Hotel in')}} <span class="font-bold">{{ __('Medina') }}</span>:</span>
                            <span class="block px-3 py-2 text-xl font-black bg-emerald-300 rounded-xl w-fit mb-1">{{ $booking->hotelMedina->name }}</span>
                            <a data-photos="" class="show-photos hover:underline text-nowrap block text-xs w-fit">{{__('View hotel photos')}}</a>
                        </div>
                    </div>
                </div>
                <hr class="my-3 opacity-30">
                <div class="flex justify-stretch flex-wrap items-center gap-3">
                    <span class="underline w-fit underline-offset-3 text-nowrap">{{ __('Select room type') }}:</span>
                    @foreach ($booking->prices as $price)
                        <div class="h-auto w-fit">
                            <input hidden class="peer hidden room-type" data-price="{{$price->price}}" data-old-price="{{$price->old_price}}" value="{{$price->room->id}}" type="radio" name="room_type" id="room-{{$price->room->id}}">
                            <label for="room-{{$price->room->id}}" class="peer-checked:bg-black-1000 border-black-300 peer-checked:text-white btn btn-outline w-full px-3 py-1 text-wrap text-base text-nowrap font-bold">{{ $price->room->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="flex flex-col justify-between items-start border-s border-black-200 ms-6 ps-6">
                <div class="w-full mb-6">
                    <span class="block opacity-45 text-base font-bold line-through line-clamp-2 lining-nums">{{@$booking->getLowestPrice()->old_price}} {{__('dh')}}</span>
                    <span class="text-xl block font-black lining-nums"><span class="text-3xl">{{@$booking->getLowestPrice()->price}}</span> {{__('dh')}} {{__('For a person')}}</span>
                    <span class="text-sm font-base block">({{__('Price varies depending on the size of the collection')}})</span>
                </div>
                <a href="{{ route('checkout', $booking->id) }}" class="btn border-0 rounded-xl w-full from-yellow-600  bg-gradient-to-l to-yellow-500 shadow hover:shadow-md duration-300 text-nowrap shadow-yellow-700 hover:shadow-yellow-600 px-4 text-xl font-bein-black group duration-300 transition-colors cursor-pointer">
                    <em class="text-base fa-solid fa-chevron-left me-2 group-hover:me-1 group-hover:ps-1 duration-300"></em> {{__('Booook now')}}
                </a>
            </div>
        </div>
        @if(count($booking->discounts))
            <input type="checkbox" class="peer hidden" id="group-discount" hidden>
            <div class="overflow-hidden pt-5 -mt-36 w-fit flex flex-nowrap flex-col rounded-b-xl border border-black-200 text-base peer-checked:-mt-4 peer-checked:pt-3">
                <div class="p-3 pt-6 gap-y-3">
                    @foreach ($booking->discounts as $discount)
                        <div class="flex items-center justify-between w-full text-sm">
                            <span class="flex items-center flex-1">
                                <span class="text-base text-nowrap">{{ $discount->name }}</span>
                            </span>    
                            <span class="dots max-w-12 flex-1 border-b-2 mx-6 border-dotted border-blue-1000 h-full text-nowrap"></span>
                            <span class="text-lg font-bold text-nowrap dicsount" data-value="{{$discount->value}}" data-type="{{$discount->type}}">{{getDiscountPrice($price->price,$discount->value,$discount->type)}} {{__('dh')}}</span>
                        </div>
                    @endforeach
                </div>
                <div class="divider m-0 p-0 h-auto"></div>
                <label for="group-discount" class="from-yellow-400  bg-gradient-to-l to-yellow-300 px-6 w-full flex flex-nowrap text-nowrap flex-row justify-between items-center cursor-pointer">
                    <span class="font-semibold">
                        {{__('Group discounts available')}}
                    </span>
                    <span class="w-full duration-300 text-nowrap  py-2 px-4 text-xl font-black group cursor-pointer">
                        <em class="fa-solid fa-chevron-left me-2 group-hover:me-1 group-hover:ps-1 duration-300"></em> {{__('push here')}}
                    </span>
                </label>
            </div>
        @endif
    </div>
</div>