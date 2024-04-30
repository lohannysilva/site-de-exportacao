<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function painelPage()
    {
        return view ('admin.painel');
    }
}
