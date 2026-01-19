<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class BannerController extends Controller
{
    public function banner() {
        Session::put('page', 'banner');
        $banners = Banner::get()->toArray();
        return view('admin.banners.banner')->with(compact('banners'));
    }

    public function addEditBanner(Request $request, $id=null) {
        if($id=="") {
            // Add Banner
            $banner = new Banner;
            $title = "Добавить Баннер";
            $message = "Баннер успешно добавился!";
        }else {
            $banner = Banner::find($id);
            $title = "Редактировать Баннер";
            $message = "Баннер успешно обновился!";
        }
        if($request->isMethod('post')) {
            $data = $request->all();
            $banner->title = $data['title'];
            $banner->description = $data['description'];
            $banner->link = $data['link'];
            if(empty($data['link'])) {
                $banner['link'] = "";
            }
            // Upload Banner Image
            if($request->hasFile('image')) {
                $image_tmp = $request->file('image');
                if($image_tmp->isValid()) {
                    // Get Original Image Name
                    $image_name = $image_tmp->getClientOriginalName();
                    // Get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    // Generate New Image Name
                    $imageName = $image_name.'-'.rand(111,99999).'.'.$extension;
                    // set paths for small, medium and large images
                    $banner_image_path = 'images/banner_images/'.$imageName;
                    // Upload Banner Image after Resize
                    Image::make($image_tmp)->resize(450,568)->save($banner_image_path); // W: 1040 H:1200
                    // Save Image in products table
                    $banner->image = $imageName;
                }
            }
            $banner->status = 1;
            $banner->save();
            session::flash('success_message', $message);
            return redirect('admin/banner');
        }
        return view('admin.banners.add_edit_banner')->with(compact('title', 'banner'));
    }

    public function updateBannerStatus(Request $request) {
        if($request->ajax()) {
            $data = $request->all();
            if($data['status']=='Активный') {
                $status = 0;
            }else {
                $status = 1;
            }
            Banner::where('id', $data['banner_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'banner_id'=>$data['banner_id']]);
        }
    }

    public function deleteBanner($id) {
        // Get Banner Image
        $bannerImage = Banner::where('id', $id)->first();

        // Get Banner Image Path
        $banner_image_path = 'images/banner_images/';

        // Delete Banner Image if exists in banners folder
        if(file_exists($banner_image_path.$bannerImage->image)) {
            unlink($banner_image_path.$bannerImage->image);
        }

        // Delete Banner from banners table
        Banner::where('id', $id)->delete();
        $message = 'Баннер удалился!';
        session::flash('success_message', $message);
        return redirect()->back();
    }
}
