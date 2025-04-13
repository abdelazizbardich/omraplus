<x-guest-layout>
    <x-header active=""></x-header>
    <x-page-header :title="__('index.Blog')" :breadcrumbs="['Home', 'Blog']" :background="($post->photo->url)" />
    <x-spacer></x-spacer>
    <div class="container w-full mx-auto">
        <div class="w-full mb-6">
            <h1 class="text-3xl font-bold">{{ $post->title }}</h1>
        </div>
    </div>
    <div class="container w-full mx-auto flex gap-12 items-start relative">
        <div class="w-10/12">
            <img class="w-full aspect-video mb-3 rounded-lg" src="{{ $post->photo->url}}" alt="{{ $post->title }}" onerror="this.onerror=null;this.src='{{ Vite::asset('resources/images/not-found.webp') }}';" />
            <div class="flex gap-3 mb-6 flex-wrap">
                <div class="badge badge-ghost py-1 h-fit text-nowrap me-3">{{moment($post->published_at)->format("M d, Y")}}</div>
                @foreach ($post->blogCategories as $category)
                    <div class="badge badge-ghost py-1 h-fit text-nowrap">{{ $category->name }}</div>
                @endforeach
            </div>
            <div class="mb-6">
                {!! $post->content !!}
            </div>
        </div>
    </div>
    @if ($relatedPosts->count() > 0)
        <div class="container m-auto flex justify-center items-start flex-wrap">
            @foreach ($relatedPosts as $relatedPost)
                <div class="xl:w-3/12 lg:w-4/12 md:w-6/12 sm:w-6/12 xs:w-full p-3 pb-6">
                    <x-blog-card :data=$relatedPost></x-blog-card>
                </div>
            @endforeach
        </div>
        <x-spacer></x-spacer>
    @endif
    <x-footer></x-footer>
</x-guest-layout>