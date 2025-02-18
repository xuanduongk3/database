<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'title',
        'description',
        'catalog_id',
        'author',
        'publish_year',
        'price',
        'stock',
        'image',
        'color'
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
