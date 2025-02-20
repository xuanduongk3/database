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
        'product_name',
        'description',
        'price',
        'discount_price',
        'stock',
        'product_image',
        'catalog_id'
    ];

    public function catalog()
    {
        return $this->belongsTo(Catalog::class, 'catalog_id');
    }

    public function cart()
    {
        return $this->hasMany(Cart::class, 'product_id');
    }
}
