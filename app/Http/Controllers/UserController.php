<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        $users=[
            "name" => "Aye Zin Zin Aung",
            "age" => "22"
        ];
        return view('hello' ,compact('users'));
    }
}
