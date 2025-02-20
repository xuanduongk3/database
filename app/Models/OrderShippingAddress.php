<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderShippingAddress extends Model
{
    use HasFactory;
    protected $table = 'order_shipping_addresses';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'order_id', 
        'full_name', 
        'phone', 
        'province', 
        'district', 
        'ward',
        'address_line1', 
        'address_line2', 
    ];

    // Mối quan hệ với bảng orders
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
