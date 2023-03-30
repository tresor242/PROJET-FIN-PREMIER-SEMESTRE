<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChauffeursController extends Controller
{
    public function form_registerDriver()
    {
        return view('registerDriver');
    }

}
