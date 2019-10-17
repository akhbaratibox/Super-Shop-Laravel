<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Session;
use Config;
use App\BusinessSetting;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Session::has('locale')){
            $locale = Session::get('locale');
        }
        if(BusinessSetting::where('type', 'default_language')->first()->value != null && \App\Language::find(BusinessSetting::where('type', 'default_language')->first()->value) != null){
            $locale = \App\Language::find(BusinessSetting::where('type', 'default_language')->first()->value)->code;
        }
        else{
            $locale = 'en';
        }

        App::setLocale($locale);
        $request->session()->put('locale', $locale);

        return $next($request);
    }
}
