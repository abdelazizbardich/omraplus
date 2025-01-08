@extends('mobile.layouts.app')
@section('content')
<!-- Fast booking -->
 <div class="bg-blue-950 w-full py-12">
    <div class="container m-auto px-3">
        <span class="text-white font-semibold text-lg block mb-6">{{ __('fast booking') }}</span>
        <div class="grid grid-cols-2 grid-rows-2 gap-6">
            <button class="btn btn-lg text-white btn-warning">دليل الحج</button>
            <button class="btn btn-lg border-white bg-transparent btn-warning text-white">دليل العمرة</button>
            <button class="btn btn-lg border-white bg-transparent btn-warning text-white">تعرّف على مكة المكرمة</button>
            <button class="btn btn-lg border-white bg-transparent btn-warning text-white">تعرّف على المدينة المنورة</button>
        </div>
    </div>
 </div>
@endsection