<x-guest-layout>
    <x-header active=""></x-header>
    <x-page-header :title="__('index.Contact Us')" />
    <x-spacer></x-spacer>

    <div class="w-full max-w-6xl mx-auto p-4">
        <!-- Contact Form Container -->
        <div class="p-6 flex flex-col md:flex-row">
            <!-- Left Column (Form) -->
            <div class="md:w-1/2 p-4">
                <h2 class="text-3xl font-semibold text-indigo-600 mb-2">{{__('index.Get In Touch')}}</h2>
                <p class="text-gray-600 mb-8">{{__('index.We are here for you! How can we help?')}}</p>

                <form action="#" method="POST" class="space-y-6">
                    <div>
                        <input type="text" id="name" name="name"
                            class="w-full px-4 py-3 bg-gray-100 border-none rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="{{__('index.Enter your name')}}" required>
                    </div>

                    <div>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-3 bg-gray-100 border-none rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="{{__('index.Enter your email address')}}" required>
                    </div>

                    <div>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-3 bg-gray-100 border-none rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="{{__('index.Go ahead, we are listening...')}}" required>
                        </textarea>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full btn bg-blue-950  text-white font-medium py-3 px-4 rounded-lg transition duration-300 ease-in-out">
                            {{__('index.Submit')}}
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right Column (Illustration and Contact Info) -->
            <div class="md:w-1/2 p-4 flex flex-col justify-between">
                <div class="space-y-4 mt-8">
                    <div class="flex items-center">
                        <div class="bg-gray-100 p-2 rounded-full me-4">
                            <i class="fas fa-map-marker-alt text-indigo-500"></i>
                        </div>
                        <span class="text-gray-700"> {{ config('app.address') }}</span>
                    </div>

                    <div class="flex items-center">
                        <div class="bg-gray-100 p-2 rounded-full me-4">
                            <i class="fas fa-phone text-indigo-500"></i>
                        </div>
                        <span class="text-gray-700" dir="ltr"> {{ config('app.whtasppNumber') }} </span>
                    </div>

                    <div class="flex items-center">
                        <div class="bg-gray-100 p-2 rounded-full me-4">
                            <i class="fas fa-envelope text-indigo-500"></i>
                        </div>
                        <span class="text-gray-700"> {{ config('app.email') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social Media Side Bar -->
        <div class="fixed right-0 top-1/2 transform -translate-y-1/2">
            <div class="bg-indigo-500 text-white p-3 rounded-l-lg mb-1">
                <i class="fab fa-facebook-f"></i>
            </div>
            <div class="bg-indigo-500 text-white p-3 rounded-l-lg mb-1">
                <i class="fab fa-twitter"></i>
            </div>
            <div class="bg-indigo-500 text-white p-3 rounded-l-lg">
                <i class="fab fa-linkedin-in"></i>
            </div>
        </div>
    </div>
    <x-spacer></x-spacer>
    <x-footer></x-footer>
</x-guest-layout>