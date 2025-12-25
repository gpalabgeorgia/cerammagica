<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
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
        }else {
            $title = "Редактировать продукт!";
        }
        // Filter Arrays
        $fabricArray = array('Cotton','Polyester','Wool');
        $sleeveArray = array('Full Sleeve','Half Sleeve','Short Sleeve', 'Sleeveless');
        $patternArray = array('Checked','Plain','Printed','Self', 'Solid');
        $fitArray = array('Regular','Slim');
        $occasionArray = array('Casual','Formal');

        return view('admin.products.add_edit_product')->with(compact('title', 'fabricArray', 'sleeveArray', 'patternArray', 'fitArray', 'occasionArray'));
    }
}
