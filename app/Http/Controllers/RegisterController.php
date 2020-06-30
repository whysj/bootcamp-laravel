<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function welcome_get(Request $request) {
        //dd($request->all());
        $fname = $request["fname"];
        return view('welcome', ['fname' => $fname ]);
    }
}
