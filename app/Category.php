<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

    use SoftDeletes;

    protected $dates = ['delete_at'];
    protected $fillable = [
        'name', 
        'description'
    ];

    protected $hidden = [
        'pivot'
    ];

    public function products(){
        return $this->belongsToMany(Product::class); //many to many, using pivot table , ex: category_product
    }
    
}
