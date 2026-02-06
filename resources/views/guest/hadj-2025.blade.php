<x-guest-layout>
    <x-header active=""></x-header>
    <div class="m-auto">
        <!-- Hero Section -->
        <section class="relative bg-gray-100 overley">
            <img src="{{ Vite::asset('resources/images/hadj-2025.jpg') }}" alt="الحج 2025"
                class="w-full h-[60vh] object-cover">
            <div
                class="z-50 absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white text-center px-4">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">الحج 2025 مع عمرة بلس</h1>
                <p class="text-lg md:text-xl">رحلة روحانية بتنظيم احترافي وخدمة لا مثيل لها</p>
                <a href="#packages" class="mt-6 bg-yellow-500 hover:bg-yellow-600 px-6 py-3 rounded text-lg">احجز
                    الآن</a>
            </div>
        </section>
        
        <section class="container mx-auto px-4 py-8 rounded-3xl p-4">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-lg font-bold">سجل الأن واضمن مقعدك في رحلة الحج القادمة</h2>
                <p class="text-base leading-relaxed">وكالة أسفار للحج والعمرة في المغرب</p>
            </div>
            <div class="grid grid-cols-4 gap-4">
                @for ($i = 0; $i < 4; $i++)
                    <div class="w-full border rounded-xl p-4">
                        <img src="{{ Vite::asset('resources/images/about-us/badge.png') }}" alt="خبرة ميدانية واسعة" class="ms-auto d-block rounded-3xl w-3/12 h-auto object-cover">
                        <div class="mt-4 text-start">
                            <span class="text-xl">خبرة ميدانية واسعة</span>
                            <p class="">سنوات من الخبرة في تنظيم رحلات العمرة والحج نجعلنا نعرف كل التفاصيل المغربة التي تضمن</p>
                        </div>
                    </div>
                @endfor
            </div>
        </section>
        
        <section class="container mx-auto px-4 py-8 rounded-3xl p-4">
            <div class="mb-8">
                <x-title 
                title="باقات الحج 2025"
                subtitle="وكالة أسفار للحج والعمرة في المغرب" 
                ></x-title>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Package Card -->
                <div class="bg-white shadow rounded-lg overflow-hidden border-2 flex p-2 items-center">
                    <img src="{{ Vite::asset('resources/images/hajj-2025/pack-icon.png') }}" class="w-3/12 aspect-square object-contain bg-gray-500 rounded-lg"
                        alt="الباقة الاقتصادية">
                    <div class="px-3">
                        <h3 class="text-base font-bold mb-1">الباقة الاقتصادية</h3>
                        <p class="mb-1 text-base">تنظيم جيد وسعر مناسب مع إقامة مريحة وخدمات أساسية.</p>
                        <a href="#" class="text-yellow-600 hover:underline">تفاصيل الباقة</a>
                    </div>
                </div>
                <!-- Package Card -->
                <div class="bg-white shadow rounded-lg overflow-hidden border-2 flex p-2 items-center">
                    <img src="{{ Vite::asset('resources/images/hajj-2025/pack-icon.png') }}" class="w-3/12 h-fit aspect-square object-contain bg-yellow-500 rounded-lg"
                        alt="الباقة الفاخرة">
                    <div class="px-3">
                        <h3 class="text-base font-bold mb-1">الباقة الفاخرة ⭐</h3>
                        <p class="mb-1 text-base">إقامة 5 نجوم وخدمة شخصية وتنقلات مميزة.</p>
                        <a href="#" class="text-yellow-600 hover:underline">تفاصيل الباقة</a>
                    </div>
                </div>
                <!-- Package Card -->
                <div class="bg-white shadow rounded-lg overflow-hidden border-2 flex p-2 items-center">
                    <img src="{{ Vite::asset('resources/images/hajj-2025/pack-icon.png') }}" class="w-3/12 aspect-square object-contain bg-gray-50 invert rounded-lg"
                        alt="باقات العائلات">
                    <div class="px-3">
                        <h3 class="text-base font-bold mb-1">باقات العائلات والمجموعات</h3>
                        <p class="mb-1 text-base">خدمة مخصصة ومرنة حسب احتياجاتك الخاصة.</p>
                        <a href="#" class="text-yellow-600 hover:underline">تفاصيل الباقة</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mx-auto px-4 py-8 rounded-3xl p-4" id="packages">
            <div class="mb-8">
                <x-title 
                title="باقات الحج 2025"
                subtitle="وكالة أسفار للحج والعمرة في المغرب" 
                ></x-title>
            </div>
            <x-carousel>
                @foreach ($hadjOffers as $hadjOffer)
                    <div class="min-w-[350px] xl:w-3/12 lg:w-4/12 md:w-6/12 sm:w-6/12 xs:w-full p-3 pb-6">
                        <x-offer-card :data=$hadjOffer></x-offer-card>
                    </div>
                @endforeach
            </x-carousel>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">مراحل رحلة الحج مع عمرة بلس</h2>
                <div class="grid md:grid-cols-5 gap-6 text-center">
                    <div class="flex flex-col items-center">
                        <div
                            class="bg-yellow-500 text-white w-16 h-16 flex items-center justify-center rounded-full text-xl font-bold mb-4">
                            1</div>
                        <h4 class="font-bold mb-2">الحجز الإلكتروني</h4>
                        <p>اختيار الباقة وتأكيد التسجيل والدفع عبر المنصة.</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <div
                            class="bg-yellow-500 text-white w-16 h-16 flex items-center justify-center rounded-full text-xl font-bold mb-4">
                            2</div>
                        <h4 class="font-bold mb-2">التحضير والسفر</h4>
                        <p>التواصل لتجهيز الأوراق وجدول الرحلة والمغادرة.</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <div
                            class="bg-yellow-500 text-white w-16 h-16 flex items-center justify-center rounded-full text-xl font-bold mb-4">
                            3</div>
                        <h4 class="font-bold mb-2">الوصول إلى مكة</h4>
                        <p>استقبال من المطار، النقل إلى الفندق، الإحرام والبدء بالمناسك.</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <div
                            class="bg-yellow-500 text-white w-16 h-16 flex items-center justify-center rounded-full text-xl font-bold mb-4">
                            4</div>
                        <h4 class="font-bold mb-2">المشاعر المقدسة</h4>
                        <p>التنقل إلى منى، عرفات، مزدلفة وأداء جميع المناسك مع المرشدين.</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <div
                            class="bg-yellow-500 text-white w-16 h-16 flex items-center justify-center rounded-full text-xl font-bold mb-4">
                            5</div>
                        <h4 class="font-bold mb-2">العودة بسلام</h4>
                        <p>خدمة ما بعد الحج وتأمين العودة إلى الوطن بكل راحة وأمان.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-gray-100 py-16">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold mb-10">آراء من حجوا معنا</h2>
                <div class="grid md:grid-cols-3 gap-8 text-right">
                    <div class="bg-white p-6 rounded-lg shadow">
                        <p class="mb-4 italic">"رحلتي مع عمرة بلس كانت أكثر من ممتازة، كل شيء كان منظمًا ودقيقًا!"</p>
                        <h4 class="font-bold">محمد العتيبي - جدة</h4>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <p class="mb-4 italic">"أشكر كل الفريق على الاهتمام والراحة، شعرت أنني بين أهلي."</p>
                        <h4 class="font-bold">فاطمة الدوسري - الدمام</h4>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <p class="mb-4 italic">"أداء مناسك الحج كان يسيرًا بفضل المرشدين المميزين."</p>
                        <h4 class="font-bold">عبدالله الزهراني - الرياض</h4>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">الأسئلة الشائعة</h2>
                <div class="space-y-6 max-w-3xl mx-auto text-right">
                    <details class="bg-gray-100 p-4 rounded">
                        <summary class="cursor-pointer font-semibold text-lg">ما هي شروط الحجز للحج 2025؟</summary>
                        <p class="mt-2">يجب توفر جواز سفر ساري، تأشيرة، واكتمال التطعيمات حسب تعليمات وزارة الحج.</p>
                    </details>
                    <details class="bg-gray-100 p-4 rounded">
                        <summary class="cursor-pointer font-semibold text-lg">هل يمكن الحجز لعائلة أو مجموعة؟</summary>
                        <p class="mt-2">نعم، نوفر باقات مرنة للعائلات والمجموعات بأسعار خاصة وخدمات مخصصة.</p>
                    </details>
                    <details class="bg-gray-100 p-4 rounded">
                        <summary class="cursor-pointer font-semibold text-lg">هل تشمل الباقة تذاكر الطيران؟</summary>
                        <p class="mt-2">نعم، بعض الباقات تشمل الطيران ذهابًا وإيابًا من مدينتك إلى مطار جدة أو المدينة.
                        </p>
                    </details>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">شاهد كيف ننظم رحلات الحج</h2>
            <div class="aspect-video max-w-4xl mx-auto rounded overflow-hidden shadow-lg">
            <iframe 
                src="https://www.youtube.com/embed/VIDEO_ID" 
                title="فيديو الحج 2025" 
                frameborder="0" 
                allowfullscreen 
                class="w-full h-full">
            </iframe>
            </div>
        </div>
        </section>

        <section class="py-16 bg-yellow-100">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-4">تواصل معنا الآن</h2>
            <p class="mb-6 text-lg">فريقنا جاهز للإجابة عن استفساراتك ومساعدتك في اختيار الباقة الأنسب.</p>
            <div class="flex justify-center gap-4 flex-wrap">
            <a href="https://wa.me/YOUR_PHONE" target="_blank"
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded text-lg bg-emerald-600">
                💬 تواصل عبر واتساب
            </a>
            <a href="#contact-form" class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded text-lg">
                📧 إرسال رسالة
            </a>
            </div>
        </div>
        </section>

        <!-- نموذج تواصل -->
        <section id="contact-form" class="py-16 bg-white">
        <div class="container mx-auto px-6 max-w-2xl">
            <h3 class="text-2xl font-bold mb-6 text-center">أرسل لنا رسالة</h3>
            <form class="space-y-4">
            <input type="text" placeholder="الاسم الكامل" class="w-full p-3 border rounded" required>
            <input type="email" placeholder="البريد الإلكتروني" class="w-full p-3 border rounded" required>
            <textarea rows="4" placeholder="رسالتك..." class="w-full p-3 border rounded" required></textarea>
            <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded">إرسال</button>
            </form>
        </div>
        </section>

        <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-8">شركاؤنا في النجاح</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 items-center justify-center">
            <img src="https://placehold.co/150x60?text=Airline" alt="شركة طيران" class="mx-auto grayscale hover:grayscale-0 transition">
            <img src="https://placehold.co/150x60?text=Hotel" alt="فندق" class="mx-auto grayscale hover:grayscale-0 transition">
            <img src="https://placehold.co/150x60?text=Transport" alt="نقل" class="mx-auto grayscale hover:grayscale-0 transition">
            <img src="https://placehold.co/150x60?text=Visa" alt="تأشيرات" class="mx-auto grayscale hover:grayscale-0 transition">
            </div>
        </div>
        </section>
    </div>
    <x-footer></x-footer>
</x-guest-layout>