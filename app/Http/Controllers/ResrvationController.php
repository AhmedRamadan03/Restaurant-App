<?php

namespace App\Http\Controllers;

use App\Models\Resrvation;
use Illuminate\Http\Request;

class ResrvationController extends Controller
{
    public function index(){
        $data = Resrvation::paginate(5);
        return view('admin.reservations.index',compact('data'));
    }

    public function store(Request $request){
        Resrvation::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "number_guests" => $request->number_guests,
            "date" => $request->date,
            "time" => $request->time,
            "message" => $request->message,
        ]);
        session()->flush('done');
        return back();
    }
}
