<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;
use App\BusinessSetting;

class BusinessSettingsController extends Controller
{
    public function activation(Request $request)
    {
    	return view('business_settings.activation');
    }

    public function social_login(Request $request)
    {
        return view('business_settings.social_login');
    }

    public function smtp_settings(Request $request)
    {
        return view('business_settings.smtp_settings');
    }

    public function payment_method(Request $request)
    {
        return view('business_settings.payment_method');
    }

    public function payment_method_update(Request $request)
    {
        foreach ($request->types as $key => $type) {
                $this->overWriteEnvFile($type, $request[$type]);
        }

        $business_settings = BusinessSetting::where('type', $request->payment_method.'_sandbox')->first();
        if ($request->has($request->payment_method.'_sandbox')) {
            $business_settings->value = 1;
            $business_settings->save();
        }
        else{
            $business_settings->value = 0;
            $business_settings->save();
        }

        flash("Settings updated successfully")->success();
        return back();
    }

    public function env_key_update(Request $request)
    {
        foreach ($request->types as $key => $type) {
                $this->overWriteEnvFile($type, $request[$type]);
        }

        flash("Settings updated successfully")->success();
        return back();
    }

    public function overWriteEnvFile($type, $val)
    {
        $path = base_path('.env');
        if (file_exists($path)) {
            $val = '"'.trim($val).'"';
            file_put_contents($path, str_replace(
                $type.'="'.env($type).'"', $type.'='.$val, file_get_contents($path)
            ));
        }
    }

    public function seller_verification_form(Request $request)
    {
    	return view('business_settings.seller_verification_form');
    }

    public function seller_verification_form_update(Request $request)
    {
        $form = array();
        $select_types = ['select', 'multi_select', 'radio'];
        $j = 0;
        for ($i=0; $i < count($request->type); $i++) {
            $item['type'] = $request->type[$i];
            $item['label'] = $request->label[$i];
            if(in_array($request->type[$i], $select_types)){
                $item['options'] = json_encode($request['options_'.$request->option[$j]]);
                $j++;
            }
            array_push($form, $item);
        }
        $business_settings = BusinessSetting::where('type', 'verification_form')->first();
        $business_settings->value = json_encode($form);
        if($business_settings->save()){
            flash("Verification form updated successfully")->success();
            return back();
        }
    }

    public function update(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $business_settings = BusinessSetting::where('type', $type)->first();
            if($business_settings!=null){
                $business_settings->value = $request[$type];
                $business_settings->save();
            }
            else{
                $business_settings = new BusinessSetting;
                $business_settings->type = $type;
                $business_settings->value = $request[$type];
                $business_settings->save();
            }
        }
        flash("Settings updated successfully")->success();
        return back();
    }

    public function updateActivationSettings(Request $request)
    {
        $business_settings = BusinessSetting::where('type', $request->type)->first();
        if($business_settings!=null){
            $business_settings->value = $request->value;
            $business_settings->save();
        }
        else{
            $business_settings = new BusinessSetting;
            $business_settings->type = $request->type;
            $business_settings->value = $request->value;
            $business_settings->save();
        }
        return '1';
    }

    public function vendor($type)
    {
        $business_settings = BusinessSetting::where('type', $type)->first();
        return view('business_settings.vendor_commission', compact('business_settings'));
    }

    public function vendor_commission_update(Request $request){
        $business_settings = BusinessSetting::where('type', $request->type)->first();
        $business_settings->type = $request->type;
        $business_settings->value = $request->value;
        $business_settings->save();

        flash('Seller Commission updated successfully');
        return back();
    }
}
