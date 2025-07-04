<x-guest-layout>
<x-header active="Home"></x-header>
<x-hero-header :umrahs=$umrahs :programs=$programs :rooms=$rooms></x-hero-header>
<x-spacer></x-spacer>
<div class="container m-auto md:flex-row flex-col flex justify-between items-start">
    <div class="w-full md:w-4/12 flex items-start justify-center">
        <x-text-offer-card :index="'0'" icon="{{ Vite::asset('resources/images/booking.webp') }}"
            :description="__('index.Effortless Booking Anywhere in Morocco')" :title="__('index.Book Umrah from anywhere in Morocco')"></x-text-offer-card>
    </div>
    <div class="w-full md:w-4/12 flex items-start justify-center">
        <x-text-offer-card :index="'1'" icon="{{ Vite::asset('resources/images/customer-offer.webp') }}"
            :description="__('index.Exclusive Packages and Seasonal Offers at Competitive Prices')" :title="__('index.Special packages and offers throughout the year')"></x-text-offer-card>
    </div>
    <div class="w-full md:w-4/12 flex items-start justify-center">
        <x-text-offer-card :index="'2'" icon="{{ Vite::asset('resources/images/customer-service.webp') }}"
            :description="__('index.Our team is ready to answer all your inquiries and provide assistance at any time to ensure the comfort and tranquility of the pilgrims.')" :title="__('index.24/7 support service')"></x-text-offer-card>
    </div>
</div>
@if($hadjOffers->count() > 0)
<x-spacer></x-spacer>
<div class="container m-auto flex justify-between items-start">
    <x-title :title="__('index.Hajj Agency: The best offers and distinguished services for pilgrims to the House of Allah')"
        :subtitle="__('index.With OmraPlus, we offer you the best Hajj packages at competitive prices and integrated services. We guarantee you a comfortable and easy Hajj experience under the supervision of a professional and experienced team. Book with us today and choose the best for your trip.')"></x-title>
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
@endif
@if($umrahOffers->count() > 0)
<x-spacer></x-spacer>
<div class="bg-blue-50">
    <x-spacer></x-spacer>
    <div class="container m-auto flex justify-between items-start">
        <x-title :subtitle="__('index.Choose OmraPlus for a hassle-free Umrah! We offer you the best offers at competitive prices and integrated services for a comfortable and distinctive Umrah experience.')" :title="__('index.OmraPlus: Easy Umrah with special prices and integrated services')"></x-title>
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
    <!-- <a href="{{ route('home') }}" class="border-yellow-500 border-2 px-6 py-2 m-auto block w-fit rounded-md text-yellow-500 font-black mt-8 hover:bg-yellow-500 hover:text-white duration-300">{{__('index.Discover more')}}</a> -->
    <x-spacer></x-spacer>
</div>
<x-spacer></x-spacer>
@endif
<x-spacer></x-spacer>
<div class="container m-auto">
    <x-help-desk></x-help-desk>
</div>
<x-spacer></x-spacer>
<div class="container m-auto">
    <x-mission></x-mission>
</div>
<x-spacer></x-spacer>
@if ($blogPosts->count() > 0)
    <div class="container m-auto flex justify-between items-start">
        <x-title :subtitle="__('index.Dedicated to Making Umrah and Hajj a Seamless Experience')" :title="__('index.Our Blog – Your Comprehensive Guide to Hajj and Umrah')"></x-title>
    </div>
    <x-spacer></x-spacer>
    <div class="container m-auto flex justify-center items-start flex-wrap">
        @foreach ($blogPosts as $blogPost)
            <div class="xl:w-3/12 lg:w-4/12 md:w-6/12 sm:w-6/12 xs:w-full p-3 pb-6">
                <x-blog-card :data=$blogPost></x-blog-card>
            </div>
        @endforeach
    </div>
<x-spacer></x-spacer>
@endif
<div class="w-ful">
    <x-footer></x-footer>
</div>
</x-guest-layout>