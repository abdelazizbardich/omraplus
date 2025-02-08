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