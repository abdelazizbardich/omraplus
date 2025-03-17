<x-guest-layout>
    <x-header active=""></x-header>
    <x-page-header :title="__('index.Contact Us')" />
    <x-spacer></x-spacer>

    <div class="w-full max-w-6xl mx-auto p-4">

        <div class="p-6 flex flex-col md:flex-row">
            <div class="w-full w-1/2 p-4">
                @if(session('success'))
                    <div role="alert" class="alert alert-success text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ __('index.'.session('success')) }}</span>
                    </div>
                @endif
            </div>
            <div class="w-full w-1/2 p-4">
                @if(session('error'))
                    <div role="alert" class="alert alert-error text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ __('index.'.session('error')) }}</span>
                    </div>
                @endif
            </div>
        </div>

        <div class="flex flex-col md:flex-row">
            <div class="w-2/3 p-4">

                <h2 class="text-3xl font-semibold text-indigo-600 mb-2">{{__('index.Get In Touch')}}</h2>

                <p class="text-gray-600 mb-8">{{__('index.We are here for you! How can we help?')}}</p>

                <form action="{{ route('contact-us-send') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                            class="w-full px-4 py-3 bg-gray-100 border-none rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="{{__('index.Enter your name')}}" required>
                    </div>

                    <div>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="w-full px-4 py-3 bg-gray-100 border-none rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="{{__('index.Enter your email address')}}" required>
                    </div>

                    <div>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-3 bg-gray-100 border-none rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="{{__('index.Go ahead, we are listening...')}}"
                            required>{{ old('message') }}</textarea>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full btn bg-blue-950  text-white font-medium py-3 px-4 rounded-lg transition duration-300 ease-in-out">{{__('index.Submit')}}</button>
                    </div>
                </form>
            </div>

            <div class="w-1/3 p-4 flex flex-col justify-between">
                <div class="space-y-4 mt-8">

                    @if(config('app.address'))
                        <div class="flex items-center">
                            <div class="bg-gray-100 p-2 rounded-full me-4">
                                <i class="fas fa-map-marker-alt text-indigo-500"></i>
                            </div>
                            <span class="text-gray-700"> {{ config('app.address') }}</span>
                        </div>
                    @endif

                    @if(config('app.whtasppNumber'))
                        <div class="flex items-center">
                            <div class="bg-gray-100 p-2 rounded-full me-4">
                                <i class="fas fa-phone text-indigo-500"></i>
                            </div>
                            <span class="text-gray-700" dir="ltr">
                                <a href="tel:{{ config('app.whtasppNumber') }}"
                                    class="text-indigo-500 hover:text-indigo-600">{{ config('app.whtasppNumber') }}</a>
                            </span>
                        </div>
                    @endif

                    @if(config('app.email'))
                        <div class="flex items-center">
                            <div class="bg-gray-100 p-2 rounded-full me-4">
                                <i class="fas fa-envelope text-indigo-500"></i>
                            </div>
                            <span class="text-gray-700">
                                <a href="mailto:{{ config('app.email') }}"
                                    class="text-indigo-500 hover:text-indigo-600">{{ config('app.email') }}</a>
                            </span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="fixed right-0 top-1/2 transform -translate-y-1/2">
                <div class="bg-gray-50 shadow-xl p-3 rounded-l-lg mb-1">
                    <i class="fab fa-facebook-f"></i>
                </div>

                <div class="bg-gray-50 shadow-xl p-3 rounded-l-lg mb-1">
                    <i class="fab fa-twitter"></i>
                </div>

                <div class="bg-gray-50 shadow-xl p-3 rounded-l-lg">
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
        </div>


    </div>
    <x-spacer></x-spacer>
    <x-footer></x-footer>
</x-guest-layout>