<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use File;
use App\Language;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
    	$request->session()->put('locale', $request->locale);
    	flash(__('Language changed to ').$request->locale)->success();
    }

    public function index(Request $request)
    {
        $languages = Language::all();
        return view('business_settings.languages.index', compact('languages'));
    }

    public function create(Request $request)
    {
        return view('business_settings.languages.create');
    }

    public function store(Request $request)
    {
        $language = new Language;
        $language->name = $request->name;
        $language->code = $request->code;
        if($language->save()){
            flash(__('Language has been inserted successfully'))->success();
            return redirect()->route('languages.index');
        }
        else{
            flash(__('Something went wrong'))->danger();
            return back();
        }
    }

    public function show($id)
    {
        $language = Language::findOrFail($id);
        return view('business_settings.languages.language_view', compact('language'));
    }

    public function key_value_store(Request $request)
    {
        $language = Language::findOrFail($request->id);
        saveJSONFile($language->code, $request->key);
        flash(__('Key-Value updated  for ').$language->name)->success();
        return back();
    }
}
