<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;
    protected $table = 'product_attributes';
    protected $primaryKey = 'id';

    protected $fillable = [
        'product_id',
        'attr_name',
        'attr_value'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
