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

    public function deleteUser ($id){
        User::find($id)->delete();
        session()->flash('done');
        return back();
    }
}
