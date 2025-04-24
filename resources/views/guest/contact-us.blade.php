<x-guest-layout>
    <x-header active=""></x-header>
    <x-page-header :title="__('index.Contact Us')" />
    <x-spacer></x-spacer>
    <div class="w-full max-w-6xl mx-auto p-4">
        <div class="flex flex-col md:flex-row">
            <div class="w-1/2 p-4">
                <h2 class="text-3xl font-semibold text-indigo-600 mb-2">{{ __('index.Welcome to') }} <strong>{{ config('app.name') }}</strong>!</h2>
                <p class="text-gray-600 mb-8">{{ __('index.Our support desk is here to serve you and provide the help you need at any time.') }}</p>
                <p class="text-gray-600 mb-8">{{ __('index.Whether you are planning to perform Umrah, have questions about our packages and services, or need post-booking support, our') }} <strong>{{ config('app.name') }}</strong>{{ __('index.Always ready to listen to you and provide support quickly and efficiently') }}.</p>
                <p class="text-gray-600 mb-3"><strong>📞 {{ __('index.phone') }}:</strong> <a dir="ltr" href="tel:{{ config('app.whtasppNumber') }}">{{ config('app.whtasppNumber') }}</a></p>
                <p class="text-gray-600 mb-8"><strong>📧 {{ __('index.email') }}:</strong> <a dir="ltr" href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a></p>
                <p class="text-gray-600 mb-8">{{__('index.in')}} <strong>{{ config('app.name') }}</strong>، {{ __('index.The comfort and satisfaction of our customers is our top priority. Feel free to reach out to us at any time - we are here for you.') }}</p>
            </div>
            <div class="w-1/2 p-4 flex flex-col justify-between">
                <div class="space-y-4">
                    <form action="{{ route('contact-us-send') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full px-4 py-3 bg-gray-100 border-none rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="{{__('index.Enter your name')}}" required>
                        </div>
                        <div>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-3 bg-gray-100 border-none rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="{{__('index.Enter your email address')}}" required>
                        </div>
                        <div>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 bg-gray-100 border-none rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="{{__('index.Go ahead, we are listening...')}}" required>{{ old('message') }}</textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full btn bg-blue-950  text-white font-medium py-3 px-4 rounded-lg transition duration-300 ease-in-out">{{__('index.Submit')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-spacer></x-spacer>
    <x-footer></x-footer>
</x-guest-layout>