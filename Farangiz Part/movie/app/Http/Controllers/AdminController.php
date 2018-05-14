<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class AdminController extends Controller
{
    // return admin view
    public function index()
    {
        return view("admin.index");
    }

    // update Profile
    public function update(Request $request, $id)
    {
        $admin = User::find($id);
        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        $admin->save();

        return redirect()->back();
    }

    // return all users view
    public function users(){
        $users = User::all();
        return view("admin.profile")->with("users", $users)->with('trashed', false);
    }

    public function users_trashed(){
        $users = User::onlyTrashed()->get();
        return view('admin.profile')->with('users', $users)->with('trashed', true);
    }

    public function user_restore($id){
        $user = User::onlyTrashed()->where('id', $id)->restore();

        return redirect()->back();
    }

    public function user_create(){
        return view('admin.create');
    }

    // trash user
    public function user_trash($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    }

    // delete user
    public function user_delete($id){
        $user = User::onlyTrashed()->where('id', $id)->forceDelete();

        return redirect()->back();
    }


    //movies
    public function movies(){
        return view('admin.movies.index');
    }
}
