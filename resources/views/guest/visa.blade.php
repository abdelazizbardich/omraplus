<x-guest-layout>
<x-header active=""></x-header>
<x-page-header :title="__('index.Request e-visa')" :breadcrumbs="['Home', 'Request e-visa']" />
  <section class="container mx-auto px-4 py-3 mt-8 mb-4">
    <div class="flex justify-between items-center">
        <h2 class="text-lg font-bold">وكالة أسفار للحج والعمرة في المغرب</h2>
        <p class="text-base leading-relaxed">وكالة أسفار للحج والعمرة في المغرب</p>
    </div>
  </section>
  <section class="container mx-auto px-4 py-3 mt-8 mb-4">
    <div class="flex gap-4">
      <div class="w-1/3 border-2 rounded-lg bg-gray-50 p-3">
        <span class="font-bold leading-relaxed text-lg">قريبين منك… قدّم طلب تأشيرتك في مكاتب OmraPlus</span>
        <p class="leading-relaxed text-lg">مع OmraPlus، أصبح التقدّم بطلب التأشيرة الإلكترونية للمملكة العربية السعودية أسرع، أوضح، وأكثر أمانًا. نحن نوفّر لك منصة موثوقة وخدمة احترافية تضمن تجربة خالية من التعقيد، من أول خطوة حتى استلام التأشيرة.</p>
        <p class="leading-relaxed text-lg">نحن نضع راحتك في المقام الأول، ونعمل على تزويدك بأحدث المعلومات الرسمية حول أنواع التأشيرات، الشروط، الرسوم، والمتطلبات الخاصة بكل جنسية، مع متابعة دقيقة لطلبك حتى صدور التأشيرة.</p>
      </div>
      <div class="w-1/3 grid grid-cols-2 grid-rows-2 gap-2">
        @for ($i = 0; $i < 4; $i++)
            <div class="w-full border rounded-xl p-4">
                <img src="{{ Vite::asset('resources/images/about-us/badge.png') }}" alt="خبرة ميدانية واسعة" class="ms-auto d-block rounded-3xl w-3/12 h-auto object-cover">
                <div class="mt-4 text-start">
                    <span class="text-sm font-semibold">خبرة ميدانية واسعة</span>
                    <p class="text-xs">سنوات من الخبرة في تنظيم رحلات العمرة والحج نجعلنا نعرف كل التفاصيل المغربة التي تضمن</p>
                </div>
            </div>
        @endfor
      </div>
      <div class="w-1/3 border-2 rounded-lg bg-black-40 text-w p-3">
        <span class="font-bold leading-relaxed text-lg">قريبين منك… قدّم طلب تأشيرتك في مكاتب OmraPlus</span>
        <p class="leading-relaxed text-lg">مع OmraPlus، أصبح التقدّم بطلب التأشيرة الإلكترونية للمملكة العربية السعودية أسرع، أوضح، وأكثر أمانًا. نحن نوفّر لك منصة موثوقة وخدمة احترافية تضمن تجربة خالية من التعقيد، من أول خطوة حتى استلام التأشيرة.</p>
        <p class="leading-relaxed text-lg">نحن نضع راحتك في المقام الأول، ونعمل على تزويدك بأحدث المعلومات الرسمية حول أنواع التأشيرات، الشروط، الرسوم، والمتطلبات الخاصة بكل جنسية، مع متابعة دقيقة لطلبك حتى صدور التأشيرة.</p>
      </div>
    </div>  
  </section>
  <section class="container mx-auto px-4 py-3 mt-8 mb-4">
    <div class="mb-8">
        <x-title 
        title="ابدأ طلب تأشيرتك الآن"
        subtitle="قدّم طلب تأشيرتك السعودية عبر OmraPlus بسهولة، أمان، وخدمة سريعة في أقل من 5 دقائق." 
        ></x-title>
    </div>
    <div class="flex gap-12">
      <div class="w-2/6 p-4 rounded-lg bg-gray-50 border-2 text-3xl py-8 leading-relaxed">
        قدّم طلب تأشيرتك السعودية عبر
        <strong>OmraPlus</strong> 
        بسهولة، أمان، وخدمة سريعة في أقل من <strong>5</strong> دقائق.
        <a href="#" class="font-bold block mt-3">ابدأ إجراءاتك الآن</a>
      </div>
      <div class="w-4/6 flex gap-4">
        <div class="w-1/2 border-2 bg-gray-50 overflow-hidden rounded-lg">
          <img src="{{ Vite::asset('resources/images/visa/morocco-flag.png') }}" alt="">
          <div class="p-4">
            <span class="text-xl font-bold">المغاربة الحاصلون على فيزا شنغن أو الولايات المتحدة أو المملكة المتحدة</span>
            <p class="text-sm">احصل على التأشيرة الإلكترونية السياحية للسعودية بسهولة وسرعة، بصلاحية طويلة وإقامة مرنة، دون إجراءات معقدة.</p>
            <ul class="p-0 text-sm">
              <li>- إقامة تصل إلى 90 يومًا</li>
              <li>- صلاحية التأشيرة: سنة كاملة</li>
              <li>- تأشيرة إلكترونية للعمرة</li>
            </ul>
          </div>
          <a class="bg-yellow-500 w-full p-4 text-center block font-bold" href="#">قدّم طلبك الآن</a>
        </div>
        <div class="w-1/2 border-2 bg-gray-50 overflow-hidden rounded-lg">
          <img src="{{ Vite::asset('resources/images/visa/morocco-flag.png') }}" alt="">
          <div class="p-4">
            <span class="text-xl font-bold">المغاربة الحاصلون على فيزا شنغن أو الولايات المتحدة أو المملكة المتحدة</span>
            <p class="text-sm">احصل على التأشيرة الإلكترونية السياحية للسعودية بسهولة وسرعة، بصلاحية طويلة وإقامة مرنة، دون إجراءات معقدة.</p>
            <ul class="p-0 text-sm">
              <li>- إقامة تصل إلى 90 يومًا</li>
              <li>- صلاحية التأشيرة: سنة كاملة</li>
              <li>- تأشيرة إلكترونية للعمرة</li>
            </ul>
          </div>
          <a class="bg-yellow-500 w-full p-4 text-center block font-bold" href="#">قدّم طلبك الآن</a>
        </div>
      </div>
    </div>
  </section>
  <x-spacer></x-spacer>
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
  <x-footer></x-footer>
</x-guest-layout>