<div class="w-full bg-blue-1000 hero-header bg-cover bg-center mb-12 py-12" style="background-image: url({{ Vite::asset('resources/images/hero-header.webp') }});">
    <div class="relative z-10 container h-full mx-auto flex items-start justify-center flex-col mb-6">
        <h1 class="drop-shadow-md text-white text-4xl leading-relaxed mb-5 font-bold">{{ __('index.hero header title') }} <br> {{ __('index.hero header title 2') }}</h1>
        <p class="text-white text-xl leading-relaxed">{{ __('index.hero header description') }}</p>
    </div>
    <div class="border border-white relative rounded-lg p-6 container m-auto z-20 -mb-32">
        <div class="flex w-full me-auto mt-6 mb-6 text-3xl justify-between text-shadow">
            <span class="relative text-white items-center group overflow-hidden flex flex-col justify-center w-full">
                <span class="text-xl group-hover:scale-95 text-nowrap group-hover:opacity-65 duration-300  mb-8 font-black">{{__('index.Hajj guide')}}</span>
                <span class="group-hover:bottom-3 duration-300 text-xs cursor-pointer text-nowrap absolute -bottom-full undeline">{{__('index.Discover more')}}</span>
            </span>
            <span class="h-10 border-e border-black-100 opacity-65"></span>
            <span class="relative text-white items-center group overflow-hidden flex flex-col justify-center w-full">
                <span class="text-xl group-hover:scale-95 text-nowrap group-hover:opacity-65 duration-300  mb-8 font-black">{{__('index.Umrah guide')}}</span>
                <span class="group-hover:bottom-3 duration-300 text-xs cursor-pointer text-nowrap absolute -bottom-full undeline">{{__('index.Discover more')}}</span>
            </span>
            <span class="h-10 border-e border-black-100 opacity-65"></span>
            <span class="relative text-white items-center group overflow-hidden flex flex-col justify-center w-full">
                <span class="text-xl group-hover:scale-95 text-nowrap group-hover:opacity-65 duration-300  mb-8 font-black">{{__('index.Learn about Mecca')}}</span>
                <span class="group-hover:bottom-3 duration-300 text-xs cursor-pointer text-nowrap absolute -bottom-full undeline">{{__('index.Discover more')}}</span>
            </span>
            <span class="h-10 border-e border-black-100 opacity-65"></span>
            <span class="relative text-white items-center group overflow-hidden flex flex-col justify-center w-full">
                <span class="text-xl group-hover:scale-95 text-nowrap group-hover:opacity-65 duration-300  mb-8 font-black">{{__('index.Get to know Medina')}}</span>
             <span class="group-hover:bottom-3 duration-300 text-xs cursor-pointer text-nowrap absolute -bottom-full undeline">{{__('index.Discover more')}}</span>
            </span>
        </div>
        <div class="relative z-20  w-full mx-auto">
            <form action="" class="rounded-2xl w-12/12 mx-auto bg-emerald-500 bg-gradient-to-l from-emerald-550 to-emerald-500 flex items-center p-6 flex items-center justify-between shadow-2xl">
                <div class=" text-2xl font-bold text-nowrap text-white">
                    {{__('index.fast booking')}}
                </div>
                <div class="w-2/12">
                    <x-select name="month" :label="__('index.chose the omra')" :options="[__('index.January Umrah'), __('index.February Umrah'), __('index.March Umrah'), __('index.April Umrah'), __('index.May Umrah'), __('index.June Umrah'), __('index.July Umrah'), __('index.August Umrah'), __('index.September Umrah'), __('index.October Umrah'), __('index.November Umrah'), __('index.December Umrah')]"></x-select>
                </div>
                <div class="w-2/12">
                    <x-select name="month" :label="__('index.travlers count')" :options="[1,2,3,4,5,6]"></x-select>
                </div>
                <div class="w-4/12">
                    <x-select name="month" :label="__('index.programe')" :options="[]"></x-select>
                </div>
                <div class="w-1/12">
                    <button class="btn border-none w-full bg-blue-950 px-6 py-3 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform rounded-lg hover:bg-blue-1000">{{ __('index.search') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
