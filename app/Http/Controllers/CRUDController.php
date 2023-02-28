<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CRUDController extends Controller
{
    public function index(){
        return view('crud.index');
    }
}
