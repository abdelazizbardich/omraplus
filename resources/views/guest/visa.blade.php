<x-guest-layout>
<x-header active=""></x-header>
<x-page-header :title="__('index.Request e-visa')" :breadcrumbs="['Home', 'Request e-visa']" />
<x-spacer></x-spacer>
<div class="container m-auto">
    <div role="tablist" class="tabs tabs-lifted">
        <input type="radio" name="my_tabs_2" role="tab" class="tab py-16" aria-label="العمرة: دليل مختصر للمعتمرين"
            checked="checked" />
        <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
            <div class="flex gap-12">

                <div class="w-6/12">
                    <h1 class="text-3xl font-bold text-blue-950 mb-4">ما هي العمرة؟</h1>
                    <p class="mb-4">
                        العمرة هي عبادة تقرب العبد إلى الله، تتضمن:
                    </p>
                    <ul class="list-disc list-inside mb-6">
                        <li>الإحرام</li>
                        <li>الطواف بالكعبة</li>
                        <li>السعي بين الصفا والمروة</li>
                        <li>اختتامها بالحلق أو التقصير</li>
                    </ul>

                    <h2 class="text-2xl font-semibold text-gray-700 mb-4">خطوات أداء العمرة</h2>

                    <h3 class="text-xl font-semibold text-gray-600 mt-6 mb-2">1. الإحرام</h3>
                    <ul class="list-disc list-inside mb-4">
                        <li>يُحرم المعتمر من المكان المخصص (الميقات) حسب موقعه.</li>
                        <li>يلتزم بتجنب المحظورات الشرعية الخاصة بالإحرام.</li>
                        <li>يرفع صوته بالتلبية قائلًا:</li>
                    </ul>
                    <blockquote class="bg-blue-100 border-l-4 border-blue-500 text-blue-800 p-4 italic rounded mb-6">
                        "لبيك اللهم لبيك، لبيك لا شريك لك لبيك، إن الحمد والنعمة لك والملك، لا شريك لك".
                    </blockquote>

                    <h3 class="text-xl font-semibold text-gray-600 mt-6 mb-2">2. الطواف</h3>
                    <ul class="list-disc list-inside mb-4">
                        <li>عند الوصول إلى الحرم، يطوف بالكعبة سبع مرات مبتدئًا من الحجر الأسود ومنهيًا إليه، مع جعل
                            الكعبة على يساره.</li>
                        <li>بعد الانتهاء من الطواف، يصلي ركعتين في مكان مناسب.</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-gray-600 mt-6 mb-2">3. السعي</h3>
                    <ul class="list-disc list-inside mb-4">
                        <li>السعي بين الصفا والمروة، ذهابًا وإيابًا، سبعة أشواط.</li>
                        <li>ينتهي الشوط الأخير عند المروة.</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-gray-600 mt-6 mb-2">4. الحلق أو التقصير</h3>
                    <ul class="list-disc list-inside mb-4">
                        <li><strong class="text-gray-700">للرجال:</strong> حلق الشعر بالكامل أو تقصيره.</li>
                        <li><strong class="text-gray-700">للنساء:</strong> تقصير أطراف الشعر بمقدار 1-2 سم.</li>
                    </ul>
                    <p class="mb-6">بعد ذلك، يكون المعتمر قد أتم مناسكه وخرج من حالة الإحرام.</p>

                    <h2 class="text-2xl font-semibold text-gray-700 mt-6 mb-4">آداب العمرة</h2>
                    <ul class="list-disc list-inside mb-6">
                        <li>تجنب التدافع وإيذاء الآخرين في الزحام.</li>
                        <li>السير مع اتجاه الطواف وعدم معاكسته.</li>
                        <li>الالتزام بالتعليمات والإرشادات التنظيمية لضمان السلامة.</li>
                    </ul>

                    <p class="text-center text-gray-500 mt-6">نسأل الله أن يتقبل طاعتكم وييسر لكم أداء مناسككم بكل يسر
                        وطمأنينة.</p>
                </div>
                <div class="w-6/12">
                    <iframe class="w-full aspect-video"
                        src="https://www.youtube.com/embed/mVZHBkjvVD4?si=SGtknedwheBLJDGl" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<x-spacer></x-spacer>
<x-spacer></x-spacer>
<x-footer></x-footer>
</x-guest-layout>