<x-guest-layout>
    <x-header active=""></x-header>
    <x-page-header :title="__('index.Blog')"></x-page-header>
    <div class="container mx-auto flex flex-wrap py-6">
        <!-- Post Section -->
        <section class="w-full flex flex-col items-center">
            <article class="flex flex-col">
                <!-- Article Image -->
                <img src="{{ $post->photo->url }}" class="object-cover aspect-video rounded max-h-96" alt="Post Image">
                <div class="bg-white flex flex-col justify-start pb-6">
                    <div class="">
                        @foreach ($post->blogCategories as $category)
                        <span class="text-blue-700 text-sm font-bold inline-block w-fit pe-3 py-2">{{ $category->name }}</span>
                        @endforeach
                    </div>
                    <p class="text-sm pb-3">{{__('index.By')}} <span class="font-semibold hover:text-gray-800">{{ $post->author->first_name }} {{ $post->author->last_name }}</span> | {{__('index.Published on')}} {{ $post->created_at }}</p>
                    <h1 class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post->title }}</h1>
                    <div class="text-justify">
                        {!! $post->content !!}
                    </div>
                </div>
            </article>
        </section>
    </div>
    <x-footer></x-footer>
</x-guest-layout>