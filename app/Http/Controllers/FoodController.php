<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
    public function index(){
        $foods = Food::paginate(5);
        return view('admin.foods.index',compact('foods'));
    }

    public function create(){
        return view('admin.foods.create');
    }

    public function store(Request $request)
    {
        if($request->image)
        {
            Storage::disk('public_uploads')->put('/foods_images/', $request->image);
        }
        Food::create([
            "name" =>$request->name,
            "price" =>$request->price,
            "image" =>$request->image->hashName(),
            "description" =>$request->description,
        ]);
        session()->flash('done');
        return back();
    }

    public function edit($id)
    {
        $item = Food::find($id);
        return view('admin.foods.edit',compact('item'));
    }

    public function update(Request $request , $id)
    {   
        $data = [
            "name" =>$request->name,
            "price" =>$request->price,
            "description" =>$request->description,
        ];
        $item = Food::find($id);
        if($request->image)
        {
            //dd($request->image->hashName(),$item->image);
            if($request->image->hashName() != $item->image)
            {
                Storage::disk('public_uploads')->delete('/foods_images/'.$item->image);
            }
            Storage::disk('public_uploads')->put('/foods_images/', $request->image);
            $data ["image"]= $request->image->hashName();
        }
        $item->update($data);
        session()->flash('edit');
        return back();
    }

    public function destroy($id)
    {
        $item = Food::find($id);
        $item->delete();
        Storage::disk('public_uploads')->delete('/foods_images/'.$item->image);
        session()->flash('done');
        return back();
    }
}
