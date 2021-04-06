<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addon;
use Session;
use App\PackageAddonPrice;
use Auth;

class AddonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addons = Addon::all();
        return view('admin.addons.index', compact('addons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addon = new Addon;
        $addon->name = $request->name;
        $addon->save();
        Session::flash('message', 'Addons inserted successfuly!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($addon)
    {
        return redirect('addons');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($addon)
    {
        $addons = Addon::where("id", "=", $addon)->first();
        return view("admin.addons.edit", compact('addons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $addon)
    {
        $request->validate([
            'name' => 'required',
        ]);

       $plans = Addon::find($request->id);
       $plans->name=$request->name;
       $plans->save();
       Session::flash('message', 'Addon updated successfuly!');
       return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($addon)
    {
        $addonPackage = PackageAddonPrice::where("addon_id", "=", $addon)->first();
        if (!$addonPackage) {
            Addon::destroy($addon);
            Session::flash('message', 'Addon deleted successfuly!'); 
        } else {
            Session::flash('error', "Addon can't be deleted as it is already in use with packages!");
        }
        return redirect('addons');
    }
}
