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
        $products = Product::get();
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
}
