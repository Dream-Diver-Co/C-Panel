<?php

namespace App\Http\Controllers\frontend;

use App\Models\Page;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\backend\Setting;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::findOrFail(1);
        $slider = Slider::all();
        return view('frontend.index', compact('setting', 'slider'));
    }

    public function aboutUs(){
        // $data = Page::where('id', $id)->first();
        // return view('frontend.page.about.index', compact('data'));
        return view('frontend.page.about.index');
    }
    
     public function TermsCondition(){
        return view('frontend.page.terms-condition.index');
    }

    public function contact(){
        // $data = Page::where('id', $id)->first();
        return view('frontend.page.contact.index');
    }
    public function service(){
        // $data = Page::where('id', $id)->first();
        return view('frontend.page.service.index');
    }

    public function portfolio(){
        // $data = Page::where('id', $id)->first();
        return view('frontend.page.portfolio.index');
    }
    
    public function pos(){
        // $data = Page::where('id', $id)->first();
        return view('frontend.page.portfilio-details.pos');
    }
    
    public function aeon(){
        // $data = Page::where('id', $id)->first();
        return view('frontend.page.portfilio-details.aeon');
    }
    
    public function misi(){
        // $data = Page::where('id', $id)->first();
        return view('frontend.page.portfilio-details.misi');
    }

    public function shobKhobor(){
        // $data = Page::where('id', $id)->first();
        return view('frontend.page.portfilio-details.shobKhobor');
    }
    public function StayConnected(){
        // $data = Page::where('id', $id)->first();
        return view('frontend.page.portfilio-details.StayConnected');
    }
    public function deWas(){
        // $data = Page::where('id', $id)->first();
        return view('frontend.page.portfilio-details.deWas');
    }
    public function bookExchanger(){
        // $data = Page::where('id', $id)->first();
        return view('frontend.page.portfilio-details.bookExchanger');
    }
    public function deShopper(){
        // $data = Page::where('id', $id)->first();
        return view('frontend.page.portfilio-details.deShopper');
    }

    public function softwareDevelopment(){
        return view('frontend.page.service-details.softwareDevelopment');
    }
    public function mobileAppDevelopment(){
        return view('frontend.page.service-details.mobileAppDevelopment');
    }
    public function softwareServices(){
        return view('frontend.page.service-details.softwareServices');
    }
    public function webDesignDevelopment(){
        return view('frontend.page.service-details.webDesignDevelopment');
    }
    public function searchEngineOptimization(){
        return view('frontend.page.service-details.searchEngineOptimization');
    }
    public function digitalMarketing(){
        return view('frontend.page.service-details.digitalMarketing');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
