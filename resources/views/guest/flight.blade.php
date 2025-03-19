<x-guest-layout>
    <x-header active=""></x-header>
    <x-page-header :title="__('index.Offer')" :breadcrumbs="['Home', 'Flight']" />
    <x-spacer></x-spacer>
    <div class="container w-full mx-auto">
        <div class="w-full mb-12">
            <h1 class="text-3xl font-bold">{{ $flight->title }}</h1>
        </div>
    </div>
    <div class="container w-full mx-auto flex gap-12 items-start relative">
        <div class="w-8/12">
            <x-slider :images="$flight->photos"></x-slider>
            <x-spacer></x-spacer>
            <div class="w-full">
                <div class="rounded-t-xl px-6 py-3 pb-5 w-full bg-emerald-300 text-base">
                    <span class="font-semibold">{{ __('index.Direct line with') }} {{  $flight->airline->name }}</span>
                </div>
                <div class="-mt-3">
                    <div
                        class="flex items-center justify-between w-full text-lg mb-3 px-6 py-4 bg-white border border-black-200 rounded-xl shadow-md">
                        <span class="font-black text-lg">{{__('index.going')}}</span>
                        <span class="dots flex-1 border-b-2 mx-3 border-black-500 h-full"></span>
                        <span class="flex items-center">
                            <img loading="lazy" src="{{ Vite::asset('resources/images/plane.webp') }}" alt="{{__('index.Plane')}}"
                                class="w-8 h-8 me-3">
                            <span class="font-semibold text-lg">{{ $flight->going_date }}</span>
                        </span>
                    </div>
                    <div
                        class="flex items-center justify-between w-full text-lg px-6 py-4 bg-white border border-black-200 rounded-xl shadow-md">
                        <span class="font-black text-lg">{{__('index.Return')}}</span>
                        <span class="dots flex-1 border-b-2 mx-3 border-black-500 h-full"></span>
                        <span class="flex items-center">
                            <img loading="lazy" src="{{ Vite::asset('resources/images/plane.webp') }}" alt="{{__('index.Plane')}}"
                                class="w-8 -scale-x-100 h-8 me-3">
                            <span class="font-semibold text-lg">{{ $flight->return_date }}</span>
                        </span>
                    </div>
                </div>
            </div>
            <x-spacer></x-spacer>
            <div class="w-full">
                <span class="block text-2xl font-bold w-full block mb-6">{{__('index.Features of this offer')}}</span>
                <div class="rounded-lg bg-emerald-200 p-6 grid grid-cols-3 grid-rows-2 gap-x-6 gap-y-6">
                    @foreach ([1, 2, 3, 4, 5, 6] as $item)
                        <div class="flex items-start justify-start w-full gap-3">
                            <div class="bg-emerald-300 w-4/12 aspect-square rounded-xl mb-1 overflow-hidden p-1">
                                <img loading="lazy" src="{{ Vite::asset('resources/images/hotel icon.svg')}}"
                                    class="w-full h-full object-cover aspect-square">
                            </div>
                            <div class="flex flex-col justify-start items-start w-8/12">
                                <span class="text-lg font-semibold">{{__('index.Accommodation')}}</span>
                                <p class="text-xs line-clamp-4">يتم توفير الإقامة في فنادق مميزة بالقرب من المسجد الحرام
                                    والمعالم الدينية، لتجربة إقامة مريحة ولائقة برحلتكم.</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <x-spacer></x-spacer>
            <div class="w-full">
                <span class="block text-2xl font-bold w-full block mb-6">{{__('index.Offer Description')}}</span>
                <div class="text-base font-normal">
                    {!! $flight->description !!}
                </div>
            </div>
            <x-spacer></x-spacer>
            <div class="w-full" id="packages">
                <span class="block text-2xl font-bold w-full block mb-6">{{__('index.Available bookings')}}</span>
                @foreach ($flight->programs as $index => $program)
                    <div class="mb-6">
                        <x-booking-card :booking="$program" :index="$index"></x-booking-card>
                    </div>
                @endforeach
            </div>
            <x-spacer></x-spacer>
        </div>
        <div class="w-4/12 h-auto sticky top-10">
            <div class="border border-black-200 bg-white rounded-3xl p-6 mb-6 w-full">
                <span
                    class="block opacity-45 text-base font-bold line-through line-clamp-2 lining-nums"><span class="flight-old-price">{{ $flight->old_price }}</span>
                    {{__('index.dh')}}</span>
                <span class="text-3xl block font-black lining-nums"><span class="flight-price">{{ $flight->price }}</span> {{__('index.dh')}}
                    {{__('index.For a person')}}</span>
                <span
                    class="text-base font-base block">({{__('index.Price varies depending on the size of the collection')}})</span>
                <div class="divider"></div>
                <div class="mb-6">
                    <span class="text-base font-base block mb-3 flex items-center">
                        <img loading="lazy" src="{{Vite::asset('resources/images/checked.webp')}}" alt="Offer"
                            class="w-6 h-6 inline-block text-emerald-550 me-2">
                        <span>
                            {{__('index.Book from any area in Morocco')}}
                        </span>
                    </span>
                    <span class="text-base font-base block mb-3 flex items-center">
                        <img loading="lazy" src="{{Vite::asset('resources/images/checked.webp')}}" alt="Offer"
                            class="w-6 h-6 inline-block text-emerald-550 me-2">
                        <span>
                            {{__('index.Customer service center available 24/7')}}
                        </span>
                    </span>
                    <span class="text-base font-base block mb-3 flex items-center">
                        <img loading="lazy" src="{{Vite::asset('resources/images/checked.webp')}}" alt="Offer"
                            class="w-6 h-6 inline-block text-emerald-550 me-2">
                        <span>
                            {{__('index.High quality services at competitive prices')}}
                        </span>
                    </span>
                </div>
                <div class="flex flex-col">
                    <a href="#packages"
                        class="btn btn-lg text-xl rounded-xl hover:bg-yellow-600 hover:shadow-lg font-black from-yellow-600  bg-gradient-to-l to-yellow-500 mb-3">{{__('index.Choose the package')}}</a>
                    <button
                        class="btn btn-lg text-xl rounded-xl hover:bg-emerald-600 hover:shadow-lg font-black text-white bg-emerald-550 mb-3">
                        <em class="fa-brands fa-whatsapp text-3xl m1-3"></em> {{__('index.The Fast booking')}}
                    </button>
                    <a href="{{route('faqs')}}"
                        class="btn btn-lg text-xl rounded-xl border border-black-200 hover:shadow-lg font-black mb-3">{{__('index.You have a question?')}}</a>
                </div>
            </div>
            <!-- <div class="p-3 flex items-center justify-center w-full">
            <img loading="lazy" src="{{ Vite::asset('resources/images/google-reviews.webp') }}" class="w-10/12" alt="">
        </div> -->
            <x-spacer></x-spacer>
        </div>
    </div>
    <x-spacer></x-spacer>
    <div class="container m-auto flex justify-between items-start">
        <x-title :title="__('index.upcomming flights')" :subtitle="__('index.Dedicated to Making Umrah and Hajj a Seamless Experience')"></x-title>
    </div>
    <x-spacer></x-spacer>
    <div class="container m-auto flex justify-center items-start gap-6">
        @foreach ($nexFligths as $index => $nexFligth)
            <div class="w-3/12 flex items-start justify-center">
                <x-offer-card-minimal-with-preview :data="$nexFligth"></x-offer-card-minimal-with-preview>
            </div>
        @endforeach
    </div>
    <x-spacer></x-spacer>
    <div class="container m-auto flex justify-between items-start">
        <div class="w-4/12 flex items-start justify-center">
            <x-text-offer-card icon="{{ Vite::asset('resources/images/booking.webp') }}"
                :description="__('index.Effortless Booking Anywhere in Morocco')" :title="__('index.Book Umrah from anywhere in Morocco')"></x-text-offer-card>
        </div>
        <div class="w-4/12 flex items-start justify-center">
            <x-text-offer-card icon="{{ Vite::asset('resources/images/customer-offer.webp') }}"
                :description="__('index.Exclusive Packages and Seasonal Offers at Competitive Prices')"
                :title="__('index.Special packages and offers throughout the year')"></x-text-offer-card>
        </div>
        <div class="w-4/12 flex items-start justify-center">
            <x-text-offer-card icon="{{ Vite::asset('resources/images/customer-service.webp') }}"
                :description="__('index.Our team is ready to answer all your inquiries and provide assistance at any time to ensure the comfort and tranquility of the pilgrims.')" :title="__('index.24/7 support service')"></x-text-offer-card>
        </div>
    </div>
    <x-spacer></x-spacer>
    <x-footer></x-footer>
</x-guest-layout>