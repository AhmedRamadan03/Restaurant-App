<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;

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

    public function store()
    {
        
    }
}
