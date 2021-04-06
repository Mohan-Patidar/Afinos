<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recurrance;
use Session;
use App\Package;

class RecurrencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recurrances = Recurrance::all();
        return view('admin.recurrances.index', compact('recurrances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.recurrances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'frequency' => 'required'
        ]);

       $plans = new Recurrance;
       $plans->name=$request->name;
       $plans->frequency = $request->frequency;
       $plans->save();
       Session::flash('message', 'Recurrance inserted successfuly!');
       return redirect('recurrances');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($recurrance)
    {
        $plans = Recurrance::where("id", "=", $recurrance)->first();
        return view('admin.recurrances.edit',compact('plans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $recurrance)
    {
        $request->validate([
            'name' => 'required',
            'frequency' => 'required'
        ]);
        $plans = Recurrance::find($request->id);
        $plans->name = $request->input('name');
        $plans->frequency = $request->input('frequency');
        $plans->save();
        Session::flash('message', 'Recurrance updated successfuly!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($recurrance)
    {
        $package = Package::where("recurrance_id", "=", $recurrance)->first();
        if(!$package) {
            Recurrance::destroy($recurrance);
            Session::flash('message', 'Recurrance deleted successfuly!');    
        } else {
            Session::flash('error', "Recurrance can't be deleted as it is already in use with packages!");
        }
        return redirect('recurrances');
    }
}
