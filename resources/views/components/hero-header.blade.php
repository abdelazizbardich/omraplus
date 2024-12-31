<div class="
w-full 
bg-blue-1000 
hero-header
bg-cover
bg-center
mb-12
" style="background-image: url({{ Vite::asset('resources/images/hero-header.webp') }});">
    <div class="relative z-10 container h-full mx-auto flex items-start justify-center flex-col pb-30">
        <h1 class="drop-shadow-md text-white text-5xl leading-relaxed mb-5 font-bold">{{ __('hero header title') }} <br> {{ __('hero header title 2') }}</h1>
        <p class="text-white text-2xl leading-relaxed">{{ __('hero header description') }}</p>
    </div>
    <div class="relative z-20 container w-full -mt-16 mx-auto">
        <form action="" class="rounded-2xl w-12/12 mx-auto bg-emerald-500 flex items-center p-6 flex items-center justify-between">
            <div class="w-24 text-2xl font-bold text-white">
                {{__('fast booking')}}
            </div>
            <div class="w-2/12">
                <x-atoms.select name="month" :label="__('chose the omra')" :options="['January','February','March','April','May','June','July','August','September','October','November','December']"></x-atoms.select>
            </div>
            <div class="w-2/12">
                <x-atoms.select name="month" :label="__('travlers count')" :options="[1,2,3,4,5,6]"></x-atoms.select>
            </div>
            <div class="w-2/12">
                <x-atoms.select name="month" :label="__('programe')" :options="[]"></x-atoms.select>
            </div>
            <div class="w-3/12">
                <x-atoms.select name="month" :label="__('')" :options="[]"></x-atoms.select>
            </div>
            <div class="w-auto">
                <button class="bg-blue-950 px-6 py-3 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform rounded-lg hover:bg-blue-1000">{{ __('search') }}</button>
            </div>
        </form>
    </div>
</div>
