<?php

namespace App\Http\Controllers;
use DB;
use App\Page;
use App\Section;
use Session;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $pages = Page::get();
        return view('admin.page.index', compact('pages')); 
    }

    public function create(){
        $sections = Section::all();
        return view('admin.section.create', compact('sections'));
    }

    public function store(Request $request) {

        $request->validate([
            'title' => 'required',
            'url' => 'required',
            'select_section'=> 'required',
        ]);
    
        $page = new Page;
        $page->title=$request->title;
        $page->url=$request->url;
        $page->select_section=$request->select_section;
        $page->save();
        Session::flash('message','Page inserted successfuly!');
        return redirect('pages');
    }
    
    public function edit($page){
        $sections = Section::all();
        $page = Page::where("id", "=", $page)->first();
        return view('admin.page.edit',compact('page', 'sections'));        
    }

    public function update(Request $request ,$id ){
        $request->validate([
        'title' => 'required',
        'url' => 'required'
        ]);
        $page = Page::find($request->id);
        $page->title = $request->title;
        $page->url = $request->url;
        $page->update();
        Session::flash('message', 'Section updated successfuly!');
        return redirect()->back();
    }
           
    public function destroy($page){
        Page::destroy($page);
        return redirect()->back();
    }
}
