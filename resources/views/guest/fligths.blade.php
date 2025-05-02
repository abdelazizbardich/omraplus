<x-guest-layout>
    <x-header active=""></x-header>
    <x-page-header :title="__('index.Fligths')" :breadcrumbs="['Home', 'Fligths']" />
    <x-spacer></x-spacer>
    <div class="container m-auto">
    <div class="flex">
        @foreach ($flights as $flight)
            <div class="min-w-[350px] xl:w-3/12 lg:w-4/12 md:w-6/12 sm:w-6/12 xs:w-full p-3 pb-6">
                @if ($flight->type === 'umrah')
                    <x-offer-card-with-preview :data=$flight></x-offer-card-with-preview>
                @else
                    <x-offer-card :data=$flight></x-offer-card>
                @endif
            </div>
        @endforeach
    </div>
    </div>
    <x-spacer></x-spacer>
    <x-footer></x-footer>
</x-guest-layout>