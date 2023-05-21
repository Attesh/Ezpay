<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\GeneralSettings;
class GeneralSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $general_settings=GeneralSettings::all();
        return view('backend.GeneralSettings.index',compact('general_settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.GeneralSettings.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image=$request->file('logo');
        if($image){
            $name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_image=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
        }
        GeneralSettings::insert([
            'phone'=>$request->phone,
            'email'=>$request->email,
            'logo' => $image_name,
            'location'=>$request->location,
            'created_at'=>Carbon::now(),
            ]);
            return redirect('/admin/general_settings');
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
    public function edit($id)
    {
        $general_settings=GeneralSettings::where('id',$id)->first();
        return view('backend.GeneralSettings.edit',compact('general_settings'));
    }
    public function update(Request $request){
        // $image=$request->file('logo');
        // if($image){
        //     $name_gen= hexdec(uniqid());
		//  $image_ext=strtolower($image->getClientOriginalExtension());
		//  $image_name=$name_gen.'.'.$image_ext;
		//  $up_location='Backend/images/';
		//  $last_image=$up_location.$image_name;
		//  $image->move(public_path($up_location),$image_name);
        // }
		// $res=GeneralSettings::find($request->id);
		// GeneralSettings::where('id',$request->id)->update([
		// 	'phone'=>$request->phone,
		// 	'email'=>$request->email,
		// 	'address'=>$request->location,
        //     'logo' => $image_name,
        //     'created_at'=>Carbon::now(),
		// ]);
     
        $res=GeneralSettings::where('id',$request->id)->first();
        $res->phone=$request->input('phone');
        $res->email=$request->input('email');
        $res->location=$request->input('location');
        $image=$request->file('logo');
        if($image){
            $name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_image=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
        $res->logo = $image_name;
        }
        $res->save();
        return redirect('/admin/general_settings');
		}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GeneralSettings::findOrFail($id)->delete();
        return redirect('/admin/general_settings');
    }
}
