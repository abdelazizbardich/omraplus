<x-guest-layout>
    <x-header active=""></x-header>
    <x-page-header :title="__('index.Checkout Success')" :breadcrumbs="['Home', 'Checkout Success']" />
    <x-spacer></x-spacer>
    <div class="text-center">

        <div class="container w-full mx-auto">
            <div class="w-full mb-12">
                <h1 class="text-3xl font-bold">{{ __('index.Checkout Success')}}</h1>
            </div>
        </div>
        <!--  -->
        <div class="text-3xl font-semibold">
            {{ __('index.thank you for your order') }}
        </div>
        <div class="text-lg">
            {{ __('index.your order has been placed and is being processed. when the item is shipped, you will receive an email with the tracking number') }}
        </div>
        <div class="text-lg">
            {{ __('index.if you have any questions about your order, please contact us at') }} <a href="mailto:{{ config('mail.from.address') }}" class="text-blue-500">{{ config('mail.from.address') }}</a>
        </div>
        <div class="text-lg">
            {{ __('index.order number') }}: <span class="font-semibold">{{ $order->id }}</span>
        </div>
        <div class="text-lg">
            {{ __('index.order date') }}: <span class="font-semibold">{{ $order->created_at->format('d/m/Y') }}</span>
        </div>
    </div>
    <!--  -->
    <x-spacer></x-spacer>
    <x-footer></x-footer>
</x-guest-layout>