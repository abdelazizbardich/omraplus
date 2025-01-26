@extends('mobile.layouts.app')
@section('content')
<x-mobile.hero-header></x-mobile.hero-header>
<x-mobile.atoms.spacer></x-mobile.atoms.spacer>
<div class="px-6 flex flex-col gap-3 items-center">
    <div class="w-full">
        <h1 class=" font-semibold text-sm mb-3">{{ __('Welcome to your Hajj and Umrah agency in Marrakech.') }}</h1>
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
    <div class="w-full">
        <x-mobile.offer-card-with-preview></x-mobile.offer-card-with-preview>
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
<div class="px-6 w-full pb-44">
    <!-- <div class="flex gap-3 overflow-x-auto overflow-y-visible w-full"> -->
        @foreach ([1] as $offer)
        <div class="w-8/12">
            <x-mobile.offer-card></x-mobile.offer-card>
        </div>
        @endforeach
    <!-- </div> -->
</div>
<!-- bootom nav -->
<!-- <div class="btm-nav">
  <button>
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
  </button>
  <button class="active">
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
  </button>
  <button class="hover:bg-blue-100 duration-300">
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
        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
    </svg>
    <span class="text-sm">Home</span>
  </button>
</div> -->


<ul class="menu bg-base-200 lg:menu-horizontal rounded-none px-6 shadow-2xl shadow-black-950 fixed bottom-0 start-0 end-0 flex justify-between items-center w-full flex-nowrap flex-row">
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

@endsection