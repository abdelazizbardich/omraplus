@extends('desktop.layouts.app')
@section('content')
<div class="min-h-screen flex items-center justify-center flex-col" style="background-color: #0129c7;background-image: url('{{ Vite::asset('resources/images/Kaaba.webp') }}'); background-blend-mode: overlay; background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="">
        <img src="{{ Vite::asset('resources/images/logo.webp') }}" alt="{{ __(config('app.name')) }} {{__('logo')}}" />
    </div>
    <div class="text-center mt-4 w-6/12">
        <hr class="border-b-2 border-white w-20 mx-auto mb-5" />
        
        <h1 class="text-4xl font-bold text-white">{{__('Coming Soon')}}</h1>
        <p class="mt-2 text-lg text-white">{{__('We are working hard to bring you the best experience. Stay tuned')}}!</p>
        <p class="mt-2 text-lg text-white">{{__('For any inquiries, please contact us at')}} 
            <a href="mailto:{{ config('mail.from.address') }}" class="text-slate-50">{{ config('mail.from.address') }}</a>
        </p>
    </div>
</div>
@endsection