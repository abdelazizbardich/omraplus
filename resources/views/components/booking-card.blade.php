<div class="scroll-animate w-full packages booking-card">
    <div class="flex rounded-t-xl px-6 py-3 pb-5 w-full from-yellow-600  bg-gradient-to-l to-yellow-500">
        @if ($booking->is_economic)
            <span class="pe-3 text-center font-semibold inline-block">{{__('index.Economy Program')}}</span>
            <span class="border-e border-black-700"></span>
        @endif
        <span class="px-3 text-center font-normal inline-block"><span class="font-block">{{ $booking->seat_count }}</span> {{__('index.Seats')}}</span>
        <span class="border-e border-black-700"></span>
        <span class="px-3 text-center font-normal inline-block">{{($booking->have_meals)?__('index.No Meals'):__('index.Meals included')}}</span>
        <span class="border-e border-black-700"></span>
        <span class="ps-3 font-normal inline-block">{{ $booking->hotelMecca->distance }} {{__('index.Meters from the Haram')}}</span>
        @if($booking->is_recommended)
            <span class="flex-1 w-full flex justify-end ps-3 font-normal inline-block">
                <img loading="lazy" src="{{ Vite::asset('resources/images/medal.webp') }}" class="aspect-square h-full object-contain" alt="{{__('index.recommended')}}">
            </span>
        @endif
    </div>
    <div class="-mt-3 relative">
        <form action="{{ route('checkout') }}" method="post">
            <input type="text" hidden name="program" value="{{ $booking->id }}">
            <div class="relative z-10 flex items-stretch justify-between w-full text-lg px-6 py-4 bg-white border border-black-200 rounded-xl shadow-md">
                <div class="flex-1 h-full">
                    <div class="flex w-full gap-x-3 mb-2">
                        <div class="flex flex-1 gap-3 px-3">
                            <img loading="lazy" src="{{ Vite::asset('resources/images/mekka-hotel.webp') }}" class="hotel-place-photo aspect-square h-20" alt="{{__('index.Hotel in')}} {{__('index.Mecca')}}">
                            <div class="flex-1">
                                <span class="block text-sm mb-1 text-nowrap">{{__('index.Hotel in')}} <span class="font-bold">{{ __('index.Mecca') }}</span>:</span>
                                <span class="block px-3 py-2 text-xl font-black bg-emerald-300 rounded-xl w-fit mb-1">{{ $booking->hotelMecca->name }}</span>
                                <a data-photos="" class="show-photos hover:underline text-nowrap block text-xs w-fit">{{__('index.View hotel photos')}}</a>
                            </div>
                        </div>
                        <div class="flex flex-1 gap-3 px-3">
                            <img loading="lazy" src="{{ Vite::asset('resources/images/media-hotel.webp') }}" class="hotel-place-photo aspect-square h-20" alt="{{__('index.Hotel in')}} {{ __('index.Medina')}}">
                            <div class="flex-1">
                                <span class="block text-sm mb-1 text-nowrap">{{__('index.Hotel in')}} <span class="font-bold">{{ __('index.Medina') }}</span>:</span>
                                <span class="block px-3 py-2 text-xl font-black bg-emerald-300 rounded-xl w-fit mb-1">{{ $booking->hotelMedina->name }}</span>
                                <a data-photos="" class="show-photos hover:underline text-nowrap block text-xs w-fit">{{__('index.View hotel photos')}}</a>
                            </div>
                        </div>
                    </div>
                    <hr class="my-3 opacity-30">
                    <div class="flex justify-start flex-wrap items-center gap-3">
                        <span class="underline w-fit underline-offset-3 text-nowrap">{{ __('index.Select room type') }}:</span>
                        @foreach ($booking->prices as $index=>$price)
                            <div class="h-auto w-fit">
                                <input onclick="updateBookingcardPrice({{ $booking->id}})" @if($index==0) checked @endif hidden required class="peer hidden room-type room-{{ $booking->id }}" data-price="{{$price->price}}" data-old-price="{{$price->old_price}}" value="{{$price->room->id}}" type="radio" name="room" id="room-{{ $booking->id }}-{{$price->room->id}}">
                                <label for="room-{{ $booking->id }}-{{$price->room->id}}" class="peer-checked:bg-black-1000 border-black-300 peer-checked:text-white btn btn-outline w-full px-3 py-1 text-wrap text-base text-nowrap font-bold">{{ $price->room->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col justify-center items-start border-s border-black-200 ms-6 ps-6 price">
                    <div class="w-full mb-6">
                        <span class="block opacity-45 text-base font-bold line-through line-clamp-2 lining-nums"><span class="old-price-{{ $booking->id }}">{{@$booking->getLowestPrice()->old_price}}</span> {{__('index.dh')}}</span>
                        <span class="text-xl block font-black lining-nums"><span class="text-3xl price-{{ $booking->id }}">{{$booking->getLowestPrice()->price}}</span> {{__('index.dh')}} {{__('index.For a person')}}</span>
                        <span class="text-sm font-base block">({{__('index.Price varies depending on the size of the collection')}})</span>
                    </div>
                    <button type="submit" class="btn border-0 rounded-xl w-full from-yellow-600  bg-gradient-to-l to-yellow-500 shadow hover:shadow-md duration-300 text-nowrap shadow-yellow-700 hover:shadow-yellow-600 px-4 text-xl font-bein-black group duration-300 transition-colors cursor-pointer">
                        <em class="text-base fa-solid fa-chevron-left me-2 group-hover:me-1 group-hover:ps-1 duration-300"></em> {{__('index.Booook now')}}
                    </button>
                </div>
            </div>
        </form>
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
                            <span class="text-lg font-bold text-nowrap dicsount" data-value="{{$discount->value}}" data-type="{{$discount->type}}">{{getDiscountPrice($price->price,$discount->value,$discount->type)}} {{__('index.dh')}}</span>
                        </div>
                    @endforeach
                </div>
                <div class="divider m-0 p-0 h-auto"></div>
                <label for="group-discount" class="from-yellow-400  bg-gradient-to-l to-yellow-300 px-6 w-full flex flex-nowrap text-nowrap flex-row justify-between items-center cursor-pointer">
                    <span class="font-semibold">
                        {{__('index.Group discounts available')}}
                    </span>
                    <span class="w-full duration-300 text-nowrap  py-2 px-4 text-xl font-black group cursor-pointer">
                        <em class="fa-solid fa-chevron-left me-2 group-hover:me-1 group-hover:ps-1 duration-300"></em> {{__('index.push here')}}
                    </span>
                </label>
            </div>
        @endif

        <script>
            function updateBookingcardPrice(bookingId){
                let room = document.querySelector(`.room-${bookingId}`);
                let price = event.target.getAttribute('data-price');
                let oldPrice = event.target.getAttribute('data-old-price');
                document.querySelector(`.price-${bookingId}`).innerText = price;
                document.querySelector(`.old-price-${bookingId}`).innerText = oldPrice;
                if (document.querySelector(`.flight-old-price`)) document.querySelector(`.flight-old-price`).innerText = oldPrice;
                if (document.querySelector(`.flight-price`)) document.querySelector(`.flight-price`).innerText = price;
            }
        </script>
    </div>
</div>