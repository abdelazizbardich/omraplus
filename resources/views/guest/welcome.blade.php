<x-guest-layout>
<x-header active="Home"></x-header>
<x-hero-header></x-hero-header>
<x-spacer></x-spacer>
<div class="container m-auto flex justify-between items-start">
    <div class="w-4/12 flex items-start justify-center">
        <x-text-offer-card :index="'0'" icon="{{ Vite::asset('resources/images/booking.webp') }}"
            :description="__('Effortless Booking Anywhere in Morocco')" :title="__('Book Umrah from anywhere in Morocco')"></x-text-offer-card>
    </div>
    <div class="w-4/12 flex items-start justify-center">
        <x-text-offer-card :index="'1'" icon="{{ Vite::asset('resources/images/customer-offer.webp') }}"
            :description="__('Exclusive Packages and Seasonal Offers at Competitive Prices')" :title="__('Special packages and offers throughout the year')"></x-text-offer-card>
    </div>
    <div class="w-4/12 flex items-start justify-center">
        <x-text-offer-card :index="'2'" icon="{{ Vite::asset('resources/images/customer-service.webp') }}"
            :description="__('Our team is ready to answer all your inquiries and provide assistance at any time to ensure the comfort and tranquility of the pilgrims.')" :title="__('24/7 support service')"></x-text-offer-card>
    </div>
</div>
<x-spacer></x-spacer>
<div class="container m-auto flex justify-between items-start">
    <x-title :subtitle="__('Dedicated to Making Umrah and Hajj a Seamless Experience')"
        :title="__('welcome to our agency for the omrah in marrakech')"></x-title>
</div>
<x-spacer></x-spacer>
<div class="container m-auto">
    <div class="container mx-auto">
        <x-carousel>
            @foreach ($hadjOffers as $hadjOffer)
                <div class="min-w-[350px] xl:w-3/12 lg:w-4/12 md:w-6/12 sm:w-6/12 xs:w-full p-3 pb-6">
                    <x-offer-card :data=$hadjOffer></x-offer-card>
                </div>
            @endforeach
        </x-carousel>
    </div>
</div>
<x-spacer></x-spacer>
<x-spacer></x-spacer>
<div class="bg-blue-50">
    <x-spacer></x-spacer>
    <div class="container m-auto flex justify-between items-start">
        <x-title :subtitle="__('Dedicated to Making Umrah and Hajj a Seamless Experience')" :title="__('welcome to our agency for the omrah in marrakech')"></x-title>
    </div>
    <x-spacer></x-spacer>
    <div class="container m-auto">
        <x-carousel>
            @foreach ($umrahOffers as $umrahOffer)
                <div class="min-w-[350px] xl:w-3/12 lg:w-4/12 md:w-6/12 sm:w-6/12 xs:w-full p-3 pb-6">
                    <x-offer-card-with-preview :data=$umrahOffer></x-offer-card>
                </div>
            @endforeach
        </x-carousel>
    </div>
    <!-- <a href="{{ route('home') }}" class="border-yellow-500 border-2 px-6 py-2 m-auto block w-fit rounded-md text-yellow-500 font-black mt-8 hover:bg-yellow-500 hover:text-white duration-300">{{__('Discover more')}}</a> -->
    <x-spacer></x-spacer>
</div>
<x-spacer></x-spacer>
<x-spacer></x-spacer>
<div class="container m-auto">
    <x-help-desk></x-help-desk>
</div>
<x-spacer></x-spacer>
<div class="container m-auto">
    <x-mission></x-mission>
</div>
<x-spacer></x-spacer>
<div class="container m-auto flex justify-between items-start">
    <x-title :subtitle="__('Dedicated to Making Umrah and Hajj a Seamless Experience')" :title="__('Our blog')"></x-title>
</div>
<x-spacer></x-spacer>
<div class="container m-auto flex justify-center items-start flex-wrap">
    <div class="xl:w-3/12 lg:w-4/12 md:w-6/12 sm:w-6/12 xs:w-full p-3 pb-6">
        <x-blog-card></x-blog-card>
    </div>
    <div class="xl:w-3/12 lg:w-4/12 md:w-6/12 sm:w-6/12 xs:w-full p-3 pb-6">
        <x-blog-card></x-blog-card>
    </div>
    <div class="xl:w-3/12 lg:w-4/12 md:w-6/12 sm:w-6/12 xs:w-full p-3 pb-6">
        <x-blog-card></x-blog-card>
    </div>
    <div class="xl:w-3/12 lg:w-4/12 md:w-6/12 sm:w-6/12 xs:w-full p-3 pb-6">
        <x-blog-card></x-blog-card>
    </div>
</div>
<x-spacer></x-spacer>
<div class="w-ful">
    <x-footer></x-footer>
</div>
</x-guest-layout>