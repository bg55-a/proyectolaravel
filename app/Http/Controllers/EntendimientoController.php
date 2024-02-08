<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntendimientoController extends Controller
{
    public function entendimiento()
    {
        return view('admin.entendimiento');
    }
}
