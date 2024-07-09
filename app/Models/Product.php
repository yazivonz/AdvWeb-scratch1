<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['brand_id', 'name', 'description', 'price', 'image'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product')->withPivot('quantity');
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function stock()
    {
        return $this->hasOne(Stock::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}

