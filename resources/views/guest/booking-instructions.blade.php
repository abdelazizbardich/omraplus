<x-guest-layout>
    <x-header active=""></x-header>
    <x-page-header :title="__('index.Booking instructions')" :breadcrumbs="['Home', 'Booking instructions']" />
    <!-- Hero -->
    <section class="bg-blue-50 py-16 text-center">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold mb-4">دليل إجراءات الحجز مع عمرة بلس</h1>
            <p class="text-lg max-w-3xl mx-auto">
                في إطار حرصنا على تقديم خدمة متكاملة وميسّرة، نضع بين أيديكم خطوات واضحة ومنظمة لحجز رحلتكم إلى الديار
                المقدسة. بدءًا من اختيار الباقة المناسبة، مرورًا بإرسال الطلب وتقديم الوثائق، وصولًا إلى تأكيد الحجز
                واستلام البرنامج الكامل. نسعى لتوفير تجربة راقية تتماشى مع تطلعاتكم وتُراعي أدق التفاصيل.</p>
        </div>
    </section>

    <!-- Steps Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 space-y-16">

            <!-- Step 1 -->
            <div class="flex flex-col md:flex-row items-center gap-8">
                <img src="{{ Vite::asset('resources/images/booking-instructions/1.png') }}" alt="اختيار الباقة" class="rounded shadow w-full md:w-1/2" />
                <div class="md:w-1/2">
                    <h2 class="text-2xl font-bold text-yellow-600 mb-2">1. اختيار الباقة المناسبة</h2>
                    <p class="mb-2">نقدم لك باقات تناسب جميع الفئات:</p>
                    <ul class="list-disc pr-6 space-y-1 text-gray-700">
                        <li><strong>باقات اقتصادية:</strong> أداء العمرة بتكاليف معقولة مع خدمات أساسية.</li>
                        <li><strong>باقات راقية:</strong> فنادق قريبة، نقل مريح، خدمات إضافية.</li>
                        <li><strong>باقات VIP:</strong> إقامة فاخرة، استقبال خاص، مرافقة شخصية.</li>
                    </ul>
                    <p class="mt-4">تعرّف على تفاصيل الباقات ومواعيد الرحلات عبر موقعنا أو بالتواصل مع مستشارينا.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-8">
                <img src="{{ Vite::asset('resources/images/booking-instructions/2.png') }}" alt="إرسال الطلب" class="rounded shadow w-full md:w-1/2" />
                <div class="md:w-1/2">
                    <h2 class="text-2xl font-bold text-yellow-600 mb-2">2. إرسال طلب الحجز</h2>
                    <p class="mb-2">طرق التقديم:</p>
                    <ul class="list-disc pr-6 space-y-1 text-gray-700">
                        <li><strong>الموقع الرسمي:</strong> نموذج حجز سريع وبسيط.</li>
                        <li><strong>الواتساب:</strong> أرسل اسمك، المدينة، والباقة المطلوبة.</li>
                        <li><strong>الهاتف:</strong> تواصل مباشر مع فريقنا.</li>
                        <li><strong>زيارة الفرع:</strong> مراكش – حجز مباشر واستشارة وجهًا لوجه.</li>
                    </ul>
                    <p class="mt-4">سيتواصل معك مستشار لتأكيد المعلومات وإرشادك للخطوة التالية.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="flex flex-col md:flex-row items-center gap-8">
                <img src="{{ Vite::asset('resources/images/booking-instructions/3.png') }}" alt="تقديم الوثائق" class="rounded shadow w-full md:w-1/2" />
                <div class="md:w-1/2">
                    <h2 class="text-2xl font-bold text-yellow-600 mb-2">3. تقديم الوثائق المطلوبة</h2>
                    <ul class="list-disc pr-6 space-y-1 text-gray-700">
                        <li><strong>جواز سفر:</strong> صالح لـ6 أشهر على الأقل من تاريخ السفر.</li>
                        <li><strong>شهادة تلقي اللقاح:</strong> حسب الشروط الصحية السعودية.</li>
                    </ul>
                    <p class="mt-4">يرجى التأكد من وضوح الوثائق لتجنب أي تأخير.</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-8">
                <img src="{{ Vite::asset('resources/images/booking-instructions/4.png') }}" alt="الدفع والتأكيد" class="rounded shadow w-full md:w-1/2" />
                <div class="md:w-1/2">
                    <h2 class="text-2xl font-bold text-yellow-600 mb-2">4. تأكيد الحجز والدفع</h2>
                    <ul class="list-disc pr-6 space-y-1 text-gray-700">
                        <li><strong>تحويل بنكي:</strong> معلومات الحساب تُرسل لك مباشرة.</li>
                        <li><strong>الدفع المباشر:</strong> عبر الوكالة أو نقاط معتمدة.</li>
                        <li><strong>الدفع الإلكتروني:</strong> (قريبًا) عبر البطاقة البنكية.</li>
                    </ul>
                    <p class="mt-4">بعد الدفع، ستصلك رسالة تأكيد وإيصال رسمي بالحجز.</p>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="flex flex-col md:flex-row items-center gap-8">
                <img src="{{ Vite::asset('resources/images/booking-instructions/5.png') }}" alt="استلام البرنامج" class="rounded shadow w-full md:w-1/2" />
                <div class="md:w-1/2">
                    <h2 class="text-2xl font-bold text-yellow-600 mb-2">5. استلام البرنامج والتوجيهات</h2>
                    <ul class="list-disc pr-6 space-y-1 text-gray-700">
                        <li><strong>تفاصيل الرحلة:</strong> مواعيد السفر، رقم الرحلة، أماكن الانطلاق والوصول.</li>
                        <li><strong>الإقامة:</strong> أسماء الفنادق ومواقعها.</li>
                        <li><strong>التنقل:</strong> وسائل النقل داخل السعودية.</li>
                        <li><strong>التوجيهات العامة:</strong> إرشادات الحقيبة، الأدوية، أرقام الطوارئ.</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="bg-yellow-500 py-12 text-white text-center">
        <div class="container mx-auto px-6">
            <h3 class="text-2xl font-bold mb-2">هل أنت جاهز لحجز رحلتك؟</h3>
            <p class="mb-4">ابدأ رحلتك الآن مع عمرة بلس، بخدمة احترافية وتجربة لا تُنسى.</p>
            <a href="https://wa.me/"
                class="bg-white text-yellow-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100">
                احجز عبر واتساب
            </a>
        </div>
    </section>
    <x-footer></x-footer>
</x-guest-layout>