<?php

namespace App\Http\Controllers;

use App\Models\CRUD;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    public function index(){
        $cruds = Crud::all();
        return view('crud.index', compact('cruds'));
    }

    public function create(){
        return view('crud.create');
    }

    public function store(Request $request){
        // return request() ->all();
        $this->validate(request(),[
            'name' => 'required|min:4'
        ]); 
        CRUD::create([
            'name' => request()->name,
        ]);  
        return redirect("/crud")->with('status', 'Record Added!');      
    }

    public function delete($id){
        // return $id;
        Crud::where('id' ,$id)->delete();
        return redirect()->back()->with('status', 'Delete Success!');
    }

    public function edit($id){
        // return $id;
       $crud = Crud::find($id);
       return view('crud.update', compact('crud'));
    }

    public function update($id){
       $crud = Crud::find($id);
       $crud->name = request()->name;
       $crud->save();
       return redirect("/crud")->with('status', 'Update Success!'); 
    }
    
}
