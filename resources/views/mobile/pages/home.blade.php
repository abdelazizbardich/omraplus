@extends('mobile.layouts.app')
@section('content')
<x-mobile.hero-header></x-mobile.hero-header>
<x-mobile.atoms.spacer></x-mobile.atoms.spacer>
<div class="flex flex-col gap-3 items-center">
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
  <div class="w-full overflow-x-auto overflow-y-visible no-scrollbar">
    <div class="flex flex-row gap-3 items-center justify-start w-fit gap-3">
      @foreach ([1, 2, 3, 4] as $index => $element)
        <x-mobile.offer-card-with-preview :featured="$index === 0"></x-mobile.offer-card-with-preview>
      @endforeach
    </div>
  </div>
<x-mobile.atoms.spacer></x-mobile.atoms.spacer>
<div class="items-center">
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
<div class="w-full overflow-x-auto overflow-y-visible no-scrollbar">
  <div class="flex flex-row gap-3 items-center justify-start w-fit gap-3">
    @foreach ([1, 2, 3] as $offer)
    <div class="min-w-60">
      <x-mobile.offer-card></x-mobile.offer-card>
    </div>
  @endforeach
  </div>
</div>
<x-mobile.atoms.spacer></x-mobile.atoms.spacer>
@endsection