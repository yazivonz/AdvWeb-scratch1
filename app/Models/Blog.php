<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'title', 'content'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
