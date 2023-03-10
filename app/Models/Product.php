<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [ 'name',
                            'main_price',
                            'sale',
                            'is_stock',
                            'description'];
    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function product_imgs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Product_Img::class, 'product_id', 'id');
    }
}
