<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    public function products() {
        Session::put('page', 'products');
        $products = Product::with(['category'=>function($query) {
            $query->select('id', 'category_name');
        }, 'section'=>function($query) {
            $query->select('id', 'name');
        }])->get();
        return view('admin.products.products')->with(compact('products'));
    }

    public function updateProductStatus(Request $request) {
        if($request->ajax()) {
            $data = $request->all();
            if($data['status']=='Активный') {
                $status = 0;
            }else {
                $status = 1;
            }
            Product::where('id', $data['product_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'product_id'=>$data['product_id']]);
        }
    }

    public function deleteProduct($id) {
        Product::where('id', $id)->delete();
        $message = 'Продукт удалился!';
        session::flash('success_message', $message);
        return redirect()->back();
    }

    public function addEditProduct(Request $request, $id=null) {
        if($id=="") {
            $title = "Добавить продукт!";
            $product = new Product;
        }else {
            $title = "Редактировать продукт!";
        }
        if($request->isMethod('post')) {
            $data = $request->all();

            // Product Validations
            $rules = [
                'category_id' => 'required',
                'product_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'product_code' => 'required|regex:/^[\w-]*$/',
                'product_price' => 'required|numeric',
                'product_color' => 'required|regex:/^[\pL\s\-]+$/u',

            ];
            $customMessages = [
                'category_id.required' => 'Название категории объязательно',
                'product_name.required' => 'Название продукта объязательна',
                'product_name.regex' => 'Валидное название объязательно',
                'product_code.required' => 'Код продукта объязательна',
                'product_code.regex' => 'Валидный код объязателен',
                'product_price.required' => 'Цена продукта объязательно',
                'product_price.numeric' => 'Валидная цена объязательна',
                'product_color.required' => 'Цвет продукта объязателен',
                'product_color.regex' => 'Валидный цвет объязателен',
            ];
            $this->validate($request, $rules, $customMessages);

            if(empty($data['is_featured'])) {
                $is_featured = 'No';
            } else {
                $is_featured = 'Yes';
            }

            if(empty($data['fabric'])) {
                $data['fabric'] = "";
            }
            if(empty($data['pattern'])) {
                $data['pattern'] = "";
            }
            if(empty($data['sleeve'])) {
                $data['sleeve'] = "";
            }
            if(empty($data['fit'])) {
                $data['fit'] = "";
            }
            if(empty($data['occasion'])) {
                $data['occasion'] = "";
            }
            if(empty($data['meta_title'])) {
                $data['meta_title'] = "";
            }
            if(empty($data['meta_keywords'])) {
                $data['meta_keywords'] = "";
            }
            if(empty($data['meta_description'])) {
                $data['meta_description'] = "";
            }
            if(empty($data['product_discount'])) {
                $data['product_discount'] = "";
            }
            if(empty($data['description'])) {
                $data['description'] = "";
            }
            if(empty($data['product_weight'])) {
                $data['product_weight'] = "";
            }
            if(empty($data['wash_care'])) {
                $data['wash_care'] = "";
            }

            // Save Product Details in product table
            $categoryDetails = Category::find($data['category_id']);
            $product->section_id = $categoryDetails['section_id'];
            $product->category_id = $data['category_id'];
            $product->product_name = $data['product_name'];
            $product->product_code = $data['product_code'];
            $product->product_color = $data['product_color'];
            $product->product_price = $data['product_price'];
            $product->product_discount = $data['product_discount'];
            $product->product_weight = $data['product_weight'];
            $product->description = $data['description'];
            $product->wash_care = $data['wash_care'];
            $product->fabric = $data['fabric'];
            $product->pattern = $data['pattern'];
            $product->sleeve = $data['sleeve'];
            $product->fit = $data['fit'];
            $product->occasion = $data['occasion'];
            $product->meta_title = $data['meta_title'];
            $product->meta_keywords = $data['meta_keywords'];
            $product->meta_description = $data['meta_description'];
            $product->is_featured = $is_featured;
            $product->status = 1;
            $product->save();
            session::flash('success_message', 'Продукт успешно добавился!');
            return redirect('admin/products');
        }
        // Filter Arrays
        $fabricArray = array('Cotton','Polyester','Wool');
        $sleeveArray = array('Full Sleeve','Half Sleeve','Short Sleeve', 'Sleeveless');
        $patternArray = array('Checked','Plain','Printed','Self', 'Solid');
        $fitArray = array('Regular','Slim');
        $occasionArray = array('Casual','Formal');

        // Sections with Categories and Sub Categories
        $categories = Section::with('categories')->get();
        $categories = json_decode(json_encode($categories), true);


        return view('admin.products.add_edit_product')->with(compact('title', 'fabricArray', 'sleeveArray', 'patternArray', 'fitArray', 'occasionArray', 'categories'));
    }
}
