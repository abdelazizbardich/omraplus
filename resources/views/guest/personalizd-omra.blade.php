<x-guest-layout>
    <x-header active=""></x-header>
    <x-page-header :title="__('index.Personalizd omra')" :breadcrumbs="['Home', 'Personalizd omra']" />
    <x-spacer></x-spacer>
    <div class="container mx-auto">
        @foreach ($packs as $pack)
            <div class="min-w-[350px] xl:w-3/12 lg:w-4/12 md:w-6/12 sm:w-6/12 xs:w-full p-3 pb-6">
                <x-offer-card :data=$pack></x-offer-card>
            </div>
        @endforeach
    </div>
    @if ($packs->count() > 0)
        <div class="container mx-auto">
            {{ $packs->links() }}
        </div>
    @endif
    <x-spacer></x-spacer>
    <x-spacer></x-spacer>
    <x-footer></x-footer>
</x-guest-layout>