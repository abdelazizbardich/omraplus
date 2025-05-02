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

        <!-- Why Choose Us -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold mb-10">لماذا تختار الحج معنا؟</h2>
                <div class="grid md:grid-cols-3 gap-8 text-right">
                    <div>
                        <img src="{{ Vite::asset('resources/images/not-found.webp') }}" class="mx-auto mb-4" alt="Icon">
                        <h3 class="font-bold text-xl mb-2">تنظيم شامل</h3>
                        <p>نهتم بكل التفاصيل من التصاريح حتى العودة لتتفرغ للعبادة.</p>
                    </div>
                    <div>
                        <img src="{{ Vite::asset('resources/images/not-found.webp') }}" class="mx-auto mb-4" alt="Icon">
                        <h3 class="font-bold text-xl mb-2">مرشدون مؤهلون</h3>
                        <p>يرافقك مرشدون خبراء لتيسير أداء المناسك والإجابة عن الأسئلة.</p>
                    </div>
                    <div>
                        <img src="{{ Vite::asset('resources/images/not-found.webp') }}" class="mx-auto mb-4" alt="Icon">
                        <h3 class="font-bold text-xl mb-2">دعم 24/7</h3>
                        <p>نحن معك دائمًا طوال الرحلة، قبلها وأثناءها وحتى العودة.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Packages -->
        <section id="packages" class="py-16 bg-gray-50">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">باقات الحج 2025</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Package Card -->
                    <div class="bg-white shadow rounded-lg overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/not-found.webp') }}" class="w-full h-52 object-cover"
                            alt="الباقة الاقتصادية">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">الباقة الاقتصادية</h3>
                            <p class="mb-4">تنظيم جيد وسعر مناسب مع إقامة مريحة وخدمات أساسية.</p>
                            <a href="#" class="text-yellow-600 hover:underline">تفاصيل الباقة</a>
                        </div>
                    </div>
                    <!-- Package Card -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden border-2 border-yellow-500">
                        <img src="{{ Vite::asset('resources/images/not-found.webp') }}" class="w-full h-52 object-cover"
                            alt="الباقة الفاخرة">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">الباقة الفاخرة ⭐</h3>
                            <p class="mb-4">إقامة 5 نجوم وخدمة شخصية وتنقلات مميزة.</p>
                            <a href="#" class="text-yellow-600 hover:underline">تفاصيل الباقة</a>
                        </div>
                    </div>
                    <!-- Package Card -->
                    <div class="bg-white shadow rounded-lg overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/not-found.webp') }}" class="w-full h-52 object-cover"
                            alt="باقات العائلات">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">باقات العائلات والمجموعات</h3>
                            <p class="mb-4">خدمة مخصصة ومرنة حسب احتياجاتك الخاصة.</p>
                            <a href="#" class="text-yellow-600 hover:underline">تفاصيل الباقة</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-16 bg-yellow-100 text-center">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold mb-4">احجز رحلتك الآن!</h2>
                <p class="mb-6 text-lg">كن من أوائل المسجلين لحج 2025 وتمتع بخدماتنا الاستثنائية</p>
                <x-carousel>
                    @foreach ($hadjOffers as $hadjOffer)
                        <div class="min-w-[350px] xl:w-3/12 lg:w-4/12 md:w-6/12 sm:w-6/12 xs:w-full p-3 pb-6">
                            <x-offer-card :data=$hadjOffer></x-offer-card>
                        </div>
                    @endforeach
                </x-carousel>
            </div>
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

        <section class="bg-yellow-50 py-16 text-center px-6">
            <h2 class="text-3xl font-bold mb-6">فضائل الحج</h2>
            <p class="text-lg max-w-2xl mx-auto mb-6">
                قال ﷺ: "من حج فلم يرفث ولم يفسق رجع كيوم ولدته أمه"
            </p>
            <blockquote class="italic text-gray-700">
                اللهم يسّر لنا حج بيتك الحرام، وتقبّله منا ومن جميع المسلمين.
            </blockquote>
        </section>
    </div>
    <x-footer></x-footer>
</x-guest-layout>