<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidarForm extends Controller
{
    public function rules()
    {
        return [
            'user' => 'required',
            'ncomputadora' => 'required',
            'tiempo' => 'required',
            'fecha' => 'required',
        ];
    }

}
