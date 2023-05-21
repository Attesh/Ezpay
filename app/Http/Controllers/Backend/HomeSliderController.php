<?php

namespace App\Http\Controllers\Backend;
use App\Models\HomeSlider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider=HomeSlider::all();
        return view('backend.home-slider.index',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.home-slider.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new HomeSlider();
        $data->title=$request->title;
        $image=$request->file('image');
        if($image){
            $name_gen= hexdec(uniqid());
            $image_ext=strtolower($image->getClientOriginalExtension());
            $image_name=$name_gen.'.'.$image_ext;
            $up_location='Backend/images/';
            $last_image=$up_location.$image_name;
            $image->move(public_path($up_location),$image_name);
            $data->image =$image_name;
        }
        $data->save();
        return redirect('admin/home');

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
        $slider=HomeSlider::findOrFail($id);
		
		return view('backend.home-slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $res=HomeSlider::find($request->id);
		$image=$request->file('image');
        if ($image) {
        $name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_image=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
        $res->image = $image_name;
        }
        $res->title=$request->input('title');
        $res->save();
		return redirect('admin/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HomeSlider::findOrFail($id)->delete();
        return redirect('admin/home');
    }
}
