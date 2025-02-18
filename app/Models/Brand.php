<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';
    protected $primaryKey = 'brand_id';
    
    protected $fillable = [
        'brand_name',
        'description',
        'country',
    ];

    // public function productDetails()
    // {
    //     return $this->hasMany(ProductDetail::class, 'brand_id', 'brand_id');
    // }
}
