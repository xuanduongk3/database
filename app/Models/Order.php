<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    protected $fillable = [
        'user_id',
        'order_date',
        'payment_method',
        'status',
        'total',
        'product_total',
        'shipping_fee',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
