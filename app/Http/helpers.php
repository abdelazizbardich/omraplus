<?php

function moment(mixed $date = null){
    $m = new \Moment\Moment($date);
    return $m;
}

function momentGetDiff($date1,$date2, $format = 'days'){
    $m = new \Moment\Moment($date1);
    $diff = $m->from($date2);

    switch ($format) {
        case 'days':
            return $diff->getDays();
        break;
        case 'hours':
            return $diff->getHours();
        break;
        case 'minutes':
            return $diff->getMinutes();
        break;
        case 'seconds':
            return $diff->getSeconds();
        break;
        case 'months':
            return $diff->getMonths();
        break;
        case 'years':
            return $diff->getYears();
        break;
        default:
            return $diff;
        break;
    }

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

function getLanguageDirection($lang = null){
    if(!$lang){
        $lang = app()->getLocale();
    }
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

function getLocaleSufix(){
    return '_'.app()->getLocale();
}

function getRoles(){
    return [
        'admin',
        'user',
        'content_manager',
        'sales_manager'
    ];
}

function getFakeAvatar($name){
    $url = 'https://ui-avatars.com/api/?name='.$name.'&size=256';
    $contents = file_get_contents($url);
    $name = substr($url, strrpos($url, '/') + 1);
    return (object) [
        'url' => $url,
        'name' => $name,
        'content' => $contents
    ];
}

function getStatusBg($status){
    switch ($status) {
        case 'pending':
            return 'bg-yellow-500';
        case 'approved':
            return 'bg-emerald-500';
        case 'rejected':
            return 'bg-red-600';
        default:
            return 'bg-gray-200';
    }
}


/**
 * Find the path to a localized Markdown resource.
 *
 * @param  string  $name
 * @return string|null
 */
function localizedView($name)
{
    // $localName = preg_replace('#(\.blade.php)$#i', '.'.app()->getLocale().'$1', $name);
    $localName = $name.'-'.app()->getLocale();
    return 'localized.'.$localName;
}

function getExcerptFromContent($content){
    // 1. Remove HTML tags
    $text = strip_tags($content);

    // 2. Decode HTML entities
    $text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');

    // 3. Normalize whitespace (replace multiple spaces/newlines with a single space)
    $text = preg_replace('/\s+/', ' ', $text);

    // 4. Trim and split into words
    $words = explode(' ', trim($text));

    // 5. Take the first 150 words
    $firstWords = array_slice($words, 0, 150);

    // 6. Return them as a string
    return implode(' ', $firstWords) . (count($words) > 150 ? '...' : '');
}

function directionLeft(){
    return getLanguageDirection() == 'rtl' ? 'left' : 'right';
}