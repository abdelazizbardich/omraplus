<x-guest-layout>
<x-header active=""></x-header>
<x-page-header :title="__('index.About us')"></x-page-header>

<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h2 class="text-2xl font-bold mb-4">{{ __('index.'.config('app.name')) }}</h2>
        <p class="text-lg leading-relaxed">
            عمرة بلس هي وكالة متخصصة في تنظيم رحلات الحج والعمرة، تجمع بين الخبرة العالية والخدمة الممتازة لتوفير تجربة روحانية مميزة ومريحة للمعتمرين والحجاج. نحرص في عمرة بلس على أن تكون رحلتك إلى بيت الله الحرام ميسّرة، آمنة، ومليئة بالطمأنينة والسكينة، من لحظة الحجز وحتى العودة. نعمل بشغف على خدمة ضيوف الرحمن بأعلى مستويات الاحترافية والرعاية.
        </p>
    </div>

    <div>
        <h3 class="text-xl font-bold mb-4">لماذا تختار عمرة بلس؟ إليك ٩ أسباب مميزة:</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="p-4 bg-white rounded-lg shadow">
                <h4 class="font-bold mb-2">خبرة ميدانية واسعة</h4>
                <p>سنوات من الخبرة في تنظيم رحلات العمرة والحج تجعلنا نعرف كل التفاصيل الصغيرة التي تهمك.</p>
            </div>
            <div class="p-4 bg-white rounded-lg shadow">
                <h4 class="font-bold mb-2">برامج متنوعة ومخصصة</h4>
                <p>نقدم باقات مرنة تلائم جميع الميزانيات والفئات، سواءً كانت اقتصادية أو فاخرة.</p>
            </div>
            <div class="p-4 bg-white rounded-lg shadow">
                <h4 class="font-bold mb-2">خدمة عملاء 24/7</h4>
                <p>فريق دعم جاهز لخدمتك في أي وقت، قبل وأثناء وبعد الرحلة.</p>
            </div>
            <div class="p-4 bg-white rounded-lg shadow">
                <h4 class="font-bold mb-2">مرشدين ذوي كفاءة</h4>
                <p>نخبة من المرشدين المؤهلين دينيًا وثقافيًا لمرافقتك وتسهيل جميع الشعائر.</p>
            </div>
            <div class="p-4 bg-white rounded-lg shadow">
                <h4 class="font-bold mb-2">تنقلات مريحة وآمنة</h4>
                <p>وسائل نقل حديثة ومكيفة لتنقلاتك داخل مكة والمدينة.</p>
            </div>
            <div class="p-4 bg-white rounded-lg shadow">
                <h4 class="font-bold mb-2">إقامات مختارة بعناية</h4>
                <p>فنادق قريبة من الحرم توفر راحة وسهولة في الوصول لأداء المناسك.</p>
            </div>
            <div class="p-4 bg-white rounded-lg shadow">
                <h4 class="font-bold mb-2">خدمة إلكترونية متطورة</h4>
                <p>يمكنك الحجز وتتبع رحلتك بسهولة عبر منصتنا الرقمية.</p>
            </div>
        </div>
    </div>
</div>

    
<x-footer></x-footer>
</x-guest-layout>