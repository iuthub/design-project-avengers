<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class RoutesController extends Controller
{
    public function index(){
        $user = Auth::user();
    	if($user->admin){
    		return view("admin.index")->with("user", $user);
    	}else{
    		return view("users.index")->with('user', $user);
    	}
    }

    public function profile($id){
        $user = User::find($id);
    	return view("admin.index")->with('user', $user);
    }
}
