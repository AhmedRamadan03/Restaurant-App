<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChefController extends Controller
{
    //

    public function index()
    {
        $data = Chef::latest()->paginate(10);
        return view('admin.chefs.index',compact('data'));
    }

    public function create()
    {
        return view('admin.chefs.create');
    }

    public function store(Request $request)
    {
        // dd($request->image->getClientOriginalName());
        if($request->image)
        {
            Storage::disk('public_uploads')->put('/chef_images/', $request->image);
        }
        Chef::create([
            "name" =>$request->name,
            "image" =>$request->image->hashName(),
            "description" =>$request->description,
        ]);
        session()->flash('done');
        return back();
    }

    public function edit($id)
    {
        $chef = Chef::find($id);
        return view('admin.chefs.edit',compact('chef'));
    }
}
