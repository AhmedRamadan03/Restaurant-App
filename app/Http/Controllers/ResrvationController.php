<?php

namespace App\Http\Controllers;

use App\Models\Resrvation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ResrvationController extends Controller
{
    public function index(){
        //dd( request()->start_date);
        $query = Resrvation::latest()->limit(15);
        if(request()->start_date &&  request()->end_date){
            // dd( request()->start_date);
            $query->whereBetween('date',[request()->start_date,request()->end_date]);
        }
        $data = $query->get();    
        //dd($data);   
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
        session()->flash('done');
        return back();
    }
}
