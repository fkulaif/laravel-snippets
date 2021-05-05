<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller {
    public function index(){ //also named show()
       // echo 'This is Contact Page';
        return view('contact');
    }
}
