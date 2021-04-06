<?php

namespace App\Http\Controllers;
use App\Section;
use DB;
use Illuminate\Http\Request;
use Session;
class SectionController extends Controller
{
    public function index(){
        $sections = Section::get();
        return view('admin.section.index', compact('sections')); 
    }
    public function create(){
       return view('admin.section.create');
    }
    public function store(Request $request) {
    $request->validate([
        'title' => 'required',
        'subtitle' => 'required',
        'description'=> 'required',
        'image_upload' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $sections = new Section;
    $sections->title=$request->title;
    $sections->subtitle=$request->subtitle;
    $sections->description=$request->description;
    if($request->file('image_upload')){
        $profile = $request->file('image_upload');
        $file_name = time() . '.' . $profile->getClientOriginalExtension();
        $path = public_path('uploads/section_image');
        $profile->move($path, $file_name);
        $sections->image_upload = $file_name;
      };
      
    $sections->save();
    Session::flash('message','Section inserted successfuly!');
    return redirect('sections');
    }
   
    public function edit($section){
        $sections = Section::where("id", "=", $section)->first();
        return view('admin.section.edit',compact('sections'));

    }
    public function update(Request $request ,$id ){
        $request->validate([
        'title' => 'required',
        'subtitle' => 'required',
        'description'=> 'required',
        'image_upload' => 'required',
        ]);
       $sections = Section::find($request->id);
       $sections->title = $request->input('title');
       $sections->subtitle = $request->input('subtitle');
       $sections->description= $request->input('description');
       if($request->file('image_upload')){
        $profile = $request->file('image_upload');
        $file_name = time() . '.' . $profile->getClientOriginalExtension();
        $path = public_path('uploads/section_image');
        $profile->move($path, $file_name);
        $sections->image_upload = $file_name;
       };
       $sections->save();
       Session::flash('message', 'Section updated successfuly!');
       return redirect()->back();
    }
   
    public function destroy($section){
        Section::destroy($section);
        return redirect('sections');
    }
}


