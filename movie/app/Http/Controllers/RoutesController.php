<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests;
use App\Post;
use Mail;

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
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required|max:255'
        ]);

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
    
    public function users_index(){
        return view('users.index');
    }

    public function users_movies(){
        return view('users.movies');
    }

    public function users_coming_movies(){
        return view('users.comings');
    }

    public function getContact(){
        return view('contact.contact');
    }

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'min:3',
            'number' => 'min:3',
            'message' => 'min:10'
        ]);

        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'number' => $request->number,
            'msg' => $request->message
        );

        Mail::send('mails.template', $data, function($var) use ($data){
            $var -> from($data['email'], $data['name']);
            $var -> to('smtp.mailtrap.io');
        });
    }
}
