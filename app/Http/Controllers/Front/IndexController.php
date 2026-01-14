<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('front.index');
    }
}
