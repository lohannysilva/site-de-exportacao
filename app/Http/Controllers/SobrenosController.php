<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SobrenosController extends Controller
{
    public function sobrenosPage()
    {
        return view('app.sobre-nos');
    }
}
