<?php

return [

    /*
    |--------------------------------------------------------------------------
    | رسائل التحقق
    |--------------------------------------------------------------------------
    |
    | الأسطر التالية تحتوي على رسائل الخطأ الافتراضية المستخدمة من قبل
    | فئة التحقق. بعض هذه القواعد لها إصدارات متعددة مثل
    | قواعد الحجم. لا تتردد في تعديل كل من هذه الرسائل هنا.
    |
    */

    'accepted' => 'يجب قبول حقل :attribute.',
    'accepted_if' => 'يجب قبول حقل :attribute عندما يكون :other هو :value.',
    'active_url' => 'حقل :attribute يجب أن يكون عنوان URL صالح.',
    'after' => 'حقل :attribute يجب أن يكون تاريخاً بعد :date.',
    'after_or_equal' => 'حقل :attribute يجب أن يكون تاريخاً بعد أو يساوي :date.',
    'alpha' => 'حقل :attribute يجب أن يحتوي على حروف فقط.',
    'alpha_dash' => 'حقل :attribute يجب أن يحتوي فقط على حروف، أرقام، شرطات وشرطات سفلية.',
    'alpha_num' => 'حقل :attribute يجب أن يحتوي على حروف وأرقام فقط.',
    'array' => 'حقل :attribute يجب أن يكون مصفوفة.',
    'ascii' => 'حقل :attribute يجب أن يحتوي فقط على أحرف وأرقام أحادية البايت والرموز.',
    'before' => 'حقل :attribute يجب أن يكون تاريخاً قبل :date.',
    'before_or_equal' => 'حقل :attribute يجب أن يكون تاريخاً قبل أو يساوي :date.',
    'between' => [
        'array' => 'حقل :attribute يجب أن يحتوي على عدد من العناصر بين :min و :max.',
        'file' => 'حقل :attribute يجب أن يكون بين :min و :max كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون بين :min و :max.',
        'string' => 'حقل :attribute يجب أن يكون بين :min و :max حرفاً.',
    ],
    'boolean' => 'حقل :attribute يجب أن يكون صحيح أو خطأ.',
    'can' => 'حقل :attribute يحتوي على قيمة غير مصرح بها.',
    'confirmed' => 'تأكيد حقل :attribute غير متطابق.',
    'contains' => 'حقل :attribute يفتقد قيمة مطلوبة.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'حقل :attribute يجب أن يكون تاريخاً صالحاً.',
    'date_equals' => 'حقل :attribute يجب أن يكون تاريخاً مساوياً لـ :date.',
    'date_format' => 'حقل :attribute يجب أن يطابق الصيغة :format.',
    'decimal' => 'حقل :attribute يجب أن يحتوي على :decimal منازل عشرية.',
    'declined' => 'يجب رفض حقل :attribute.',
    'declined_if' => 'يجب رفض حقل :attribute عندما يكون :other هو :value.',
    'different' => 'حقل :attribute و :other يجب أن يكونا مختلفين.',
    'digits' => 'حقل :attribute يجب أن يكون :digits أرقام.',
    'digits_between' => 'حقل :attribute يجب أن يكون بين :min و :max أرقام.',
    'dimensions' => 'حقل :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'حقل :attribute يحتوي على قيمة مكررة.',
    'doesnt_end_with' => 'حقل :attribute يجب ألا ينتهي بأحد القيم التالية: :values.',
    'doesnt_start_with' => 'حقل :attribute يجب ألا يبدأ بأحد القيم التالية: :values.',
    'email' => 'حقل :attribute يجب أن يكون عنوان بريد إلكتروني صالح.',
    'ends_with' => 'حقل :attribute يجب أن ينتهي بأحد القيم التالية: :values.',
    'enum' => 'القيمة المحددة لـ :attribute غير صالحة.',
    'exists' => 'القيمة المحددة لـ :attribute غير صالحة.',
    'extensions' => 'حقل :attribute يجب أن يحتوي على أحد الامتدادات التالية: :values.',
    'file' => 'حقل :attribute يجب أن يكون ملفاً.',
    'filled' => 'حقل :attribute يجب أن يحتوي على قيمة.',
    'gt' => [
        'array' => 'حقل :attribute يجب أن يحتوي على أكثر من :value عنصر.',
        'file' => 'حقل :attribute يجب أن يكون أكبر من :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أكبر من :value.',
        'string' => 'حقل :attribute يجب أن يكون أكبر من :value حرفاً.',
    ],
    'gte' => [
        'array' => 'حقل :attribute يجب أن يحتوي على :value عنصر أو أكثر.',
        'file' => 'حقل :attribute يجب أن يكون أكبر من أو يساوي :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أكبر من أو يساوي :value.',
        'string' => 'حقل :attribute يجب أن يكون أكبر من أو يساوي :value حرفاً.',
    ],
    'hex_color' => 'حقل :attribute يجب أن يكون لوناً سداسياً صالحاً.',
    'image' => 'حقل :attribute يجب أن يكون صورة.',
    'in' => 'القيمة المحددة لـ :attribute غير صالحة.',
    'in_array' => 'حقل :attribute يجب أن يكون موجوداً في :other.',
    'integer' => 'حقل :attribute يجب أن يكون عدداً صحيحاً.',
    'ip' => 'حقل :attribute يجب أن يكون عنوان IP صالح.',
    'ipv4' => 'حقل :attribute يجب أن يكون عنوان IPv4 صالح.',
    'ipv6' => 'حقل :attribute يجب أن يكون عنوان IPv6 صالح.',
    'json' => 'حقل :attribute يجب أن يكون نص JSON صالح.',
    'list' => 'حقل :attribute يجب أن يكون قائمة.',
    'lowercase' => 'حقل :attribute يجب أن يكون بأحرف صغيرة.',
    'lt' => [
        'array' => 'حقل :attribute يجب أن يحتوي على أقل من :value عنصر.',
        'file' => 'حقل :attribute يجب أن يكون أقل من :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أقل من :value.',
        'string' => 'حقل :attribute يجب أن يكون أقل من :value حرفاً.',
    ],
    'lte' => [
        'array' => 'حقل :attribute يجب ألا يحتوي على أكثر من :value عنصر.',
        'file' => 'حقل :attribute يجب أن يكون أقل من أو يساوي :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أقل من أو يساوي :value.',
        'string' => 'حقل :attribute يجب أن يكون أقل من أو يساوي :value حرفاً.',
    ],
    'mac_address' => 'حقل :attribute يجب أن يكون عنوان MAC صالح.',
    'max' => [
        'array' => 'حقل :attribute يجب ألا يحتوي على أكثر من :max عنصر.',
        'file' => 'حقل :attribute يجب ألا يكون أكبر من :max كيلوبايت.',
        'numeric' => 'حقل :attribute يجب ألا يكون أكبر من :max.',
        'string' => 'حقل :attribute يجب ألا يكون أكبر من :max حرفاً.',
    ],
    'max_digits' => 'حقل :attribute يجب ألا يحتوي على أكثر من :max أرقام.',
    'mimes' => 'حقل :attribute يجب أن يكون ملفاً من النوع: :values.',
    'mimetypes' => 'حقل :attribute يجب أن يكون ملفاً من النوع: :values.',
    'min' => [
        'array' => 'حقل :attribute يجب أن يحتوي على الأقل على :min عنصر.',
        'file' => 'حقل :attribute يجب أن يكون على الأقل :min كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون على الأقل :min.',
        'string' => 'حقل :attribute يجب أن يكون على الأقل :min حرفاً.',
    ],
    'min_digits' => 'حقل :attribute يجب أن يحتوي على الأقل على :min أرقام.',
    'missing' => 'حقل :attribute يجب أن يكون مفقوداً.',
    'missing_if' => 'حقل :attribute يجب أن يكون مفقوداً عندما يكون :other هو :value.',
    'missing_unless' => 'حقل :attribute يجب أن يكون مفقوداً ما لم يكن :other هو :value.',
    'missing_with' => 'حقل :attribute يجب أن يكون مفقوداً عندما يكون :values موجوداً.',
    'missing_with_all' => 'حقل :attribute يجب أن يكون مفقوداً عندما تكون :values موجودة.',
    'multiple_of' => 'حقل :attribute يجب أن يكون مضاعفاً لـ :value.',
    'not_in' => 'القيمة المحددة لـ :attribute غير صالحة.',
    'not_regex' => 'صيغة حقل :attribute غير صالحة.',
    'numeric' => 'حقل :attribute يجب أن يكون رقماً.',
    'password' => [
        'letters' => 'حقل :attribute يجب أن يحتوي على حرف واحد على الأقل.',
        'mixed' => 'حقل :attribute يجب أن يحتوي على حرف كبير واحد على الأقل وحرف صغير واحد.',
        'numbers' => 'حقل :attribute يجب أن يحتوي على رقم واحد على الأقل.',
        'symbols' => 'حقل :attribute يجب أن يحتوي على رمز واحد على الأقل.',
        'uncompromised' => 'القيمة المعطاة لـ :attribute ظهرت في تسريب للبيانات. يرجى اختيار :attribute مختلف.',
    ],
    'present' => 'حقل :attribute يجب أن يكون موجوداً.',
    'present_if' => 'حقل :attribute يجب أن يكون موجوداً عندما يكون :other هو :value.',
    'present_unless' => 'حقل :attribute يجب أن يكون موجوداً ما لم يكن :other هو :value.',
    'present_with' => 'حقل :attribute يجب أن يكون موجوداً عندما يكون :values موجوداً.',
    'present_with_all' => 'حقل :attribute يجب أن يكون موجوداً عندما تكون :values موجودة.',
    'prohibited' => 'حقل :attribute محظور.',
    'prohibited_if' => 'حقل :attribute محظور عندما يكون :other هو :value.',
    'prohibited_unless' => 'حقل :attribute محظور ما لم يكن :other ضمن :values.',
    'prohibits' => 'حقل :attribute يمنع :other من التواجد.',
    'regex' => 'صيغة حقل :attribute غير صالحة.',
    'required' => 'حقل :attribute مطلوب.',
    'required_array_keys' => 'حقل :attribute يجب أن يحتوي على مدخلات لـ: :values.',
    'required_if' => 'حقل :attribute مطلوب عندما يكون :other هو :value.',
    'required_if_accepted' => 'حقل :attribute مطلوب عندما يتم قبول :other.',
    'required_if_declined' => 'حقل :attribute مطلوب عندما يتم رفض :other.',
    'required_unless' => 'حقل :attribute مطلوب ما لم يكن :other ضمن :values.',
    'required_with' => 'حقل :attribute مطلوب عندما يكون :values موجوداً.',
    'required_with_all' => 'حقل :attribute مطلوب عندما تكون :values موجودة.',
    'required_without' => 'حقل :attribute مطلوب عندما يكون :values غير موجود.',
    'required_without_all' => 'حقل :attribute مطلوب عندما لا تكون أي من :values موجودة.',
    'same' => 'حقل :attribute يجب أن يتطابق مع :other.',
    'size' => [
        'array' => 'حقل :attribute يجب أن يحتوي على :size عنصر.',
        'file' => 'حقل :attribute يجب أن يكون :size كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون :size.',
        'string' => 'حقل :attribute يجب أن يكون :size حرفاً.',
    ],
    'starts_with' => 'حقل :attribute يجب أن يبدأ بأحد القيم التالية: :values.',
    'string' => 'حقل :attribute يجب أن يكون نصاً.',
    'timezone' => 'حقل :attribute يجب أن يكون منطقة زمنية صالحة.',
    'unique' => 'قيمة :attribute مُستخدمة من قبل.',
    'uploaded' => 'فشل في تحميل :attribute.',
    'uppercase' => 'حقل :attribute يجب أن يكون بأحرف كبيرة.',
    'url' => 'حقل :attribute يجب أن يكون عنوان URL صالح.',
    'ulid' => 'حقل :attribute يجب أن يكون ULID صالح.',
    'uuid' => 'حقل :attribute يجب أن يكون UUID صالح.',

    /*
    |--------------------------------------------------------------------------
    | رسائل التحقق المخصصة
    |--------------------------------------------------------------------------
    |
    | هنا يمكنك تحديد رسائل تحقق مخصصة للسمات باستخدام
    | الاصطلاح "attribute.rule" لتسمية الأسطر. هذا يجعل من السهل
    | تحديد سطر لغة مخصص معين لقاعدة سمة معينة.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'رسالة-مخصصة',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | سمات التحقق المخصصة
    |--------------------------------------------------------------------------
    |
    | تُستخدم أسطر اللغة التالية لتبديل العناصر النائبة للسمات
    | ببعض الأشياء الأكثر سهولة للقراءة مثل "عنوان البريد الإلكتروني" بدلاً
    | من "email". هذا يساعدنا على جعل رسالتنا أكثر تعبيراً.
    |
    */

    'attributes' => [
        "card_number" => "رقم البطاقة",
        "expiry_date" => "تاريخ الانتهاء",
        "cvc_code" => "رمز CVC",
        "first_name" => "الإسم الشخصي",
        "last_name" => "الإسم العائلي",
        "city" =>   "المدينة",
        "phone" =>  "الهاتف",
        "email" => "البريد الإلكتروني",
    ],

];