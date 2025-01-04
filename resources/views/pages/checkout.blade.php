@extends('layouts.app')
@section('content')
<x-header active=""></x-header>
<x-page-header :title="__('confirmation & paimenent')" :breadcrumbs="[__('Home'), __('confirmation & paimenent')]" />
<x-atoms.spacer></x-atoms.spacer>
<div class="container w-full mx-auto">
    <div class="w-full mb-12">
        <h1 class="text-3xl font-bold">{{ __('confirmation & paimenent')}}</h1>
    </div>
</div>
<div class="container w-full mx-auto flex gap-12 items-start relative">
    <div class="w-8/12">
        <form action="" method="post">
            <div class="rounded-lg shadow-md bg-white mb-6">
                <div class="rounded-lg bg-blue-950 p-3 mb-3 flex items-center">
                    <span class="rounded-full bg-white text-black me-2 flex items-center justify-center font-black h-6 aspect-square">1</span>
                    <span class="text-white font-medium">{{ __('travelers') }}</span>
                </div>
                <div class="flex items-center justify-between px-3 mb-3 pb-3">
                    <span class="font-black">عدد المسافرين</span>
                    <div class="flex justify-between items-center">
                        <span class="rounded-full bg-white border text-black-500 shadow-md cursor-pointer border-black-200 text-black me-2 flex items-center justify-center font-black h-8 aspect-square">-</span>
                        <input type="text" readonly class="text-center outline-none rounded-full bg-white text-black me-2 flex items-center w-6 justify-center font-black h-6 aspect-square" value="1">
                        <!-- <span class="rounded-full bg-white text-black me-2 flex items-center w-6 justify-center font-black h-6 aspect-square">10</span> -->
                        <span class="rounded-full bg-white border text-black-500 shadow-md cursor-pointer border-black-200 text-black me-2 flex items-center justify-center font-black h-8 aspect-square">+</span>
                    </div>
                </div>
    
            </div>
            <div class="rounded-lg shadow-md bg-white mb-6">
                <div class="rounded-lg bg-blue-950 p-3 mb-3 flex items-center">
                    <span class="rounded-full bg-white text-black me-2 flex items-center justify-center font-black h-6 aspect-square">2</span>
                    <span class="text-white font-medium">{{ __('Pilgrim information') }}</span>
                </div>
                <div class="flex items-center justify-between px-3 mb-3 pb-3 gap-12">
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">{{__('first name')}}</span>
                        </div>
                        <input type="text" placeholder="{{__('first name')}}" class="input input-bordered w-full" />
                    </label>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">{{__('last name')}}</span>
                        </div>
                        <input type="text" placeholder="{{__('last name')}}" class="input input-bordered w-full" />
                    </label>
                </div>
                <div class="flex items-center justify-between px-3 mb-3 pb-3 gap-12">
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">{{__('city')}}</span>
                        </div>
                        <input type="text" placeholder="{{__('city')}}" class="input input-bordered w-full" />
                    </label>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">{{__('phone')}}</span>
                        </div>
                        <input type="text" placeholder="{{__('phone')}}" class="input input-bordered w-full" />
                    </label>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">{{__('email')}}</span>
                        </div>
                        <input type="text" placeholder="{{__('email')}}" class="input input-bordered w-full" />
                    </label>
                </div>
            </div>
            <div class="rounded-lg shadow-md bg-white mb-6">
                <div class="rounded-lg bg-blue-950 p-3 mb-3 flex items-center">
                    <span class="rounded-full bg-white text-black me-2 flex items-center justify-center font-black h-6 aspect-square">3</span>
                    <span class="text-white font-medium">{{ __('Add Payment Details') }}</span>
                </div>
                
                <div class="flex flex-col items-center justify-between px-3 mb-3 pb-3">
                    <div class="border border-black-200 rounded-lg p-3 w-full mb-3 cursor-pointer hover:shadow-md h-16 flex items-center">
                        <div class="flex w-full">
                            <input id="PAY_LATER" type="radio" name="payment_way" value="PAY_LATER" class="radio radio-info me-3 checked:bg-blue-950" checked/>
                            <label for="PAY_LATER">{{ __('Book Now & Pay Later') }}</label>
                        </div>
                    </div>
                    <div class="border border-black-200 rounded-lg p-3 w-full mb-3 cursor-pointer hover:shadow-md h-16 flex items-center">
                        <div class="flex items-center justify-between w-full">
                            <div class="flex items-center">
                                <input id="BANK_TRANSFER" type="radio" name="payment_way" value="BANK_TRANSFER" class="radio radio-info me-3 checked:bg-blue-950"/>
                                <label for="BANK_TRANSFER">{{ __('Pay by bank transfer') }}</label>
                            </div>
                            <div class="flex gap-2">
                                <img src="{{ Vite::asset('resources/images/wafa-bank.jpg') }}" alt="cachplus logo" class="h-12 aspect-video object-contain p-1">
                                <img src="{{ Vite::asset('resources/images/credit-card.jpg') }}" alt="cachplus logo" class="h-12 aspect-video object-contain p-1">
                                <img src="{{ Vite::asset('resources/images/popularbank.jpg') }}" alt="cachplus logo" class="h-12 aspect-video object-contain p-1">

                            </div>
                        </div>
                    </div>
                    <div class="border border-black-200 rounded-lg p-3 w-full mb-3 cursor-pointer hover:shadow-md h-16 flex items-center">
                        <div class="flex items-center justify-between w-full">
                            <div class="flex items-center">
                                <input id="CASHPLUS" type="radio" name="payment_way" value="CASHPLUS" class="radio radio-info me-3 checked:bg-blue-950"/>
                                <label for="CASHPLUS">{{ __('Pay via Cashplus') }}</label>
                            </div>
                            <img src="{{ Vite::asset('resources/images/cachplus.jpg') }}" alt="cachplus logo" class="h-12 aspect-video object-contain p-1">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="w-4/12 h-auto sticky top-10">
        <div class="border rounded-3xl p-6 mb-6 w-full">
            <div class="flex items-center gap-6">
                <div class="w-4/12">
                    <img src="{{ Vite::asset('resources/images/help-desk.jpg') }}" class="rounded-2xl w-full aspect-square object-cover" alt="offer photo">
                </div>
                <div class="w-8/12">
                    <h1 class="font-black text-xl w-full">عمرة شعبان - من 19 فبراير إلى 06 مارس - عبر الخطوط السعودية</h1>
                </div>
            </div>
            <hr class="my-3 opacity-30">
            <div class="">
                <div class="flex">
                    <span class="w-6/12">{{__('Duration')}}:</span>
                    <span class="w-6/12 font-bold">14 {{__('Days')}}</span>
                </div>
                <div class="flex">
                    <span class="w-6/12">{{__('Starts on')}}:</span>
                    <span class="w-6/12 font-bold">14 {{__('Days')}}</span>
                </div>
                <div class="flex">
                    <span class="w-6/12">{{__('Ends on')}}:</span>
                    <span class="w-6/12 font-bold">14 {{__('Days')}}</span>
                </div>
                <div class="flex">
                    <span class="w-6/12">{{__('No. of Travellers')}}:</span>
                    <span class="w-6/12 font-bold">1</span>
                </div>
            </div>
            <hr class="my-3 opacity-30">
            <span class="text-xl block mb-3">{{__('Price Details')}}</span>
            <span class="text-xl block mb-1">{{__('Traveller(s)')}}:</span>
            <div class="flex">
                <span class="w-6/12">{{__('Adult')}}: 1 x {{ __('dh') }} 1550</span>
                <span class="w-6/12 font-bold">1550 {{ __('dh') }}</span>
            </div>
            <hr class="my-3 opacity-30">
            <div class="flex">
                <span class="w-6/12">{{__('Total')}}:</span>
                <span class="w-6/12 font-bold">54 {{ __('dh') }}</span>
            </div>
            <hr class="my-3 opacity-30">
            <button class="w-full btn btn-lg text-xl rounded-xl hover:bg-yellow-600 hover:shadow-lg font-black from-yellow-600  bg-gradient-to-l to-yellow-500">{{ __('Book now') }}</button>
        </div>
        <x-atoms.spacer></x-atoms.spacer>
    </div>
</div>
<x-atoms.spacer></x-atoms.spacer>
<x-footer></x-footer>
@endsection