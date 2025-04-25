<x-guest-layout>
<x-header active=""></x-header>
<x-page-header :title="__('index.Privacy Policy')" :breadcrumbs="['Home', 'Privacy Policy']" />
<x-spacer></x-spacer>
<div class="container m-auto">
    {!! $policy !!}
</div>
<x-spacer></x-spacer>
<x-spacer></x-spacer>
<x-footer></x-footer>
</x-guest-layout>