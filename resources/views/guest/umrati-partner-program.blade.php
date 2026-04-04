<x-guest-layout>
    <x-header active=""></x-header>
    <x-page-header :title="__('index.Umrati partner program')" :breadcrumbs="['Home', __('index.Umrati partner program')]" />

    {{-- Hero --}}
    <div class="bg-gradient-to-br from-blue-950 to-blue-900 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-black mb-4">{{ __('index.Join our Partner Program') }}</h1>
            <p class="text-lg md:text-xl opacity-80 max-w-2xl mx-auto mb-8">{{ __('index.Partner hero subtitle') }}</p>
            <a href="#apply-form" class="btn btn-lg from-yellow-600 bg-gradient-to-l to-yellow-500 text-white font-black border-none hover:shadow-lg">
                {{ __('index.Apply Now') }}
            </a>
        </div>
    </div>

    {{-- Benefits --}}
    <x-spacer></x-spacer>
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-black text-center mb-12">{{ __('index.Why join us') }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-6 rounded-2xl shadow-md bg-white border border-gray-100">
                <div class="text-5xl mb-4">💰</div>
                <h3 class="text-xl font-bold mb-2">{{ __('index.Earn commission') }}</h3>
                <p class="text-gray-500">{{ __('index.Commission benefit description') }}</p>
            </div>
            <div class="text-center p-6 rounded-2xl shadow-md bg-white border border-gray-100">
                <div class="text-5xl mb-4">🤝</div>
                <h3 class="text-xl font-bold mb-2">{{ __('index.Dedicated support') }}</h3>
                <p class="text-gray-500">{{ __('index.Support benefit description') }}</p>
            </div>
            <div class="text-center p-6 rounded-2xl shadow-md bg-white border border-gray-100">
                <div class="text-5xl mb-4">📊</div>
                <h3 class="text-xl font-bold mb-2">{{ __('index.Track your referrals') }}</h3>
                <p class="text-gray-500">{{ __('index.Tracking benefit description') }}</p>
            </div>
        </div>
    </div>

    {{-- How it works --}}
    <x-spacer></x-spacer>
    <div class="bg-gray-50 py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-black text-center mb-12">{{ __('index.How it works') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
                <div class="flex flex-col items-center">
                    <div class="w-14 h-14 rounded-full bg-blue-950 text-white flex items-center justify-center text-2xl font-black mb-4">1</div>
                    <h4 class="font-bold mb-1">{{ __('index.Submit application') }}</h4>
                    <p class="text-sm text-gray-500">{{ __('index.Submit application description') }}</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-14 h-14 rounded-full bg-blue-950 text-white flex items-center justify-center text-2xl font-black mb-4">2</div>
                    <h4 class="font-bold mb-1">{{ __('index.Get approved') }}</h4>
                    <p class="text-sm text-gray-500">{{ __('index.Get approved description') }}</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-14 h-14 rounded-full bg-blue-950 text-white flex items-center justify-center text-2xl font-black mb-4">3</div>
                    <h4 class="font-bold mb-1">{{ __('index.Share your code') }}</h4>
                    <p class="text-sm text-gray-500">{{ __('index.Share code description') }}</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-14 h-14 rounded-full from-yellow-600 bg-gradient-to-l to-yellow-500 text-white flex items-center justify-center text-2xl font-black mb-4">4</div>
                    <h4 class="font-bold mb-1">{{ __('index.Earn commissions') }}</h4>
                    <p class="text-sm text-gray-500">{{ __('index.Earn commissions description') }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Application Form --}}
    <x-spacer></x-spacer>
    <div id="apply-form" class="container mx-auto px-6 max-w-2xl">
        <h2 class="text-3xl font-black text-center mb-4">{{ __('index.Apply to Partner Program') }}</h2>
        <p class="text-center text-gray-500 mb-10">{{ __('index.Application form subtitle') }}</p>

        @if (session('success'))
            <div class="alert alert-success mb-6">
                <span>{{ session('success') }}</span>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-error mb-6">
                <span>{{ session('error') }}</span>
            </div>
        @endif

        <form action="{{ route('partner.apply') }}" method="POST" class="bg-white rounded-2xl shadow-lg p-8 flex flex-col gap-4">
            @csrf
            <div class="flex gap-4">
                <label class="form-control w-full">
                    <div class="label"><span class="label-text font-medium">{{ __('index.full name') }} *</span></div>
                    <input type="text" name="name" value="{{ old('name') }}"
                        class="input input-bordered w-full @error('name') input-error @enderror"
                        placeholder="{{ __('index.full name') }}" required />
                    @error('name') <span class="text-error text-xs mt-1">{{ $message }}</span> @enderror
                </label>
                <label class="form-control w-full">
                    <div class="label"><span class="label-text font-medium">{{ __('index.Company name') }}</span></div>
                    <input type="text" name="company_name" value="{{ old('company_name') }}"
                        class="input input-bordered w-full @error('company_name') input-error @enderror"
                        placeholder="{{ __('index.Company name') }}" />
                    @error('company_name') <span class="text-error text-xs mt-1">{{ $message }}</span> @enderror
                </label>
            </div>
            <div class="flex gap-4">
                <label class="form-control w-full">
                    <div class="label"><span class="label-text font-medium">{{ __('index.email') }} *</span></div>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="input input-bordered w-full @error('email') input-error @enderror"
                        placeholder="{{ __('index.email') }}" required />
                    @error('email') <span class="text-error text-xs mt-1">{{ $message }}</span> @enderror
                </label>
                <label class="form-control w-full">
                    <div class="label"><span class="label-text font-medium">{{ __('index.phone') }} *</span></div>
                    <input type="text" name="phone" value="{{ old('phone') }}"
                        class="input input-bordered w-full @error('phone') input-error @enderror"
                        placeholder="{{ __('index.phone') }}" required />
                    @error('phone') <span class="text-error text-xs mt-1">{{ $message }}</span> @enderror
                </label>
            </div>
            <label class="form-control w-full">
                <div class="label"><span class="label-text font-medium">{{ __('index.Motivation') }}</span></div>
                <textarea name="motivation" rows="4"
                    class="textarea textarea-bordered w-full @error('motivation') textarea-error @enderror"
                    placeholder="{{ __('index.Why join partner program') }}">{{ old('motivation') }}</textarea>
                @error('motivation') <span class="text-error text-xs mt-1">{{ $message }}</span> @enderror
            </label>
            <button type="submit"
                class="btn btn-lg w-full from-yellow-600 bg-gradient-to-l to-yellow-500 text-white font-black border-none hover:shadow-lg mt-2">
                {{ __('index.Apply Now') }}
            </button>
        </form>
    </div>

    <x-spacer></x-spacer>
    <x-footer></x-footer>
</x-guest-layout>
