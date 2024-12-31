@extends('layouts.app')
@section('content')
<x-header></x-header>
<x-hero-header></x-hero-header>
<div class="container m-auto flex justify-between items-start">
    <x-atoms.text-offer-card></x-atoms.text-offer-card>
</div>
@endsection