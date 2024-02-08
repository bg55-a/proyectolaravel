<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaneacionController extends Controller
{
    public function planeacion()
    {
        return view('admin.planeacion');
    }
}
