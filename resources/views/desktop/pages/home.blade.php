@extends('desktop.layouts.app')
@section('content')
    <x-desktop.header active="Home"></x-desktop.header>
    <x-desktop.hero-header></x-desktop.hero-header>
    <x-desktop.atoms.spacer></x-desktop.atoms.spacer>
    <div class="container m-auto flex justify-between items-start">
        <div class="w-4/12 flex items-start justify-center">
            <x-desktop.atoms.text-offer-card :index="'0'" icon="{{ Vite::asset('resources/images/booking.webp') }}" :description="__('Effortless Booking Anywhere in Morocco')" :title="__('Book Umrah from anywhere in Morocco')"></x-desktop.atoms.text-offer-card>
        </div>
        <div class="w-4/12 flex items-start justify-center">
            <x-desktop.atoms.text-offer-card :index="'1'" icon="{{ Vite::asset('resources/images/customer-offer.webp') }}" :description="__('Exclusive Packages and Seasonal Offers at Competitive Prices')" :title="__('Special packages and offers throughout the year')"></x-desktop.atoms.text-offer-card>
        </div>
        <div class="w-4/12 flex items-start justify-center">
            <x-desktop.atoms.text-offer-card :index="'2'" icon="{{ Vite::asset('resources/images/customer-service.webp') }}" :description="__('Our team is ready to answer all your inquiries and provide assistance at any time to ensure the comfort and tranquility of the pilgrims.')" :title="__('24/7 support service')"></x-desktop.atoms.text-offer-card>
        </div>
    </div>
    <x-desktop.atoms.spacer></x-desktop.atoms.spacer>
    <div class="container m-auto flex justify-between items-start">
        <x-desktop.atoms.title :subtitle="__('Dedicated to Making Umrah and Hajj a Seamless Experience')" :title="__('welcome to our agency for the omrah in marrakech')"></x-desktop.atoms.title>
    </div>
    <x-desktop.atoms.spacer></x-desktop.atoms.spacer>
    <div class="container m-auto flex justify-between items-start gap-12">
        <div class="w-4/12 flex items-start justify-center">
            <x-desktop.offer-card></x-desktop.offer-card>
        </div>
        <div class="w-4/12 flex items-start justify-center">
            <x-desktop.offer-card></x-desktop.offer-card>
        </div>
        <div class="w-4/12 flex items-start justify-center">
            <x-desktop.offer-card></x-desktop.offer-card>
        </div>
    </div>
    <x-desktop.atoms.spacer></x-desktop.atoms.spacer>
    <div class="bg-blue-50">
        <x-desktop.atoms.spacer></x-desktop.atoms.spacer>
        <div class="container m-auto flex justify-between items-start">
            <x-desktop.atoms.title :subtitle="__('Dedicated to Making Umrah and Hajj a Seamless Experience')" :title="__('welcome to our agency for the omrah in marrakech')"></x-desktop.atoms.title>
        </div>
        <x-desktop.atoms.spacer></x-desktop.atoms.spacer>
        <div class="container m-auto flex justify-between items-start gap-6">
            <div class="w-3/12 flex items-start justify-center">
                <x-desktop.offer-card-with-preview></x-desktop.offer-card>
            </div>
            <div class="w-3/12 flex items-start justify-center">
                <x-desktop.offer-card-with-preview></x-desktop.offer-card>
            </div>
            <div class="w-3/12 flex items-start justify-center">
                <x-desktop.offer-card-with-preview></x-desktop.offer-card>
            </div>
            <div class="w-3/12 flex items-start justify-center">
                <x-desktop.offer-card-with-preview></x-desktop.offer-card>
            </div>
        </div>
        <a href="{{ route('home') }}" class="border-yellow-500 border-2 px-6 py-2 m-auto block w-fit rounded-md text-yellow-500 font-black mt-8 hover:bg-yellow-500 hover:text-white duration-300">{{__('Discover more')}}</a>
        <x-desktop.atoms.spacer></x-desktop.atoms.spacer>
    </div>
    <x-desktop.atoms.spacer></x-desktop.atoms.spacer>
    <x-desktop.atoms.spacer></x-desktop.atoms.spacer>
    <div class="container m-auto">
        <x-desktop.help-desk></x-desktop.help-desk>
    </div>
    <x-desktop.atoms.spacer></x-desktop.atoms.spacer>
    <div class="container m-auto">
        <x-desktop.mission></x-desktop.mission>
    </div>
    <x-desktop.atoms.spacer></x-desktop.atoms.spacer>
    <div class="container m-auto flex justify-between items-start">
        <x-desktop.atoms.title :subtitle="__('Dedicated to Making Umrah and Hajj a Seamless Experience')" :title="__('Our blog')"></x-desktop.atoms.title>
    </div>
    <x-desktop.atoms.spacer></x-desktop.atoms.spacer>
    <div class="container m-auto flex justify-between items-start gap-8">
        <div class="w-3/12 flex items-start justify-center">
            <x-desktop.blog-card></x-desktop.blog-card>
        </div>
        <div class="w-3/12 flex items-start justify-center">
            <x-desktop.blog-card></x-desktop.blog-card>
        </div>
        <div class="w-3/12 flex items-start justify-center">
            <x-desktop.blog-card></x-desktop.blog-card>
        </div>
        <div class="w-3/12 flex items-start justify-center">
            <x-desktop.blog-card></x-desktop.blog-card>
        </div>
    </div>
    <x-desktop.atoms.spacer></x-desktop.atoms.spacer>
    <div class="w-ful">
        <x-desktop.footer></x-desktop.footer>
    </div>
@endsection