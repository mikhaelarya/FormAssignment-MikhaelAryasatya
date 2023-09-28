<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function index() {
        return view('form');
    }

    public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            'fullname' => 'required|alpha:ascii',
            'email' => 'required|email',
            'username' => 'required|alpha_num:ascii',
            'message' => 'required|ascii',
            'float' => 'required|numeric|min:2.5|max:99.99',
            'picture' => 'required|file|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('picture')->store('public/images');
        


        return view('result', [
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'message' => $request->input('message'),
            'float' => $request->input('float'),
            'picture' => $image
        ]);

    }
}
