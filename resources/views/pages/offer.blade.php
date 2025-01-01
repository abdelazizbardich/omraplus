@extends('layouts.app')
@section('content')
<x-header active=""></x-header>
<x-page-header :title="__('Offer')" :breadcrumbs="[__('Home'),__('Offer')]"/>
<x-atoms.spacer></x-atoms.spacer>
<div class="container w-full mx-auto">
    <div class="w-full mb-12">
        <h1 class="text-3xl">عمرة شعبان - من19 فبراير إلى 06 مارس - عبر الخطوط السعودية</h1>
    </div>
</div>
<div class="container w-full mx-auto flex gap-12">
    <div class="w-8/12">
        <x-atoms.carousel :images="[Vite::asset('resources/images/umrah-offer-main.webp'), Vite::asset('resources/images/mission-1.jpg'), Vite::asset('resources/images/mission-2.jpg'), Vite::asset('resources/images/mission-3.jpg'), Vite::asset('resources/images/mission-4.jpg')]"></x-atoms.carousel>
    </div>
    <div class="w-4/12">
        <div class="border rounded-3xl p-6 w-full">
            <span class="block opacity-45 text-base font-black">17.000,00 {{__('dh')}}</span>
            <span class="text-3xl block font-black">14.000,00 {{__('dh')}} {{__('For a person')}}</span>
            <span class="text-base font-base block">({{__('Price varies depending on the size of the collection')}})</span>
            <div class="divider"></div>
            
        </div>
    </div>
</div>
<x-atoms.spacer></x-atoms.spacer>
<x-footer></x-footer>
@endsection