<div class="relative w-full h-full gap-3 flex flex-col mb-6">
    <div class="rounded-lg overflow-hidden w-full">
        <img src="{{ Vite::asset('resources/images/mission-1.jpg') }}" alt="" class="aspect-square w-full object-cover">
    </div>
    <span class="text-xs w-fit px-3 py-1 border block rounded-md border-black text-black font-black uppercase">طلب قوي</span>
    <h1 class="font-black text-base w-full rounded-full w-fit m-auto">عمرة شعبان - من 19 فبراير إلى 06 مارس - عبر الخطوط السعودية</h1>
    <hr class="opacity-30">
    <div class="w-full flex flex-col">
        <div class="flex flex-col mb-3">
            <span class="font-black lining-nums"><span class="text-xl">14.000,00</span> {{__('dh')}} {{__('For a person')}}</span>
            <span class="text-xs text-nowrap">({{__('Price varies depending on the size of the collection')}})</span>
        </div>
        <div class="bg-yellow-500 shadow w-fit h-fit text-nowrap shadow-yellow-700 rounded-md py-2 px-4 text-xl font-black group duration-300 transition-colors cursor-pointer">
            <em class="fa-solid fa-chevron-left me-2 group-hover:me-1 group-hover:ps-1 duration-300"></em> {{__('Book now')}}
        </div>
    </div>
</div>