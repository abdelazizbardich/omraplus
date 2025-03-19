<div class="scroll-animate w-full border border-black-200 p-3 rounded-3xl hover:shadow-md duration-300">
    <div class="rounded-3xl overflow-hidden bg-white mb-3 hover:shadow-md duration-300">
        <a href="#">
            <img loading="lazy" src="{{ Vite::asset('resources/images/blog-post.jpg') }}" class="h-60 object-cover w-full border border-black-200" alt="blog thumbnail">
        </a>
    </div>
    <div class="">
        <div class="flex gap-6 mb-6">
            <div class="badge badge-ghost py-1 h-auto">Mar 16, 2025</div>
            <div class="badge badge-ghost py-1 h-auto">Marketing</div>
        </div>
        <h1 class="font-black text-lg w-full rounded-full w-fit m-auto text-justify opacity-90 mb-6">عمرة شعبان - من 19 فبراير إلى 06 مارس - عبر الخطوط السعودية</h1>
        <div class="mb-6">
            <p class="text-gray-500 text-sm line-clamp-3 text-justify">{{ __('index.Lorem ipsum') }}</p>
        </div>
        <div class="flex items-center justify-between gap-2">
            <div class="flex items-center justify-start gap-2">
                <div class="avatar">
                    <div class="w-12 rounded-full">
                        <img loading="lazy" src="{{ Vite::asset('resources/images/site-avatar.jpg') }}" />
                    </div>
                </div>
                <div class="flex flex-col justify-center items-start">
                    <span class="text-sm font-black text-nowrap">Michael Foster</span>
                    <span class="text-sm font-base">Co-Founder / CEO</span>
                </div>
            </div>
            <div class="float-end flex w-auto">
                <div class="border border-black-200 w-fit text-nowrap  rounded-md h-full py-2 px-3 text-gl font-black group duration-300 transition-colors cursor-pointer">
                    <em class="fa-solid fa-chevron-left me-2 group-hover:me-1 group-hover:ps-1 duration-300"></em> {{__('index.Discover more')}}
                </div>
            </div>
        </div>
    </div>
</div>