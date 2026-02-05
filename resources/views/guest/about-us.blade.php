<x-guest-layout>
<x-header active=""></x-header>
<x-page-header :title="__('index.About us')"></x-page-header>

<div class="container mx-auto px-4 py-3 mt-8 mb-4">
    <div class="flex justify-between items-center">
        <h2 class="text-lg font-bold">وكالة أسفار للحج والعمرة في المغرب</h2>
        <p class="text-base leading-relaxed">وكالة أسفار للحج والعمرة في المغرب</p>
    </div>
</div>
<div class="container mx-auto px-4 py-8 bg-gray-900 rounded-3xl p-4 flex">
    <div class="w-1/3 p-4 bg-white rounded-3xl py-8 flex flex-col text-center items-center justify-center">
        <img src="{{ Vite::asset('resources/images/logo-d.png') }}" alt="وكالة أسفار للحج والعمرة في المغرب" class="rounded-3xl w-full h-auto object-cover">
        <div class="mb-4 flex flex-col items-center justify-center text-center">
            <span class="text-sm">Agence de Voyage Hajj et Omra - Maroc</span>
            <span class="text-sm">وكالة أسفار للحج والعمرة - المغرب</span>
        </div>
        <span class="text-sm">www.<strong>omraplus.com</strong></span>
        <span class="text-sm">contact@omraplus.com</span>
    </div>
    <div class="w-1/3 p-4">
        <h3 class="text-xl font-bold mb-4 text-white">وكالة أسفار للحج والعمرة في المغرب</h3>
        <p class="text-white leading-relaxed mb-4">
            عمرة بلس هي وكالة متخصصة في تنظيم رحلات الحج والعمرة، تجمع بين الخبرة العالية والاحدمة الممتازة لتوفير تجربة إيمانية مميزة ومريحة
        </p>
        <p class="text-white leading-relaxed">
            للمعتمرين والحجاج. نحرص في عمرة بلس على أن تكون رحلتك إلى بيت الله الحرام مبنية أتناس ومثمة، مع التأكد من تلبية احتياجات الراحة والسكن, من لحظة الحجز وحتى العودة، تعمل بشغف على خدمة ضيوف الرحمن بأعلى مستويات الاحترافية والرعاية
        </p>
    </div>
    <div class="w-1/3 p-4 grid grid-cols-2 grid-rows-2 gap-4">
        <div class="rounded-xl bg-gray-700 text-white p-4 flex flex-col items-center justify-center text-center">
            <span>+45 آلف</span>
            <span>عميل سعداء</span>
        </div>

        <div class="rounded-xl bg-gray-700 text-white p-4 flex flex-col items-center justify-center text-center">
            <span>+45 آلف</span>
            <span>عميل سعداء</span>
        </div>

        <div class="rounded-xl bg-gray-700 text-white p-4 flex flex-col items-center justify-center text-center">
            <span>+45 آلف</span>
            <span>عميل سعداء</span>
        </div>

        <div class="rounded-xl bg-gray-700 text-white p-4 flex flex-col items-center justify-center text-center">
            <span>+45 آلف</span>
            <span>عميل سعداء</span>
        </div>
    </div>
</div>
<div class="container mx-auto px-4 py-8 rounded-3xl p-4">
    <div class="mb-8">
        <x-title 
        subtitle="وكالة أسفار للحج والعمرة في المغرب" 
        title="وكالة أسفار للحج أسفار للحج والعمرة في المغرب"
        ></x-title>
    </div>
    <div class="grid grid-cols-4 gap-4">
        @for ($i = 0; $i < 8; $i++)
            <div class="w-full">
                <img src="{{ Vite::asset('resources/images/about-us/badge.png') }}" alt="خبرة ميدانية واسعة" class="rounded-3xl w-3/12 h-auto object-cover">
                <div class="border rounded-xl p-4 mt-4 text-start">
                    <span class="text-xl">خبرة ميدانية واسعة</span>
                    <p class="">سنوات من الخبرة في تنظيم رحلات العمرة والحج نجعلنا نعرف كل التفاصيل المغربة التي تضمن</p>
                </div>
            </div>
        @endfor
    </div>
</div>
<div class="container mx-auto px-4 py-8 rounded-3xl p-4">
    <div class="flex items-center mb-8">
        <div class="w-1/2">
            <h3 class="text-xl font-bold mb-4">وكالة أسفار للحج والعمرة في المغرب</h3>
            <p class="mb-4 leading-relaxed">
                عمرة بلس هي وكالة متخصصة في تنظيم رحلات الحج والعمرة، تجمع بين الخبرة العالية والاحدمة الممتازة لتوفير تجربة إيمانية مميزة ومريحة للمعتمرين والحجاج. نحرص في عمرة بلس على أن تكون رحلتك إلى بيت الله الحرام مبنية أتناس ومثمة، مع التأكد من تلبية احتياجات الراحة والسكن، من لحظة الحجز وحتى العودة
            </p>
            <p class="mb-4 leading-relaxed">
                تكون رحلتك إلى بيت الله الحرام مبنية أتناس ومثمة، تعمل بشغف على خدمة ضيوف الرحمن بأعلى مستويات الاحترافية والرعاية، بأعلى مستويات الاحترافية والرعاية
            </p>
            <span class="bg-yellow-600 ms-auto">المغرب</span>
        </div>
        <div class="w-1/2">
            <img src="{{ Vite::asset('resources/images/about-us/section-image.png') }}" alt="وكالة أسفار للحج والعمرة في المغرب">
        </div>
    </div>
</div>


    
<x-footer></x-footer>
</x-guest-layout>