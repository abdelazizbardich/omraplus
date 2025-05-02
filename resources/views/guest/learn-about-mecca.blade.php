<x-guest-layout>
<x-header active=""></x-header>
<x-page-header :title="__('index.Learn about Mecca')" :breadcrumbs="['Home', 'Learn about Mecca']" />
<x-spacer></x-spacer>
<section class="bg-white py-16">
  <div class="container mx-auto px-4 text-right">
    <!-- العنوان -->
    <h2 class="text-3xl font-bold text-gray-800 mb-6 border-r-4 border-indigo-600 pr-4">تعرّف على مكة المكرمة</h2>

    <!-- النبذة -->
    <p class="text-lg text-gray-700 leading-relaxed mb-10">
      مكة المكرمة، أقدس بقاع الأرض، قبلة المسلمين، ومهبط الوحي على رسول الله ﷺ. إنها ليست مجرد مدينة، بل محطة روحية عظيمة في حياة كل مسلم، تحمل بين أزقتها عبق النبوة وأثر الصحابة.
    </p>

    <!-- لماذا مكة -->
    <div class="grid md:grid-cols-2 gap-8 mb-16">
      <div>
        <h3 class="text-2xl font-semibold text-indigo-700 mb-4">لماذا مكة؟</h3>
        <ul class="list-disc list-inside text-gray-700 space-y-2">
          <li>قبلة المسلمين الأولى ومكان الكعبة المشرفة.</li>
          <li>نقطة انطلاق الحج والعمرة.</li>
          <li>أرض نزول الوحي وبداية الرسالة.</li>
          <li>تمنح الزائر شعورًا بالسكينة والخشوع.</li>
        </ul>
      </div>
      <img src="http://placehold.co/900x300?text=kaaba" alt="الكعبة المشرفة" class="rounded-lg shadow-lg">
    </div>

    <!-- المعالم -->
    <div class="mb-16">
      <h3 class="text-2xl font-semibold text-indigo-700 mb-6">معالم دينية بارزة في مكة</h3>
      <div class="grid md:grid-cols-2 gap-6 text-gray-700">
        <div>
          <h4 class="font-bold text-lg mb-1">🕋 الكعبة المشرفة</h4>
          <p>أقدس مكان على وجه الأرض، مركز الطواف، وبداية المناسك.</p>
        </div>
        <div>
          <h4 class="font-bold text-lg mb-1">📍 المسجد الحرام</h4>
          <p>أوسع مسجد في العالم الإسلامي ويضم الكعبة، مقام إبراهيم، وبئر زمزم.</p>
        </div>
        <div>
          <h4 class="font-bold text-lg mb-1">⛰️ جبل النور</h4>
          <p>حيث نزل الوحي على النبي ﷺ في غار حراء لأول مرة.</p>
        </div>
        <div>
          <h4 class="font-bold text-lg mb-1">⛰️ جبل ثور</h4>
          <p>شهد لحظة الهجرة النبوية عندما اختبأ النبي ﷺ وصاحبه في الغار.</p>
        </div>
      </div>
    </div>

    <!-- المعاصرة -->
    <div class="mb-16">
      <h3 class="text-2xl font-semibold text-indigo-700 mb-4">مكة اليوم: مزيج من الروحانية والتطور</h3>
      <p class="text-gray-700 mb-4">بالإضافة إلى المعالم الدينية، توفر مكة خدمات راقية مثل:</p>
      <ul class="list-disc list-inside text-gray-700 space-y-1">
        <li>فنادق مطلة على الحرم بمستوى 5 نجوم.</li>
        <li>مراكز تسوق وأسواق شعبية.</li>
        <li>بنية تحتية متطورة للحجاج والمعتمرين.</li>
      </ul>
    </div>

    <!-- صور -->
    <div class="mb-16">
      <h3 class="text-2xl font-semibold text-indigo-700 mb-6">📷 صور من مكة المكرمة</h3>
      <div class="grid md:grid-cols-3 gap-4">
        <img src="http://placehold.co/400x300?text=makkah1" alt="مكة 1" class="rounded shadow-md">
        <img src="http://placehold.co/400x300?text=makkah2" alt="مكة 2" class="rounded shadow-md">
        <img src="http://placehold.co/400x300?text=makkah3" alt="مكة 3" class="rounded shadow-md">
      </div>
    </div>

    <!-- CTA -->
    <div class="text-center mt-10">
      <h4 class="text-xl font-bold text-gray-800 mb-3">هل تخطط لزيارة مكة المكرمة؟</h4>
      <p class="text-gray-600 mb-6">اختر الباقة المناسبة لك ودعنا نهتم بكل التفاصيل.</p>
      <a href="/packages" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">
        تصفح الباقات الآن
      </a>
    </div>
  </div>
</section>
<div class="bg-gray-50 py-16 mt-12">
  <div class="container mx-auto px-4 text-right">
    <h3 class="text-2xl font-bold text-gray-800 mb-6 border-r-4 border-indigo-600 pr-4">تجربة العمرة خطوة بخطوة</h3>
    <div class="grid md:grid-cols-3 gap-8 text-gray-700">
      <div class="bg-white p-6 rounded-lg shadow-md">
        <h4 class="font-semibold text-lg mb-2">١. الإحرام</h4>
        <p>يبدأ من الميقات المحدد، ويرتدي فيه المعتمر ملابس الإحرام وينوي العمرة.</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
        <h4 class="font-semibold text-lg mb-2">٢. الطواف</h4>
        <p>الطواف سبعة أشواط حول الكعبة المشرفة في خشوع وابتهال.</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
        <h4 class="font-semibold text-lg mb-2">٣. السعي</h4>
        <p>المشي بين الصفا والمروة سبع مرات، تذكيرًا بسعي السيدة هاجر.</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
        <h4 class="font-semibold text-lg mb-2">٤. الحلق أو التقصير</h4>
        <p>آخر مناسك العمرة، وهو قص الشعر تعبيرًا عن الطاعة والتجرد.</p>
      </div>
    </div>
  </div>
</div>
<div class="mt-16">
  <div class="container mx-auto px-4 text-right">
    <h3 class="text-2xl font-bold text-gray-800 mb-4">خريطة مكة التفاعلية</h3>
    <p class="text-gray-600 mb-4">استعرض المواقع المهمة في مكة مثل الحرم المكي، الفنادق، المراكز الطبية، والأسواق.</p>
    <div class="rounded-lg overflow-hidden shadow-lg">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.105935733666!2d39.82614017593402!3d21.422484078283002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c2050f0da5b8d9%3A0xa2d8d539d258313!2z2YXYtdmGINin2YTYqSDYp9mE2YXYqQ!5e0!3m2!1sar!2ssa!4v1714632530456!5m2!1sar!2ssa"
        width="100%" class="aspect-video" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</div>
<div class="bg-white py-20">
  <div class="container mx-auto px-4 text-right">
    <h3 class="text-2xl font-bold text-gray-800 mb-10 border-r-4 border-indigo-600 pr-4">ماذا قال زوار مكة؟</h3>
    <div class="grid md:grid-cols-3 gap-6 text-gray-700">
      <div class="bg-gray-50 p-6 rounded-lg shadow">
        <p class="italic">"كانت العمرة مع عمرة بلس من أجمل التجارب، كل شيء منظم وهادئ."</p>
        <div class="mt-4 text-sm text-gray-500">— فاطمة من المغرب</div>
      </div>
      <div class="bg-gray-50 p-6 rounded-lg shadow">
        <p class="italic">"مكة لا تُنسى… دموعنا لم تتوقف من لحظة الوصول حتى الطواف."</p>
        <div class="mt-4 text-sm text-gray-500">— خالد من الأردن</div>
      </div>
      <div class="bg-gray-50 p-6 rounded-lg shadow">
        <p class="italic">"الرحلة كانت روحانية وممتازة، والخدمة كانت تفوق التوقعات!"</p>
        <div class="mt-4 text-sm text-gray-500">— أمينة من الجزائر</div>
      </div>
    </div>
  </div>
</div>

<x-spacer></x-spacer>
<x-spacer></x-spacer>
<x-footer></x-footer>
</x-guest-layout>