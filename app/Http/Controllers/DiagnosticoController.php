<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagnosticoController extends Controller
{
    public function diagnostico()
    {
        return view('admin.diagnostico');
    }
}
