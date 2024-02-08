<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjecucionController extends Controller
{
    public function ejecucion()
    {
        return view('admin.ejecucion');
    }
}
