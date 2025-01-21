@extends('layouts.mobile')
@section('content')
<x-mobile.header></x-mobile.header>
<x-mobile.hero-header></x-mobile.hero-header>
<x-mobile.atoms.spacer></x-mobile.atoms.spacer>
<div class="px-6 flex flex-col gap-3 items-center">
    <h1 class=" font-semibold text-sm mb-3">{{ __('Welcome to your Hajj and Umrah agency in Marrakech.') }}</h1>
    <p class="text-sm mb-6">{{ __('Dedicated to Making Umrah and Hajj a Seamless Experience') }}</p>
    <div class="mb-3">
        <span class="text-base font-base block mb-3 flex items-center">
            <img src="{{Vite::asset('resources/images/checked.webp')}}" alt="Offer"
                class="w-5 h-5 inline-block text-emerald-550 me-3">
            <span>
                حجز من أي منطقة في المغرب
            </span>
        </span>
        <span class="text-base font-base block mb-3 flex items-center">
            <img src="{{Vite::asset('resources/images/checked.webp')}}" alt="Offer"
                class="w-5 h-5 inline-block text-emerald-550 me-3">
            <span>
                مركز خدمة الزبناء متوفرة 24/7
            </span>
        </span>
        <span class="text-base font-base block mb-3 flex items-center">
            <img src="{{Vite::asset('resources/images/checked.webp')}}" alt="Offer"
                class="w-5 h-5 inline-block text-emerald-550 me-3">
            <span>
                خدمات عالية الجودة بأسعار تنافسية
            </span>
        </span>
    </div>
</div>
<x-mobile.atoms.spacer></x-mobile.atoms.spacer>
<div class="px-3">
    <div class="bg-yellow-100 overflow-hidden rounded-3xl border-yellow-600 border-2 w-72 max-w-full">
        <div class="relative">
            <img src="{{Vite::asset('resources/images/mission-1.jpg')}}" alt="Offer" class="w-full aspect-square object-cover">
            <span class="absolute top-0 start-0 end-0 bottom-0 bg-gradient-to-t from-black-900 to-transparent opacity-65"></span>
            <span class="absolute top-3 end-3 text-xs bg-yellow-600 py-1 px-2 rounded-full">العرض الموصي به</span>
            <div class="absolute bottom-1 px-3 gap-1 flex justify-between items-stretch text-black-800 text-sm">
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 w-full h-full aspect-square rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/hotel icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-65 text-white text-xs">الإقامة</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 w-full h-full aspect-square rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/flight icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-65 text-white text-xs">الطيران</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 w-full h-full aspect-square rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/evisa icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-65 text-white text-xs">التأشيرة</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 w-full h-full aspect-square rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/transport icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-65 text-white text-xs">التنقل</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 w-full h-full aspect-square rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/mourchid icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-65 text-white text-xs">المؤطرين</span>
                </div>
            </div>
            <div class="bg-black-950 text-white rounded-md absolute top-3 start-3 flex flex-col justify-center items-center aspect-square w-16 h-16 opacity-65">
                <span class="font-semibold">7</span>
                <span>{{ __('Days') }}</span>
            </div>
        </div>
        <div class="p-3">
            <h1 class="font-black text-sm mb-3">عمرة شعبان - من 19 فبراير إلى 06 مارس - عبر الخطوط السعودية</h1>
            <div class="flex items-center justify-between w-full text-lg mb-1 px-2 py-3 bg-white rounded-xl">
                <span class="font-thin text-xs">الذهاب</span>
                <span class="dots flex-1 border-b mx-3 border-black-500 h-full"></span>
                <img src="{{Vite::asset('resources/images/plane.webp')}}" alt="Plane" class="w-3 h-3 me-3">
                <span class="font-thin text-xs">19 فبراير 2024</span>
            </div>
            <div class="flex items-center justify-between w-full text-lg mb-1 px-2 py-3 bg-white rounded-xl">
                <span class="font-thin text-xs">العودة</span>
                <span class="dots flex-1 border-b mx-3 border-black-500 h-full"></span>
                <img src="{{Vite::asset('resources/images/plane.webp')}}" alt="Plane" class="w-3 h-3 me-3">
                <span class="font-thin text-xs">19 فبراير 2024</span>
            </div>
            <div class="w-full text-center mb-3">
                <span class="text-lg font-bold block">
                    14.000,00
                    <span class="text-xs font-thin">دم للشخص</span>
                </span>
                <span class="text-xs font-thin block">
                    (يختلف السعر حسب حجم المجموعة)
                </span>
            </div>
            <a href="#" class="btn btn-warning w-full btn-md">إحجـز الآن</a>
        </div>
    </div>
</div>
<x-mobile.atoms.spacer></x-mobile.atoms.spacer>
<div class="px-6 items-center">
    <h1 class="font-black text-sm mb-3">{{ __('Welcome to your Hajj and Umrah agency in Marrakech.') }}</h1>
    <p class="text-sm mb-6">{{ __('Dedicated to Making Umrah and Hajj a Seamless Experience') }}</p>
    <div class="mb-6">
        <span class="text-base font-base block mb-3 flex items-center">
            <img src="{{Vite::asset('resources/images/checked.webp')}}" alt="Offer"
                class="w-5 h-5 inline-block text-emerald-550 me-3">
            <span>
                حجز من أي منطقة في المغرب
            </span>
        </span>
        <span class="text-base font-base block mb-3 flex items-center">
            <img src="{{Vite::asset('resources/images/checked.webp')}}" alt="Offer"
                class="w-5 h-5 inline-block text-emerald-550 me-3">
            <span>
                مركز خدمة الزبناء متوفرة 24/7
            </span>
        </span>
        <span class="text-base font-base block mb-3 flex items-center">
            <img src="{{Vite::asset('resources/images/checked.webp')}}" alt="Offer"
                class="w-5 h-5 inline-block text-emerald-550 me-3">
            <span>
                خدمات عالية الجودة بأسعار تنافسية
            </span>
        </span>
    </div>
</div>
<x-mobile.atoms.spacer></x-mobile.atoms.spacer>
<div class="px-6 w-full">
    <div class="flex gap-3 overflow-x-auto overflow-y-visible w-full h-fit pb-3 justify-start items-start">
        @foreach ([1,2,3,4,5,6,7,9] as $offer)
        <div class="min-w-60">
            <x-mobile.offer-card></x-mobile.offer-card>
        </div>
        @endforeach
    </div>
</div>



<ul class="menu bg-white lg:menu-horizontal rounded-none px-6 shadow-2xl shadow-black-950 fixed bottom-0 start-0 z-50 end-0 flex justify-between items-center w-full flex-nowrap flex-row">
  <li>
    <a class="px-0 py-3">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-5 w-5"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
      </svg>
      Inbox
      <span class="badge badge-sm">99+</span>
    </a>
  </li>
  <li>
    <a class="px-0 py-3">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-5 w-5"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      Updates
      <span class="badge badge-sm badge-warning">NEW</span>
    </a>
  </li>
  <li>
    <a class="px-0 py-3">
      Stats
      <span class="badge badge-xs badge-info"></span>
    </a>
  </li>
</ul>
<x-mobile.atoms.spacer></x-mobile.atoms.spacer>
<x-mobile.atoms.spacer></x-mobile.atoms.spacer>
<x-mobile.atoms.spacer></x-mobile.atoms.spacer>
@endsection