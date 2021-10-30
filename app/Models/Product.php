<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category()
    {
        return $this->belongsto(Category::class);
    }

        public function subcategory()
    {
        return $this->belongsto(Subcetagory::class, 'sub_category_id');
    }
  

}
