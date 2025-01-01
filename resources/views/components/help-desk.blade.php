<div class="flex gap-12">
    <div class="w-6/12">
        <img src="{{ Vite::asset('resources/images/help-desk.jpg') }}" class="w-full object-cover rounded-3xl" alt="">
    </div>
    <div class="w-6/12">
        <div class="flex flex-row justify-start items-start mb-3">
            <span class="text-3xl font-bold">{{ __('Customer Service Center') }}</span>
            <em class="fa-regular fa-circle-question text-3xl text-yellow-500 ms-3"></em>
        </div>
        <p class="block mb-5">{{ __('We are Here to Help') }}</p>
        <div class="flex mb-3 gap-6">
            <div class="w-4/12"></div>
            <div class="w-8/12">
                <div class="rounded-full mb-3 bg-blue-50 px-5 py-4 w-fit block flex flex-row justify-between items-center w-full"><span class="flex-1 font-black text-xl me-2">{{ __('cell pohne') }}</span>:<span class="font-black text-xl">+212 6 63 61 85 36</span></div>
                <div class="rounded-full mb-3 bg-blue-50 px-5 py-4 w-fit block flex flex-row justify-between items-center w-full"><span class="flex-1 font-black text-xl me-2">{{ __('cell pohne') }}</span>:<span class="font-black text-xl">+212 6 63 61 85 36</span></div>
                <div class="rounded-full mb-3 bg-blue-50 px-5 py-4 w-fit block flex flex-row justify-between items-center w-full"><span class="flex-1 font-black text-xl me-2">{{ __('home pohne') }}</span>:<span class="font-black text-xl">+212 6 63 61 85 36</span></div>
            </div>
        </div>
        <div class="flex">
            <div class="w-4/12 flex flex-row justify-start items-center gap-3">
                <em class="fa-brands fa-whatsapp text-6xl rounded-2xl border-2 p-4 me-3"></em>
                <span class="flex flex-col gap-3">
                    <span class="text-3xl font-black text-nowrap">{{ __('24/7/365 Support') }}</span>
                    <span class="text-2xl font-black text-nowrap">{{ __('Live Chat') }}</span>
                </span>
            </div>
            <div class="w-8/12">
            </div>
        </div>
    </div>

</div>