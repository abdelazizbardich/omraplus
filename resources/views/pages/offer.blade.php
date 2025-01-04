@extends('layouts.app')
@section('content')
<x-header active=""></x-header>
<x-page-header :title="__('Offer')" :breadcrumbs="[__('Home'), __('Offer')]" />
<x-atoms.spacer></x-atoms.spacer>
<div class="container w-full mx-auto">
    <div class="w-full mb-12">
        <h1 class="text-3xl font-bold">عمرة شعبان - من19 فبراير إلى 06 مارس - عبر الخطوط السعودية</h1>
    </div>
</div>
<div class="container w-full mx-auto flex gap-12 items-start relative">
    <div class="w-8/12">
        <x-atoms.carousel :images="[Vite::asset('resources/images/umrah-offer-main.webp'), Vite::asset('resources/images/mission-1.jpg'), Vite::asset('resources/images/mission-2.jpg'), Vite::asset('resources/images/mission-3.jpg'), Vite::asset('resources/images/mission-4.jpg')]"></x-atoms.carousel>
        <x-atoms.spacer></x-atoms.spacer>
        <div class="w-full">
            <div class="rounded-t-xl px-6 py-3 pb-5 w-full bg-emerald-300 text-base">
                <span class="font-semibold">خط مباشر مع الخطوط الملكية المغربية</span>
            </div>
            <div class="-mt-3">
                <div
                    class="flex items-center justify-between w-full text-lg mb-3 px-6 py-4 bg-white border border-black-200 rounded-xl shadow-md">
                    <span class="font-black text-lg">الذهاب</span>
                    <span class="dots flex-1 border-b-2 mx-3 border-black-500 h-full"></span>
                    <span class="flex items-center">
                        <img src="{{ Vite::asset('resources/images/plane.webp') }}" alt="{{__('Plane')}}"
                            class="w-8 h-8 me-3">
                        <span class="font-semibold text-lg">19 فبراير 2024</span>
                    </span>
                </div>
                <div
                    class="flex items-center justify-between w-full text-lg px-6 py-4 bg-white border border-black-200 rounded-xl shadow-md">
                    <span class="font-black text-lg">العودة</span>
                    <span class="dots flex-1 border-b-2 mx-3 border-black-500 h-full"></span>
                    <span class="flex items-center">
                        <img src="{{ Vite::asset('resources/images/plane.webp') }}" alt="{{__('Plane')}}"
                            class="w-8 -scale-x-100 h-8 me-3">
                        <span class="font-semibold text-lg">19 مارس 2024</span>
                    </span>
                </div>
            </div>
        </div>
        <x-atoms.spacer></x-atoms.spacer>
        <div class="w-full">
            <span class="block text-2xl font-bold w-full block mb-6">مميزات هذا العرض</span>
            <div class="rounded-lg bg-emerald-200 p-6 grid grid-cols-3 grid-rows-2 gap-x-6 gap-y-6">
                @foreach ([1, 2, 3, 4, 5, 6] as $item)
                    <div class="flex items-start justify-start w-full gap-3">
                        <div class="bg-emerald-300 w-4/12 aspect-square rounded-xl mb-1 overflow-hidden p-1">
                            <img src="{{ Vite::asset('resources/images/hotel icon.svg')}}"
                                class="w-full h-full object-cover aspect-square">
                        </div>
                        <div class="flex flex-col justify-start items-start w-8/12">
                            <span class="text-lg font-semibold">الإقامة</span>
                            <p class="text-xs line-clamp-4">يتم توفير الإقامة في فنادق مميزة بالقرب من المسجد الحرام
                                والمعالم الدينية، لتجربة إقامة مريحة ولائقة برحلتكم.</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <x-atoms.spacer></x-atoms.spacer>
        <div class="w-full">
            <span class="block text-2xl font-bold w-full block mb-6">وصف العرض</span>
            <div class="text-base font-normal">
                    <p>عُمرة شعبان هي فرصة روحانية مميزة تُقام خلال شهر شعبان المبارك، وهي تحضير واستعداد لشهر رمضان الكريم. تُعتبر هذه العُمرة مناسبة مثالية للزوار الذين يتطلعون إلى تعميق صلتهم بالله، وتجديد نواياهم، وتنقية أرواحهم من خلال أداء مناسك العُمرة في أجواء إيمانية مفعمة بالخشوع.</p>
                    <br>
                    <p>تشمل الرحلة زيارة مكة المكرمة وأداء الطواف حول الكعبة، والسعي بين الصفا والمروة، بالإضافة إلى تخصيص وقت للصلاة والتضرع والدعاء في الأماكن المقدسة. كما تُعتبر عُمرة شعبان فرصة للتأمل والعبادة، وهي محببة لكثير من المسلمين الذين يسعون للاستعداد الروحي لشهر رمضان.</p>
            </div>
        </div>
        <x-atoms.spacer></x-atoms.spacer>
        <div class="w-full">
            <span class="block text-2xl font-bold w-full block mb-6">الحجوزات المتاحة</span>
            @foreach ([(object)["featured"=>true]] as $index=>$booking)
            <div class="mb-6">
                <x-booking-card :booking="$booking" :index="$index"></x-booking-card>
            </div>
            @endforeach
            
        </div>
        <x-atoms.spacer></x-atoms.spacer>
        
    </div>
    <div class="w-4/12 h-auto sticky top-10">
        <div class="border border-black-200 bg-white rounded-3xl p-6 mb-6 w-full">
            <span class="block opacity-45 text-base font-bold line-through line-clamp-2 lining-nums">17.000,00
                {{__('dh')}}</span>
            <span class="text-3xl block font-black lining-nums">14.000,00 {{__('dh')}} {{__('For a person')}}</span>
            <span
                class="text-base font-base block">({{__('Price varies depending on the size of the collection')}})</span>
            <div class="divider"></div>
            <div class="mb-6">
                <span class="text-base font-base block mb-3 flex items-center">
                    <img src="{{Vite::asset('resources/images/checked.webp')}}" alt="Offer"
                        class="w-6 h-6 inline-block text-emerald-550 me-2">
                    <span>
                        حجز من أي منطقة في المغرب
                    </span>
                </span>
                <span class="text-base font-base block mb-3 flex items-center">
                    <img src="{{Vite::asset('resources/images/checked.webp')}}" alt="Offer"
                        class="w-6 h-6 inline-block text-emerald-550 me-2">
                    <span>
                        مركز خدمة الزبناء متوفرة 24/7
                    </span>
                </span>
                <span class="text-base font-base block mb-3 flex items-center">
                    <img src="{{Vite::asset('resources/images/checked.webp')}}" alt="Offer"
                        class="w-6 h-6 inline-block text-emerald-550 me-2">
                    <span>
                        خدمات عالية الجودة بأسعار تنافسية
                    </span>
                </span>
            </div>
            <div class="flex flex-col">
                <button
                    class="btn btn-lg text-xl rounded-xl hover:bg-yellow-600 hover:shadow-lg font-black from-yellow-600  bg-gradient-to-l to-yellow-500 mb-3">إختر
                    الباقة</button>
                <button
                    class="btn btn-lg text-xl rounded-xl hover:bg-emerald-600 hover:shadow-lg font-black text-white bg-emerald-550 mb-3">
                    <em class="fa-brands fa-whatsapp text-3xl m1-3"></em> {{__('The Fast booking')}}
                </button>
                <button
                    class="btn btn-lg text-xl rounded-xl border border-black-200 hover:shadow-lg font-black mb-3">لديك
                    استفسار</button>
            </div>
        </div>
        <!-- <div class="p-3 flex items-center justify-center w-full">
            <img src="{{ Vite::asset('resources/images/google-reviews.webp') }}" class="w-10/12" alt="">
        </div> -->
        <x-atoms.spacer></x-atoms.spacer>
    </div>
</div>
<x-atoms.spacer></x-atoms.spacer>
<div class="container m-auto flex justify-between items-start">
    <x-atoms.title :title="__('upcomming flights')" :subtitle="__('Dedicated to Making Umrah and Hajj a Seamless Experience')"></x-atoms.title>
</div>
<x-atoms.spacer></x-atoms.spacer>
<div class="container m-auto flex justify-between items-start gap-6">
    <div class="w-3/12 flex items-start justify-center">
        <x-offer-card-minimal-with-preview featured="true"></x-offer-card-minimal-with-preview>
    </div>
    <div class="w-3/12 flex items-start justify-center">
        <x-offer-card-minimal-with-preview></x-offer-card-minimal-with-preview>
    </div>
    <div class="w-3/12 flex items-start justify-center">
        <x-offer-card-minimal-with-preview></x-offer-card-minimal-with-preview>
    </div>
    <div class="w-3/12 flex items-start justify-center">
        <x-offer-card-minimal-with-preview></x-offer-card-minimal-with-preview>
    </div>
</div>
<x-atoms.spacer></x-atoms.spacer>
<div class="container m-auto flex justify-between items-start">
    <div class="w-4/12 flex items-start justify-center">
        <x-atoms.text-offer-card icon="{{ Vite::asset('resources/images/booking.webp') }}" :description="__('Effortless Booking Anywhere in Morocco')" :title="__('Book Umrah from anywhere in Morocco')"></x-atoms.text-offer-card>
    </div>
    <div class="w-4/12 flex items-start justify-center">
        <x-atoms.text-offer-card icon="{{ Vite::asset('resources/images/customer-offer.webp') }}" :description="__('Exclusive Packages and Seasonal Offers at Competitive Prices')"
            :title="__('Special packages and offers throughout the year')"></x-atoms.text-offer-card>
    </div>
    <div class="w-4/12 flex items-start justify-center">
        <x-atoms.text-offer-card icon="{{ Vite::asset('resources/images/customer-service.webp') }}" :description="__('Our team is ready to answer all your inquiries and provide assistance at any time to ensure the comfort and tranquility of the pilgrims.')" :title="__('24/7 support service')"></x-atoms.text-offer-card>
    </div>
</div>
<x-atoms.spacer></x-atoms.spacer>
<x-footer></x-footer>
@endsection