<x-guest-layout>
    <x-header active=""></x-header>
    <x-page-header :title="__('index.Umrah guide')" :breadcrumbs="['Home', 'Umrah guide']" />
    <x-spacer></x-spacer>
    <div class="container m-auto">
        <section class="mb-8">
            <h1 class="text-3xl font-bold mb-4 ">العمرة – دليلك الكامل لأداء العمرة خطوة بخطوة</h1>

            <div class="mb-6">
                <h2 class="text-2xl font-semibold mb-3 ">ما هي العمرة؟</h2>
                <p>العمرة هي عبادة مميزة يقوم بها المسلمون تقربًا إلى الله، وتُعرف بأنها زيارة بيت الله الحرام في مكة
                    المكرمة لأداء شعائر محددة تشمل الإحرام، الطواف، السعي، والحلق أو التقصير. وهي سنة مؤكدة عن النبي
                    محمد ﷺ، ولها فضل عظيم في رفع الدرجات وتكفير الخطايا.</p>
            </div>

            <div class="mb-6">
                <h2 class="text-2xl font-semibold mb-3 ">📌 الفرق بين العمرة والحج</h2>
                <table class="w-full border-collapse border">
                    <tr>
                        <th class="border p-2">البند</th>
                        <th class="border p-2">الحج</th>
                        <th class="border p-2">العمرة</th>
                    </tr>
                    <tr>
                        <td class="border p-2">الحكم</td>
                        <td class="border p-2">فريضة مرة واحدة بالعمر</td>
                        <td class="border p-2">سنة مؤكدة متكررة</td>
                    </tr>
                    <tr>
                        <td class="border p-2">الوقت</td>
                        <td class="border p-2">في وقت محدد (أشهر الحج)</td>
                        <td class="border p-2">في أي وقت من السنة</td>
                    </tr>
                    <tr>
                        <td class="border p-2">المدة الزمنية</td>
                        <td class="border p-2">أطول، من 5 إلى 7 أيام</td>
                        <td class="border p-2">قصيرة، تستغرق من ساعتين إلى يوم</td>
                    </tr>
                    <tr>
                        <td class="border p-2">الشعائر</td>
                        <td class="border p-2">أكثر تفصيلًا وتعقيدًا</td>
                        <td class="border p-2">أبسط وأسهل</td>
                    </tr>
                    <tr>
                        <td class="border p-2">العدد الإجباري</td>
                        <td class="border p-2">مرة واحدة لمن استطاع</td>
                        <td class="border p-2">مستحب أداؤها بقدر الاستطاعة</td>
                    </tr>
                </table>
            </div>

            <div class="mb-6">
                <h2 class="text-2xl font-semibold mb-3 ">📅 وقت العمرة</h2>
                <p>العمرة يمكن أداؤها في أي وقت من العام، وتُعدّ فرصة روحية متجددة للمسلمين، خصوصًا في الأوقات الفاضلة
                    مثل:</p>
                <ul class="list-disc list-inside">
                    <li>شهر رمضان (فضلها يعادل حجة مع النبي ﷺ)</li>
                    <li>شهر رجب</li>
                    <li>بداية العام الهجري لمن يرغب بفتح سنة جديدة بالطاعة</li>
                </ul>
            </div>
            <div class="mb-6">
                <h2 class="text-2xl font-semibold mb-3 ">✅ شروط صحة العمرة</h2>
                <ol class="list-decimal list-inside">
                    <li>الإسلام</li>
                    <li>العقل والتمييز</li>
                    <li>النية والإحرام من الميقات</li>
                    <li>الطهارة وستر العورة</li>
                    <li>القدرة الجسدية والمالية</li>
                    <li>وجود تصريح نظامي (للزوار والمقيمين داخل المملكة)</li>
                </ol>
            </div>
        </section>
        <section class="mb-8">
            <h1 class="text-2xl font-bold ">🛫 خطوات أداء العمرة بالتفصيل</h1>
            <div class="ms-6">
                <!-- Step 1 -->
                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2 ">1. الإحرام من الميقات</h2>
                    <p class="mb-2">الإحرام هو نية الدخول في النسك، ويبدأ من الميقات المحدد حسب بلدك أو موقعك:</p>
                    <ul class="list-disc pr-5 space-y-1 text-gray-700 ms-6">
                        <li><strong>ميقات أهل الشام ومصر:</strong> رابغ (الجُحفة)</li>
                        <li><strong>ميقات أهل الخليج:</strong> يلملم</li>
                        <li><strong>ميقات أهل المدينة:</strong> ذو الحليفة (أبيار علي)</li>
                    </ul>
                    <p class="mt-4 mb-2 font-semibold text-gray-800">ما تفعله في الإحرام:</p>
                    <ul class="list-disc pr-5 space-y-1 text-gray-700 ms-6">
                        <li>الاغتسال والتطيب (للرجال)</li>
                        <li>لبس ملابس الإحرام: إزار ورداء أبيض للرجال – ملابس محتشمة وعادية للنساء</li>
                        <li>صلاة ركعتين سنة الإحرام</li>
                        <li>التلفظ بالنية: "لبيك اللهم عمرة"</li>
                        <li>
                            التلبية المستمرة:<br>
                            <span class="block bg-gray-100 p-2 rounded text-sm mt-1">
                                "لبيك اللهم لبيك، لبيك لا شريك لك لبيك، إن الحمد والنعمة لك والملك، لا شريك لك."
                            </span>
                        </li>
                    </ul>
                </div>
                <!-- Step 2 -->
                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">2. دخول مكة والتوجّه إلى المسجد الحرام</h2>
                    <ul class="list-disc pr-5 space-y-1 text-gray-700 ms-6">
                        <li>يُستحب الدخول إلى المسجد الحرام من باب السلام.</li>
                        <li>عند رؤية الكعبة: تُرفع اليدان ويُقال دعاء رؤية الكعبة (إن وُجد)، مع الدعاء بما يتيسّر.</li>
                    </ul>
                </div>
                <!-- Step 3 -->
                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">3. الطواف حول الكعبة</h2>
                    <ul class="list-disc pr-5 space-y-1 text-gray-700 ms-6">
                        <li>عدد الأشواط: سبعة أشواط، تبدأ من الحجر الأسود وتنتهي عنده.</li>
                        <li>يُسنّ تقبيل الحجر الأسود إن أمكن، أو الإشارة إليه.</li>
                        <li>أثناء الطواف، يُستحب:
                            <ul class="list-[circle] pr-5 mt-2 space-y-1">
                                <li>الدعاء والذكر وقراءة القرآن</li>
                                <li>أن يُرمل الرجال في الأشواط الثلاثة الأولى (المشي السريع)</li>
                                <li>أن يضطبع الرجال (كشف الكتف الأيمن)</li>
                            </ul>
                        </li>
                        <li>بعد الانتهاء:
                            <ul class="list-[circle] pr-5 mt-2 space-y-1">
                                <li>صلاة ركعتين خلف مقام إبراهيم إن أمكن.</li>
                                <li>شرب ماء زمزم والدعاء عنده.</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Step 4 -->
                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">4. السعي بين الصفا والمروة</h2>
                    <ul class="list-disc pr-5 space-y-1 text-gray-700 ms-6">
                        <li>تبدأ من الصفا وتنتهي بـ المروة، سبعة أشواط (الذهاب شوط، والرجوع شوط).</li>
                        <li>
                            يُستحب قراءة قول الله تعالى عند بداية السعي:<br>
                            <span class="block bg-gray-100 p-2 rounded text-sm mt-1">
                                {إِنَّ الصَّفَا وَالْمَرْوَةَ مِن شَعَائِرِ اللَّهِ...}
                            </span> ثم الدعاء بما تشاء.
                        </li>
                        <li>الرجال يُستحب لهم الهرولة بين العلامتين الخضراوين.</li>
                        <li>الدعاء والذكر مستحب طوال السعي.</li>
                    </ul>
                </div>
                <!-- Step 5 -->
                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">5. الحلق أو التقصير</h2>
                    <ul class="list-disc pr-5 space-y-1 text-gray-700 ms-6">
                        <li>للرجال: الحلق أفضل، خاصة إن لم تكن هناك نية لأداء عمرة أخرى قريبًا.</li>
                        <li>للنساء: تقصير قدر أنملة (طرف الإصبع) من كل خصلة.</li>
                        <li>بعد الحلق: يتحلل الحاج من إحرامه، وتتم بذلك العمرة.</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="px-6 rounded-lg flex items-center justify-between">
            <div class="w-1/3">
                <h2 class="text-2xl font-bold text-blue-950 mb-4 ">📱 تطبيق نسك – رفيقك الذكي في رحلة الحج</h2>
                <ul class="list-disc pr-6 space-y-2 text-gray-800">
                    <li>إشعارات فورية بمواعيد المناسك والتنقل</li>
                    <li>خريطة تفاعلية للحرم والمشاعر المقدسة</li>
                    <li>متابعة مباشرة لحالة الحجز والخدمات</li>
                    <li>دعم فني مباشر على مدار الساعة</li>
                    <li>واجهة متعددة اللغات</li>
                </ul>
                <div class="mt-4 flex gap-3">
                    <a href="#" class="bg-emerald-600 btn px-4 text-white py-2 rounded hover:bg-green-700">📥 Google
                        Play</a>
                    <a href="#" class="bg-black-900 text-white btn px-4 py-2 rounded hover:bg-gray-800">📥 App Store</a>
                </div>
            </div>
            <div class="w-2/3">
                <img src="{{ Vite::asset('resources/images/phone-mokup.png') }}" alt="phone-mokup" class="w-full">
            </div>
        </section>
        <section class="mb-8">
            <!-- العنوان -->
            <h1 class="text-2xl font-bold text-blue-700 mb-3">فضل العمرة في رمضان</h1>

            <!-- المقدمة -->
            <p class="text-lg text-gray-800 mb-3">
                العمرة عبادة عظيمة تُكفِّر الذنوب وتزيد في الأجر، وقد بيّن النبي ﷺ فضلها في جميع الأوقات، إلا أن لها
                منزلة خاصة في شهر رمضان المبارك.
            </p>

            <!-- الحديث -->
            <blockquote class="bg-blue-50 border-r-4 border-blue-400 p-4 text-gray-800 italic mb-3">
                عن النبي ﷺ أنه قال:<br>
                <span class="font-semibold">"فإن عمرة في رمضان تعدل حجة"،</span> وفي رواية:<br>
                <span class="font-semibold">"حجة معي"</span><br>
                <span class="text-sm text-gray-600">– متفق عليه –</span>
            </blockquote>

            <!-- الشرح -->
            <p class="text-gray-700 mb-3">
                وهذا الفضل يشمل كافة أيام وليالي رمضان، من أول ليلة من الشهر الكريم حتى غروب شمس آخر يوم منه.
            </p>
            <p class="text-gray-700 mb-3">
                وعلى من نوى العمرة في رمضان أن يلتزم بالموعد المحدد له من خلال التطبيقات الرسمية المعتمدة لتنظيم العمرة،
                مثل <span class="font-semibold text-blue-600">تطبيق "نسك"</span>، لضمان انسيابية الحركة وتنظيم دخول
                الحرم.
            </p>
            <p class="text-gray-700 mb-3">
                كما يُنصح القادم بسيارته الخاصة إلى مكة المكرمة أن يوقفها في <span class="font-semibold">المواقف
                    المعتمدة خارج الحرم</span>، ثم يستخدم وسائل النقل الرسمية للوصول إلى المسجد الحرام بسهولة ويسر.
            </p>

            <!-- تكرار العمرة -->
            <div class="pt-4 border-t border-gray-200 mb-3">
                <h2 class="text-xl font-semibold text-gray-800 mb-2 ">تكرار العمرة في السفرة الواحدة</h2>
                <p class="text-gray-700">
                    العمرة من أعظم القربات إلى الله تعالى، وقد قال النبي ﷺ:
                </p>
                <blockquote class="bg-green-50 border-r-4 border-green-400 p-4 text-gray-800 italic my-3">
                    "العمرة إلى العمرة كفارة لما بينهما"<br>
                    <span class="text-sm text-gray-600">– متفق عليه –</span>
                </blockquote>
                <p class="text-gray-700">
                    كما شُرع للمسلم أن يُكرر أداء العمرة في السنة أكثر من مرة، طلبًا للأجر والمغفرة.
                </p>
                <p class="text-gray-700 mt-2">
                    <span class="font-semibold">لكن ما حكم تكرار العمرة في نفس السفرة؟</span><br>
                    هذا العمل جائز من حيث الأصل، ما دام لا يسبب زحامًا أو مشقة على الآخرين، ولا يُخالف الأنظمة المعتمدة
                    لتنظيم العمرة.
                </p>
                <p class="text-gray-700">
                    ومن أراد تكرار العمرة وهو داخل مكة، فعليه أن يحصل أولًا على تصريح جديد عبر التطبيقات الرسمية مثل
                    <span class="font-semibold text-blue-600">نسك</span>، ثم يخرج إلى أقرب الحل مثل <span
                        class="font-semibold">مسجد السيدة عائشة (التنعيم)</span> ليُحرم منه ويبدأ نسكه من جديد.
                </p>
                <p class="text-gray-700">
                    مع مراعاة أن التيسير على النفس والآخرين، والالتزام بالتنظيم، من مقاصد الشريعة في هذه العبادة
                    العظيمة.
                </p>
            </div>

            <!-- نصائح ذهبية -->
            <div class="pt-4 border-t border-gray-200">
                <h2 class="text-xl font-semibold text-yellow-600 flex items-center mb-2 ">💡 نصائح ذهبية للمعتمرين</h2>
                <ul class="list-disc pr-6 space-y-2 text-gray-700">
                    <li>حضّر نيتك قبل السفر، واجعلها خالصة لله.</li>
                    <li>تجنب الزحام قدر الإمكان، خاصة أثناء الطواف والسعي.</li>
                    <li>احرص على الأذكار والأدعية المأثورة، وادعُ لنفسك ولأهلك وللمسلمين.</li>
                    <li>كن متعاونًا ومهذبًا مع من حولك.</li>
                    <li>التزم بإرشادات الأمن والسلامة داخل الحرم.</li>
                    <li>حافظ على نظافتك الشخصية ونظافة المكان.</li>
                </ul>
            </div>
        </section>
        <section>
            <h2 class="text-2xl font-bold text-purple-700 mb-6 ">❓ الأسئلة الشائعة</h2>

            <!-- سؤال 1 -->
            <div class="mb-4">
                <h3 class="font-semibold text-gray-800">هل العمرة واجبة؟</h3>
                <p class="text-gray-700 mt-1">ليست واجبة، لكنها سنة مؤكدة عن الرسول ﷺ.</p>
            </div>

            <!-- سؤال 2 -->
            <div class="mb-4">
                <h3 class="font-semibold text-gray-800">هل يمكن للمرأة العمرة دون محرم؟</h3>
                <p class="text-gray-700 mt-1">
                    نعم، وفق الشروط المعمول بها حاليًا، ومع توفر الحجز الرسمي ضمن مجموعة موثوقة.
                </p>
            </div>

            <!-- سؤال 3 -->
            <div class="mb-4">
                <h3 class="font-semibold text-gray-800">ما الفرق بين العمرة المفردة وعمرة التمتع؟</h3>
                <ul class="list-disc pr-5 text-gray-700 mt-1 space-y-1">
                    <li><span class="font-medium">العمرة المفردة:</span> تُؤدى مستقلة في أي وقت من السنة.</li>
                    <li><span class="font-medium">عمرة التمتع:</span> تكون ضمن مناسك الحج (للمتمتع).</li>
                </ul>
            </div>

            <!-- سؤال 4 -->
            <div>
                <h3 class="font-semibold text-gray-800">كم مرة يمكن أداء العمرة؟</h3>
                <p class="text-gray-700 mt-1">
                    يجوز تكرارها، لكن يُستحب عدم الإكثار منها في فترة قصيرة، ويُشترط الإحرام الجديد لكل عمرة.
                </p>
            </div>
        </section>
    </div>
    <x-spacer></x-spacer>
    <x-spacer></x-spacer>
    <x-footer></x-footer>
</x-guest-layout>