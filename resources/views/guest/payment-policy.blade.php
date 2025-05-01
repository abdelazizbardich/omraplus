<x-guest-layout>
    <x-header active=""></x-header>
    <x-page-header :title="__('index.Payment policy')" :breadcrumbs="['Home', 'Payment policy']" />
    <x-spacer></x-spacer>
    <div class="container m-auto">
        <!-- العنوان الرئيسي -->
        <h1 class="text-2xl font-bold text-indigo-700 ">📄 سياسة الدفع - عمرتي</h1>

        <!-- أولاً: شركاء عمرتي -->
        <section>
            <h2 class="text-xl font-semibold text-indigo-600 border-b pb-1 mb-4">أولاً: سياسة الدفع الخاصة (شركاء عمرتي)
            </h2>

            <div class="space-y-4">
                <!-- استحقاق العمولات -->
                <div>
                    <h3 class="font-bold text-gray-800">1. استحقاق العمولات</h3>
                    <p class="text-gray-700">
                        يحصل الشريك على عمولة مقابل كل حجز مؤكد يتم من خلاله عبر منصة "عمرتي".
                        يتم احتساب العمولة بعد تأكيد الدفع الكامل من طرف العميل وتفعيل خدمات الرحلة.
                    </p>
                </div>

                <!-- دورات الدفع -->
                <div>
                    <h3 class="font-bold text-gray-800">2. دورات الدفع</h3>
                    <p class="text-gray-700">
                        تُصرف العمولات في دورات منتظمة (أسبوعية أو شهرية) حسب حجم المبيعات ونوع الاتفاق مع الشريك.
                        يتم عرض تفاصيل كل عملية وسجل العمولات في لوحة تحكم الشريك.
                    </p>
                </div>

                <!-- وسائل الدفع -->
                <div>
                    <h3 class="font-bold text-gray-800">3. وسائل الدفع</h3>
                    <ul class="list-disc pr-5 text-gray-700 space-y-1">
                        <li>التحويل البنكي المحلي</li>
                        <li>التحويل البنكي الدولي</li>
                        <li>خدمات مالية إلكترونية (حسب الاتفاق)</li>
                    </ul>
                </div>

                <!-- شروط الصرف -->
                <div>
                    <h3 class="font-bold text-gray-800">4. شروط الصرف</h3>
                    <ul class="list-disc pr-5 text-gray-700 space-y-1">
                        <li>يجب أن تكون بيانات الدفع دقيقة ومحدثة.</li>
                        <li>لا تُصرف العمولة في حال تم إلغاء الحجز أو استرداد المبلغ من قبل العميل.</li>
                        <li>في حال وجود أي نزاع، يتم تجميد العمولة مؤقتًا حتى حل المشكلة.</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ثانياً: العملاء المباشرون -->
        <section>
            <h2 class="text-xl font-semibold text-indigo-600 border-b pb-1 mb-4">🔹 ثانيًا: سياسة الدفع الخاصة بالعملاء
                المباشرين</h2>

            <div class="space-y-4">
                <!-- طرق الدفع -->
                <div>
                    <h3 class="font-bold text-gray-800">1. طرق الدفع المتاحة</h3>
                    <ul class="list-disc pr-5 text-gray-700 space-y-1">
                        <li>بطاقة بنكية (Visa / MasterCard)</li>
                        <li>التحويل البنكي</li>
                        <li>الدفع الإلكتروني عبر البوابة الآمنة على الموقع</li>
                    </ul>
                </div>

                <!-- تأكيد الحجز -->
                <div>
                    <h3 class="font-bold text-gray-800">2. تأكيد الحجز</h3>
                    <p class="text-gray-700">
                        يتم تأكيد الحجز فقط بعد استلام كامل المبلغ وتحويله من النظام البنكي إلى حساب Omra Plus.
                        في حال فشل عملية الدفع أو تأخر التحويل، لن يُعتبر الحجز مؤكّدًا.
                    </p>
                </div>

                <!-- استرجاع المبالغ -->
                <div>
                    <h3 class="font-bold text-gray-800">3. استرجاع المبالغ</h3>
                    <ul class="list-disc pr-5 text-gray-700 space-y-1">
                        <li>يمكن للعميل طلب استرداد المبلغ وفق سياسة الإلغاء المحددة في شروط الخدمة.</li>
                        <li>تختلف نسبة الاسترداد حسب وقت الإلغاء ونوع الباقة.</li>
                        <li>يتم معالجة الاسترداد خلال 7 – 14 يوم عمل.</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ملاحظات عامة -->
        <section>
            <h2 class="text-xl font-semibold text-gray-800 flex items-center gap-2 border-b pb-1 mb-3">ℹ️ ملاحظات عامة
            </h2>
            <ul class="list-disc pr-5 text-gray-700 space-y-1">
                <li>Omra Plus غير مسؤولة عن أي رسوم إضافية تُفرض من قبل البنوك أو وسائل الدفع.</li>
                <li>يتحمّل العميل أو الشريك مسؤولية أي تأخير ناتج عن معلومات غير دقيقة في التحويلات.</li>
            </ul>
        </section>

        <!-- تواصل -->
        <section class="pt-4 border-t">
            <p class="text-gray-700  mt-4">
                📩 لأي استفسارات متعلقة بالدفع، يرجى التواصل مع فريق المالية عبر:<br>
                <a href="mailto:finance@omraplus.com"
                    class="text-blue-600 font-medium hover:underline">finance@omraplus.com</a>
            </p>
        </section>
    </div>
    <x-spacer></x-spacer>
    <x-spacer></x-spacer>
    <x-footer></x-footer>
</x-guest-layout>