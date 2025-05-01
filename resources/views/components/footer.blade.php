<div class="w-full h-full bg-black-1100 pt-12 text-light m-0">
    <div class="container opacity-95 m-auto flex-col md:flex-row flex justify-between items-center border-b pb-6 border-light-600">
        <div class="md:w-3/12 border-e border-light-600 md:p-6 md:ps-0">
            <a href="{{ route('home') }}"><img loading="lazy" src="{{ Vite::asset('resources/images/logo-w.png') }}" alt="logo" class="w-full"></a>
                
        </div>
        <div class="md:w-9/12 p-6 pe-0">
            <p class="w-full text-base text-justify leading-relaxed line-clamp-4">{{ __('index.footer.description') }}.</p>
        </div>
    </div>
    <div class="container opacity-95 m-auto flex flex-wrap md:flex-nowrap justify-between md:items-center border-b py-8 border-light-600">
        <div class="w-1/2 md:w-3/12">
            <span class="block font-bold text-xl mb-3">{{__('index.Our Services')}}</span>
            <ul class="ps-6">
                <li><a href="{{route('about-us')}}" class="text-light">{{__('index.Who are we?')}}</a></li>
                <li><a href="{{route('booking-instructions')}}" class="text-light">{{__('index.Booking instructions')}}</a></li>
                <li><a href="{{route('our-services')}}" class="text-light">{{__('index.our services')}}</a></li>
                <li><a href="{{route('contact-us')}}" class="text-light">{{__('index.Contact us')}}</a></li>
            </ul>
        </div>
        <div class="w-1/2 md:w-3/12">
            <span class="block font-bold text-xl mb-3">{{__('index.Our Services')}}</span>
            <ul class="ps-6">
                <li><a href="{{ route('hajj-guide') }}" class="text-light">{{__('index.Hajj guide')}}</a></li>
                <li><a href="{{ route('umrah-guide') }}" class="text-light">{{__('index.Umrah guide')}}</a></li>
                <li><a href="{{ route('learn-about-mecca') }}" class="text-light">{{__('index.Learn about Mecca')}}</a></li>
                <li><a href="{{ route('get-to-know-medina') }}" class="text-light">{{__('index.Get to know Medina')}}</a></li>
            </ul>
        </div>
        <div class="w-1/2 md:w-3/12">
            <span class="block font-bold text-xl mb-3">{{__('index.Our Services')}}</span>
            <ul class="ps-6">
                <li><a href="{{ route('booking-instructions') }}" class="text-light">{{__('index.Booking instructions')}}</a></li>
                <li><a href="{{ route('contact-us') }}" class="text-light">{{__('index.Contact us')}}</a></li>
            </ul>
        </div>
        <div class="w-1/2 md:w-3/12">
            <span class="block font-bold text-xl mb-3">{{__('index.Our Services')}}</span>
            <ul class="ps-6">
                <li><a href="{{ route('policy.show') }}" class="text-light">{{__('index.Privacy Policy')}}</a></li>
                <li><a href="{{ route('payment-policy') }}" class="text-light">{{__('index.Payment Policy')}}</a></li>
                <li><a href="{{ route('terms-and-conditions') }}" class="text-light">{{__('index.Terms and Conditions')}}</a></li>
                <li><a href="{{ route('umrati-partner-program') }}" class="text-light">{{__('index.Umrati partner program')}}</a></li>
            </ul>
        </div>
    </div>
    <div class="container opacity-95 m-auto flex-col md:flex-row flex justify-between items-center py-6 gap-6 md:gap-0">
        <div class="w-auto">
            <span class="text-center md:text-start text-base block">{{ __('index.All Rights Reserved') }} © {{ date('Y') }}</span>
        </div>
        <div class="w-auto flex flex-row justify-center items-center gap-4">
            <div class="w-auto">
                <img loading="lazy" src="{{ Vite::asset('resources/images/logo-w.png') }}" class="md:h-8" alt="logo">
            </div>
            <div class="w-auto">
                <img loading="lazy" src="{{ Vite::asset('resources/images/payment method.png') }}" class="md:h-8" alt="logo">
            </div>
        </div>
    </div>
</div>