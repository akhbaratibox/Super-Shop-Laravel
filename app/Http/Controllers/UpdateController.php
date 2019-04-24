<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use URL;
use DB;
use Artisan;
use Schema;

class UpdateController extends Controller
{
    public function step0() {
        return view('update.step0');
    }

    public function step1() {
        $sql_path = base_path('shop_update.sql');
        if(!Schema::hasTable('wallets')){
            DB::unprepared(file_get_contents($sql_path));
        }
        return redirect('step2');
    }

    public function step2() {
        Artisan::call('view:clear');

        $previousRouteServiceProvier = base_path('app/Providers/RouteServiceProvider.php');
        $newRouteServiceProvier      = base_path('app/Providers/RouteServiceProvider.txt');
        copy($newRouteServiceProvier, $previousRouteServiceProvier);

        return view('update.done');
    }
}
