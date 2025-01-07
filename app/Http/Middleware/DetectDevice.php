<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Detection\MobileDetect;


class DetectDevice
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $detect = new MobileDetect;
        
        if ($detect->isMobile() && !$detect->isTablet()) {
            $device =  'mobile';
        } elseif ($detect->isTablet()) {
            $device =  'tablet';
        } else {
            $device =  'desktop';
        }

        // Share the device globally for views
        app('view')->addNamespace('device', resource_path("views/$device"));

        // Attach device type to the request
        $request->merge(['device' => $device]);

        return $next($request);
    }
}
