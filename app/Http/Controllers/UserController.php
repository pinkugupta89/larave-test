<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Register;

class UserController extends Controller
{
    //
    public function index(){
        //DB::insert('insert into register(name,last_name,mobile,emailid) values(?,?,?,?)',['pankaj','gupta','9460495077','pinkugupta89@gmail.com']);
        return view("pages.register");
    }
    public function store(Request $request)
    {
        
        // $name=$request->input('name');
        // $last_name=$request->input('last_name');
        // $emailid=$request->input('emailid');
        // $mobile=$request->input('mobile');
        // DB::insert('insert into register(name,last_name,mobile,emailid) values(?,?,?,?)',[$name,$last_name,$mobile,$emailid]);
        // return redirect()->to('/pages.index');
        $register= new Register([
            'name'=>$request->get('name'),
            'last_name'=>$request->input('last_name'),
            'emailid'=>$request->input('emailid'),
            'mobile'=>$request->input('mobile'),
        ]);
        $register->save();

    }

    public function fetchRecord(){

        $registers = DB::table('registers')->get();
        return view('pages.display', ['registers' => $registers]);
    }

    
}
