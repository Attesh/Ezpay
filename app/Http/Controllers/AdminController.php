<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){
        return view('backend.pages-login');
    }
    public function signin(Request $request){
        $email = $request->email;
        $password = $request->password;
        $result = Admin::where(['email' => $email, 'password' => $password])->get();
        if (isset($result['0']->id))
        {
            $request->session()->put('ADMIN_LOGIN', true);
            $request->session()->put('ADMIN_ID', $result['0']->id);
            return redirect()->route('admin.dashboard')->with('error', 'admin Login Successfully');
        }
        else
            {
            return back()->with('error', 'Invaild Email Or Password');
            }
    }
    public function index(Request $request)
    {
        if($request->session()){
            
            return view('backend.index');
      }
          
  }
    public function users_profile(){
        $data=session('ADMIN_ID');
        $record=Admin::where('id',$data)->first();
        return view('backend.users-profile',compact('record'));
    }
    public function profile_update(Request $request){
        $data=new Admin();
        $data=Admin::findOrFail($request->id)->first();
        $data->name=$request->input('name');
        // $data->company=$request->input('company');
        // $data->job=$request->input('job');
        $data->country=$request->input('country');
        $data->address=$request->input('address');
        $data->phone=$request->input('phone');
        $data->email=$request->input('email');
        $image=$request->file('image');
        if ($image) {
            $name_gen= hexdec(uniqid());
             $image_ext=strtolower($image->getClientOriginalExtension());
             $image_name=$name_gen.'.'.$image_ext;
             $up_location='Backend/images/';
             $last_image=$up_location.$image_name;
             $image->move(public_path($up_location),$image_name);
            $data->image = $image_name;
            }
        $data->save();
        return redirect('/admin/users-profile');
    }
    public function password_update(Request $request){
        $data=new Admin();
        $data=Admin::findOrFail($request->id)->first();
        $data->password=$request->input('password');
        $data->save();
        return redirect('/admin/users-profile');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
