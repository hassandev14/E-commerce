<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'sort_order',
    ];
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    public function nav_brands()
    {
        return $this->belongsToMany(Brand::class, 'category_product', 'category_id', 'brand_id');
    }
    public function product()
    {
        return $this->hasMany(Product::class); // A category has many products

    }
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }
    public function brands()
    {
        return $this->hasMany(Brand::class, 'category_id');  // The second argument is the foreign key in the brands table
    }

}
