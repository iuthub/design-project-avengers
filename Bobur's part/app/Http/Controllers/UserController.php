<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use Hash;

class UserController extends Controller
{
    //
    public function profile(){
    	return view('profile', array('user' => Auth::user()));
    }

    public function update_avatar(Request $request){
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save(public_path('uploads/avatars/' . $filename));

    		$user = Auth::user();
    		$user->first_name=$request->first_name;
    		$user->last_name=$request->last_name;
    		$user->email=$request->email;
    		
    		if(password_verify($request->password, $user->password))
    		{
    			if($request->new_password == $request->confirm_password)
    			{
    				$user->password = Hash::make($request->new_password);
    			}
    		} 

    		$user->avatar = $filename;
    		$user->save();
    	}
    	else
    	{
    		$user = Auth::user();
    		$user->first_name=$request->first_name;
    		$user->last_name=$request->last_name;
    		$user->email=$request->email;
    		
    		if(password_verify($request->password, $user->password))
    		{
    			if($request->new_password == $request->confirm_password)
    			{
    				$user->password = Hash::make($request->new_password);
    			}
    		} 

    		$user->save();
    	}
    	return view('profile', array('user' => Auth::user()));
    }
}
