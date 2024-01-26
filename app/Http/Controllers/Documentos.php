<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Documentos extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'nocache'])->only(['script','problema', 'er']);
    }
    public function script(){
        return view('modules/documentos/script');
    }

    public function problema(){
        return view('modules/documentos/problema');
    }

    public function er(){
        return view('modules/documentos/er');
    }
}
