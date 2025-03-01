<?php

function moment(mixed $date = null){
    $m = new \Moment\Moment($date);
    return $m;
}

function whatsappLink(string $type = null,$data = null){
    $phone = config('app.whtasppNumber');
    $url = null;
    switch ($type) {
        case 'fast_booking':
            $url = "https://api.whatsapp.com/send?phone=" . $phone . "&text=" . __("I would like to book this flight") . "\n" . urlencode($data);
        break;
        default:
            $url = "https://api.whatsapp.com/send?phone=" . $phone;
        break;
    }
    return $url;
}

function money($amount){
    return number_format($amount, 2, '.', ',');
}

function getDiscountPrice($price,$discount,$type){
    if($type == 'percentage'){
        $discount = ($price * $discount) / 100;
    }
    return $price - $discount;
}

function getLanguageDirection(){
    $lang = app()->getLocale();
    switch ($lang) {
        // Arabic variations
        case 'ar':
        case 'ar_AE':  // UAE
        case 'ar_BH':  // Bahrain
        case 'ar_DZ':  // Algeria
        case 'ar_EG':  // Egypt
        case 'ar_IQ':  // Iraq
        case 'ar_JO':  // Jordan
        case 'ar_KW':  // Kuwait
        case 'ar_LB':  // Lebanon
        case 'ar_LY':  // Libya
        case 'ar_MA':  // Morocco
        case 'ar_OM':  // Oman
        case 'ar_QA':  // Qatar
        case 'ar_SA':  // Saudi Arabia
        case 'ar_SD':  // Sudan
        case 'ar_SY':  // Syria
        case 'ar_TN':  // Tunisia
        case 'ar_YE':  // Yemen
            return 'rtl';
    
        // Hebrew variations
        case 'he':
        case 'he_IL':
        case 'iw':     // Old code for Hebrew
        case 'iw_IL':
            return 'rtl';
    
        // Persian variations
        case 'fa':
        case 'fa_IR':  // Iran
        case 'fa_AF':  // Afghanistan
            return 'rtl';
    
        // Urdu variations
        case 'ur':
        case 'ur_PK':  // Pakistan
        case 'ur_IN':  // India
            return 'rtl';
    
        // Kurdish (Sorani) variations
        case 'ckb':
        case 'ckb_IQ': // Iraq
        case 'ckb_IR': // Iran
            return 'rtl';
    
        // Syriac/Aramaic
        case 'syr':
        case 'syr_SY':
            return 'rtl';
    
        // N'Ko
        case 'nqo':
            return 'rtl';
    
        // Mandaic
        case 'mid':
            return 'rtl';
    
        // Samaritan
        case 'smp':
            return 'rtl';
    
        // Azeri in Arabic script
        case 'az_Arab':
            return 'rtl';
    
        // Default for all other languages
        default:
            return 'ltr';
    }
}

function getRoles(){
    return [
        'admin',
        'user',
        'content_manager',
        'sales_manager'
    ];
}