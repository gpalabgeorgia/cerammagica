<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        }else {
            $title = 'Редактировать категорию';
        }
        $getSections = Section::get();
        return view('admin.categories.add_edit_category')->with(compact('title', 'getSections'));
    }
}
