<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function contact() {
        Session::put('page', 'contact');
        $contacts = Contact::get();
        return view('admin.contacts.contact')->with(compact('contacts'));
    }
}
