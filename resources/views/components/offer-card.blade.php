<div class="scroll-animate relative w-full h-full mt-8 offer-card">
    <span class="border border-emerald-500 rounded-full py-1 px-4  text-sm font-semibold absolute -top-8 start-0 block z-10">{{__('index.Best Seller')}}</span>
    <div class="flex flex-col h-full border bg-white border-black-200 hover:shadow-md duration-300 rounded-3xl w-full h-full mt-3 overflow-hidden relative">
        <div class="w-full relative mb-8 bg-black-300">
            <a href="{{route('flight', $data->id)}}">
                <img onerror="this.onerror=null;this.src='{{ Vite::asset('resources/images/not-found.webp') }}';" loading="lazy" src="{{ @$data->photos()->where('is_main',1)->first()->url }}" class="w-full aspect-video object-cover" alt="umrah">
            </a>
            <span data-id="{{ $data->id }}" class="quick-view cursor-pointer hover:shadow-lg duration-300 bg-white w-fit py-2 px-3 border rounded-md block text-xl text-center font-bold flex items-center justify-center flex-row absolute m-auto start-0 end-0 -bottom-6">
                <em class="fa-regular fa-eye me-3"></em>{{__('index.Quick view')}}
            </span>
        </div>
        <div class="p-3 flex flex-col h-full">
            <div class="flex">
                <span class="bg-black-900 w-20 h-16 me-3 rounded-md text-white block text-base text-center font-bold flex items-center justify-center flex-col leading-5">
                    <span>
                        {{ moment($data->going_date)->from($data->return_date)->getDays() }}
                    </span>
                    <span>
                        @if(moment($data->going_date)->from($data->return_date)->getDays() > 10)
                            {{__('index.day')}}
                        @else
                            {{__('index.Days')}}
                        @endif
                    </span>
                </span>
            <h1 class="font-black text-lg w-full w-fit m-auto line-clamp-2">{{ $data->title }}</h1>
            </div>
            <hr class="my-3 opacity-30">
            <div class="text-justify line-clamp-3 h-full">
                {!! $data->description !!}
            </div>
            <hr class="my-3 opacity-30">
            <div class="flex flex-col mb-3">
                <span class="block opacity-45 text-xs font-bold line-through line-clamp-2 lining-nums">{{ money(@$data->getLowestPrice()->old_price) }} {{__('index.dh')}}</span>
                <span class="text-xs block font-black lining-nums"><span class="text-3xl">{{ money(@$data->getLowestPrice()->price) }}</span> {{__('index.dh')}} {{__('index.For a person')}}</span>
                <span class="text-md">({{__('index.Price varies depending on the size of the collection')}})</span>
            </div>
            <div class="flex justify-between gap-2">
                <a href="{{ whatsappLink('fast_booking',route('flight', $data->id)) }}" class="text-nowrap flex-row flex-nowrap text-black-900 text-base flex font-black justify-center bg-gradient-to-l from-emerald-500 to-emerald-600 items-center btn bg-emerald-550 flex-1 hover:shadow-lg">
                    <em class="fa-brands fa-whatsapp xl:text-2xl me-1 xl:me-2"></em> <span class="text-nowrap" >{{__('index.The Fast booking')}}</spanc>
                </a>
                <a href="{{ route('checkout', $data->id) }}" class="group text-black-900 text-base flex font-black justify-center items-center btn bg-gradient-to-l from-yellow-500 to-yellow-600 flex-1 hover:shadow-lg hover:">
                    <em class="fa-solid fa-chevron-left me-2 group-hover:me-1 duration-300"></em> {{__('index.Book now')}}
                </a>
            </div>
        </div>
    </div>
    <x-offer-details-modal :data=$data></x-offer-details-modal>
</div>
