<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function indexSlider(){
        return view('admin.slider.slider',[
            'sliders' => Slider::all(),
        ]);
    }
    public function save(Request $request){
        $slider = new Slider();
        $slider->offer_title = $request->offer_title;
        $slider->product_name = $request->product_name;
        $slider->product_description = $request->product_description;
        $slider->product_price = $request->product_price;
        $slider->image = $this->image($request);
        $slider->save();
        return back();
    }
    private function image(Request $request){
        $image = $request->file('image');
        $imageName = 'slider'.'-'.rand().'.'.$image->extension();
        $directory = 'admin/custom-image/slider-image/';
        $imageUrl = $directory.$imageName;
        $image->move($directory,$imageName);
        return $imageUrl;
    }
//    public function manageSlider(){
//        return view('admin.slider.manage-slider',[
//            'sliders' =>Slider::all(),
//        ]);
//    }
//    public function deleteSlider($id){
//        $slider = Slider::find($id);
//        $slider->delete();
//        return back();
//    }
//    public function statusSlider($id){
//        $slider = Slider::find($id);
//        if ($slider->publication_status==1){
//            $slider->publication_status=0;
//            $slider->save();
//            return back();
//        }
//        else{
//            $slider->publication_status=1;
//            $slider->save();
//            return back();
//        }
//    }
//    public function editSlider($id){
//        return view('admin.slider.edit-slider',[
//            'slider' =>Slider::find($id),
//        ]);
//    }
//    public function updateSlider(Request $request){
//        $slider = Slider::find($request->id);
//        $slider->text_1 = $request->text_1;
//        $slider->text_2 = $request->text_2;
//        if ($request->image){
//            unlink($slider->image);
//            $slider->image = $this->image($request);
//        }
//
//        $slider->url = $request->url;
//        $slider->publication_status = $request->publication_status;
//        $slider->save();
//        return redirect('/manage-slider');
//    }
}
