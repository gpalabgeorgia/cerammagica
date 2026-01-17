<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        // Get Featured Items
        $featuredItemsCount = Product::where('is_featured', 'Yes')->count();
        $featuredItems = Product::where('is_featured', 'Yes')->get()->toArray();
        $featuredItemsChunk = array_chunk($featuredItems, 6);
        $page_name = "index";
        return view('front.index')->with(compact('page_name', 'featuredItemsChunk', 'featuredItemsCount'));
    }
}
