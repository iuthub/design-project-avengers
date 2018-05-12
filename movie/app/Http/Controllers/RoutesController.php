<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class RoutesController extends Controller
{
    public function index(){
        if(Auth::check()){
            $user = Auth::user();
            if($user->admin){
                return view("admin.index")->with("user", $user);
            }else{
                return view("users.index")->with('user', $user);
            }
        }else{
            dd(Auth::user());
        }
    }

    public function profile($id){
        $user = User::find($id);
    	return view("admin.index")->with('user', $user);
    }

    public function new_releases(){
        return view('new_releases');
    }

    public function latest_movie(){
        return view('latest_movie');
    }

    public function admin_latest_movies(){
        return view('admin.movies.latest_movies');
    }

    public function register_user(Request $request){
        $user = new User();

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('user.index')->with("user", $user);
        }
        
    }
}
