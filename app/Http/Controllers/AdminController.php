<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;


class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('ValidUser');
    }
    //
    public function Create(){
        return view('pages.admins.create');
    }
    public function createSubmit(Request $request){

        $this->validate(
            $request,
            [
                'name'=>'required',
                'dob'=>'required',
                'email'=>'required',
                'phone'=>'required',
            ],
            [
                'name.required'=>'Please put your name',
            ]
        );

        $var = new Admin();
        $var->name= $request->name;
        $var->dob = $request->dob;
        $var->email = $request->email;
        $var->phone=$request->phone;
        $var->save();


        return "OK";      
    }
    public function list(){

        $admins = Admin::all();
        return view('pages.admins.list')->with('admins',$admins);
    }
    public function edit(Request $request){
        //
        $id = $request->id;
        $admin = Admin::where('id',$id)->first();
        return view('pages.admins.edit')->with('admin', $admin);

    }

    public function editSubmit(Request $request){
        $var = Admin::where('id',$request->id)->first();
        $var->name= $request->name;
        $var->dob = $request->dob;
        $var->email = $request->email;
        $var->phone=$request->phone;
        $var->save();
        return redirect()->route('admin.list');

    }
    public function delete(Request $request){
        $var = Admin::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('admin.list');

    }

}