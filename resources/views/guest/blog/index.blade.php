<x-guest-layout>
<x-header active="Home"></x-header>
<x-spacer></x-spacer>
<div class="container m-auto flex justify-between items-start">
    <x-title :centred=false :subtitle="__('index.Dedicated to Making Umrah and Hajj a Seamless Experience')" :title="__('index.Our Blog – Your Comprehensive Guide to Hajj and Umrah')"></x-title>
</div>
<x-spacer></x-spacer>
@if ($posts->count() > 0)
    <div class="container m-auto flex justify-start items-start flex-wrap">
        @foreach ($posts as $post)
            <div class="xl:w-3/12 lg:w-3/12 md:w-6/12 sm:w-6/12 xs:w-full pb-6 p-3">
                <x-blog-card :data=$post></x-blog-card>
            </div>
        @endforeach
    </div>
<x-spacer></x-spacer>
<div class="container m-auto px-4">
        {{ $posts->links() }}
    </div>
@endif
<div class="w-ful">
    <x-footer></x-footer>
</div>
</x-guest-layout>