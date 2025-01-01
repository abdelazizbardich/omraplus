@extends('layouts.app')
@section('content')
    <x-header></x-header>
    <x-hero-header></x-hero-header>
    <x-atoms.spacer></x-atoms.spacer>
    <div class="container m-auto flex justify-between items-start">
        <div class="w-4/12 flex items-start justify-center">
            <x-atoms.text-offer-card :description="__('Effortless Booking Anywhere in Morocco')" :title="__('Book Umrah from anywhere in Morocco')"></x-atoms.text-offer-card>
        </div>
        <div class="w-4/12 flex items-start justify-center">
            <x-atoms.text-offer-card :description="__('Exclusive Packages and Seasonal Offers at Competitive Prices')" :title="__('Special packages and offers throughout the year')"></x-atoms.text-offer-card>
        </div>
        <div class="w-4/12 flex items-start justify-center">
            <x-atoms.text-offer-card :description="__('Our team is ready to answer all your inquiries and provide assistance at any time to ensure the comfort and tranquility of the pilgrims.')" :title="__('24/7 support service')"></x-atoms.text-offer-card>
        </div>
    </div>
    <x-atoms.spacer></x-atoms.spacer>
    <div class="container m-auto flex justify-between items-start">
        <x-atoms.title :subtitle="__('Dedicated to Making Umrah and Hajj a Seamless Experience')" :title="__('welcome to our agency for the omrah in marrakech')"></x-atoms.title>
    </div>
    <x-atoms.spacer></x-atoms.spacer>
    <div class="container m-auto flex justify-between items-start gap-12">
        <div class="w-4/12 flex items-start justify-center">
            <x-offer-card></x-offer-card>
        </div>
        <div class="w-4/12 flex items-start justify-center">
            <x-offer-card></x-offer-card>
        </div>
        <div class="w-4/12 flex items-start justify-center">
            <x-offer-card></x-offer-card>
        </div>
    </div>
    <x-atoms.spacer></x-atoms.spacer>
    <div class="container m-auto flex justify-between items-start">
        <x-atoms.title :subtitle="__('Dedicated to Making Umrah and Hajj a Seamless Experience')" :title="__('welcome to our agency for the omrah in marrakech')"></x-atoms.title>
    </div>
    <x-atoms.spacer></x-atoms.spacer>
    <div class="container m-auto flex justify-between items-start gap-6">
        <div class="w-3/12 flex items-start justify-center">
            <x-offer-card-with-preview></x-offer-card>
        </div>
        <div class="w-3/12 flex items-start justify-center">
            <x-offer-card-with-preview></x-offer-card>
        </div>
        <div class="w-3/12 flex items-start justify-center">
            <x-offer-card-with-preview></x-offer-card>
        </div>
        <div class="w-3/12 flex items-start justify-center">
            <x-offer-card-with-preview></x-offer-card>
        </div>
    </div>
    <a href="#" class="border-yellow-500 border-2 px-6 py-2 m-auto block w-fit rounded-md text-yellow-500 font-black mt-8 hover:bg-yellow-500 hover:text-white duration-300">{{__('Discover more')}}</a>
    <x-atoms.spacer></x-atoms.spacer>
    <x-atoms.spacer></x-atoms.spacer>
    <div class="container m-auto">
        <x-help-desk></x-help-desk>
    </div>
    <x-atoms.spacer></x-atoms.spacer>
    <div class="container m-auto">
        <x-mission></x-mission>
    </div>
    <x-atoms.spacer></x-atoms.spacer>
@endsection