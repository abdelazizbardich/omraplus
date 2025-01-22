<div class="@if($featured)
border-black-100 border bg-yellow-100
@endif
overflow-hidden shadow-md rounded-lg w-72 mb-3">
        <div class="relative">
            <img src="{{Vite::asset('resources/images/mission-1.jpg')}}" alt="Offer" class="w-full h-60 object-cover">
            <span class="absolute top-0 start-0 end-0 bottom-0 bg-gradient-to-t from-black-900 to-transparent opacity-65"></span>
            @if($featured)
                <span class="absolute top-3 end-3 text-xs bg-yellow-600 py-1 px-2 rounded-full">العرض الموصي به</span>
            @endif
            <div class="absolute bottom-2 px-3 gap-1 flex justify-between items-stretch text-black-800 text-sm">
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 w-full h-full aspect-square rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/hotel icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-65 text-white text-xs">الإقامة</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 w-full h-full aspect-square rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/flight icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-65 text-white text-xs">الطيران</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 w-full h-full aspect-square rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/evisa icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-65 text-white text-xs">التأشيرة</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 w-full h-full aspect-square rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/transport icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-65 text-white text-xs">التنقل</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-black-50 w-full h-full aspect-square rounded-xl mb-1 overflow-hidden p-1">
                        <img src="{{ Vite::asset('resources/images/mourchid icon.svg')}}" class="w-full h-full object-cover aspect-square">
                    </div>
                    <span class="opacity-65 text-white text-xs">المؤطرين</span>
                </div>
            </div>
            <div class="bg-black-950 text-white rounded-md absolute top-3 start-3 flex flex-col justify-center items-center aspect-square w-16 h-16 opacity-90">
                <span class="font-semibold">7</span>
                <span>{{ __('Days') }}</span>
            </div>
        </div>
        <div class="p-3">
            <h1 class="font-black text-sm mb-3">عمرة شعبان - من 19 فبراير إلى 06 مارس - عبر الخطوط السعودية</h1>
            <div class="flex items-center justify-between w-full text-lg mb-1 px-2 py-3 @if($featured)bg-white @else bg-yellow-100 @endif rounded-xl">
                <span class="font-thin text-xs">الذهاب</span>
                <span class="dots flex-1 border-b mx-3 border-black-500 h-full"></span>
                <img src="{{Vite::asset('resources/images/plane.webp')}}" alt="Plane" class="w-3 h-3 me-3">
                <span class="font-thin text-xs">19 فبراير 2024</span>
            </div>
            <div class="flex items-center justify-between w-full text-lg mb-1 px-2 py-3 @if($featured)bg-white @else bg-yellow-100 @endif rounded-xl">
                <span class="font-thin text-xs">العودة</span>
                <span class="dots flex-1 border-b mx-3 border-black-500 h-full"></span>
                <img src="{{Vite::asset('resources/images/plane.webp')}}" alt="Plane" class="w-3 h-3 me-3">
                <span class="font-thin text-xs">19 فبراير 2024</span>
            </div>
            <div class="w-full text-center mb-3">
                <span class="text-lg font-bold block">
                    14.000,00
                    <span class="text-xs font-thin">دم للشخص</span>
                </span>
                <span class="text-xs font-thin block">
                    (يختلف السعر حسب حجم المجموعة)
                </span>
            </div>
            <a href="#" class="btn btn-warning w-full btn-md">إحجـز الآن</a>
        </div>
</div>