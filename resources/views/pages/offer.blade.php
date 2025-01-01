@extends('layouts.app')
@section('content')
<x-header active=""></x-header>
<x-page-header :title="__('Offer')" />
<x-atoms.spacer></x-atoms.spacer>
<div class="container w-full mx-auto">
    <div class="w-full mb-12">
        <h1 class="text-3xl">عمرة شعبان - من19 فبراير إلى 06 مارس - عبر الخطوط السعودية</h1>
    </div>
    <div class="w-6/12">
        <div class="rounded-3xl overflow-hidden">
            <img src="{{ Vite::asset('resources/images/umrah-offer-main.webp')}}" alt="">
        </div>
        
    </div>
    <div class="w-6/12"></div>
</div>
<x-footer></x-footer>
@endsection