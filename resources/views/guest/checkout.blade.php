<x-guest-layout>
    <x-header active=""></x-header>
    <x-page-header :title="__('index.confirmation & paimenent')" :breadcrumbs="['Home', 'confirmation & paimenent']" />
    <x-spacer></x-spacer>
    <div class="container w-full mx-auto">
        <div class="w-full mb-12">
            <h1 class="text-3xl font-bold">{{ __('index.confirmation & paimenent')}}</h1>
        </div>
    </div>
    <form action="{{ route('checkout.save') }}" method="post">
        @csrf
        <div class="container w-full mx-auto flex gap-12 items-start relative">
            <div class="w-8/12">
                @if (isset($errors) && $errors->any())
                    <div class="alert alert-error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="rounded-lg shadow-md bg-white mb-6">
                    <div class="rounded-lg bg-blue-950 p-3 mb-3 flex items-center">
                        <span
                            class="rounded-full bg-white text-black me-2 flex items-center justify-center font-black h-6 aspect-square">1</span>
                        <span class="text-white font-medium">{{ __('index.travelers') }}</span>
                    </div>
                    <div class="flex items-center justify-between px-3 mb-3 pb-3">
                        <span class="font-black">{{ __('index.Pilgrims count') }}</span>
                        <div class="flex justify-between items-center">
                            <span id="travelers-count-minus"
                                class="rounded-full bg-white border text-black-500 shadow-md cursor-pointer border-black-200 text-black me-2 flex items-center justify-center font-black h-8 aspect-square">-</span>
                            <input data-price="{{ $price->price }}" name="pilgrims_count" type="text"
                                id="travelers-count-input" readonly
                                class="text-center outline-none rounded-none p-0 border-none select-none bg-white text-black me-2 flex items-center w-6 justify-center font-black h-6 aspect-square"
                                value="1">
                            <span id="travelers-count-plus"
                                class="rounded-full bg-white border text-black-500 shadow-md cursor-pointer border-black-200 text-black me-2 flex items-center justify-center font-black h-8 aspect-square">+</span>
                        </div>
                    </div>

                </div>
                <div class="rounded-lg shadow-md bg-white mb-6">
                    <div class="rounded-lg bg-blue-950 p-3 mb-3 flex items-center">
                        <span
                            class="rounded-full bg-white text-black me-2 flex items-center justify-center font-black h-6 aspect-square">2</span>
                        <span class="text-white font-medium">{{ __('index.Pilgrim information') }}</span>
                    </div>
                    <div class="flex items-center justify-between px-3 mb-3 pb-3 gap-12">
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">{{__('index.first name')}}</span>
                            </div>
                            <input type="text" name="first_name" placeholder="{{__('index.first name')}}"
                                class="input input-bordered border-black-200 w-full" />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">{{__('index.last name')}}</span>
                            </div>
                            <input type="text" name="last_name" placeholder="{{__('index.last name')}}"
                                class="input input-bordered border-black-200 w-full" />
                        </label>
                    </div>
                    <div class="flex items-center justify-between px-3 mb-3 pb-3 gap-12">
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">{{__('index.city')}}</span>
                            </div>
                            <input type="text" name="city" placeholder="{{__('index.city')}}"
                                class="input input-bordered border-black-200 w-full" />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">{{__('index.phone')}}</span>
                            </div>
                            <input type="text" name="phone" placeholder="{{__('index.phone')}}"
                                class="input input-bordered border-black-200 w-full" />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">{{__('index.email')}}</span>
                            </div>
                            <input type="text" name="email" placeholder="{{__('index.email')}}"
                                class="input input-bordered border-black-200 w-full" />
                        </label>
                    </div>
                </div>
                <div class="rounded-lg shadow-md bg-white mb-6">
                    <div class="rounded-lg bg-blue-950 p-3 mb-3 flex items-center">
                        <span
                            class="rounded-full bg-white text-black me-2 flex items-center justify-center font-black h-6 aspect-square">3</span>
                        <span class="text-white font-medium">{{ __('index.Add Payment Details') }}</span>
                    </div>
                    <div class="flex flex-col items-center justify-between px-3 mb-3 pb-3">
                        <div class="collapse rounded-none flex items-center">
                            <input id="PAY_LATER" type="radio" name="payment_way" value="PAY_LATER"
                                class="peer radio radio-info me-3 checked:bg-blue-950 hidden" checked />
                            <label
                                class="peer-checked:from-yellow-500  peer-checked:bg-gradient-to-l peer-checked:to-yellow-400 border border-black-200 rounded-lg p-3 w-full mb-3 cursor-pointer hover:shadow-md h-16 collapse-title flex w-full cursor-pointer"
                                for="PAY_LATER">
                                <span class="flex items-center">{{ __('index.Book Now & Pay Later') }}</span>
                            </label>
                        </div>
                        <div class="collapse rounded-none">
                            <input id="BANK_TRANSFER" type="radio" name="payment_way" value="BANK_TRANSFER"
                                class="radio radio-info me-3 peer checked:bg-blue-950 hidden" />
                            <label
                                class="border border-black-200 peer-checked:from-yellow-500  peer-checked:bg-gradient-to-l peer-checked:to-yellow-400 rounded-lg p-3 w-full mb-3 cursor-pointer hover:shadow-md h-16 collapse-title flex items-center justify-between w-full cursor-pointer"
                                for="BANK_TRANSFER">
                                <div class="flex items-center">
                                    <span>{{ __('index.Pay by bank transfer') }}</span>
                                </div>
                                <div class="flex gap-2">
                                    <img loading="lazy" src="{{ Vite::asset('resources/images/wafa-bank.jpg') }}" alt="cachplus logo"
                                        class="h-12 aspect-video object-contain p-1">
                                    <img loading="lazy" src="{{ Vite::asset('resources/images/popularbank.jpg') }}" alt="cachplus logo"
                                        class="h-12 aspect-video object-contain p-1">

                                </div>
                            </label>
                            <div class="collapse-content text-sm">
                                <div class="flex gap-3 mb-3">
                                    <div class="w-1/2">
                                        <img loading="lazy" src="{{ Vite::asset('resources/images/wafa-bank.jpg') }}"
                                            alt="cachplus logo" class="h-12 aspect-video object-contain p-1">
                                        <span class="block" dir="rtl"><span
                                                class="font-bold">{{ __('index.Bank name') }}:</span>Wafa
                                            Bank</span>
                                        <span class="block" dir="rtl"><span
                                                class="font-bold">{{ __('index.Account Number') }}:</span>
                                            123456789</span>
                                    </div>
                                    <div class="w-1/2">
                                        <img loading="lazy" src="{{ Vite::asset('resources/images/popularbank.jpg') }}"
                                            alt="cachplus logo" class="h-12 aspect-video object-contain p-1">
                                        <span class="block" dir="rtl"><span
                                                class="font-bold">{{ __('index.Bank name') }}:</span>Wafa
                                            Bank</span>
                                        <span class="block" dir="rtl"><span
                                                class="font-bold">{{ __('index.Account Number') }}:</span>
                                            123456789</span>
                                    </div>
                                </div>
                                <span
                                    class="block">{{ __('index.Please send a photo of the receipt to the following number to confirm the payment.') }}</span>
                                <span class="block w-fit font-semibold text-lg"
                                    dir="ltr">{{ __('index.+212 6 12 34 56 78') }}</span>
                            </div>
                        </div>
                        <div class="collapse rounded-none">
                            <input id="PAY_BY_CARD" type="radio" name="payment_way" value="PAY_BY_CARD"
                                class="radio radio-info me-3 peer checked:bg-blue-950 hidden" />
                            <label
                                class="border border-black-200 peer-checked:from-yellow-500  peer-checked:bg-gradient-to-l peer-checked:to-yellow-400 rounded-lg p-3 w-full mb-3 cursor-pointer hover:shadow-md h-16 collapse-title flex items-center justify-between w-full cursor-pointer"
                                for="PAY_BY_CARD">
                                <div class="flex items-center">
                                    <span>{{ __('index.Pay by Card') }}</span>
                                </div>
                                <div class="flex gap-2">
                                    <img loading="lazy" src="{{ Vite::asset('resources/images/credit-card.jpg') }}" alt="cachplus logo"
                                        class="h-12 aspect-video object-contain p-1">
                                </div>
                            </label>
                            <div class="collapse-content text-sm">
                                <div class="w-1/2 min-w-72">
                                    <div class="mb-3">
                                        <fieldset class="fieldset">
                                            <legend class="fieldset-legend">{{ __('index.Card number') }}</legend>
                                            <input name="card_number" type="text" class="input w-full" type="text"
                                                inputmode="numeric"
                                                oninput="this.value = this.value.replace(/[^0-9\s]/g, '')"
                                                maxlength="19" placeholder="xxxx xxxx xxxx xxxx" />
                                        </fieldset>
                                    </div>
                                    <div class="flex gap-3 w-full">
                                        <fieldset class="fieldset w-full">
                                            <legend class="fieldset-legend">{{ __('index.Expiry date') }}</legend>
                                            <input name="expiry_date" type="month" class="input w-full"
                                                placeholder="" />
                                        </fieldset>
                                        <fieldset class="fieldset w-full">
                                            <legend class="fieldset-legend">{{ __('index.CVC code') }}</legend>
                                            <input name="cvc_code" type="text"
                                                oninput="this.value = this.value.replace(/[^0-9\s]/g, '')" maxlength="3"
                                                minlength="3" class="input w-full" inputmode="numeric"
                                                placeholder="xxx" />
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse rounded-none">
                            <input id="CASHPLUS" type="radio" name="payment_way" value="CASHPLUS"
                                class="radio radio-info me-3 peer checked:bg-blue-950 hidden" />
                            <label
                                class="border border-black-200 peer-checked:from-yellow-500  peer-checked:bg-gradient-to-l peer-checked:to-yellow-400 rounded-lg p-3 w-full mb-3 cursor-pointer hover:shadow-md h-16 collapse-title flex items-center justify-between w-full cursor-pointer"
                                for="CASHPLUS">
                                <div class="flex items-center">
                                    <span>{{ __('index.Pay via Cashplus') }}</span>
                                </div>
                                <img loading="lazy" src="{{ Vite::asset('resources/images/cachplus.jpg') }}" alt="cachplus logo"
                                    class="h-12 aspect-video object-contain p-1">
                            </label>
                            <div class="collapse-content text-sm">
                                <span class="block" dir="rtl"><span class="font-bold">{{ __('index.Account Number') }}:</span>
                                    123456789</span>
                                <span
                                    class="block">{{ __('index.Please send a photo of the receipt to the following number to confirm the payment.') }}</span>
                                <span class="block w-fit font-semibold text-lg"
                                    dir="ltr">{{ __('index.+212 6 12 34 56 78') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-4/12 h-auto sticky top-10">
                <div class="border border-black-200 bg-white rounded-3xl p-6 mb-6 w-full">
                    <div class="flex items-center gap-6 mb-3">
                        <div class="w-4/12">
                            <img loading="lazy" src="{{ @$flight->mainPhoto->url }}"
                                class="rounded-2xl w-full aspect-square object-cover" alt="offer photo">
                        </div>
                        <div class="w-8/12">
                            <h1 class="font-black text-xl w-full">{{ $flight->title }}</h1>
                        </div>
                    </div>
                    <hr class="my-3 opacity-30">
                    <div class="">
                        <div class="flex">
                            <span class="w-6/12">{{__('index.Duration')}}:</span>
                            <span
                                class="w-6/12 font-bold">{{ momentGetDiff($flight->going_date, $flight->return_date) }}
                                {{__('index.Days')}}</span>
                        </div>
                        <div class="flex">
                            <span class="w-6/12">{{__('index.Starts on')}}:</span>
                            <span class="w-6/12 font-bold">{{ $flight->going_date }}</span>
                        </div>
                        <div class="flex">
                            <span class="w-6/12">{{__('index.Ends on')}}:</span>
                            <span class="w-6/12 font-bold">{{ $flight->return_date }}</span>
                        </div>
                        <div class="flex">
                            <span class="w-6/12">{{__('index.No. of Travellers')}}:</span>
                            <span class="w-6/12 font-bold" id="travelers-count">1</span>
                        </div>
                    </div>
                    <hr class="my-3 opacity-30">
                    <span class="text-xl block mb-3">{{__('index.Price Details')}}</span>
                    <span class="text-xl block mb-1">{{__('index.Traveller(s)')}}:</span>
                    <div class="flex">
                        <span class="w-6/12">{{__('index.Adult')}}: 1 x {{ __('index.dh') }} {{ $price->price }}</span>
                        <span class="w-6/12 font-bold" id="price">{{ $price->price }} {{ __('index.dh') }}</span>
                    </div>
                    <hr class="my-3 opacity-30">
                    <div class="flex mb-4">
                        <span class="w-6/12">{{__('index.Total')}}:</span>
                        <span class="w-6/12 font-bold" id="total-price">{{ $price->price }} {{ __('index.dh') }}</span>
                    </div>
                    <button
                        class="w-full btn btn-lg text-xl rounded-xl hover:bg-yellow-600 hover:shadow-lg font-black from-yellow-600  bg-gradient-to-l to-yellow-500">{{ __('index.Book now') }}</button>
                </div>
                <x-spacer></x-spacer>
            </div>
        </div>
        <input type="text" name="flight_id" value="{{ $flight->id }}" hidden>
        <input type="text" name="price_id" value="{{ $price->id }}" hidden>
        <input type="text" name="room_id" value="{{ $room->id }}" hidden>
        <input type="text" name="program_id" value="{{ $program->id }}" hidden>
    </form>
    <script>
        const travelersCountInput = document.getElementById('travelers-count-input');
        const travelersCountMinus = document.getElementById('travelers-count-minus');
        const travelersCountPlus = document.getElementById('travelers-count-plus');
        const travelersCount = document.getElementById('travelers-count');
        const price = document.getElementById('price');
        const totalPrice = document.getElementById('total-price');

        travelersCountMinus.addEventListener('click', () => {
            if (travelersCountInput.value > 1) {
                travelersCountInput.value = parseInt(travelersCountInput.value) - 1;
                travelersCount.innerText = travelersCountInput.value;
                updatePrice();
            }
        });

        travelersCountPlus.addEventListener('click', () => {
            travelersCountInput.value = parseInt(travelersCountInput.value) + 1;
            travelersCount.innerText = travelersCountInput.value;
            updatePrice();
        });


        function updatePrice() {
            const personePrice = travelersCountInput.dataset.price;
            const travelers = parseInt(travelersCountInput.value);
            const total = personePrice * travelers;
            price.innerText = parseFloat(total).toFixed(2) + ' {{ __('index.dh') }}';
            totalPrice.innerText = parseFloat(total).toFixed(2) + ' {{ __('index.dh') }}';
        }

    </script>
    <x-spacer></x-spacer>
    <x-footer></x-footer>
</x-guest-layout>