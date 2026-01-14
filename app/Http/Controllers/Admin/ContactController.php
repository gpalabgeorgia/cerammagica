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
    public function updateContactStatus(Request $request) {
        if($request->ajax()) {
            $data = $request->all();
            if($data['status']=='Активный') {
                $status = 0;
            }else {
                $status = 1;
            }
            Contact::where('id', $data['contact_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'contact_id'=>$data['contact_id']]);
        }
    }
}
