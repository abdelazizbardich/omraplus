<x-guest-layout>
    <x-header active=""></x-header>
    <div class="w-full flex flex-col md:flex-row items-center justify-between bg-blue-50">
        <div class="w-full md:w-2/5 relative">
            <img src="{{ @$post->photo->url }}" onerror="this.onerror=null;this.src='{{ Vite::asset('resources/images/not-found.webp') }}';" class="object-cover aspect-video w-full" alt="Post Image">
            <div class="absolute flex flex-row w-fit justify-center items-center gap-2 bottom-8 start-8">
                @foreach ($post->blogCategories as $category)
                    <span class="badge p-3">{{ $category->name }}</span>
                @endforeach
            </div>
        </div>
        <div class="w-full h-full md:w-3/5 flex justify-center flex-col items-start p-4 md:px-24">
            <h1 class="text-3xl md:text-5xl font-bold text-blue-950 pb-4 mb-3">{{ $post->title }}</h1>
            <div class="flex text-blue-950 gap-3 items-center mb-3">
                <span>{{ __('index.Share this post') }}</span>
                <a href="{{ route('blog.share',[$post->slug, 'facebook']) }}"><img src="{{ Vite::asset('resources/images/facebook.svg')}}" class="w-6 fill-blue-950 aspect-square" /></a>
                <a href="{{ route('blog.share',[$post->slug, 'twitter']) }}"><img src="{{ Vite::asset('resources/images/twitter.svg')}}" class="w-6 fill-blue-950 aspect-square" /></a>
                <a href="{{ route('blog.share',[$post->slug, 'linkedin']) }}"><img src="{{ Vite::asset('resources/images/linkedin.svg')}}" class="w-6 fill-blue-950 aspect-square" /></a>
                <a href="{{ route('blog.share',[$post->slug, 'whatsapp']) }}"><img src="{{ Vite::asset('resources/images/whatsapp.svg')}}" class="w-6 fill-blue-950 aspect-square" /></a>
            </div>
            <div class="flex text-blue-950 gap-3 items-center mb-3">
                <span>{{$post->comments->count()}} {{ __('index.Comment') }}</span>
                <span>{{$post->view_count}} {{ __('index.Views') }}</span>
                <span>{{$post->share_count}} {{ __('index.Shares') }}</span>
            </div>
            <p class="text-sm text-blue-950">{{__('index.By')}} <span
                    class="font-semibold">{{ $post->author->first_name }} {{ $post->author->last_name }}</span> |
                {{__('index.Published on')}} {{ $post->created_at }}</p>
        </div>
    </div>
    <!-- <x-page-header :title="__('index.Blog')"></x-page-header> -->
    <div class="container mx-auto flex flex-wrap py-6">
        <!-- Post Section -->
        <section class="w-full flex">
            <div class="text-justify">
                {!! $post->content !!}
            </div>
        </section>
        <!-- Comments Section -->
        <section class="w-full flex flex-col justify-center items-center mt-10">
            <div class="w-full">
                <h2 class="text-2xl font-bold text-blue-950 mb-4 text-center">{{ __('index.Comments') }}</h2>
                <form action="{{ route('blog.comment', $post->slug) }}" method="post">
                    @csrf
                    <fieldset class="fieldset border-base-300 rounded-box w-xs border p-4">
                        <legend class="fieldset-legend">{{ __('index.Write a comment...') }}</legend>
                        <div class="">
                            <div class="flex gap-3 mb-4">
                                <input name="name" required placeholder="{{ __('index.Name') }}" class="input w-1/2"/>
                                <input name="email" required placeholder="{{ __('index.email') }}" class="input w-1/2"/>
                            </div>
                            <textarea name="content" required rows="4" placeholder="{{ __('index.Write a comment...') }}" class="input w-full min-h-32 p-3 mb-4"></textarea>
                            <button class="btn">{{ __('index.Submit Comment') }}</button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="mt-6 w-full">
                @if($post->comments->count() > 0)
                    @foreach ($post->comments as $comment)
                        <div class="flex mb-3">
                            <div class="aspect-square rounded-full p-3 bg-base-100 border-base-600 border border-2 flex justify-center items-center text-3xl text-blue-950 font-bold w-16 h-16">{{ substr($comment->guest_name, 0, 1) }}</div>
                            <div class="p-4">
                                <span class="font-medium block">{{ $comment->guest_name }}</span>
                                <span class="font-light block">{{ $comment->guest_email }}</span>
                                <p class="comment">{{ $comment->content }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-gray-600 mb-4">{{ __('index.No comments yet.') }}</p>
                @endif           
            </div>
        </section>
        <!-- Related Posts Section -->
        <section class="w-full flex justify-center items-center mt-10">
            <h2 class="text-2xl font-bold text-blue-950 mb-4">{{ __('index.Related Posts') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($relatedPosts as $relatedPost)
                    <x-blog-card :post="$relatedPost"></x-blog-card>
                @endforeach
            </div>
        </section>
    </div>
    <x-footer></x-footer>
</x-guest-layout>