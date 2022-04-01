<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $data = Food::all();
        return view('home',compact('data'));
    }

    public function redirects(){
        $data = Food::all();
        $user_type = Auth::user()->user_type;
        if($user_type == '1'){
            return view('admin.admin');
        }else{
            return view('home',compact('data'));
        }
    }
}
