<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Setting; 
use Illuminate\Support\Str;


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$settings = Setting::all();
        //$settings = Setting::first();
        //$settings = Setting::find(1)->first();
        $setting = Setting::whereId(1)->first();
        return view('backend.setting.index', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $setting = Setting::findOrFail(1);
        //$setting->update($request->all());
        $setting->site_name = $request->site_name;
        $setting->title_name = $request->title_name;
        $setting->email = $request->email;
        $setting->mobile = $request->mobile;
        $setting->phone = $request->phone;
        $setting->address = $request->address;
        $setting->facebook = $request->facebook;
        $setting->twitter = $request->twitter;
        $setting->youtube = $request->youtube;
        $setting->instagram = $request->instagram;
        $setting->linkedin = $request->linkedin;
        if($request->hasFile('favicon')){
            $file =  $request->file('favicon');
            $file_extension = $file->getClientOriginalExtension();
         $random_no = str::random(12);
         $file_name = $random_no.'.'.$file_extension;
         $destination_path = public_path().'/backend/img/logo/';
         $request->file('favicon')->move($destination_path, $file_name);
         
         $setting->favicon = $file_name;
         }
        if($request->hasFile('header_logo')){
            $file =  $request->file('header_logo');
            $file_extension = $file->getClientOriginalExtension();
         $random_no = str::random(12);
         $file_name = $random_no.'.'.$file_extension;
         $destination_path = public_path().'/backend/img/logo/';
         $request->file('header_logo')->move($destination_path, $file_name);
         
         $setting->header_logo = $file_name;
         }
        if($request->hasFile('footer_logo')){
            $file =  $request->file('footer_logo');
            $file_extension = $file->getClientOriginalExtension();
         $random_no = str::random(12);
         $file_name = $random_no.'.'.$file_extension;
         $destination_path = public_path().'/backend/img/logo/';
         $request->file('footer_logo')->move($destination_path, $file_name);
         
         $setting->footer_logo = $file_name;
         }

         

        $setting->save();
        
        return redirect()->route('setting.index');
        //return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
