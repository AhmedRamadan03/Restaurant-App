<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewUsers(){
        $users = User::where('user_type',0)->paginate(5);
        return view('admin.users.index',compact('users'));
    }

    public function create(){
        $type_user=[
            "0" => "user",
            "1" => "admin",
        ];
        return view('admin.users.create',compact('type_user'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
            'type_user' => 'required|min:1'
        ]);
    }

    public function deleteUser ($id){
        User::find($id)->delete();
        session()->flash('done');
        return back();
    }
}
