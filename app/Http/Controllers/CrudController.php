<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(){
        return view('index');
    }

    public function insert(Request $request){
        $this->validate($request,[
            'name'=>'required | min:3|max:100',
            'email'=>'required | email |unique:Users,email',
            'phone'=>'required | min:10'
        ]);
    }
}
