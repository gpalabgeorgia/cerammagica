<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact';

    public static function contacts() {
        $getContact = Contact::where('status', 1)->get();
        $getContact = json_decode(json_encode($getContact));
        return $getContact;
    }
}
