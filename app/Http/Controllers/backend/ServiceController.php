<?php

namespace App\Http\Controllers\backend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Service::all();
        // return view('backend.service.index');
        return view('backend.service.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Service();
        $data->title = $request->title;
        $data->note = $request->note;
        if($request->hasFile('image')){
            $file =  $request->file('image');
            $file_extension = $file->getClientOriginalExtension();
         $random_no = str::random(12);
         $file_name = $random_no.'.'.$file_extension;
         $destination_path = public_path().'/backend/img/service/';
         $request->file('image')->move($destination_path, $file_name);
         
         $data->image = $file_name;
         }

         if($request->hasFile('icon')){
            $file =  $request->file('icon');
            $file_extension = $file->getClientOriginalExtension();
         $random_no = str::random(12);
         $file_name = $random_no.'.'.$file_extension;
         $destination_path = public_path().'/backend/img/service/';
         $request->file('icon')->move($destination_path, $file_name);
         
         $data->icon = $file_name;
         }

        $data->save();
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Service::find($id);
        return view('backend.service.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $data = new Service();
        $data->title = $request->title;
        $data->note = $request->note;
        if($request->hasFile('image')){
            $file =  $request->file('image');
            $file_extension = $file->getClientOriginalExtension();
         $random_no = str::random(12);
         $file_name = $random_no.'.'.$file_extension;
         $destination_path = public_path().'/backend/img/service/';
         $request->file('image')->move($destination_path, $file_name);
         if(File::exists('backend/img/service/'.$data->image)){
            File::delete('backend/img/service/'.$data->image);
          }
         
         $data->image = $file_name;
         }

         if($request->hasFile('icon')){
            $file =  $request->file('icon');
            $file_extension = $file->getClientOriginalExtension();
         $random_no = str::random(12);
         $file_name = $random_no.'.'.$file_extension;
         $destination_path = public_path().'/backend/img/service/';
         $request->file('icon')->move($destination_path, $file_name);
         if(File::exists('backend/img/service/'.$data->icon)){
            File::delete('backend/img/service/'.$data->icon);
          }
         $data->icon = $file_name;
         }

        $data->save();
        return redirect()->route('service.index')->with('success', 'Service Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //Service::find($id)->delete();
        $data = Service::find($id);
        if(File::exists('backend/img/service/'.$data->image)){
            File::delete('backend/img/service/'.$data->image);
          }

        if(File::exists('backend/img/service/'.$data->icon)){
        File::delete('backend/img/service/'.$data->icon);
        }
        $data->delete();
        return redirect()->route('service.index')->with('success', 'Service Deleted Successfully');
    }
}
