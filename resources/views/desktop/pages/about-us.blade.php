@extends('desktop.layouts.app')
@section('content')
<x-desktop.components.header active=""></x-desktop.components.header>
<x-desktop.components.page-header :title="__('About us')"></x-desktop.components.page-header>
<x-desktop.components.footer></x-desktop.components.footer>
@endsection