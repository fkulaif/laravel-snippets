<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller {
    public function index(){
         //echo 'This is About Page';
         return view('about');
    }   
}