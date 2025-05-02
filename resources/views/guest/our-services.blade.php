<x-guest-layout>
    <x-header active=""></x-header>
    <x-page-header :title="__('index.our services')" :breadcrumbs="['Home', 'our services']" />
    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12">خدماتنا في عمرة بلس</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- خدمة -->
                <div class="bg-white shadow rounded-lg p-6 text-right">
                    <img src="images/hajj-package.jpg" alt="رحلات العمرة والحج"
                        class="h-40 w-full object-cover rounded mb-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">تنظيم رحلات العمرة والحج</h3>
                    <p class="text-gray-600">باقات متنوعة تشمل الإقامة والتنقلات والإرشاد، لتناسب جميع الفئات
                        والمستويات.</p>
                </div>

                <!-- تأشيرات إلكترونية -->
                <div class="bg-white shadow rounded-lg p-6 text-right">
                    <img src="images/visa-service.jpg" alt="خدمة eVisa" class="h-40 w-full object-cover rounded mb-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">خدمة التأشيرات الإلكترونية</h3>
                    <p class="text-gray-600">تسهيل إصدار التأشيرات عبر الإنترنت للعمرة والحج مع دعم كامل.</p>
                </div>

                <!-- حجز الفنادق -->
                <div class="bg-white shadow rounded-lg p-6 text-right">
                    <img src="images/hotel-booking.jpg" alt="حجز الفنادق" class="h-40 w-full object-cover rounded mb-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">الحجز الفندقي</h3>
                    <p class="text-gray-600">إقامات مختارة بعناية بجوار الحرمين الشريفين في مكة والمدينة.</p>
                </div>

                <!-- التنقلات -->
                <div class="bg-white shadow rounded-lg p-6 text-right">
                    <img src="images/transport.jpg" alt="وسائل النقل" class="h-40 w-full object-cover rounded mb-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">تنقلات مريحة وآمنة</h3>
                    <p class="text-gray-600">نقل حديث ومكيف لضمان راحتك أثناء الرحلة بين مكة والمدينة.</p>
                </div>

                <!-- الإرشاد الديني -->
                <div class="bg-white shadow rounded-lg p-6 text-right">
                    <img src="images/guide.jpg" alt="الإرشاد الديني" class="h-40 w-full object-cover rounded mb-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">إرشاد ديني وثقافي</h3>
                    <p class="text-gray-600">مرشدون مؤهلون يرافقونك في جميع مراحل الرحلة لشرح المناسك وتقديم النصائح.
                    </p>
                </div>

                <!-- الدعم الفني -->
                <div class="bg-white shadow rounded-lg p-6 text-right">
                    <img src="images/support.jpg" alt="خدمة العملاء" class="h-40 w-full object-cover rounded mb-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">دعم فني 24/7</h3>
                    <p class="text-gray-600">فريق دعم جاهز لخدمتك عبر الهاتف أو الواتساب قبل وأثناء وبعد الرحلة.</p>
                </div>

                <!-- المنصة الإلكترونية -->
                <div class="bg-white shadow rounded-lg p-6 text-right">
                    <img src="images/platform.jpg" alt="المنصة الإلكترونية"
                        class="h-40 w-full object-cover rounded mb-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">منصة إلكترونية متكاملة</h3>
                    <p class="text-gray-600">منصة رقمية سهلة الاستخدام تُمكنك من الحجز ومتابعة حالتك بكل يسر.</p>
                </div>

                <!-- التأمين الطبي -->
                <div class="bg-white shadow rounded-lg p-6 text-right">
                    <img src="images/insurance.jpg" alt="التأمين الطبي" class="h-40 w-full object-cover rounded mb-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">تأمين طبي شامل</h3>
                    <p class="text-gray-600">جميع الباقات تشمل تأمينًا صحيًا للحماية أثناء الرحلة.</p>
                </div>

                <!-- خدمات العائلات -->
                <div class="bg-white shadow rounded-lg p-6 text-right">
                    <img src="images/family.jpg" alt="برامج العائلات" class="h-40 w-full object-cover rounded mb-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">خدمات العائلات</h3>
                    <p class="text-gray-600">برامج خاصة للعائلات تشمل غرف عائلية ومرافق للأطفال ورعاية لكبار السن.</p>
                </div>
            </div>
            <x-spacer></x-spacer>
            <x-spacer></x-spacer>
        </div>
        <div class="max-w-7xl mx-auto px-4">
            <!-- خدمات المقيمين والزوار الدوليين -->
            <div class="bg-white shadow rounded-lg p-6 text-right mb-6">
                <img src="images/international.jpg" alt="خدمات الزوار الدوليين"
                    class="h-40 w-full object-cover rounded mb-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">خدمات للمقيمين والزوار الدوليين</h3>
                <p class="text-gray-600">باقات مرنة وخيارات مخصصة للمعتمرين والحجاج من خارج المملكة.</p>
            </div>

            <!-- برامج مخصصة للشركات والجهات -->
            <div class="bg-white shadow rounded-lg p-6 text-right mb-6">
                <img src="images/group-travel.jpg" alt="برامج الجهات والشركات"
                    class="h-40 w-full object-cover rounded mb-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">برامج مخصصة للجهات والشركات</h3>
                <p class="text-gray-600">نُقدّم خدمات خاصة للمجموعات، الشركات، والهيئات الرسمية، تشمل باقات مخصصة وتنسيق
                    متكامل.</p>
            </div>

            <!-- تدريب ما قبل الرحلة -->
            <div class="bg-white shadow rounded-lg p-6 text-right mb-6">
                <img src="images/training.jpg" alt="جلسات التدريب" class="h-40 w-full object-cover rounded mb-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">جلسات تدريبية قبل السفر</h3>
                <p class="text-gray-600">لقاءات تعريفية لضمان جاهزيتك الكاملة للرحلة، تشمل التوعية بالمناسك والإجراءات
                    التنظيمية.</p>
            </div>
        </div>
        <x-spacer></x-spacer>
        <x-spacer></x-spacer>
        <div class="mt-16 text-center">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">جاهز لبدء رحلتك الإيمانية؟</h3>
            <p class="text-gray-600 mb-6">دعنا نساعدك في اختيار الباقة الأنسب وتسهيل جميع الخطوات من التأشيرة حتى
                العودة.</p>
            <a href="/contact"
                class="btn inline-block px-6 py-3 bg-indigo-600 font-medium rounded-lg hover:bg-indigo-700 transition">احجز
                الآن أو تواصل معنا</a>
        </div>
    </section>
    <x-footer></x-footer>
</x-guest-layout>