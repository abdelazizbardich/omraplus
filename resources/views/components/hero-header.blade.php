<div class="
w-full 
bg-blue-1000 
hero-header
bg-cover
bg-center
" style="background-image: url({{ Vite::asset('resources/images/hero-header.webp') }});">
    <div class="relative z-10 container h-full mx-auto flex items-start justify-center flex-col pb-30">
        <h1 class="drop-shadow-md text-white text-5xl leading-relaxed mb-5 font-bold">{{ __('hero header title') }} <br> {{ __('hero header title 2') }}</h1>
        <p class="text-white text-2xl leading-relaxed">{{ __('hero header description') }}</p>
    </div>
    <div class="relative z-20 container w-full -mt-16 mx-auto flex items-center">
        <form action="" class="rounded-2xl h-32 w-full bg-emerald-500">
            <div>
                {{__('fast booking')}}
            </div>
            <div>
                <x-atoms.select></x-atoms.select>
            </div>
        </form>
    </div>
</div>
