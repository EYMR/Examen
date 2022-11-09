<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CyberController extends Controller
{
    public function Form (){
        return view('form');
}
}
