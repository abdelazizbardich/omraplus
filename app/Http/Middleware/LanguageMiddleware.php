<?php

namespace App\Http\Middleware;

use App\Models\UserLanguage;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $mac = exec('getmac');
        if($request->has('lang')){
            UserLanguage::where('mac_address', $mac)->update(['lang' => $request->get('lang')]);
        }
        $language = UserLanguage::where('mac_address', $mac)->first();
        if($language){
            App::setLocale($language->lang);
            App::setFallbackLocale($language->lang);
        }else{
            $language = new UserLanguage();
            $language->mac_address = $mac;
            $language->lang = 'ar';
            $language->save();
            App::setLocale($language->lang);
            App::setFallbackLocale($language->lang);
        }
        return $next($request);
    }
}
