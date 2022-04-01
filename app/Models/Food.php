<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $fillable =[
        "name",
        "price",
        'image',
        "description"
    ];

    protected $appends = ['image_path']; 

    public function getImagePathAttribute(){
        return asset('uploads/foods_images/' .$this->image);
    }
}
