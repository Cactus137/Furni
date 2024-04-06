<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; 

    protected $table = 'products';
    
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'name',
        'price',
        'sku',
        'info',
        'description',
        'quantity',
        'category_product_id',
        'product_status_id',
    ]; 

    public function products()
    {
        return $this->belongsToMany(Cart::class, 'cart_products', 'product_id', 'cart_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_products', 'product_id', 'order_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'product_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_product_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(ImageProduct::class, 'product_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(ProductStatus::class, 'product_status_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tags', 'product_id', 'tag_id');
    }
}
