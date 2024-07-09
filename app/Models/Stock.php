<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = ['prod_id', 'quantity'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'prod_id');
    }
}

