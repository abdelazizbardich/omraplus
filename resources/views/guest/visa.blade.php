<x-guest-layout>
<x-header active=""></x-header>
<x-page-header :title="__('index.Request e-visa')" :breadcrumbs="['Home', 'Request e-visa']" />
    <!-- Hero Section -->
  <section class="bg-blue-50 py-16 text-center px-6">
    <h1 class="text-4xl font-bold mb-4">أطلب تأشيرتك الإلكترونية للحج أو العمرة بسهولة وراحة</h1>
    <p class="text-lg max-w-2xl mx-auto">
      نسهّل عليك إصدار e-Visa الرسمية من الجهات المعتمدة بخطوات بسيطة، دون عناء التنقل أو الانتظار.
    </p>
  </section>

  <!-- لماذا عمرة بلس -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-10">لماذا تطلب e-Visa عبر عمرة بلس؟</h2>
      <div class="grid md:grid-cols-2 gap-6 text-lg">
        <ul class="space-y-3">
          <li>✅ إجراءات موثوقة ومعتمدة من وزارة الحج</li>
          <li>✅ خدمة سريعة خلال 24 - 72 ساعة</li>
        </ul>
        <ul class="space-y-3">
          <li>✅ دعم فني متواصل ومتجاوب</li>
          <li>✅ حماية خصوصية بياناتك بالكامل</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- المتطلبات -->
  <section class="bg-gray-50 py-16">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-8">المتطلبات الأساسية</h2>
      <div class="overflow-x-auto">
        <table class="w-full text-right border border-gray-300">
          <thead class="bg-blue-100">
            <tr>
              <th class="p-4 border">الوثيقة</th>
              <th class="p-4 border">التفاصيل</th>
            </tr>
          </thead>
          <tbody class="bg-white">
            <tr><td class="p-4 border">جواز سفر</td><td class="p-4 border">ساري لمدة 6 أشهر على الأقل</td></tr>
            <tr><td class="p-4 border">صورة شخصية</td><td class="p-4 border">خلفية بيضاء وحديثة</td></tr>
            <tr><td class="p-4 border">تذكرة سفر</td><td class="p-4 border">اختياري ولكن يُفضّل</td></tr>
            <tr><td class="p-4 border">حجز فندقي</td><td class="p-4 border">اختياري لبعض الدول</td></tr>
            <tr><td class="p-4 border">شهادة تطعيم</td><td class="p-4 border">مثل الحمى الشوكية أو حسب الدولة</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- خطوات التقديم -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-8">خطوات تقديم طلب التأشيرة</h2>
      <div class="grid md:grid-cols-4 gap-6 text-right text-lg">
        <div><span class="font-bold">1.</span> املأ نموذج الطلب عبر الموقع</div>
        <div><span class="font-bold">2.</span> أرسل الوثائق إلكترونيًا</div>
        <div><span class="font-bold">3.</span> نراجع الطلب ونتواصل معك</div>
        <div><span class="font-bold">4.</span> تستلم التأشيرة بصيغة PDF</div>
      </div>
    </div>
  </section>

  <!-- أنواع التأشيرات -->
  <section class="bg-blue-50 py-16">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-8">أنواع التأشيرات المتاحة</h2>
      <div class="grid md:grid-cols-2 gap-4 text-lg">
        <div>🟢 تأشيرة عمرة إلكترونية</div>
        <div>🟢 تأشيرة حج عبر حملات رسمية</div>
        <div>🟢 تأشيرة زيارة للمقيمين في الخليج</div>
        <div>🟢 تأشيرة متعددة لزيارة المملكة</div>
      </div>
    </div>
  </section>

  <!-- جدول التكلفة والمدة -->
  <section class="bg-white py-16">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-8">التكلفة ومدة الإصدار</h2>
      <div class="overflow-x-auto">
        <table class="w-full text-right border border-gray-300">
          <thead class="bg-yellow-200">
            <tr>
              <th class="p-4 border">نوع التأشيرة</th>
              <th class="p-4 border">التكلفة</th>
              <th class="p-4 border">مدة الإصدار</th>
            </tr>
          </thead>
          <tbody class="bg-white">
            <tr><td class="p-4 border">e-Visa عمرة</td><td class="p-4 border">300 - 500 ريال</td><td class="p-4 border">1 - 3 أيام</td></tr>
            <tr><td class="p-4 border">e-Visa حج</td><td class="p-4 border">حسب الحملة</td><td class="p-4 border">حسب توفر التصريح</td></tr>
            <tr><td class="p-4 border">e-Visa زيارة</td><td class="p-4 border">350 - 600 ريال</td><td class="p-4 border">2 - 5 أيام</td></tr>
          </tbody>
        </table>
      </div>
      <p class="mt-4 text-sm text-gray-600 text-center">* يشمل السعر رسوم التأمين الطبي الحكومية</p>
    </div>
  </section>

  <!-- نموذج الطلب -->
  <section class="py-16 bg-gray-100" id="request-form">
    <div class="container mx-auto px-6 max-w-2xl">
      <h2 class="text-3xl font-bold text-center mb-6">نموذج طلب التأشيرة</h2>
      <form class="bg-white p-6 rounded-lg shadow-md space-y-4">
        <input type="text" placeholder="الاسم الكامل" class="w-full p-3 border rounded" required>
        <input type="email" placeholder="البريد الإلكتروني" class="w-full p-3 border rounded" required>
        <input type="text" placeholder="رقم الجواز" class="w-full p-3 border rounded" required>
        <select class="w-full p-3 border rounded" required>
          <option>اختر نوع التأشيرة</option>
          <option>تأشيرة عمرة</option>
          <option>تأشيرة حج</option>
          <option>تأشيرة زيارة</option>
        </select>
        <textarea placeholder="ملاحظات إضافية (اختياري)" class="w-full p-3 border rounded"></textarea>
        <button type="submit" class="bg-blue-500 hover:bg-yellow-600 text-white px-6 py-3 rounded">إرسال الطلب</button>
      </form>
    </div>
  </section>

  <!-- أسئلة شائعة -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-10">الأسئلة الشائعة</h2>
      <div class="space-y-6 max-w-3xl mx-auto text-right">
        <details class="bg-gray-100 p-4 rounded">
          <summary class="cursor-pointer font-semibold text-lg">هل أحتاج طباعة التأشيرة؟</summary>
          <p class="mt-2">يمكنك فقط إبرازها من الهاتف، لكن يُفضل طباعتها للاحتياط.</p>
        </details>
        <details class="bg-gray-100 p-4 rounded">
          <summary class="cursor-pointer font-semibold text-lg">هل يمكنني طلب تأشيرة جماعية؟</summary>
          <p class="mt-2">نعم، نوفر خدمة التأشيرات الجماعية للعائلات والمجموعات.</p>
        </details>
        <details class="bg-gray-100 p-4 rounded">
          <summary class="cursor-pointer font-semibold text-lg">هل أحتاج وسيط محلي؟</summary>
          <p class="mt-2">لا، نقدم الخدمة إلكترونيًا من أي مكان.</p>
        </details>
      </div>
    </div>
  </section>

  <section class="py-16 bg-gray-50">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold mb-10">آراء من جربوا خدمتنا</h2>
    <div class="grid md:grid-cols-3 gap-6 text-right">
      <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="mb-3">"طلبت تأشيرة عمرة واستلمتها خلال يومين فقط! فريق ممتاز وخدمة راقية."</p>
        <span class="font-bold text-yellow-600">أ. خالد الزهراني</span>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="mb-3">"التعامل راقٍ وسريع، ووفّروا لي كل التعليمات بوضوح. أنصح الجميع بالتقديم عن طريقهم."</p>
        <span class="font-bold text-yellow-600">م. سمية الأحمد</span>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="mb-3">"طلبنا تأشيرات لرحلة عائلية كاملة، وكل شيء تم إلكترونيًا بدون أي تعقيد."</p>
        <span class="font-bold text-yellow-600">ع. محمد الدوسري</span>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-blue-50 text-center">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-bold mb-4">بحاجة لمساعدة؟</h2>
    <p class="mb-6 text-lg">تواصل مع مستشارينا الآن عبر واتساب أو الهاتف، وسنساعدك خطوة بخطوة.</p>
    <a href="{{ whatsappLink('fast_booking') }}" class="w-fit m-auto text-nowrap flex-row flex-nowrap text-white text-base flex font-black justify-center bg-gradient-to-l from-emerald-500 to-emerald-600 items-center btn bg-emerald-550 flex-1 hover:shadow-lg">
                    <em class="fa-brands fa-whatsapp xl:text-2xl me-1 xl:me-2"></em> <span class="text-nowrap" >
                    تواصل عبر WhatsApp    
                </span>
                </a>
  </div>
</section>

<section class="py-16 bg-white text-center">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-bold mb-6">شاهد كيف تطلب تأشيرتك بخطوات بسيطة</h2>
    <div class="aspect-video max-w-3xl mx-auto">
      <iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID" class="w-full h-full rounded-lg" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</section>

<x-spacer></x-spacer>
<x-spacer></x-spacer>
<x-footer></x-footer>
</x-guest-layout>