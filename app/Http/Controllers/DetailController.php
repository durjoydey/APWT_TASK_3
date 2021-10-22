<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Detail;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detailUser(){

        $c = Detail::where('id',1)->first();

        //Eloquent
        return $c->assignedUser();
        
    }
}