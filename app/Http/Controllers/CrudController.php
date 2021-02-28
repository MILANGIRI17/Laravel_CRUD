<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CrudController extends Controller
{
    public function index(){

        $usersData=DB::table('users')->orderBy('id','desc')->paginate(5);
        return view('index',compact('usersData'));
    }

    public function insert(Request $request){
        $this->validate($request,[
            'name'=>'required | min:3|max:100',
            'email'=>'required | email |unique:Users,email',
            'phone'=>'required | min:10'
        ]);
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;

        if(DB::table('users')->insert($data)){
            return redirect()->back()->with('success','Data was inserted');
        }
        else{
            return redirect()->back()->with('error','Data was not inserted');
        }
    }

    public function delete(Request $request)
    {
        $id = $request->criteria;
        if (DB::table("users")->where('id', '=', $id)->delete()) {
            return redirect()->back()->with('success', 'Data deleted successFully');
        } else {
            return redirect()->back()->with('error', 'There was some problem on deleting data');
        }
    }
        public function edit(Request $request)
        {
            $id = $request->criteria;
            $userData=DB::table('users')->where('id','=',$id)->first();
            return view("edit",compact("userData"));
        }
        public function editAction(Request $request){
        if($request->isMethod('get')){
            return redirect()->back();
        }
        if($request->isMethod('post')){
            $id = $request->criteria;
            $this->validate($request,[
                'name'=>'required | min:3|max:100',
                'email'=>'required | email',[
                    Rule::unique('users','email')->ignore($id)
                ],
                'phone'=>'required | min:10'
            ]);
            $data['name']=$request->name;
            $data['email']=$request->email;
            $data['phone']=$request->phone;

            if (DB::table("users")->where('id', '=', $id)->update($data)) {
                return redirect()->route("index")->with('success', 'Data updated successFully');
            } else {
                return redirect()->back()->with('error', 'Please change Something to update');
            }
        }

        }
}
