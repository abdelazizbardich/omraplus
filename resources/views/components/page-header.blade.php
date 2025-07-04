<div class="w-full bg-blue-1000 page-header h-auto text-center bg-cover bg-center py-6 md:py-12" style="background-image: url({{ $background ? $background : Vite::asset('resources/images/kaaba-1.jpg') }});">
    <div class="relative z-10 container h-full mx-auto flex items-center justify-center flex-col">
        <h1 class="drop-shadow-md text-white text-xl md:text-4xl leading-relaxed mb-3 md:mb-5 font-bold">{{ $title }}</h1>
        @if($subtitle)<p class="text-white text-lg md:text-2xl leading-relaxed mb-3 md:mb-5">{{ $subtitle }}</p>@endif
        @if($breadcrumbs)<x-breadcrumbs :links="$breadcrumbs"></x-breadcrumbs>@endif
    </div>
</div>
