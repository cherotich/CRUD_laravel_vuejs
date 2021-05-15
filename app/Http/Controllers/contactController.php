<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class contactController extends Controller
{
    public function getContacts(){
        $contacts = Contact::all();
        return $contacts;
    }
}
