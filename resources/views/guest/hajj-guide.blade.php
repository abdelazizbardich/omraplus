<x-guest-layout>
<x-header active=""></x-header>
<x-page-header :title="__('index.Hajj guide')" :breadcrumbs="['Home', 'Hajj guide']" />
<x-spacer></x-spacer>
<div class="container m-auto">
  <div class="py-10">
    <!-- العنوان الرئيسي -->
    <h1 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-8">
      🕋 مناسك الحج بالترتيب | كيف تؤدي الحج خطوة بخطوة؟
    </h1>

    <!-- المقدمة -->
    <section class="mb-10">
      <p class="leading-relaxed text-lg mb-4">
        الحج هو أحد أركان الإسلام الخمسة، وهو حج بيت الله الحرام في مكة المكرمة، ويُعد من أعظم الشعائر الإسلامية وأقدسها، لما يحمله من أبعاد روحية ودينية ونفسية ورمزية. لا يقتصر الحج على كونه مجموعة من الأعمال الجسدية، بل هو تجربة إيمانية عميقة توحّد المسلمين من مختلف الأعراق والخلفيات، وتجمعهم على الإيمان المشترك والهدف الواحد.
      </p>
      <p class="leading-relaxed text-lg">
        يُمثل الحج للمسلم رابطًا متينًا بميراثه الديني والثقافي، إذ يحيي في قلبه سنة الأنبياء، وخطى الصحابة، وممارسات السلف الصالح. وفي الوقت نفسه، يمنح الحاج فرصة للتأمل والتجرد من متاع الدنيا، والانخراط في رحلة روحية خالصة تعيد ترتيب العلاقة بين الإنسان وربه، وبين الإنسان ونفسه.
      </p>
    </section>
</div>
</div>
<div class="w-full px-44 m-auto bg-cover bg-no-repeat bg-center bg-fixed bg-blend-multiply bg-blue-950" style="background-image: url('{{ Vite::asset('resources/images/timeline-bg.jpg') }}');">
    <div class="py-10">

    <!-- قائمة المناسك -->
        <ul class="timeline timeline-vertical" >
        <li>
            <div class="timeline-start timeline-box">
                <h2 class="text-xl font-semibold text-indigo-700 mb-2">🕋 الإحرام من الميقات</h2>
                <p class="text-gray-700 leading-relaxed">
                    يبدأ الحاج بالإحرام من ميقات بلده بعد الاغتسال والتجرد من المخيط للرجال، ويلبس ملابس الإحرام وينوي النسك ويقول: "لبيك اللهم حجًا". ثم يكثر من التلبية ويجتنب محظورات الإحرام مثل قص الشعر وتغطية الرأس.
                </p>
            </div>
        </li>

        <li>
            <div class="timeline-end timeline-box">
                <h2 class="text-xl font-semibold text-indigo-700 mb-2">🕋 الطواف حول الكعبة 7 أشواط</h2>
                <p class="text-gray-700 leading-relaxed">
                    عند دخول المسجد الحرام، يبدأ الحاج بالطواف حول الكعبة سبعة أشواط، يبدأ كل شوط من الحجر الأسود وينتهي به. يستحب الدعاء والذكر أثناء الطواف، مع كشف الكتف الأيمن للرجل في طواف القدوم.
                </p>
            </div>
        </li>

        <li>
            <div class="timeline-start timeline-box">
                <h2 class="text-xl font-semibold text-indigo-700 mb-2">🕋 السعي بين الصفا والمروة</h2>
                <p class="text-gray-700 leading-relaxed">
                    بعد الطواف، يسعى الحاج بين جبلي الصفا والمروة سبعة أشواط، يبدأ بالصفا وينتهي بالمروة. هذا السعي إحياء لذكرى هاجر، وهو شعيرة ترمز للإيمان والثقة بالله.
                </p>
            </div>
        </li>

        <li>
            <div class="timeline-end timeline-box">
                <h2 class="text-xl font-semibold text-indigo-700 mb-2">🕋 الوقوف بعرفة (9 ذو الحجة)</h2>
                <p class="text-gray-700 leading-relaxed">
                    الوقوف بعرفة ركن عظيم من أركان الحج، يبدأ من زوال شمس 9 ذو الحجة حتى غروبها. يجتمع الحجاج في مشهد مهيب للدعاء والاستغفار، وهو أعظم أيام الحج.
                </p>
            </div>
        </li>

        <li>
            <div class="timeline-start timeline-box">
                <h2 class="text-xl font-semibold text-indigo-700 mb-2">🕋 المبيت بمزدلفة ليلة العيد</h2>
                <p class="text-gray-700 leading-relaxed">
                    بعد غروب شمس يوم عرفة، ينطلق الحجاج إلى مزدلفة ويصلون فيها المغرب والعشاء جمعًا وقصرًا، ويبيتون حتى الفجر. يُجمع فيها الحصى لرمي الجمرات.
                </p>
            </div>
        </li>

        <li>
            <div class="timeline-end timeline-box">
                <h2 class="text-xl font-semibold text-indigo-700 mb-2">🕋 رمي جمرة العقبة الكبرى</h2>
                <p class="text-gray-700 leading-relaxed">
                    صباح يوم العيد (10 ذو الحجة)، يرمي الحاج جمرة العقبة الكبرى بسبع حصيات، كل واحدة بالتكبير. ترمز هذه الشعيرة إلى رفض وساوس الشيطان والثبات على الطاعة.
                </p>
            </div>
        </li>

        <li>
            <div class="timeline-start timeline-box">
                <h2 class="text-xl font-semibold text-indigo-700 mb-2">🕋 الحلق أو التقصير</h2>
                <p class="text-gray-700 leading-relaxed">
                    بعد رمي جمرة العقبة، يقوم الحاج بذبح الهدي (للمتمتع والقارن)، ثم يحلق رأسه أو يقصره. الحلق أفضل للرجال، أما النساء فيقصرن شعرهن بقدر أنملة.
                </p>
            </div>
        </li>

        <li>
            <div class="timeline-end timeline-box">
                <h2 class="text-xl font-semibold text-indigo-700 mb-2">🕋 طواف الإفاضة</h2>
                <p class="text-gray-700 leading-relaxed">
                    يعود الحاج إلى مكة لطواف الإفاضة، وهو من أركان الحج. يطوف بالكعبة سبعة أشواط، ثم يسعى إن لم يسعَ بعد طواف القدوم.
                </p>
            </div>
        </li>

        <li>
            <div class="timeline-start timeline-box">
                <h2 class="text-xl font-semibold text-indigo-700 mb-2">🕋 رمي الجمرات أيام التشريق</h2>
                <p class="text-gray-700 leading-relaxed">
                    في أيام 11 و12 و13 من ذي الحجة، يرمي الحاج الجمرات الثلاث: الصغرى، الوسطى، ثم الكبرى، كل واحدة بسبع حصيات بعد الزوال.
                </p>
            </div>
        </li>

        <li>
            <div class="timeline-end timeline-box">
                <h2 class="text-xl font-semibold text-indigo-700 mb-2">🕋 طواف الوداع قبل مغادرة مكة</h2>
                <p class="text-gray-700 leading-relaxed">
                    قبل مغادرة مكة، يؤدي الحاج طواف الوداع، سبعة أشواط حول الكعبة، بدون سعي بعده. هذا الطواف واجب للحجاج غير المقيمين بمكة.
                </p>
            </div>
        </li>
        </ul>
    </div>
</div>
<div class="container m-auto">
    <div class="py-10">
        <!-- تطبيق نسك -->
        <section class="px-6 rounded-lg flex items-center justify-between">
            <div class="w-1/3">
                <h2 class="text-2xl font-bold text-blue-950 mb-4">📱 تطبيق نسك – رفيقك الذكي في رحلة الحج</h2>
                <ul class="list-disc pr-6 space-y-2 text-gray-800">
                  <li>إشعارات فورية بمواعيد المناسك والتنقل</li>
                  <li>خريطة تفاعلية للحرم والمشاعر المقدسة</li>
                  <li>متابعة مباشرة لحالة الحجز والخدمات</li>
                  <li>دعم فني مباشر على مدار الساعة</li>
                  <li>واجهة متعددة اللغات</li>
                </ul>
                <div class="mt-4 flex gap-3">
                  <a href="#" class="bg-emerald-600 btn px-4 text-white py-2 rounded hover:bg-green-700">📥 Google Play</a>
                  <a href="#" class="bg-black-900 text-white btn px-4 py-2 rounded hover:bg-gray-800">📥 App Store</a>
                </div>
            </div>
            <div class="w-2/3">
                <img src="{{ Vite::asset('resources/images/phone-mokup.png') }}" alt="phone-mokup" class="w-full">
            </div>
        </section>
    
        <!-- وسائل النقل -->
        <section class="mt-14">
          <h2 class="text-2xl font-bold text-gray-800 mb-4">🚍 دليل التنقل والمواصلات خلال الحج</h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-4 shadow rounded-lg">
              <h3 class="font-semibold text-lg mb-2">🚄 قطار المشاعر المقدسة</h3>
              <p class="text-sm text-gray-700">وسيلة حديثة، سريعة، وآمنة للتنقل بين المشاعر.</p>
            </div>
            <div class="bg-white p-4 shadow rounded-lg">
              <h3 class="font-semibold text-lg mb-2">🚌 الحافلات المخصصة</h3>
              <p class="text-sm text-gray-700">تعمل ضمن مسارات وخطط مجدولة مسبقًا.</p>
            </div>
            <div class="bg-white p-4 shadow rounded-lg">
              <h3 class="font-semibold text-lg mb-2">🚗 السيارات الصغيرة</h3>
              <p class="text-sm text-gray-700">تُستخدم بتصاريح خاصة لكبار السن وذوي الاحتياجات.</p>
            </div>
          </div>
    
          <div class="mt-6">
            <h4 class="font-semibold text-lg text-gray-800 mb-2">✅ نصائح مهمة:</h4>
            <ul class="list-disc pr-6 text-gray-700 space-y-1">
              <li>📲 احتفظ دائمًا بتصريح الحج الرقمي أو بطاقة الحاج الإلكترونية</li>
              <li>🕐 التزم بالجداول الزمنية للتنقل</li>
              <li>🚧 لا تحاول التنقل خارج المسارات الرسمية</li>
            </ul>
          </div>
        </section>
    </div>
</div>
<x-spacer></x-spacer>
<x-spacer></x-spacer>
<x-footer></x-footer>
</x-guest-layout>