<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flashsale extends Model
{
    use HasFactory;

    protected $table = 'flashsales';
    protected $primaryKey = 'id';

    protected $fillable = [
        'product_id',
        'discount_price',
        'quantity',
        'start_date',
        'end_date',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
