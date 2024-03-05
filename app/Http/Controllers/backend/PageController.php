<?php

namespace App\Http\Controllers\backend;

use App\Models\Page;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function page(){
        $data = Page::all();
        return view('backend.page.index', compact('data'));

    }
    public function create(){
        return view('backend.page.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id){
        $data = Page::find($id);
        return view('backend.page.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $date = array();
        $date['title'] = $request->title;
        $date['type'] = $request->type;
        $date['description'] = $request->description;
       // Page::find($id)->update($date);
        DB::table('pages')->where('id', $id)->update($date);
        return redirect()->route('page.index')->with('success', 'Page Updated Successfully');
    }
     
   
}
