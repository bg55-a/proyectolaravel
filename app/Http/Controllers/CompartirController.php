<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompartirController extends Controller
{
    public function compartir (){
        return view('admin.compartir');
    }
}
