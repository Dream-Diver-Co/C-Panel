<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Slider;
use File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Slider::all();
        return view('backend.slider.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Slider();
        $data->heading = $request->heading;
        $data->small_text = $request->small_text;
        $data->button_text = $request->button_text;
        if($request->hasFile('image')){
            $file =  $request->file('image');
            $file_extension = $file->getClientOriginalExtension();
         $random_no = str::random(12);
         $file_name = $random_no.'.'.$file_extension;
         $destination_path = public_path().'/backend/img/slider/';
         $request->file('image')->move($destination_path, $file_name);
         
         $data->image = $file_name;
         }

        $data->save();
        return redirect()->route('slider.index');

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
        $data = Slider::find($id);
        return view('backend.slider.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Slider::find($id);
        $data->heading = $request->heading;
        $data->small_text = $request->small_text;
        $data->button_text = $request->button_text;
        if($request->hasFile('image')){
            $file =  $request->file('image');
            $file_extension = $file->getClientOriginalExtension();
         $random_no = str::random(12);
         $file_name = $random_no.'.'.$file_extension;
         $destination_path = public_path().'/backend/img/slider/';
         $request->file('image')->move($destination_path, $file_name);
         if(File::exists('backend/img/slider/'.$data->image)){
            File::delete('backend/img/slider/'.$data->image);
          }
         
         $data->image = $file_name;
         }
         $data->save();
         return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Slider::find($id)->delete();
        $data = Slider::find($id);
        if(File::exists('backend/img/slider/'.$data->image)){
            File::delete('backend/img/slider/'.$data->image);
          }
        $data->delete();
        return redirect()->route('slider.index');
    }
}
