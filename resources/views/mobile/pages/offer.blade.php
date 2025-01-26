@extends('mobile.layouts.app')
@section('content')
<div class="-mx-6 mb-6">
    <img src="{{Vite::asset('resources/images/mission-1.jpg')}}" alt="Offer" class="w-full h-60 object-cover">
    <div class="flex justify-stretch items-start">
        <button
            class="relative after:w-full after:absolute after:bottom-0 after:left-0 after:h-1 after:border-b-4 after:border-yellow-600"><img
                src="{{Vite::asset('resources/images/mission-1.jpg')}}" alt="offer photo"
                class="object-cover max-h-24 aspect-square hover:brightness-50 duration-300 brightness-50"></button>
        <button><img src="{{Vite::asset('resources/images/mission-2.jpg')}}" alt="offer photo"
                class="object-cover max-h-24 aspect-square hover:brightness-50 duration-300"></button>
        <button><img src="{{Vite::asset('resources/images/mission-3.jpg')}}" alt="offer photo"
                class="object-cover max-h-24 aspect-square hover:brightness-50 duration-300"></button>
        <button><img src="{{Vite::asset('resources/images/mission-4.jpg')}}" alt="offer photo"
                class="object-cover max-h-24 aspect-square hover:brightness-50 duration-300"></button>
    </div>
</div>
<h1 class="font-semibold text-sm mb-6">عمرة شعبان - من19 فبراير إلى 06 مارس - عبر الخطوط السعودية</h1>
<div class="w-full mb-6">
    <div class="rounded-t-xl px-6 py-3 pb-5 w-full bg-emerald-300 text-xs">
        <span class="font-semibold">خط مباشر مع الخطوط الملكية المغربية</span>
    </div>
    <div class="-mt-3">
        <div
            class="flex items-center justify-between w-full text-xs mb-3 px-6 py-4 bg-white border border-black-200 rounded-xl shadow-md">
            <span class="font-black text-xs">الذهاب</span>
            <span class="dots flex-1 border-b-2 mx-3 border-black-500 h-full"></span>
            <span class="flex items-center">
                <img src="{{Vite::asset('resources/images/plane.webp')}}" alt="Plane" class="w-4 h-4 me-3">
                <span class="font-semibold text-xs">19 فبراير 2024</span>
            </span>
        </div>
        <div
            class="flex items-center justify-between w-full text-xs px-6 py-4 bg-white border border-black-200 rounded-xl shadow-md">
            <span class="font-black text-xs">العودة</span>
            <span class="dots flex-1 border-b-2 mx-3 border-black-500 h-full"></span>
            <span class="flex items-center">
                <img src="{{Vite::asset('resources/images/plane.webp')}}" alt="Plane" class="w-4 -scale-x-100 h-4 me-3">
                <span class="font-semibold text-xs">19 مارس 2024</span>
            </span>
        </div>
    </div>
</div>
<div class="w-full mb-6 text-justify text-sm">
    <span class="font-semibold mb-3 block">وصف العرض</span>
    <p>
        عُمرة شعبان هي فرصة روحانية مميزة تُقام خلال شهر شعبان المبارك، وهي تحضير واستعداد لشهر رمضان الكريم. تُعتبر هذه
        العُمرة مناسبة مثالية للزوار الذين يتطلعون إلى تعميق صلتهم بالله، وتجديد نواياهم، وتنقية أرواحهم من خلال أداء
        مناسك العُمرة في أجواء إيمانية مفعمة بالخشوع.
    </p>
    <p>
        تشمل الرحلة زيارة مكة المكرمة وأداء الطواف حول الكعبة، والسعي بين الصفا والمروة، بالإضافة إلى تخصيص وقت للصلاة
        والتضرع والدعاء في الأماكن المقدسة. كما تُعتبر عُمرة شعبان فرصة للتأمل والعبادة، وهي محببة لكثير من المسلمين
        الذين يسعون للاستعداد الروحي لشهر رمضان.
    </p>
</div>
<div class="shadow-[rgba(0,0,15,0.15)_0px_-4px_16px] bg-white sticky bottom-10 top-0 h-12 -mx-6"></div>
<x-mobile.atoms.spacer></x-mobile.atoms.spacer>
@endsection