<div class="w-full bg-blue-1000 hero-header bg-cover bg-center mb-20 md:mb-12 py-12" style="background-image: url({{ Vite::asset('resources/images/hero-header.webp') }});">
    <div class="relative z-10 container h-full mx-auto flex items-start justify-center flex-col mb-6">
        <h1 class="drop-shadow-md text-white text-xl text-center md:text-start md:text-4xl leading-relaxed mb-5 font-bold">{{ __('index.hero header title') }} <br> {{ __('index.hero header title 2') }}</h1>
        <p class="text-white text-sm text-center md:text-start md:text-xl leading-relaxed">{{ __('index.hero header description') }}</p>
    </div>
    <div class="border border-white relative rounded-lg p-3 md:p-6 container m-auto z-20 -mb-32">
        <div class="flex w-full me-auto mt-3 mb-3 md:mt-6 md:mb-6 text-3xl justify-between text-shadow">
            <span class="relative text-white items-center group overflow-hidden flex flex-col justify-center w-full">
                <span class="text-xs text-wrap md:text-xl group-hover:scale-95 md:text-nowrap text-center group-hover:opacity-65 duration-300 mb-1 md:mb-8 font-black">{{__('index.Hajj guide')}}</span>
                <a href="{{route('hajj-guide')}}" class="group-hover:bottom-3 duration-300 text-xs cursor-pointer text-nowrap absolute -bottom-full undeline">{{__('index.Discover more')}}</a>
            </span>
            <span class="h-10 border-e border-black-100 opacity-65"></span>
            <span class="relative text-white items-center group overflow-hidden flex flex-col justify-center w-full">
                <span class="text-xs text-wrap md:text-xl group-hover:scale-95 md:text-nowrap text-center group-hover:opacity-65 duration-300 mb-1 md:mb-8 font-black">{{__('index.Umrah guide')}}</span>
                <a href="{{route('umrah-guide')}}" class="group-hover:bottom-3 duration-300 text-xs cursor-pointer text-nowrap absolute -bottom-full undeline">{{__('index.Discover more')}}</a>
            </span>
            <span class="h-10 border-e border-black-100 opacity-65"></span>
            <span class="relative text-white items-center group overflow-hidden flex flex-col justify-center w-full">
                <span class="text-xs text-wrap md:text-xl group-hover:scale-95 md:text-nowrap text-center group-hover:opacity-65 duration-300 mb-1 md:mb-8 font-black">{{__('index.Learn about Mecca')}}</span>
                <a href="{{route('learn-about-mecca')}}" class="group-hover:bottom-3 duration-300 text-xs cursor-pointer text-nowrap absolute -bottom-full undeline">{{__('index.Discover more')}}</a>
            </span>
            <span class="h-10 border-e border-black-100 opacity-65"></span>
            <span class="relative text-white items-center group overflow-hidden flex flex-col justify-center w-full">
                <span class="text-xs text-wrap md:text-xl group-hover:scale-95 md:text-nowrap text-center group-hover:opacity-65 duration-300 mb-1 md:mb-8 font-black">{{__('index.Get to know Medina')}}</span>
             <a href="{{route('get-to-know-medina')}}" class="group-hover:bottom-3 duration-300 text-xs cursor-pointer text-nowrap absolute -bottom-full undeline">{{__('index.Discover more')}}</a>
            </span>
        </div>
        <div class="relative z-20  w-full mx-auto">
            <form action="{{ route('checkout') }}" method="post" class="rounded-2xl w-12/12 mx-auto bg-emerald-500 bg-gradient-to-l from-emerald-550 to-emerald-500 p-3 md:p-6 flex-col md:flex-row flex items-center justify-between shadow-2xl">
                @csrf
                <div class="text-2xl font-bold text-nowrap text-white mb-3 md:mb-0">
                    {{__('index.fast booking')}}
                </div>
                <div class="w-full md:w-2/12 mb-3 md:mb-0">
                    <x-select :id="'select-omra'" name="omra" :label="__('index.chose the omra')" :options=$umrahs :required=true></x-select>
                </div>
                <div class="w-full md:w-2/12 mb-3 md:mb-0">
                    <x-select :id="'count'" name="month" :label="__('index.travlers count')" :required=true :options='[["id"=>1,"value"=>1],["id"=>2,"value"=>2],["id"=>3,"value"=>3],["id"=>4,"value"=>4],["id"=>5,"value"=>5],["id"=>6,"value"=>6],["id"=>7,"value"=>7],["id"=>8,"value"=>8]]'></x-select>
                </div>
                <div class="w-full md:w-2/12 mb-3 md:mb-0">
                    <x-select :id="'room'" name="room" :label="__('index.Select room type')" :required=true :options=$rooms></x-select>
                </div>
                <div class="w-full md:w-3/12 mb-3 md:mb-0">
                    <x-select :id="'program'" name="program" :label="__('index.programe')" :required=true :options=$programs></x-select>
                </div>
                <div class="w-full md:w-1/12 mb-3 md:mb-0">
                    <button class="btn border-none w-full bg-blue-950 px-6 py-3 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform rounded-lg hover:bg-blue-1000">{{ __('index.search') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    const selectOmra = document.getElementById('select-omra');
    selectOmra.addEventListener('change', (event) => {
        id = event.target.value;
        options = document.querySelectorAll('select#program option');
        options.forEach(option => {
            if(option.dataset.key){
                if (option.dataset.key == id) {
                    option.style.display = 'block';
                } else {
                    option.style.display = 'none';
                }
            }else{
                option.style.display = 'block';
            }
        });
    });
</script>