<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class RoutesController extends Controller
{
    public function index(){
    	if(Auth::user()->admin){
    		return redirect()->route("admin.index");
    	}else{
    		return redirect()->route("user.index");
    	}
    }

    public function profile($id){
    	$user = User::find($id);
    	if($user->admin){
    		return view("admin.index")->with('user', $user);
    	}else{
    		return view('users.index')->with('user', $user);
    	}
    }
}
