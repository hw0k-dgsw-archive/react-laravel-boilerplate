<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpaController extends Controller
{
    public function __constructor()
    {
        parent::__constructor();
    }
    
    public function __invoke()
    {
        return view('spa');
    }
}
