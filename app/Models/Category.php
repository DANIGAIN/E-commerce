<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcetagory ;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function subcetagory()
    {
        return $this->hasMany(Subcetagory::class);

    }


}
