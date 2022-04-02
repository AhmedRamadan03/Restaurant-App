<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $gest_num = [
            "1" => "1","2" => "2",
            "3" => "3","4" => "4",
            "5" => "5","6" => "6",
            "7" => "7","8" => "8",
            "9" => "9","10" => "10",
            "11" => "11","12" => "12",
        ];
        $time = [
            "Breakfast" => "Breakfast",
            "Lunch" => "Lunch",
            "Dinner" => "Dinner",
        ];
        $data = Food::all();
        return view('home',compact('data','time','gest_num'));
    }

    public function redirects(){
        $gest_num = [
            "1" => "1","2" => "2",
            "3" => "3","4" => "4",
            "5" => "5","6" => "6",
            "7" => "7","8" => "8",
            "9" => "9","10" => "10",
            "11" => "11","12" => "12",
        ];
        $time = [
            "Breakfast" => "Breakfast",
            "Lunch" => "Lunch",
            "Dinner" => "Dinner",
        ];
        $data = Food::all();
        $user_type = Auth::user()->user_type;
        if($user_type == '1'){
            return view('admin.admin');
        }else{
            return view('home',compact('data','time','gest_num'));
        }
    }
}
