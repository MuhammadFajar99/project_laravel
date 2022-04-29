<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FajarController extends Controller
{
   public function index (){
        return view ('FAJAR.index');
    }
    public function index_next (){
        return view ('FAJAR.index_next');
    }
}
