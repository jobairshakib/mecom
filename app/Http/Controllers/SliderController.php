<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sliders = Slider::all();
        return view('admin.sliders.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //\
        $image = $request->file('slider_image');
        $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        'Image'::make($image)->resize(1076,507)->save('upload/slider/'.$filename);
        $save_url = 'upload/slider/'.$filename;
        Slider::create([
            'slider_title'=>$request->slider_title,
            // 'slider_slug'=>strtolower(str_replace('','-',$request->slider_name)),
            'short_title'=>$request->short_title,
            'slider_image'=>$save_url,
        ]);
        return redirect()->route('sliders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        return view('admin.sliders.show',[
            'slider'=>$slider
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit',[
            'slider'=>$slider
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $image = $request->file('slider_image');
        $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        'Image'::make($image)->resize(1920,622)->save('upload/slider/'.$filename);
        $save_url = 'upload/slider/'.$filename;

        $slider->update([
            // $slider::where('id', $request->id)->update([
            'slider_title'=>$request->slider_title,
            'short_title'=>$request->short_title,
            // 'slider_slug'=>strtolower(str_replace('','-',$request->slider_name)),
            'slider_image'=>$save_url,
        ]);
        return redirect()->route('sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('sliders.index');
    }
}
