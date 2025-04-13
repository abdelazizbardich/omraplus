<div class="scroll-animate w-full border border-black-200 p-3 rounded-3xl hover:shadow-md duration-300">
    <div class="rounded-3xl overflow-hidden bg-white mb-3">
        <a href="{{ route('blog.show', $post->slug) }}">
            <img loading="lazy" onerror="this.onerror=null;this.src='{{ Vite::asset('resources/images/not-found.webp') }}';" src="{{ @$post->photo->url }}" class="h-60 object-cover w-full border border-black-200 rounded-3xl overflow-hidden" alt="blog thumbnail">
        </a>
    </div>
    <div>
        <div class="flex gap-3 mb-6 flex-wrap">
            <div class="badge badge-ghost py-1 h-fit text-nowrap me-3">{{moment($post->published_at)->format("M d, Y")}}</div>
            @foreach ($post->blogCategories as $category)
                <div class="badge badge-ghost py-1 h-fit text-nowrap">{{ $category->name }}</div>
            @endforeach
        </div>
        <h1 class="font-black text-lg rounded-full w-full m-auto text-justify opacity-90 mb-6">{{ $post->title }}</h1>
        <div class="mb-6">
            <p class="text-gray-500 text-sm line-clamp-3 text-justify">{{ $post->excerpt }}</p>
        </div>
        <div class="flex items-center justify-between gap-2">
            <div class="flex items-center justify-start gap-2">
                <div class="avatar">
                    <div class="w-12 rounded-full">
                        <img loading="lazy" onerror="this.onerror=null;this.src='{{ Vite::asset('resources/images/not-found.webp') }}';" src="{{ @$post->author->photo->url }}" />
                    </div>
                </div>
                <div class="flex flex-col justify-center items-start">
                    <span class="text-sm font-black text-nowrap">{{ $post->author->last_name }} {{$post->author->first_name}}</span>
                    <span class="text-sm font-base">{{ $post->author->job }}</span>
                </div>
            </div>
            <div class="float-end flex w-auto">
                <a href="{{ route('blog.show', $post->slug) }}" hreflang="{{ app()->getLocale() }}" class="border border-black-200 w-fit text-nowrap  rounded-md h-full py-2 px-3 text-gl font-black group duration-300 transition-colors cursor-pointer">
                    <em class="fa-solid fa-chevron-left me-2 group-hover:me-1 group-hover:ps-1 duration-300"></em> {{__('index.Discover more')}}
                </a>
            </div>
        </div>
    </div>
</div>