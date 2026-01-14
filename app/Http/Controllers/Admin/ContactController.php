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

    public function addEditContact(Request $request, $id=null) {
        Session::put('page', 'contact');
        if($id=="") {
            $title = "Добавить Контакт!";
            $contact = new Contact;
            $message = 'Контакт успешно добавился!';
        }else {
            $title = 'Редактировать Бренд';
            $contact = Contact::find($id);
            $message = 'Контакт успешно обновился!';
        }
        if($request->isMethod('post')) {
            $data = $request->all();

            $contact->mobile = $data['mobile'];
            $contact->email = $data['email'];
            $contact->work = $data['work'];
            $contact->status = 1;
            $contact->save();

            session::flash('success_message', $message);
            return redirect('admin/contact');
        }
        return view('admin.contacts.add_edit_contact')->with(compact('title', 'contact', 'message'));
    }

    public function deleteContact($id) {
        Contact::where('id', $id)->delete();
        $message = 'Контакт удалился!';
        session::flash('success_message', $message);
        return redirect()->back();
    }
}
