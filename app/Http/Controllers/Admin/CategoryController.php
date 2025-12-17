<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function categories() {
        Session::put('page', 'categories');
        $categories = Category::get();
        return view('admin.categories.categories')->with(compact('categories'));
    }

    public function updateCategoryStatus(Request $request) {
        if($request->ajax()) {
            $data = $request->all();
            if($data['status']=='Активный') {
                $status = 0;
            }else {
                $status = 1;
            }
            Category::where('id', $data['category_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'category_id'=>$data['category_id']]);
        }
    }

    public function addEditController(Request $request, $id=null) {
        if($id=='') {
            $title = 'Добавить категорию';
            $category = new Category;
        }else {
            $title = 'Редактировать категорию';
        }
        if($request->isMethod('post')) {
            $data = $request->all();

            $rules = [
                'category_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'section_id' => 'required',
                'url' => 'required',
//                'category_image' => 'image'
            ];
            $customMessages = [
                'category_name.required' => 'Название категории объязательно',
                'category_name.regex' => 'Валидное название объязательно',
                'section_id.required' => 'Секция объязательна',
                'url.required' => 'url объязателен',
//                'category_image.image' => 'Загрузите валидное фото',
            ];
            $this->validate($request,$rules,$customMessages);

            if($request->hasFile('category_image')) {
                $image_tmp = $request->file('category_image');
                if($image_tmp->isValid()) {
                    // Get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    // Generate New Image Name
                    $imageName = rand(111,99999).''.$extension;
                    $imagePath = 'images/category_images/'.$imageName;
                    // Upload the Image
                    Image::make($image_tmp)->save($imagePath);
                    $category->category_image = $imageName;
                }
            }

            if(empty($data['category_discount'])) {
                $data['category_discount'] = '';
            }
            if(empty($data['description'])) {
                $data['description'] = '';
            }
            if(empty($data['meta_title'])) {
                $data['meta_title'] = '';
            }
            if(empty($data['meta_description'])) {
                $data['meta_description'] = '';
            }
            if(empty($data['meta_keywords'])) {
                $data['meta_keywords'] = '';
            }

            $category->parent_id = $data['parent_id'];
            $category->section_id = $data['section_id'];
            $category->category_name = $data['category_name'];
            $category->category_discount = $data['category_discount'];
            $category->description = $data['description'];
            $category->url = $data['url'];
            $category->meta_title = $data['meta_title'];
            $category->meta_description = $data['meta_description'];
            $category->meta_keywords = $data['meta_keywords'];
            $category->status = 1;
            $category->save();

            session::flash('success_message', 'Категория успешно добавилась!');
            return redirect('admin/categories');
        }
        $getSections = Section::get();
        return view('admin.categories.add_edit_category')->with(compact('title', 'getSections'));
    }

    public function appendCategoryLevel(Request $request) {
        if($request->ajax()) {
            $data = $request->all();
            $getCategories = Category::with('subcategories')->where(['section_id'=>$data['section_id'], 'parent_id'=>0, 'status'=>1])->get();
            $getCategories = json_decode(json_encode($getCategories), true);
            return view('admin.categories.append_categories_level')->with(compact('getCategories'));
        }
    }
}
