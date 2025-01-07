@extends('layouts.mobile')
@section('content')
<div class="bg-blue-950 w-full h-dvh flex items-center justify-center">
    <div class="container mx-auto">
        <div class="flex flex-col w-full items-center justify-center">
            <a href="{{ route('home') }}" class="block mb-8 text-center">
                <img src="{{ Vite::asset('resources/images/logo.webp') }}" alt="{{ __('Logo') }}" class="h-16 w-full">
            </a>
            <span class="text-white text-lg font-base block text-center mb-6">{{__('Mobile version is loading')}}...</span>
            <div class="">
                <span class="loading loading-dots loading-lg text-white"></span>
            </div>
        </div>
    </div>
</div>
@endsection