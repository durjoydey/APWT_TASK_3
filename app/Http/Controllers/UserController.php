<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Detail;

class UserController extends Controller
{
    //
    public function create(){
        return view('pages.users.create');
    }
    public function createSubmit(Request $request){
        $var = new User();
        $var->name = $request->name;
        $var->phone = $request->phone;
        $var->password = md5($request->password);
        $var->save();
        return "Added";

    }
    public function list(){

        $users = User::all();
        return view('pages.users.list')->with('users',$users);
    }
    public function userDetails(){

        $t = User::where('id',1)->first();
        //hasmany
        // return $t->details;
        
        //eloquent
        return $t->assignedDetails();
    }
}