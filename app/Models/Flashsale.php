<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flashsale extends Model
{
    use HasFactory;

    protected $table = 'flashsales';
    protected $primaryKey = 'flashsale_id';

    protected $fillable = [
        'discount',
        'product_id',
        'start_date',
        'end_date',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
