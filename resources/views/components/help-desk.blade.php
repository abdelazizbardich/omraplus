<div class="flex gap-12">
    <div class="lg:w-6/12 xl:w-6/12">
        <img loading="lazy" src="{{ Vite::asset('resources/images/help-desk.jpg') }}" class="scroll-animate w-full object-cover rounded-3xl" alt="">
    </div>
    <div class="lg:w-6/12 xl:w-6/12">
        <div class="flex flex-row justify-start items-start mb-6">
            <span class="text-4xl font-bold">{{ __('index.Customer Service Center') }}</span>
            <em class="fa-regular fa-circle-question text-3xl text-yellow-500 ms-3"></em>
        </div>
        <p class="block mb-10 lg:text-xl xl:text-2xl">{{ __('index.We are Here to Help') }}</p>
        <div class="flex mb-3 gap-6">
            <div class="w-auto">
                <img loading="lazy" class="lg:w-32 xl:w-64" src="{{ Vite::asset('resources/images/help-desk-icon.webp') }}" alt="help desk">
            </div>
            <div class="w-full">
                <div class="xl:text-2xl lg:text-xl rounded-full mb-4 bg-blue-50 xl:px-5 lg:px-2 lg:py-1 xl:py-3 w-fit block flex flex-row justify-between items-center w-full">
                    <span class="flex-1 font-black me-2 block">{{ __('index.cell pohne') }}</span>
                    <span class="mx-3 block">:</span>
                    <span class="font-bold ms-15 block" dir="ltr">+212 6 63 61 85 36</span>
                </div>
                <div class="xl:text-2xl lg:text-xl rounded-full mb-4 bg-blue-50 xl:px-5 lg:px-2 lg:py-1 xl:py-3 w-fit block flex flex-row justify-between items-center w-full">
                    <span class="flex-1 font-black me-2 block">{{ __('index.cell pohne') }}</span>
                    <span class="mx-3 block">:</span>
                    <span class="font-bold ms-15 block" dir="ltr">+212 6 63 61 85 36</span>
                </div>
                <div class="xl:text-2xl lg:text-xl rounded-full mb-4 bg-blue-50 xl:px-5 lg:px-2 lg:py-1 xl:py-3 w-fit block flex flex-row justify-between items-center w-full">
                    <span class="flex-1 font-black me-2 block">{{ __('index.home pohne') }}</span>
                    <span class="mx-3 block">:</span>
                    <span class="font-bold ms-15 block" dir="ltr">+212 6 63 61 85 36</span>
                </div>
            </div>
        </div>
        <div class="flex">
            <div class="w-4/12 flex flex-row justify-start items-center gap-3">
                <em class="fa-brands fa-whatsapp xl:text-6xl lg-:text-3xl rounded-2xl border-2 p-4 me-3 hover:bg-black-900 hover:text-white cursor-pointer"></em>
                <span class="flex flex-col gap-3">
                    <span class="text-3xl font-black text-nowrap inline-block">{{ __('index.Support') }} <span dir="ltr">24/7/365</span></span>
                    <span class="text-2xl font-black text-nowrap inline-block">{{ __('index.Live Chat') }}</span>
                </span>
            </div>
        </div>
    </div>

</div>