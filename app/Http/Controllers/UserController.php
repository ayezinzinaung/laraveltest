<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show(){

        // $user = new User();
        // $user->name='Su';
        // $user->email='susu@gmail.com' ;
        // // $user->password ='password';
        // $user->password=bcrypt('password');
        // $user->save(); 

        // $user = User::all();
        // return $user;

        // User::where('id' ,7)->delete();
        
       User::where('id', 8)->update(['name'=>'Aye Zin']);
        
        // DB::insert('insert into users (name, email, password) 
        //     values (?, ?, ?)', [
        //         'Aye Zin', 'Aye@gmail.com', 'password'
        //     ]);

        // $users=[
        //     "name" => "Aye Zin Zin Aung",
        //     "age" => "22"
        // ];
        // return view('hello' ,compact('users'));
        // return view('home');
        

        // $users = DB::select('select * from users');
        // return $users;
        
        // DB::update('update users set name = ? where id = 1', ['John']);
        // $users = DB::select('select * from users');
        // return $users;
 
        // DB::delete('delete from users where id = 1');
        // $users = DB::select('select * from users');
        // return $users;

    }
}
